<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function store(Request $request)
    {
        $service = new Service;
        $service->service_name = $request->service_name;
        $service->price = (int) $request->price;
        $service->save();
        return redirect('/service');
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->service_name = $request->service_name;
        $service->price = (int) $request->price;
        $service->save();
        return redirect('/service');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/service');
    }
}
