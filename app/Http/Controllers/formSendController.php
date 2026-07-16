<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\formSend;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\FormSendRequest;

class formSendController extends Controller
{
    public function store(FormSendRequest $request) {
        phpinfo();
        Mail::to('artem-lebedev-2004@inbox.ru')->send(new formSend($request));
    }
}
