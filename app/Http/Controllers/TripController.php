<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TripController extends Controller
{
    public function index()
    {
        $allBusInfo = Bus::orderBy('id', 'desc')->get();
        return view('pages.home', compact('allBusInfo'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $allBusInfo = Bus::where(function ($query) use ($search) {
            $query->where('destination', 'like', "%$search%")
                ->orWhere('bus_name', 'like', "%$search%");
        })->orderBy('id', 'desc')->get();
        return view('pages.home', compact('allBusInfo', 'search'));
    }
}
