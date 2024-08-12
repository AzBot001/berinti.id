<?php

namespace App\Controllers;


class Home extends BaseController
{
    protected $Mlabel;
    public function __construct()
    {
        $this->Mlabel = new Mlabel();
    }
    public function index(): string
    {
        return view('welcome_message');
    }
}
