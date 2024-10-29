<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Corrected line
use App\Mail\Gmail; // Ensure the class name matches case-sensitively

class MailController extends Controller
{
    function sendEmail()
    {
        $to = "gmdcf797@gmail.com";
        $msg = "learn laravel";
        $subject = "Email Practice"; // Corrected the typo in subject
        Mail::to($to)->send(new Gmail($msg, $subject)); // Ensure class name is correctly cased
    }
}
