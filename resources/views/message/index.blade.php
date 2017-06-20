@extends('layouts.app')

@section('title', '聊天室')

@section('css')
    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        #btns {
            padding-top: 25px;
        }

        #create_channel {
            width: 400px;
            height: 100px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -100px 0 0 -200px;
        }

        form, p, span {
            margin: 0;
            padding: 0;
        }
    </style>

@endsection

@section('content')

    @if(isset($channels) and count($channels) > 0)
        <div id=btns class="text-center">
            <h2>選擇頻道：</h2>
            @foreach ($channels as $channel)
                <a href="{{ route('message.chat') }}/{{ $channel->id }}" class="btn btn-success"> {{ $channel->name }} </a>
            @endforeach
        </div>
    @else
        <h2 class="text-center">沒有存在的頻道...QQ</h2>
    @endif

    <div id="create_channel"  class="text-center">
        <h2>新增頻道：</h2>
        <form name="channel_create" action="{{ route('message.createChannel' )}}">
            <input name="usermsg" type="text" id="usermsg" size="20"/>
            <input name="submit" type="submit" id="submitmsg" value="送出"/>
        </form>
    </div>
@endsection
