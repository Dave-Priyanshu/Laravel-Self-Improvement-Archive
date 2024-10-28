<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = DB::table('animals')->paginate(10); // Fetch all animals
        return view('animals.index', compact('animals'));
    }


    public function create()
    {
        return view('animals.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'species'=>'required|string',
            'age'=>'required|integer',
        ]);

        //create a new animal record
        DB::table('animals')->insert([
            'name'=> $request->name,
            'species'=>$request->species,
            'age'=>$request->age,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect()->route('animals.index')->with('status','Animal created successfully!');
    }

    public function show($id){
        $animal = DB::table('animals')->where('id',$id)->first();

        //check if animals is there or not
        if(!$animal){
            return redirect()->route('animals.index')->with('error', 'Animal not found!');
        }

        return view('animals.show', compact('animal'));
    }

    public function edit($id)
    {
        $animal = DB::table('animals')->where('id',$id)->first();

        //checking
        if(!$animal){
            return redirect()->route('animals.index')->with('error', 'Animal not found!');
        }

        return view('animals.edit',compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|string',
            'species'=>'required|string',
            'age'=>'required|integer',
        ]);

        $animal = DB::table('animals')->where('id',$id)->first();

        if(!$animal){
            return redirect()->route('animals.update')->with('error', 'Animal not found!');
        }

        //udpate
        DB::table('animals')->where('id',$id)->update([
            'name'=>$request->name,
            'species'=>$request->species,
            'age'=>$request->age,
        ]);

        return redirect()->route('animals.index')->with('status','Animal Updated successfully!');
    }

    public function destroy($id)
    {
        $animal = DB::table('animals')->where('id',$id)->first();

        //check
        if(!$animal){
            return redirect()->route('animals.update')->with('error', 'Animal not found!');
        }

        DB::table('animals')->where('id',$id)->delete();

        return redirect()->route('animals.index')->with('status','Animal Deleted successfully!');
    }
}
