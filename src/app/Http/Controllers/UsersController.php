<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function create()
    {
        $newUser = [
            "name" => $this->request->name,
            "email" => $this->request->email,
            "password" =>  Hash::make($this->request->password),
        ];


        return User::create($newUser);
    }

    public function update()
    {
        User::where('id', $this->request->id)->update(['password' => Hash::make($this->request->password)]);

        return User::find($this->request->id);
    }

    public function destroy($id)
    {
        User::destroy($id);

        return User::find($id);
    }

}
