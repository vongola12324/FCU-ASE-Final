@extends('layouts.app')

@section('title', '首頁')

@section('css')
    <style>
        .jumbotron {
            text-align: center;
            word-break: break-all;
            background: rgba(100, 100, 100, .6);
            margin-top: 20vh;
            margin-bottom: 0;
            padding-top: 40px;
            border-radius: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="jumbotron">
        <h1 class="display-1">{{ config('app.name') }}</h1>
        <h2 class="display-3">揪咪</h2>
        <a href="{{ route('message') }}" class="btn btn-primary btn-lg" style="margin-top: 5vh;" title="Let's GO!!">開始揪！</a>
    </div>

@endsection
