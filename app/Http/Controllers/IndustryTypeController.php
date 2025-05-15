<?php

namespace App\Http\Controllers;

use App\Models\IndustryType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class IndustryTypeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'code' => 'required|unique:industry_types,code',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive',
            ]);

            IndustryType::create($validated);
            return redirect()->back()->with('success', 'Industry Type created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to create industry type: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required|exists:industry_types,id',
                'code' => 'required|string|max:255|unique:industry_types,code,' . $request->id,
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive',
            ]);

            $industryType = IndustryType::findOrFail($validated['id']);
            $industryType->update($validated);

            return redirect()->back()->with('success', 'Industry Type updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update industry type: ' . $e->getMessage());
        }
    }
}
