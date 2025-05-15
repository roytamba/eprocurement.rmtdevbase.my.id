<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'entity_id'   => 'required|exists:entities,id',
                'code'        => 'required|unique:departments,code',
                'name'        => 'required|string|max:255',
                'email'       => 'nullable|email',
                'phone'       => 'nullable|string|max:20',
                'fax'         => 'nullable|string|max:20',
                'address'     => 'nullable|string',
                'description' => 'nullable|string',
                'status'      => 'required|in:active,inactive',
            ]);

            Department::create($validated);

            return redirect()->back()->with('success', 'Department has been created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to create department: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'id'          => 'required|exists:departments,id',
                'entity_id'   => 'required|exists:entities,id',
                'code'        => 'required|string|max:50',
                'name'        => 'required|string|max:255',
                'email'       => 'nullable|email',
                'phone'       => 'nullable|string|max:20',
                'fax'         => 'nullable|string|max:20',
                'address'     => 'nullable|string',
                'description' => 'nullable|string',
                'status'      => 'required|in:active,inactive',
            ]);

            $department = Department::findOrFail($validated['id']);

            if ($this->isDuplicateDepartmentCode($validated['entity_id'], $validated['code'], $validated['id'])) {
                return redirect()->back()
                    ->with('error', 'The department code is already in use for the selected entity.')
                    ->withInput();
            }

            $department->update($validated);

            return redirect()->back()->with('success', 'Department has been updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to update department: ' . $e->getMessage())
                ->withInput();
        }
    }

    protected function isDuplicateDepartmentCode($entityId, $code, $excludeId = null): bool
    {
        return Department::where('entity_id', $entityId)
            ->where('code', $code)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->exists();
    }
}
