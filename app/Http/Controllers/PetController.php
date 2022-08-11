<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{

    // Add authencticate customer id
    public function store(Request $request)
    {
        $pet = new Pet;
        $pet->pet_name = $request->pet_name;
        $pet->age = $request->age;
        $pet->breed = $request->breed;
        $pet->sex = $request->sex;
        $pet->color = $request->color;
        $pet->customer_id = (int) $request->customer_id;
        $pet->save();
        return redirect('/pet');
    }
}
