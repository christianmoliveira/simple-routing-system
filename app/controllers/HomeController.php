<?php 

namespace app\controllers;

class HomeController extends Controller
{
  public function index($request)
  {
    return self::view('home');
  }
}