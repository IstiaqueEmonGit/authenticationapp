<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class Login_info_controller extends Controller
{
    public function logininfo()
    {
        $datas = User::join('logininfos', 'logininfos.user_id', '=', 'users.id')->orderBy('logged_in_at', 'DESC')
                    ->paginate(5,['users.id', 'users.name', 'logininfos.logged_in_at']);
        
        
        return view('logininfo', compact('datas'));
    }
}
