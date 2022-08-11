<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employee;
use App\Event\CustomerCreated;

class EmployeeController extends Controller
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
                'role' => "Employee",
                'img_path' => '/images/employee/' . $filename,
            ]);

            Employee::create(['user_id' => $user->id,]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect('/');
    }

    public function updatePosition(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->position = $request->position;
        $employee->save();
        return redirect('/employee');
    }
}
