<?php

namespace App\Http\Controllers;

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
        return view('entity.page', compact('breadcrumbs'));
    }

    public function departmentPage()
    {
        $breadcrumbs = $this->generateBreadcrumb();
        return view('department.page', compact('breadcrumbs'));
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
