<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        if(auth()->user()->is($user))
            return view('profiles.edit', compact('user'));
        else
            abort(403);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'phone' => ['Numeric', 'required'],
            //'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);
       // $attributes['avatar'] = request('avatar')->store('avatars');
        $user->update($attributes);

        return redirect($user->path());
    }
}
