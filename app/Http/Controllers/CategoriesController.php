<?php

namespace App\Http\Controllers;
use App\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
      public function index()
      {
        $data = categories::all();

        return view('categories', compact('data'));

      }


      public function view($id)
      {
        $data = categories::findorfail($id);
        return view('view', compact('data'));
      }













}
