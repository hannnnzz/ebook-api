<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119003,
        'name' => 'Adhystira Raihan',
        'gender' => 'Male',
        'phone' => '081226045247',
        'class' => 'XII RPL 1'];
  }
}