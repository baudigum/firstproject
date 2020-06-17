<?php

namespace App\Http\Controllers;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


      public function price()

      {

        $data = categories::select('price')->where('id','<','7')->get();
        dd($data);
      }
}
