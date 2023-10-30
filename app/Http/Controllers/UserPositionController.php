<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use Auth;

class UserPositionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $positions = Position::where('user_id', $user->id)->get();
        return view('user.position.index', compact('positions'));
        
    }
}
