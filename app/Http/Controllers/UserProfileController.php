<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'phone' => ['max:100'],
            'address' => ['max:100'],
            'about' => ['max:255']
        ]);

        auth()->user()->update([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email') ,
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'about' => $request->get('about')
        ]);

        toastr()->success('Profile succesfully updated');
        return back();
    }
}
