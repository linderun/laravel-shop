<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function emailVerifyNotice()
    {
        return view('pages.email_verify_notice');
    }
}
