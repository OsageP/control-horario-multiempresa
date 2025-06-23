<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role ? auth()->user()->role->slug : null;

        return match($role) {
            'superadmin' => redirect()->route('dashboard.superadmin'),
            'admin_empresa' => redirect()->route('dashboard.admin_empresa'),
            default => redirect()->route('dashboard.usuario'),
        };
    }
}