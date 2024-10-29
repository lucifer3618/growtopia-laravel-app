<?php

namespace App\Livewire;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ChangePassword extends Component
{

    public $currentPass;
    public $password;
    public $password_confirmation;

    public function updatePassword(){
        // Validate the input
        $this->validate([
            'currentPass' => 'required',
            'password' => 'required |string |min:8 |confirmed',
        ]);

        if (!Hash::check($this->currentPass, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'currentPass' => ['The current password is incorrect.'],
            ]);
        }

        Auth::user()->update([
            'password' => Hash::make($this->password),
        ]);

        return redirect()->route('profile', Auth::user()->id)->with('success', 'Password updated successfully!');
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
