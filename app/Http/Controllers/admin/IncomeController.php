<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function index()
    {
        return response()->json(Income::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'tenant' => 'required|string',
            'property' => 'required|string',
            'description' => 'required|string',
        ]);

        $income = Income::create($request->all());

        return response()->json($income, 201);
    }

    public function show($id)
    {
        return response()->json(Income::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $income = Income::findOrFail($id);
        $income->update($request->all());

        return response()->json($income, 200);
    }

    public function destroy($id)
    {
        Income::destroy($id);
        return response()->json(['message' => 'Income record deleted'], 200);
    }
}
