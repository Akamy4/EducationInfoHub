<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\TeacherEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function showEducationForm()
    {
        return view('education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'year_of_admission' => 'required|integer',
            'year_of_ending' => 'required|integer',
            'speciality' => 'required|string|max:255',
        ]);

        $education = new Education();
        $education->name = $request->input('title');
        $education->address = $request->input('address');
        $education->year_of_admission = $request->input('year_of_admission');
        $education->year_of_ending = $request->input('year_of_ending');
        $education->speciality = $request->input('speciality');
        $education->saveOrFail();

        $model = new TeacherEducation();
        $model->user_id = Auth::id();
        $model->education_id = $education->id;
        $model->saveOrFail();

        return redirect()->route('education')->with('success', 'Обзразование успешно добавлено!');
    }
}
