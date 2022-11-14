<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

}
