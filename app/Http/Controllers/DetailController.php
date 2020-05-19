<?php

namespace App\Http\Controllers;

use App\TravelPacket;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug){
        $item = TravelPacket::with(['galleries'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
