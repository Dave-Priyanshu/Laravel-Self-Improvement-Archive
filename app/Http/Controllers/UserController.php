<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('login');
        }
        
        $users = User::orderBy('id', 'asc')->paginate(10);  //To get all the users data
        // $users = User::where('city','Trystanfort')->where('age','<',30)->get();
        
        // return $users;
        return view('home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','alpha'],
            'email'=>['required','email'],
            'age'=>['required','numeric'],
            'city'=>['required','alpha'],
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'age'=> $request->age,
            'city'=> $request->city,
        ]);

        return redirect()->route('user.index')->with('status','New User Added Successfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        return view('viewuser',compact('users'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view('updateuser',compact('users'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $request->validate([
            'name' => 'required|alpha',
            'email'=>'required',
            'age'=>'required|numeric',
            'city'=>'required|alpha',
        ]);


        User::where('id',$id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'age'=> $request->age,
            'city'=> $request->city,
            ]);
            
            return redirect()->route('user.index')->with('status','User Details Updated Successfully');
            
        }
        
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(User $user)
        {
            $user = User::find($user->id)->delete();
            return redirect()->route('user.index')->with('status','User Details Deleted Successfully');
    }

    public function createUserWithProfile()
    {
        //create a user
        $user = User::create([
            'name'=> 'Priyanshu Dave',
            'email'=> 'pd@gmail.com'
        ]);

        //create a profile of the user
        $profile = new Profile([
            'age'=> 23,
            'bio'=> 'testing relatioons'
        ]);
        $user->profile()->save($profile);// Save the profile for this user
        return response()->json(['message' => 'User and profile created successfully!']);
    }
    public function getUserProfile($userId)
    {
        $user = User::find($userId); // Get user by ID
        
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $profile = $user->profile; // Access the associated profile
        
        return response()->json(['user' => $user, 'profile' => $profile]);
    }

}
