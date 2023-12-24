<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // create bus schedule
    public function sotre()
    {
        return view('pages.create_trip');
    }

    public function sotrePost(Request $request)
    {

        Bus::create([
            'bus_name' => $request->bus_name,
            'seat' => $request->seat,
            'destination' => $request->destination,
            'date' => $request->date,
            'time' => $request->time,
            'price' => $request->price
        ]);

        return redirect('/admin/schedule');
    }


    // manage schedule
    public function schedule()
    {
        $allBusInfo = Bus::get();
        return view('pages.schedule', compact('allBusInfo'));
    }

    public function scheduleEdit($id)
    {
        $busInfo = Bus::findOrFail($id);
        return view('pages.update', compact('busInfo'));
    }

    public function scheduleUpdate(Request $request, $id)
    {

        $busInfo = Bus::findOrFail($id);
        $busInfo->update([
            'bus_name' => $request->bus_name,
            'seat' => $request->seat,
            'price' => $request->price,
            'destination' => $request->destination,
            'date' => $request->date,
            'time' => $request->time
        ]);

        return redirect('/admin/schedule');

    }


    public function scheduleDelete($id)
    {
        $busInfo = Bus::findOrFail($id);
        $busInfo->delete();
        return redirect()->back();
    }

}
