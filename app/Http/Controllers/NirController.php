<?php

namespace App\Http\Controllers;

use App\Models\Nir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NirController extends Controller
{
    public function showNirForm()
    {
        return view('nir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'file' => 'required',
        ]);

        $education = new Nir();
        $education->name = $request->input('title');
        $education->description = $request->input('description');
        $destinationPath = 'public/docs';
        $image           = $request->file('file');
        $imageName       = $image->getClientOriginalName();
        $path            = $request->file('file')->storeAs($destinationPath, $imageName);
        $education->file = $imageName;
        $education->user_id = Auth::id();
        $education->saveOrFail();

        return redirect()->route('nir')->with('success', 'НИР успешно добавлено!');
    }
}
