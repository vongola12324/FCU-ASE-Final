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

#btns{
  padding-top: 25px;
}

#create_channel{
  width:400px;
  height:100px;
  position: absolute;
  top:50%;
  left:50%;
  margin:-100px 0 0 -200px;
}
</style>


@section('content')

<div id = btns>
@foreach ($channels as $channels)
  <a href="{{ route('message.chat') }}/{{ $channels->id }}" class ="button"> {{ $channels->name }} </a>
@endforeach

</div>

<div id="create_channel">
  <form name="channel_create" action="{{ route('message.createChannel' )}}">
      <input name="usermsg" type="text" id="usermsg" size="20" />
      <input name="submit" type="submit"  id="submitmsg" value="新增頻道" />
  </form>
</div>
@endsection
