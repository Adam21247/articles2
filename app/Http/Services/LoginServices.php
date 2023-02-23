<?php


namespace App\Http\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class LoginServices
{
    public function load(array $input)
    {
        $user = new User();

        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);

        return $user->save();
    }
}
