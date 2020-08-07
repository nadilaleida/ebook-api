<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "NIS" => "3103118099",
            "Name" => "Nadila Aleida",
            "Gender" => "Perempuan",
            "Phone" => "08533264169",
            "Kelas" => "XII RPL 3",
        ];
    }
}