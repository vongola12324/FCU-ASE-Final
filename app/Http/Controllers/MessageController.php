<?php

namespace App\Http\Controllers;

use App\Message;
use DB;
use App\User;
use Illuminate\Http\Request;
use App\User;
use DB;

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

        $channels = DB::table('channels')->get();

        return view('message.index', compact('channels'));
    }
    /**
     * Show the view for chatroom according to channel number.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showChatroom($channel_id)
    {
      $user = auth()->user();

      // $msg = DB::table('messages')->where('id','=',16)->get();
      // $msg = DB::table('messages')->get();

      // select users.name,messages.content from users,messages where users.id=messages.profile_id
      $msg = DB::table('users')
          ->join('messages', 'users.id', '=', 'messages.profile_id')
          ->where('channel_id', '=', $channel_id)
          ->get();

      return view('message.chat', compact('user', 'msg','channel_id'));

    }

    /**
     * create new channel.
     *
     * @return \Illuminate\Http\Response
     */
    public function createChannel(Request $request)
    {

      DB::table('channels')->insert(
          [
          'name'    => $request->input('usermsg'),
          ]

      );
      $channels = DB::table('channels')->get();

      return view('message.index', compact('channels'));
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
            'profile_id' => $user->profile->id,
            'channel_id' => $request->input('channel_id'),
            'content'    => $request->input('usermsg'),
            'created_ip' => $request->getClientIp(),
        ]);

        $msg = DB::table('users')
            ->join('messages', 'users.id', '=', 'messages.profile_id')
            ->where('channel_id', '=', $request->input('channel_id'))
            ->get();
        $channel_id = $request->input('channel_id');

        return view('message.chat', compact('user', 'msg','channel_id'));
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
