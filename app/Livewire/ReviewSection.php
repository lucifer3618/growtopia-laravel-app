<?php

namespace App\Livewire;

use App\Models\Review;
use Auth;
use Flasher\Prime\EventDispatcher\Event\UpdateEvent;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ReviewSection extends Component
{
    use WithPagination;

    public $product;

    public function mount($product){
        $this->product = $product;
    }

    public function updateSelect($id){
        $this->dispatch('reviewUpdate', id : $id);
    }

    public function updateView(){
        $productReviews = Review::where("product_id", $this->product->id)->orderBy('created_at', 'desc')->paginate(3);
        return  $productReviews;
    }

    public function removeReview(Review $review){
        if(Auth::user()->id === $review->user_id){
            $review->delete();
            flash()->success('Review Deleted Successfully!');
        }
    }

    public function createSelect($id){

    }



    #[On('reviewAdded')]
    public function render()
    {
        $reviews = $this->updateView();
        $count = Review::where('product_id', $this->product['id'])->count();
        $averageStars = ($count != 0)? Review::where('product_id', $this->product['id'])->sum('star_rating')/$count : 0;
        $fiveStars = Review::where('star_rating', 5)->where('product_id', $this->product['id'])->count();
        $fourStars = Review::where('star_rating', 4)->where('product_id', $this->product['id'])->count();
        $threeStars = Review::where('star_rating', 3)->where('product_id', $this->product['id'])->count();
        $twoStars = Review::where('star_rating', 2)->where('product_id', $this->product['id'])->count();
        $oneStars = Review::where('star_rating', 1)->where('product_id', $this->product['id'])->count();

        return view('livewire.review-section', [
            'reviews' => $reviews,
            'count' => $count,
            'averageStars'=> $averageStars,
            'fiveStars'=> $fiveStars,
            'fourStars'=> $fourStars,
            'threeStars'=> $threeStars,
            'twoStars'=> $twoStars,
            'oneStars'=> $oneStars,
        ]);
    }
}
