<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class EntityController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'code' => 'required|unique:entities,code',
                'name' => 'required|string|max:255',
                'business_type_id' => 'nullable|integer',
                'industry_type_id' => 'nullable|integer',
                'email' => 'nullable|email',
                'phone' => 'nullable|string|max:20',
                'fax' => 'nullable|string|max:20',
                'website' => 'nullable|string|max:255',
                'address' => 'nullable|string',
                'description' => 'nullable|string',
                'status' => 'nullable|in:Active,Inactive',
            ]);

            Entity::create($validated);
            return redirect()->back()->with('success', 'Entity has been created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to create entity: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'required|exists:entities,id',
                'code' => 'required|string|max:50',
                'name' => 'required|string|max:255',
                'business_type_id' => 'nullable|integer',
                'industry_type_id' => 'nullable|integer',
                'email' => 'nullable|email',
                'phone' => 'nullable|string|max:20',
                'fax' => 'nullable|string|max:20',
                'website' => 'nullable|string|max:20',
                'address' => 'nullable|string',
                'description' => 'nullable|string',
                'status' => 'nullable|in:Active,Inactive',
            ]);

            $entity = Entity::findOrFail($validated['id']);
            $entity->update($validated);

            return redirect()->back()->with('success', 'Entity has been updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update entity: ' . $e->getMessage());
        }
    }
}
