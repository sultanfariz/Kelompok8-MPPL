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
        $role = 'user';
        Validator::make($input, [
            'fullname' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'fullname' => $input['fullname'],
            'phone_number' => $input['phone_number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => $role,
        ]);
    }
}
class CreateNewAdmin implements CreatesNewUsers
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
        $role = 'admin';
        Validator::make($input, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'fullname' => $input['fullname'],
            'username' => $input['username'],
            'phone_number' => $input['phone_number'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => $role,
        ]);
    }
}
