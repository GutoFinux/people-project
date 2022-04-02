<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class People extends Controller
{
    public function dashboard()
    {
      return view('dashboard');
    }

    public function newPerson()
    {
      return view('new_person');
    }

    public function detailsPerson()
    {
      return view('details_person');
    }

    public function editPerson()
    {
      return view('edit_person');
    }
}
