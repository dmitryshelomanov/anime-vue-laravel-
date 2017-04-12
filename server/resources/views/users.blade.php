@extends('loyauts.app')
@section('content')
    <div class="wrapper clearfix">
        @include('common.menu')
        <div class="content">
            <header>
                @include('common.header')
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="data clearfix">
                            <div class="col-lg-12">
                                <h1>Пользователи</h1>
                            </div>
                            @foreach($users as $user)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="user-block clearfix">
                                        <form action="{{ route('dropUser', ['id' => $user->id]) }}" class="text-right" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="close">
                                                <span>&times;</span>
                                            </button>
                                        </form>
                                        <img src="/img/users/{{ $user->img }}">
                                        {{ $user->name }} / {{ $user->login }}
                                        @if (Auth::user()->role === $user->role && Auth::user()->id === $user->id)
                                            <div class="help">Это вы. Не вздумайте понизить :)</div>
                                        @endif
                                        <div class="role clearfix">
                                            @if ($user->role === 0)
                                                <div class="col-lg-12">
                                                    <div class="role-info">простой</div>
                                                    <form action="{{ route('upgradeToAdmin', ['id' => $user->id]) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <button class="material-btn b-success">
                                                           <i class="fa fa-chevron-up"></i> повысить до админа
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('upgradeToEditor', ['id' => $user->id]) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <button class="material-btn b-success">
                                                           <i class="fa fa-chevron-up"></i> повысить до редактора
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif
                                            @if ($user->role === 1)
                                                    <div class="role-info">редактор</div>
                                                <form action="{{ route('lowerToDeath', ['id' => $user->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <button class="material-btn b-default">
                                                       <i class="fa fa-chevron-down"></i> понизить до смертного
                                                    </button>
                                                </form>
                                                <form action="{{ route('upgradeToAdmin', ['id' => $user->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <button class="material-btn b-default">
                                                       <i class="fa fa-chevron-up"></i> повысить до админа
                                                    </button>
                                                </form>
                                            @endif
                                            @if ($user->role === 2)
                                                <div class="role-info">админ</div>
                                                <form action="{{ route('lowerToDeath', ['id' => $user->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <button class="material-btn b-warning">
                                                        <i class="fa fa-chevron-down"></i> понизить до смертного
                                                    </button>
                                                </form>
                                                <form action="{{ route('lowerToEditor', ['id' => $user->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <button class="material-btn b-warning">
                                                        <i class="fa fa-chevron-down"></i> понизить до редактора
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-12 page text-center">
                                @if ($users->previousPageUrl())
                                    <a href="{{ route('users') }}?page={{ $users->previousPageUrl() }}">
                                        <i class="fa fa-chevron-circle-left fa-2x"></i>
                                    </a>
                                @endif
                                @if ($users->nextPageUrl())
                                    <a href="{{ route('users') }}?page={{ $users->nextPageUrl() }}">
                                        <i class="fa fa-chevron-circle-right fa-2x"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection