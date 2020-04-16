<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FoodItem;

class FoodItemsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $items = FoodItem::paginate(10);
       
        return view('admin/food-items/all', [
            'items' => $items
        ]);
    }


    public function create(){
        return view('admin/food-items/create');
    }


    public function store(){

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            
        ]);
       
        $category = new FoodItem();
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();
        
        return redirect('/admin/food-items');

    }

    public function edit($id){

        $category = FoodItem::find($id);
        return view('admin/food-items/edit', [
            'category'=> $category
        ]);
    }

    public function update($id){

         request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            
        ]);

        $category = FoodItem::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/food-items');

    }

    public function delete($id){
        $category = FoodItem::find($id);
        $category->delete();

        return redirect('/admin/food-items');
    }
}
