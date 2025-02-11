<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function getOwners(){
        $owners = Owner::query()
            ->get();
        return response()->json($owners);
    }

    public function createOwner(Request $request){
        $owner = Owner::create($request->all());

        return response()->json($owner, 201);
    }

    public function updateOwner(Owner $owner, Request $request){
        $owner->update($request->all()); //m1

        $owner->fill($request->all());  //m2
        $owner->save();

        $owner->name = $request->get("name"); //m3
        $owner->save();
        return response()->json($owner);
    }

    public function deleteOwner(Owner $owner){
        $owner->delete();

        return response()->json("", 204);
    }
}
