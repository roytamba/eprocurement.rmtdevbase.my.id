<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:entities,code',
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'fax' => 'nullable|string',
            'address' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        try {
            Entity::create($request->all());
            return redirect()->back()->with('success', 'Entity berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan entity.');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:entities,id',
            'code' => 'required',
            'name' => 'required',
        ]);

        try {
            $entity = Entity::findOrFail($request->id);
            $entity->update($request->only('code', 'name', 'email', 'phone', 'fax', 'address', 'description', 'status'));
            return redirect()->back()->with('success', 'Entity updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update entity. Please try again.');
        }
    }
}
