@extends('layouts.app')

@section('title', '聊天室')

@section('css')
    <style>
        /*form, p, span {*/
            /*margin: 0;*/
            /*padding: 0;*/
        /*}*/

        input {
            font-size: 0.5em;
        }

        form {
            padding-left: 84px;
        }

        a {
            color: #0000FF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        #wrapper, #loginform {
            margin: 35px auto;
            padding-bottom: 25px;
            background: #EBF4FB;
            width: 900px;
            height: 600px;
            border: 1px solid #ACD8F0;
        }

        #loginform {
            padding-top: 18px;
        }

        #loginform p {
            margin: 5px;
        }

        #chatbox {
            text-align: left;
            margin: 0 auto;
            margin-bottom: 25px;
            padding: 10px;
            background: #fff;
            height: 430px;
            width: 730px;
            border: 1px solid #ACD8F0;
            overflow: auto;
        }

        #usermsg {
            width: 660px;
            border: 1px solid #ACD8F0;
        }

        #submit {
            width: 60px;
        }

        .error {
            color: #ff0000;
        }

        #menu {
            padding: 12.5px 25px 12.5px 25px;
        }

        .welcome {
            float: left;
        }

        .logout {
            float: right;
        }

        .msgln {
            margin: 0 0 2px 0;
        }
    </style>

@endsection
@section('content')
    <div id="wrapper">
        <div id="menu">
            <p class="welcome">Welcome, {{ $profile->name }}<b></b></p>
            <p class="logout"><a id="exit" href="{{ route('message' )}}">Exit Chat</a></p>
            <div style="clear:both"></div>
        </div>

        <div id="chatbox">
            @foreach ($msg as $m)
                <p>{{ $m->name }} : {{$m->content}}</p>
            @endforeach

        </div>

        <form name="message" action="{{ route('message.sendmsg' )}}">
            <input name="usermsg" type="text" id="usermsg" size="63"/>
            <input name="channel_id" type="hidden" id="channel_id" value="{{ $channel_id }}"/>
            <input name="submitmsg" type="submit" id="submitmsg" value="Send"/>
        </form>
    </div>
@endsection

@section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js "></script>
    <script>
        // jQuery Document
        $(document).ready(function () {

        });

        $("#submitmsg").click(function () {
            var clientmsg = $("#usermsg").val();
            $("#usermsg").attr("value", "");
            return false;
        });
    </script>
@endsection
