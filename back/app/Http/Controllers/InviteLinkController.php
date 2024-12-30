<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\InviteLink;
use Illuminate\Support\Str;

class InviteLinkController extends Controller
{
    public function index()
    {
        $cod = InviteLink::get();
        foreach ($cod as $key) {
            # code...
             $key->user;
            return response()->json([$cod]);
        }
        return response()->json($cod);
    }
    public function create()
    {
        /*    $cod = Str::random(20);
        InviteLink::create($cod); */
    }
}
