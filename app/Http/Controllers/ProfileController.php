<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function show(int $id)
    {
        $user = User::find($id);
        return view('profile.show', ['user' => $user]);
    }

    public function index(Request $request)
    {
        $users = User::query()
            ->when(
                $request->input('title'),
                fn(Builder $query) => $query->where('name', 'like', '%' . $request->input('title') . '%')
            )
            ->when(
                $request->input('department_id'),
                fn(Builder $query) => $query->where('department_id', $request->input('department_id'))
            )
            ->orderByDesc('id')
            ->paginate(5);


        return view('welcome', ['users' => $users]);
    }

    public function showProfileUpdateForm()
    {
        $user        = User::find(Auth::id());
        $positions   = Position::all();
        $departments = Department::all();
        return view('profile.update', ['user' => $user, 'positions' => $positions, 'departments' => $departments]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'department_id' => ['required', 'integer', 'exists:departments,id'],
            'position_id' => ['required', 'integer', 'exists:positions,id'],
            'image' => ['nullable'],
        ]);

        $user                = User::find(Auth::id());
        $user->name          = $request->input('name');
        $user->email         = $request->input('email');
        $user->department_id = $request->input('department_id');
        $user->password      = Hash::make($request->input('password'));
        $user->position_id   = $request->input('position_id');
        $destinationPath     = 'public/images';
        $image               = $request->file('image');
        $imageName           = $image ? $image->getClientOriginalName() : $user->image;
        $path                =
            $request->file('image') ? $request->file('image')->storeAs($destinationPath, $imageName) : null;
        $user->image         = $imageName;
        $user->update();
        return redirect()->route('profile.show', ['id' => Auth::id()])->with('success', 'НИР успешно добавлено!');
    }

    public function delete()
    {
        $user = User::find(Auth::id());
        $user->delete();
        return redirect()->route('profile.index');
    }
}
