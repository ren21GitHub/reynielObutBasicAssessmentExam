<?php

namespace App\Http\Controllers;

use App\Models\IpGeolocation;
use Illuminate\Http\Request;

class IpGeolocationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ip' => ['required', 'ip'],
        ]);

        $ipGeo = new IpGeolocation();

        $ipGeo->ip_address = $request->ip;
        $ipGeo->save();

        return redirect()->route('dashboard');
    }
}
