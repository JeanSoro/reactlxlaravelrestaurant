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
            'price' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            
        ]);
       
        $item = new FoodItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();
        
        return redirect('/admin/food-items');

    }

    public function edit($id){

        $item = FoodItem::find($id);
        return view('admin/food-items/edit', [
            'item'=> $item
        ]);
    }

    public function update($id){

         request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'category_id' => ['required', 'integer']
            
        ]);

        $item = FoodItem::find($id);
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

        return redirect('/admin/food-items');

    }

    public function delete($id){
        $item = FoodItem::find($id);
        $item->delete();

        return redirect('/admin/food-items');
    }
}
