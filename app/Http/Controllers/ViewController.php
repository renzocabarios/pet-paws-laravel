<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Pet;

class ViewController extends Controller
{
    public function service()
    {
        return view('service.index');
    }

    public function addService()
    {
        return view('service.add');
    }

    public function editService($id)
    {
        $data = Service::with([])->where('id', $id)->first();
        return view('service.edit', ['data' => $data]);
    }

    public function signin()
    {
        return view('user.signin');
    }

    public function signup()
    {
        return view('user.signup');
    }

    public function customer()
    {
        return view('customer.index');
    }

    public function profile()
    {
        return view('user.profile', ['user' => auth()->user()->toArray()]);
    }

    public function consult()
    {
        return view('consult.index');
    }

    public function history()
    {
        return view('consult.history');
    }

    public function pet()
    {
        return view('pet.index');
    }

    public function addPet()
    {
        return view('pet.add');
    }

    public function editPet($id)
    {
        $data = Pet::with([])->where('id', $id)->first();
        return view('pet.edit', ['data' => $data]);
    }

    public function addEmployee()
    {
        return view('employee.add');
    }

}
