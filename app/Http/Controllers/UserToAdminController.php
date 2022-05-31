<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserToAdminController extends Controller
{
    public function __invoke($id)
    {
        $user=User::findorFail($id);

        $user->admin = '1';
        $user->save();

        return redirect('adminusers');
    }
}
