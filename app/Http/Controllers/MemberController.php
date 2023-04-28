<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    
    public function index(Request $request)
    {
        //list school as array
        $schools = ['Mathematics', 'Swahili', 'English', 'Maps', 'Booglish', 'Academia', 'Science', 'History', 'Nat-Geo'];
        //$members =Member::where('school', $request->input('school'))->get();
        $members = Member::latest()->filter(request(['school']))->get();

        return view('members.index', compact('members', 'schools'));
        
    }

    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }
    
    public function create()
    {
        //create school as array
        $schools = ['Mathematics', 'Swahili', 'English', 'Maps', 'Booglish', 'Academia', 'Science', 'History', 'Nat-Geo'];
        return view('members.create', compact('schools'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email',
            'school' => 'required'
        ]);

        //create member
        
        $array_school = $request->input('school');
        
        //extract array and save as comma separated for filter function
        $string_school = implode(',', $array_school);
        
        //create new member and save
        $member = new Member;
        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->school = $string_school;
        $member->save();
        

       // $member = Member::create($validatedData);
        //$member['school'] = json_encode($member['school']);
       return redirect('/')->with('message', 'Member Created Successfully.');
    }

    //search and filter functionality disabled 
    //public function filter(Request $request)
    //{
        //$school = $request->input('school');
        // $schools = ['Mathematics', 'Swahili', 'English', 'Maps', 'Booglish', 'Academia', 'Science', 'History', 'Nat-Geo']; // List of schools
        //$members = Member::where('school', $school)->get(); // Get members for selected school

        //return view('members.index', compact('members', 'schools'));
   // }

}