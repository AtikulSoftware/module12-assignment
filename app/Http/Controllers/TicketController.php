<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function order($id)
    {

        $orderInfo = Bus::findOrFail($id);
        return view('pages.order', compact('orderInfo'));
    }

    public function orderConfirm(Request $request, $id)
    {
        $busInfo = Bus::findOrFail($id);

        Trip::create([
            'name' => $request->name,
            'email' => $request->email,
            'bus_name' => $busInfo->bus_name,
            'seat' => $request->seat,
            'destination' => $busInfo->destination,
            'date' => $busInfo->date,
            'time' => $busInfo->time,
            'price' => $busInfo->price
        ]);

        return redirect('/myTickit');
    }

    public function tickitShow()
    {
        $user_tickit = Trip::get();
        return view('pages.user_tickit', compact('user_tickit'));
    }

    public function tickitCancel(Request $request)
    {
        $cancelTirp = Trip::findOrFail($request->id);
        $cancelTirp->delete();
        return redirect()->back();
    }



}
