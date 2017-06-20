<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Message;
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
        $profile = auth()->user()->profile;
        $channels = Channel::all();

        return view('message.index', compact('channels'));
    }

    /**
     * Show the view for chatroom according to channel number.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function showChatroom($channel_id)
    {
        $user = auth()->user();
        $profile = $user->profile;
        $msg = Message::with('profile')->where('channel_id', '=', $channel_id)
            ->get()->sortBy('created_at');

        return view('message.chat', compact('profile', 'msg', 'channel_id'));
    }

    /**
     * create new channel.
     *
     * @return \Illuminate\Http\Response
     */
    public function createChannel(Request $request)
    {
        Channel::create([
            'name' => $request->input('usermsg'),
        ]);
        $channels = Channel::all();

        return view('message.index', compact('channels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = auth()->user()->profile;
        $m = Message::create([
            'profile_id' => $profile->id,
            'channel_id' => $request->input('channel_id'),
            'content'    => $request->input('usermsg'),
            'created_ip' => $request->getClientIp(),
        ]);

        return redirect('/message/chat/' . $request->input('channel_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
