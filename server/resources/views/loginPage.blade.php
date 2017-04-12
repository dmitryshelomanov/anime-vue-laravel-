@extends('loyauts.app')
@section('content')
    <div class="wrapper">
        <form action="/login" method="post" class="logined">
            @if (session()->has('message'))
                <div class="bg-danger text-danger alert" style="padding: 20px">
                    У вас нету прав доступа !
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="bg-danger text-danger alert" style="padding: 20px">
                   Не верный логин или пароль !
                </div>
            @endif
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" id="login" name="login" placeholder="логин">
                <input type="text" id="password" name="password" placeholder="пароль">
                <button type="submit" class="material-btn b-default b-width">
                    <i class="fa fa-unlock fw"></i>войти
                </button>
        </form>
    </div>
@endsection


