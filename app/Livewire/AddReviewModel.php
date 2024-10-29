<?php

namespace App\Livewire;

use App\Models\Review;
use Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class AddReviewModel extends Component
{
    public $product;
    public $selectedRating = 0; // Store the selected rating
    public $reviewText = '';
    public $updated = false;

    public $updateItemId = null;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function setRating($rating)
    {
        $this->selectedRating = $rating;;
    }

    #[On('reviewUpdate')]
    public function updatedReviewId($id){
        $this->updateItemId = $id;
    }

    public function submitReview($product)
    {
        \Log::info('Submitted review: ' . $this->reviewText);

        $this->validate([
            'selectedRating' => 'required|integer|min:1|max:5',
            'reviewText' => 'required|string|max:500',
        ]);

        if($this->updateItemId === "create"){
            Review::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product['id'],
                'star_rating' => $this->selectedRating,
                'review_text' => $this->reviewText,
            ]);
            flash()->success('Review Added!');
        }else{
            $review = Review::where('id' ,$this->updateItemId)->first();
            $review->update([
                'star_rating' => $this->selectedRating,
                'review_text'=> $this->reviewText,
            ]);
            flash()->success('Review Updated!');
        }
        $this->dispatch('reviewAdded');
    }

    public function render()
    {
        return view('livewire.add-review-model', [
            'updated' => $this->updated,
        ]);
    }
}
