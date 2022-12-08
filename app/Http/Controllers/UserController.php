<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(User::with(['areas'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'surname' => 'string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',
            'phone' => 'required|string',
        ]);
        $user = User::create([
            'lastname' => $fields['lastname'],
            'firstname' => $fields['firstname'],
            'surname' => $fields['surname'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'phone' => $fields['phone'],
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (! Gate::allows('update-user', $id)) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response, 403);
        }

        $user = User::find($id);
        if (!$user)
        {
            $response = [
                'message' => 'User not found',
            ];
            return response($response,403);
        }
        $fields = $request->validate([
            'lastname' => 'string',
            'firstname' => 'string',
            'surname' => 'string',
            'phone' => 'string',
//            'email' => 'string|unique:users,email',
//            'password' => 'string',
        ]);
        $user->lastname = $fields['lastname'];
        $user->firstname = $fields['firstname'];
        $user->surname = $fields['surname'];
        $user->phone = $fields['phone'];
        if ($request->post('password')){
            array_push($fields, $request->validate(['password' => 'string']));
            $user->password = $request->post('password');
        }
        if ($request->post('email') != $user->email){
            array_push($fields, $request->validate(['email' => 'string|unique:users,email']));
            $user->email = $request->post('email');
        }
        $user->save();
//        $user->update($request->all([
//            'lastname' => $fields['lastname'],
//            'firstname' => $fields['firstname'],
//            'surname' => $fields['surname'],
////            'email' => $fields['email'],
//            'password' => bcrypt($fields['password']),
//            'phone' => $fields['phone'],
//        ]));

        return response(['user' => $user]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('delete-user')) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response,403);
        }
//        $user = User::find($id);
//        $id_areas = $user->areas();
//        $user->areas()->detouch();
//        var_dump($id_areas[0]);
        return response(User::destroy($id));
    }

    /**
     * Get areas by User
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function areas_by_user($id)
    {
        if (!User::find($id))
        {
            return response([]);
        }
        return User::find($id)->areas()->get();
    }

    /**
     * Get areas by User
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_area($id_user, $id_area)
    {
        $user = User::find($id_user);
        if (!$user)
        {
            return response([]);
        }
        return $user->add_area($id_area);
    }

    public function delete_area($id_user, $id_area)
    {
        $user = User::find($id_user);
        if (!$user)
        {
            return response([]);
        }
        return $user->delete_area($id_area);
    }

    public function add_areas($id_user, Request $request)
    {
        $user = User::find($id_user);
        if (!$user)
        {
            return response([]);
        }
        if ($request->post('id_areas') != '') {
            $id_areas = explode(',', $request->post('id_areas'));
            return $user->add_areas($id_areas);
        }
        else return $user->add_areas();
    }

    public function delete_areas($id_user, Request $request)
    {
        $user = User::find($id_user);
        if (!$user)
        {
            return response([]);
        }
        $id_areas = explode(',',$request->post('id_areas'));
        return $user->delete_areas($id_areas);
    }

}
