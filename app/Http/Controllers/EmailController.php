<?php

namespace App\Http\Controllers;

use App\Jobs\CustomerJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendMail()
    {
        dispatch(new CustomerJob());

        dd("Email has been delivered");
    }
}
