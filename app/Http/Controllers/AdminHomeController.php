<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeModel;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'user_id' => 'required',
                'amount' => 'required',
                'is_completed'=>'required'
            ]
        );
        $isCompleted = filter_var($request->is_completed, FILTER_VALIDATE_BOOLEAN);
        $transaction = new Transaction();
        $transaction->user_id = $request->user_id;
        $transaction->type = $request->type;
        $transaction->status = $request->status;
        $transaction->amount = $request->amount;
        $transaction->is_completed = $request->is_completed ? true : false;
        $transaction->save();
        return back()->withSuccess('Thanks for Submitting data');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminHomeModel $adminHomeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminHomeModel $adminHomeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminHomeModel $adminHomeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminHomeModel $adminHomeModel)
    {
        //
    }
}
