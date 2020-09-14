@extends('layouts.layout')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'match')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>match画面</h2>
                <h3>Welcome</h3></h3>
            </div>
            <button type="button">Hit Me</button>
        </div>
    </div>
@endsection