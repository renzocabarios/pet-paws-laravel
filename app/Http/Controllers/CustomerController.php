<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use App\Event\CustomerCreated;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            if ($request->hasfile("img_path")) {
                $file = $request->file("img_path");
                $filename =  $file->getClientOriginalName();
                $destinationPath = public_path() . '/images/customers';
                $file->move($destinationPath, $filename);
            }

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
                'role' => "Customer",
                'img_path' => '/images/customers/' . $filename,
            ]);

            Customer::create(['user_id' => $user->id,]);
            event(new CustomerCreated($request->email));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect('/');
    }

    public function update(Request $request, $id)
    {

        if ($request->hasfile("img_path")) {
            $file = $request->file("img_path");
            $filename =  $file->getClientOriginalName();
            $destinationPath = public_path() . '/images/customers';
            $file->move($destinationPath, $filename);
        }

        $customer = User::find($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->img_path = '/images/customers/' . $filename;
        $customer->save();
        return redirect('/customer');
    }

    public function delete($id)
    {
        $customer = User::find($id);
        $customer->active = !$customer->active;
        $customer->save();
        return redirect('/customer');
    }

    public function getProfile()
    {
        $user = auth()->user();
        return view('user.profile', ['user' => $user]);
    }
}
