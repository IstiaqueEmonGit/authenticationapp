<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members_details extends Controller
{
    public function membersdetails()
    {
        $members = DB::table('users')->simplePaginate(5);
        return view('membersdetails', compact('members'));
    }
}
