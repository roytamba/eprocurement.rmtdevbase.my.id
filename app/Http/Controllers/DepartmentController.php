<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
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

        try {
            Department::create([
                'entity_id'   => $request->entity_id,
                'code'        => $request->code,
                'name'        => $request->name,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'fax'         => $request->fax,
                'address'     => $request->address,
                'description' => $request->description,
                'status'      => $request->status,
            ]);

            return redirect()->back()->with('success', 'Department berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan department.');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'          => 'required|exists:departments,id',
            // 'entity_id'   => 'required|exists:entities,id',
            // 'code'        => 'required',
            // 'name'        => 'required|string|max:255',
            // 'email'       => 'nullable|email',
            // 'phone'       => 'nullable|string|max:20',
            // 'fax'         => 'nullable|string|max:20',
            // 'address'     => 'nullable|string',
            // 'description' => 'nullable|string',
            // 'status'      => 'required|in:active,inactive',
        ]);

        dd($request->all());

        try {
            $department = Department::findOrFail($request->id);

            if ($this->isDuplicateDepartmentCode($request->entity_id, $request->code, $request->id)) {
                return redirect()->back()->with('error', 'Kode department sudah digunakan untuk entity yang sama.');
            }

            $department->update([
                'entity_id'   => $request->entity_id,
                'code'        => $request->code,
                'name'        => $request->name,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'fax'         => $request->fax,
                'address'     => $request->address,
                'description' => $request->description,
                'status'      => $request->status,
            ]);

            return redirect()->back()->with('success', 'Department berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui department.');
        }
    }

    protected function isDuplicateDepartmentCode($entityId, $code, $excludeId = null)
    {
        return Department::where('entity_id', $entityId)
            ->where('code', $code)
            ->when($excludeId, function ($query, $excludeId) {
                $query->where('id', '!=', $excludeId);
            })
            ->exists();
    }
}
