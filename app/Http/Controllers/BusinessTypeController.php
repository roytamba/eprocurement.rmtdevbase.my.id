<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class BusinessTypeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'code' => 'required|unique:business_types,code',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive',
            ]);
            
            BusinessType::create($validated);
            return redirect()->back()->with('success', 'Business Type created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to create business type: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required|exists:business_types,id',
                'code' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive',
            ]);

            $bt = BusinessType::findOrFail($validated['id']);
            $bt->update($validated);

            return redirect()->back()->with('success', 'Business Type updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update business type: ' . $e->getMessage());
        }
    }
}

