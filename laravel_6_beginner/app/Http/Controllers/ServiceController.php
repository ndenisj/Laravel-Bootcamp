<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // NAMING CONVENTION

        // Model - singular
        // Service

        // Table Name - plural
        // services

        $services = Service::all();
        // dd($services);

        return view('service.index', compact('services'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:5'
        ]);

        Service::create($data);

        // LONG PATTERN
        // $service = new Service();
        // $service->name = request('name');
        // $service->save();

        return redirect()->back();
    }
}
