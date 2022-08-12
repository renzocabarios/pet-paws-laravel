<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Pet;

class PetController extends Controller
{
    public function get()
    {
        return Datatables::of(Pet::with([])->get())
            ->addIndexColumn()
            ->addColumn('img', function ($row) {
                $url = asset('images/pet/' . $row->img_path);
                $img = '<img src=' . $url . ' alt = "I am a pic" height="50" width="50">';;
                return $img;
            })
            ->addColumn('action', function ($row) {
                $btn = "<a href=" . route('service.edit', ['id' => $row->id]) . ">Edit</a>";
                $btn = $btn . "<a href=" . route('service.delete', ['id' => $row->id]) . ">Delete</a>";
                return $btn;
            })
            ->rawColumns(['img', 'action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        if ($request->hasfile("img_path")) {
            $file = $request->file("img_path");
            $filename =  $file->getClientOriginalName();
            $destinationPath = public_path() . '/images/pet';
            $file->move($destinationPath, $filename);
        }

        Pet::create([
            'customer_id' => auth()->user()['id'],
            'pet_name' => $request->pet_name,
            'age' => (int) $request->age,
            'breed' => $request->breed,
            'sex' => $request->sex,
            'color' => $request->color,
            'img_path' => '/images/pet/' . $filename,
        ]);
        return redirect('/service');
    }

    public function update(Request $request, $id)
    {

        if ($request->hasfile("img_path")) {
            $file = $request->file("img_path");
            $filename =  $file->getClientOriginalName();
            $destinationPath = public_path() . '/images/service';
            $file->move($destinationPath, $filename);
        }

        $pet = Pet::find($id);
        $pet->customer_id = $request->customer_id;
        $pet->pet_name = $request->pet_name;
        $pet->breed = $request->breed;
        $pet->sex = $request->sex;
        $pet->color = $request->color;
        $pet->age = (int) $request->age;
        $pet->img_path = '/images/pet/' . $filename;
        $pet->save();
        return redirect('/pet');
    }

    public function destroy($id)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return redirect('/pet');
    }
}
