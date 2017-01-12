<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class ItemController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }

    public function item(){
    	$items=item::all();
    	return view('item', array('records'=>$items));
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $data){
    	$item=new item;
    	$item->title=$data['title'];
    	$item->price=$data['price'];
    	$item->stock=$data['stock'];
    	$item->description=$data['description'];
    	if ($item->save()) {
    		return redirect('item');
    	};
    }

     public function edit($id){
     	$items=item::find($id);
     	return view('edit', array('record' =>$items));
     }

     public function update(Request $data){
        $items=item::find($data['id']);
        $items['title']=$data['title'];
        $items['price']=$data['price'];
        $items['stock']=$data['stock'];
        $items['description']=$data['description'];
       if($items->save()){
        return redirect('item');
       }
     }

     public function delete($id){
        $items=item::find($id);
        if($items->delete()){
            return redirect ('item');
        }
     }
}
