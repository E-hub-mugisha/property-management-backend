<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return response()->json(Property::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
        ]);

        return Property::create($request->all());
    }

    public function edit($id)
    {
        $property = Property::find($id);

        if (!$property) {
            return response()->json(['message' => "property not found"], 404);
        }

        return response()->json($property);
    }

    public function show($id)
    {
        $property = Property::find($id);

        if (!$property) {
            return response()->json(['message' => "property not found"], 404);
        }

        return response()->json($property);
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->update($request->all());
        return response()->json(['message' => 'property updated successfully']);
    }

    public function destroy($id)
    {
        $property = Property::find($id);

        if (!$property) {
            return response()->json(['message' => 'property not found'], 404);
        }

        $property->delete();

        return response()->json(['message' => 'property deleted successfully']);
    }
}
