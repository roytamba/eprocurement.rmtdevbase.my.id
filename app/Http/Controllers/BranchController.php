<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class BranchController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'entity_id' => 'required|numeric',
                'branch_type_id' => 'required|numeric',
                'code' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'email' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:255',
                'fax' => 'nullable|string|max:255',
                'postal_code' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:255',
                'status' => 'in:Active,Inactive',
            ]);

            Branch::create($validated);

            return redirect()->back()->with('success', 'Branch created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to create branch: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required|exists:branches,id',
                'entity_id' => 'required|numeric',
                'branch_type_id' => 'required|numeric',
                'code' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'email' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:255',
                'fax' => 'nullable|string|max:255',
                'postal_code' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:255',
                'status' => 'in:Active,Inactive',
            ]);

            $branch = Branch::findOrFail($validated['id']);
            $branch->update($validated);

            return redirect()->back()->with('success', 'Branch updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update branch: ' . $e->getMessage());
        }
    }
}
