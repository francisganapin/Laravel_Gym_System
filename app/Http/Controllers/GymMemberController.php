<?php

namespace App\Http\Controllers;

use App\Models\GymMember;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GymMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $search = $request->input('search');
    $membership = $request->input('membership');

    // search Query 
    $members = GymMember::query()
        ->when($search, function ($query, $search) {
            $query->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('id_card','like',"%{$search}%");

        })
        #check membership type
        ->when($membership,function($query,$membership){
            $query->where('membership',$membership);
        })

        #show 10 item 
        ->paginate(10)

        ->appends(['search' => $search]); // keeps search in pagination links

    return view('gym_member', compact('members', 'search','membership'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gym_member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_card' => 'required|unique:gym_members|min:8|max:9',
            'expiry' => 'required|date|after_or_equal:today',
            'membership' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('profile_image')){
            $validated['profile_image'] = $request->file('profile_image')->store('image','public');
        }

        GymMember::create($validated);

        return redirect()->route('gym-member.index')->with('success','Member Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


 
    public function editExpiry($id){
        $member = GymMember::findOrFail($id);
        return view('gym_member.edit_expiry',compact('member'));

    }

    public function updateExpiry(Request $request,$id){

        $request->validate([
            'expiry' => 'required|date|after_or_equal:today',
        ]);

        $member = GymMember::findOrFail($id);

        $member-> expiry = $request->expiry;

        $member->save();

        return redirect()->route('gym-member.index')->with('success','expiry updated successfully!');
    }


    public function countStatistic()
    {
        $today = Carbon::today();

        $total = GymMember::count();

        $standard = GymMember::where('membership','Standard')->count();

        $premium = GymMember::where('membership','Premium')->count();

        $vip = GymMember::where('membership','Vip')->count();

        $expired = GymMember::where('expiry_date','<',$today)->count();
        
        return view('dashboard', compact(
            'total', 'standard', 'premium', 'vip', 'expired'
        ));
        
    
    }
 
}