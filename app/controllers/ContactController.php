<?php

namespace app\controllers;

class ContactController extends Controller
{
  public function index()
  {
    return self::view('contact');
  }
  
  public function store()
  {
    var_dump('store do contact');
  }
}
