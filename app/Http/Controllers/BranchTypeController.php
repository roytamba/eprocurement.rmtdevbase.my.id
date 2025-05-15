<?php

namespace App\Http\Controllers;

use App\Models\BranchType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BranchTypeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:50|unique:branch_types,code',
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        try {
            BranchType::create([
                'code' => $request->code,
                'name' => $request->name,
                'description' => $request->description,
                'status' => $request->status,
            ]);

            return redirect()->back()->with('success', 'Branch Type successfully added.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to create Branch Type: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required|exists:branch_types,id',
                'code' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|in:Active,Inactive',
            ]);

            $bt = BranchType::findOrFail($validated['id']);
            $bt->update($validated);

            return redirect()->back()->with('success', 'Branch Type updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Branch type: ' . $e->getMessage());
        }
    }
}
