<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\BranchType;
use App\Models\BusinessType;
use App\Models\Department;
use App\Models\Entity;
use App\Models\IndustryType;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $breadcrumbs = $this->generateBreadcrumb();
        return view('dashboard.page', compact('breadcrumbs'));
    }

    public function entityPage()
    {
        $breadcrumbs = $this->generateBreadcrumb();
        $entities = Entity::all();
        $businessTypes = BusinessType::all();
        $industryTypes = IndustryType::all();

        // Menggunakan map untuk menambahkan properti baru ke setiap entity
        $entities = Entity::all()->map(function ($entity) use ($businessTypes, $industryTypes) {
            // Mencari business_type_name berdasarkan business_type_id
            $businessType = $businessTypes->where('id', $entity->business_type_id)->first();
            $entity->business_type_name = $businessType ? $businessType->name : null;

            // Mencari industry_type_name berdasarkan industry_type_id
            $industryType = $industryTypes->where('id', $entity->industry_type_id)->first();
            $entity->industry_type_name = $industryType ? $industryType->name : null;

            return $entity;
        });

        return view('entity.page', compact('breadcrumbs', 'entities', 'businessTypes', 'industryTypes'));
    }

    public function branchPage()
    {
        $breadcrumbs = $this->generateBreadcrumb();
        $branches = Branch::all();
        $entities = Entity::all();
        $branchTypes = BranchType::all();
        return view('branch.page', compact('breadcrumbs', 'branches', 'entities', 'branchTypes'));
    }

    public function departmentPage()
    {
        $breadcrumbs = $this->generateBreadcrumb();
        $departments = Department::all();
        $entities = Entity::all();
        return view('department.page', compact('breadcrumbs', 'departments', 'entities'));
    }

    protected function generateBreadcrumb()
    {
        $segments = request()->segments();
        $breadcrumbs = [];

        $url = url('/department');
        if (!empty($segments) && $segments[0] !== 'dashboard') {
            $breadcrumbs[] = ['label' => 'Dashboard', 'url' => $url];
        }

        $url .= '/' . implode('/', $segments);
        foreach ($segments as $segment) {
            $url = rtrim($url, '/');
            $url .= '/' . $segment;

            $label = ucwords(str_replace('-', ' ', $segment));
            $breadcrumbs[] = [
                'label' => $label,
                'url' => $url
            ];
        }

        return $breadcrumbs;
    }
}
