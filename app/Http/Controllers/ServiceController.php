<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;



class ServiceController extends Controller
{
    public function allServices()
    {
        $all_services = Service::all();

        $context = [
            'all_services' => $all_services,
        ];

        return view('services.all', $context);
    }
    
    
    public function addService()
    {

        $context = [];

        return view('services.add', $context);
    }
}
