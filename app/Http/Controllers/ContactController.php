<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(){

        if (!auth()->check()) {
            flash()->flash('info', 'Login to contact.', [], 'Error');
            return redirect()->route('login');
        }

        //Contain records on the contact table in the range of 0, 10
        if(Contact::count()>10){
            //get the oldest record
            $lastrecord = Contact::orderBy('created_at', 'asc')->first();
            //delete the image associate with the oldes record
            Storage::disk('public')->delete($lastrecord->doc_path);
            //delete oldest record
            $lastrecord->delete();
        }

        if (request()->has('doc')) {
            $filePath = request()->file('doc')->store('contact', 'public');
        }

        $contact = Contact::create([
            'firstname'=> request('firstname'),
            'lastname'=> request('lastname'),
            'phone'=> request('phone'),
            'email'=> request('email'),
            'message'=> request('message'),
            'doc_path'=> $filePath,
        ]);

        if ($contact) {
            flash()->flash('info', 'We will contact you shortly.', [], 'Sent Successfully');
        }else{
            flash()->flash('error', "Message couldn't send", [], "Try again");
        }

        return redirect()->route('contact');
    }

}
