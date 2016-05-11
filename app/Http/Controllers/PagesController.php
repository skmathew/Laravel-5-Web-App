<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
      $data = [];
      $data['first'] = 'Sherin';
      $data['last'] = 'Mathew';

      return view('pages.about', $data);
    }
}
