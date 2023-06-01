<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreuserloginRequest;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function Ramsey\Collection\Map\get;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreuserloginRequest $request)
    {
        $userName = $request->userName;
        $fatherName = $request->fatherName;
        $email = $request->email;
        $password = $request->password;

        $obj = new user();

        $obj->user_name = $userName;
        $obj->father_name = $fatherName;
        $obj->email = $email;
        $obj->password = bcrypt($password);

        echo

        $obj->save();

        return "you are well come to our site bro";
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

//         $var =  user::where('user_id', 4);
//
//         $var = $var->get();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkUser(Request $request)
    {
        $userPassword = User::select('password')->where('email', $request->email)->first();

        if ($userPassword && Hash::check($request->password, $userPassword->password)) {
            return "You are welcome to the checkuser method";
        } else {
            return "Failed to sign in";
        }




    }
}
