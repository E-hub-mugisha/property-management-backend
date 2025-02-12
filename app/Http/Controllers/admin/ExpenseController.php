<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        return response()->json(Expense::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'category' => 'required|string',
            'property' => 'required|string',
            'description' => 'required|string',
        ]);

        $expense = Expense::create($request->all());

        return response()->json($expense, 201);
    }

    public function show($id)
    {
        return response()->json(Expense::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());

        return response()->json($expense, 200);
    }

    public function destroy($id)
    {
        Expense::destroy($id);
        return response()->json(['message' => 'Expense record deleted'], 200);
    }
}
