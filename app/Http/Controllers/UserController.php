<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function profile(User $user){

        // Define the provinces array
        $provinces = [
            'western' => 'Western Province',
            'central' => 'Central Province',
            'southern' => 'Southern Province',
            'northern' => 'Northern Province',
            'eastern' => 'Eastern Province',
            'north_western' => 'North Western Province',
            'north_central' => 'North Central Province',
            'uva' => 'Uva Province',
            'sabaragamuwa' => 'Sabaragamuwa Province',
        ];

        if(Auth::user()->id === $user->id){
            return view('profile', compact('user', 'provinces'));
        }else{
            return abort(404, 'Page not found!');
        }
    }

    public function update(User $user){

        if(Auth::user()->id === $user->id){
            $validated = request()->validate([
                'username' => 'required | min:5 | max:20',
                'firstname' => 'required | min:5 | max:50',
                'lastname' => 'required | min:5 | max:50',
                'zip' => 'required | min:2 | max:50',
                'city' => 'required | min:5 | max:100',
                'province' => 'required',
                'image' => 'image',
            ]);

            if (request()->has('image')) {
                $imagePath = request()->file('image')->store('profile', 'public');
                if($user->image_path != null){
                    Storage::disk('public')->delete($user->image_path);
                }

                $isUpdate = $user->update([
                    'firstname' => request()->get('firstname'),
                    'lastname' => request()->get('lastname'),
                    'city'=> request()->get('city'),
                    'province'=> request()->get('province'),
                    'zip'=> request()->get('zip'),
                    'image_path'=> $imagePath,
                ]);
            }else{
                    $isUpdate = $user->update([
                        'firstname' => request()->get('firstname'),
                        'lastname' => request()->get('lastname'),
                        'city'=> request()->get('city'),
                        'province'=> request()->get('province'),
                        'zip'=> request()->get('zip'),
                    ]);
                }

            if($isUpdate){
                flash()->success("Successfully updated Profile");
                return redirect()->route('profile', compact('user'));
            }else{
                flash()->error("Error when updating profile!");
                return redirect()->route('profile', compact('user'));
            }
        }else{
            return abort(404, 'Page not found!');
        }
    }

    public function destroy(User $user){
        auth()->logout();
        $user->delete();

        return redirect()->route('home', )->with('success','Account Deleted Successfully!');
    }

}
