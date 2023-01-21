<?php


namespace App\Http\Services;


use App\Models\User;

class RegistrationService
{

    public function save(array $input)
    {
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];

        return $user->save();
    }
}
