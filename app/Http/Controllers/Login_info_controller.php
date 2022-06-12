<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class Login_info_controller extends Controller
{
    public function logininfo($id)
    {
        $datas = User::join('logininfos', 'logininfos.user_id', '=', 'users.id')->where('user_id', $id)->orderBy('logged_in_at', 'DESC')
                    ->paginate(5,['users.name', 'logininfos.logged_in_at', 'logininfos.logged_out_at']);
        
        return view('logininfo', compact('datas'));
    }
}
