<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peoples;

class PeoplesController extends Controller
{
    public function add(Request $request){
        $items = new Peoples();

        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->phonenumb = $request->phonenumb;
        $items->street = $request->street;
        $items->city = $request->city;
    
        $items->save();
        return response()->json('Add - succefully');
    }

    public function edit(Request $request){
        $items = Peoples::findorfail($request->id);

        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->phonenumb = $request->phonenumb;
        $items->street = $request->street;
        $items->city = $request->city;
    
        $items->update();
        return response()->json('edit - succefully');
    }

    public function delete(Request $request){
        $items = Peoples::findorfail($request->id)->delete();

        return response()->json('delete - succefully');
    }

    public function getall(){
        $items = Peoples::all();
        return response() -> json($items);
    }

    public function getone($id){
        $peoples = Peoples::find($id);
        return response() -> json([$peoples]);
    }
}
