<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'min:2', 'unique:users'],
            'password' => $this->passwordRules(),
            'phone' => ['required', 'string', 'max:255', 'min:2'],
            'ref_id' => ['nullable', 'integer', 'max:255', 'min:2'],
            'country' => ['required', 'string', 'max:255', 'min:2'],
            
        ])->validate();

       
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'plain_password' => $input['password'],
            'phone' => $input['phone'],
            'ref_id' => $input['ref_id'],
            'country' => $input['country'],
        ]);
    }
}
