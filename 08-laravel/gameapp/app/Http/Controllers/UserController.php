<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use PDF;
use App\Exports\UserExport;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(20);
        return view('users.index')->with('users', $users);
    }

    public function create(){

    }


    public function store(UserRequest $request)
    {
        
    }

    public function show(User $user) {
        // dd($user->toArray());
        return view('users.show')->with('user', $user);
    }

    public function edit(User $user) {
        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user) {
        if($request->hasFile('photo')){
            if($request->hasFile('photo')){
                $photo = time().'.'.$request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
            }
        }else{
            $photo = $request->originphoto;
        }

        $user->document = $request->document;
        $user->fullname = $request->fullname;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->photo = $photo;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if($user->save()){
            return redirect('users')
                ->with('message', 'The user: '. $user->fullname .' was updated successfully');
        }
    }

    public function destroy(User $user) {
        if($user->delete()){
            return redirect('users')
                ->with('message', 'The user: '. $user->fullname .' was deleted successfully');
        }
    }

    public function pdf() {
        $users = User::all();
        $pdf = PDF::loadView('users.pdf', compact('users'));
        return $pdf->download('users.pdf');
    }

    public function excel() {
        return \Excel::download(new UserExport, 'allusers.xlsx');
    }
}