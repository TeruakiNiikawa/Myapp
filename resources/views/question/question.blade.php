@extends('layouts.layout')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'question')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お問い合わせ画面</h2>
                <h3>Welcome</h3></h3>
            </div>
            <form action="{{action('QuestionController@show')}}" method="post">

<input type="text" name="name">

<input type="text" name="email">

<textarea name="message"></textarea>

<input type="submit" value="Confirm">
</form>
        </div>
    </div>
@endsection