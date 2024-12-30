<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\InviteLink;
use Illuminate\Support\Str;

class InviteLinkController extends Controller
{
    public function create()
    {
        $cod = Str::random(20);
        InviteLink::create($cod);
    }
}
