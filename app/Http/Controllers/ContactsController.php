<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactsController extends Controller
{
    function show()
    {
        $data =User::all();
        return view('contacts',['users'=>$data]);
    }
}
