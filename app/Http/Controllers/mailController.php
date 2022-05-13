<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text'=>'mail'],['name','Проект отправки письма'], function ($message){
            $message->to('otpravkapisma51@mail.ru','otpravkapisma')->subject('Test email');
            $message->from('otpravkapisma51@mail.ru','to otpravkapisma');
        });
    }
}
