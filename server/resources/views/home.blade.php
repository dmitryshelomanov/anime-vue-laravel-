@extends('loyauts.app')
@section('content')
    <div class="wrapper clearfix">
        @include('common.menu')
        <div class="content">
            <header class="clearfix">
                @include('common.header')
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="info">
                           Добро пожаловать в панель управления
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info">
                            Актиных пользователей 22
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info clearfix">
                            <span class="pull-left">Пользователей</span>
                            <img src="{{ asset('img/users.png') }}" class="pull-right">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info clearfix">
                            <span class="pull-left">Тем на форуме 0</span>
                            <img src="{{ asset('img/forum.png') }}" class="pull-right">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info clearfix">
                            <span class="pull-left">Аудио 0</span>
                            <img src="{{ asset('img/audio.png') }}" class="pull-right">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info clearfix">
                            <span class="pull-left">Картинок в галлерее 0</span>
                            <img src="{{ asset('img/images.jpg') }}" class="pull-right">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info clearfix">
                            <span class="pull-left">Томов манги 0</span>
                            <img src="{{ asset('img/book.png') }}" class="pull-right">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info clearfix">
                            <span class="pull-left">Место на диске 10/100</span>
                            <img src="{{ asset('img/memory.png') }}" class="pull-right">
                        </div>
                    </div>
                    @if (session()->has('deleted'))
                        <div class="col-lg-12">
                            <div class="bg-success text-success alert">
                                Удалено
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection