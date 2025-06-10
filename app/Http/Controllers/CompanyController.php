<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function create()
    {
        return view('auth.register-company');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:companies',
            'email' => 'nullable|email',
        ]);

        $company = Company::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'email' => $request->email,
        ]);

        session(['current_company_id' => $company->id]);

        return redirect()->route('register');
    }
}