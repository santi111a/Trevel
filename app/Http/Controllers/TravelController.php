<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;


class TravelController extends Controller
{
    public function index(){
        $travels = Travel::all();
        return view('travels.index', ['travels' => $travels]);
    }
        public function create(){
            return view('travels.create');
            }
            public function store(Request $request){
                $data = $request->validate([
                    'name' => 'required',
                    'date' => 'required|date',
                    'days' => 'required|numeric',
                    'description' => 'nullable'
                ]);
            
                Travel::create($data);
            
                return redirect(route('travel.index'));
            }
            
            public function edit(Travel $travel){
                return view('travels.edit', ['travel' => $travel]);
            }

            public function update(Travel $travel, Request $request){
                $data = $request->validate([
                    'name' => 'required',
                    'date' => 'required|date',
                    'days' => 'required|numeric',
                    'description' => 'nullable'
                ]);

            $travel->update($data);

                return redirect(route('travel.index'))->with('success', 'destination Update Successfully');
            }  
            public function destroy(Travel $travel){
                $travel->delete();
                return redirect(route('travel.index'))->with('success', 'destination Deleted Succesfully');
            }
}   