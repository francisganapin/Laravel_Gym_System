<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GymMember;

class MemberLoginController extends Controller
{
    public function showLogin(){
        return view('gym_member.member_login');
    }
    
    public function login(Request $request){
        

      
        
        $request->validate([
            'id_card' => 'required|string',
        ]);

        $member = GymMember::where('id_card',$request->id_card)->first();

        if(!$member){
            return back()->withErrors(['id_card'=> 'ID Card not found'])->withInput();
        }

        return view('gym_member.member_login', compact('member'));

    }
}