<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodCategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin/food-categories/all');
    }

    public function create(){
        return view('admin/food-categories/create');
    }

    public function edit($id){
        return view('admin/food-categories/edit');
    }
}
