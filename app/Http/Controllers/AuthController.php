<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "Nis" => "3103118053",
            "Name" => "Eldira Kharisma a",
            "Gender" => "Perempuan",
            "Phone" => "085726337681",
            "Kelas" => "XII RPL 2",
        ];
    }
}