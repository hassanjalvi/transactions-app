<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeModel;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->input('status');
        $query = Transaction::query();

        if ($status) {
            $query->where('status', $status);
        }

        $transactions = $query->paginate(10); // 10 items per page

        return view('transactions.index', compact('transactions'));
    }

}
