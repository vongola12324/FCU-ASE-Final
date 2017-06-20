<?php

namespace App\Http\Controllers;

use App\Message;
use DB;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        // $msg = DB::table('messages')->where('id','=',16)->get();
        // $msg = DB::table('messages')->get();

        // select users.name,messages.content from users,messages where users.id=messages.profile_id
        $msg = DB::table('users')
            ->join('messages', 'users.id', '=', 'messages.profile_id')
            ->get();

        return view('message.index', compact('user', 'msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        Message::create([
            'profile_id' => $user->profile->id,
            'channel_id' => '1',
            'content'    => $request->input('usermsg'),
            'created_ip' => $request->getClientIp(),
        ]);

        return redirect()->route('message');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
