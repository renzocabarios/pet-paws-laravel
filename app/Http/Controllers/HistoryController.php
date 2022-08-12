<?php

namespace App\Http\Controllers;

use App\Event\ConsultCreated;
use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            History::create([
                'pet_id' => $request->pet_id,
                'employee_id' => $request->employee_id,
                'illness' => $request->illness,
                'comment' => $request->comment,
                'fee' => (int)  $request->fee,
            ]);

            event(new ConsultCreated($request->email, $request->illness, $request->comment, $request->fee));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect('/');
    }
}
