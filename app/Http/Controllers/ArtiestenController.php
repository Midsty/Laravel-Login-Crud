<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artiest;
use Illuminate\Support\Facades\Validator;

class ArtiestenController extends Controller
{
    public function index()
    {
        return view('artiest.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naam' => 'requirerd|max:191',
            'label' => 'requirerd|max:191',
            'video' => 'requirerd|max:191',
            'afbeelding' => 'requirerd|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } 
        else {
            $artiest = new Artiest; 
            $artiest->naam = $request->input('naam');
            $artiest->label = $request->input('label');

            if($request->hasFile('afbeelding'))
            {
                $file = $request->file('afbeelding');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' .$extension;
                $file->move('uploads/artiest/',$filename);
                $artiest->afbeelding = $filename;
            }
            $artiest->save();

            return response()->json([
                'status' => 200,
                'message' =>'De afbeelding is verstuurd'
            ]);
        }
    }
}
