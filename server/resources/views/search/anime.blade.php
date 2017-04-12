@extends('loyauts.app')
@section('content')
    <div class="wrapper clearfix">
        @include('common.menu')
        <div class="content">
            <header>
                @include('common.header')
            </header>
            <div class="container-fluid">
                @if (session()->has('message'))
                    <div class="col-lg-12">
                        <div class="alert bg-danger text-danger">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="data clearfix">
                        <div class="col-lg-12">
                            <h1>Результаты по видео</h1>
                            <hr>
                        </div>
                        @if (count($data['video']) === 0)
                            <div class="col-lg-12">
                                <div class="alert bg-danger text-danger">
                                    по запросу "{{ $search }}" видео не найдено
                                </div>
                            </div>
                        @endif
                        @foreach($data['video'] as $item)
                            <div class="col-lg-4 col-sm-4 col-md-4">
                                <div class="search">
                                    <img src="{{ asset('img/anime/' . $item->img) }}" alt="">
                                    <div class="name">
                                        {{ $item->name }}
                                    </div>
                                    <div class="action">
                                        <form action="{{ route('deleteAnime', ['id' =>  $item->id]) }}" method="post" class="pull-left">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <button class="material-btn b-danger">
                                                <i class="fa fa-trash fw"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('refactoreAnimePost', ['id' =>  $item->id]) }}" class="pull-right" method="get">
                                            <button class="material-btn bg-primary">
                                                <i class="fa fa-refresh fw"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-12">
                            <h1>Результаты по героям</h1>
                            <hr>
                        </div>
                        @if (count($data['person']) === 0)
                            <div class="col-lg-12">
                                <div class="alert bg-danger text-danger">
                                    по запросу "{{ $search }}" герои не найдены
                                </div>
                            </div>
                        @endif
                            @foreach($data['person'] as $item)
                                <div class="col-lg-4 col-sm-4 col-md-4">
                                    <div class="search">
                                        <img src="{{ asset('img/persona/' . $item->img) }}" alt="">
                                        <div class="name">
                                            {{ $item->name }}
                                        </div>
                                        <div class="action">
                                            <form action="{{ route('deletePerson', ['id' =>  $item->id]) }}" method="post" class="pull-left">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }}
                                                <button class="material-btn b-danger">
                                                    <i class="fa fa-trash fw"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('updatePerson', ['id' =>  $item->id]) }}" class="pull-right" method="get">
                                                <button class="material-btn bg-primary">
                                                    <i class="fa fa-refresh fw"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        <div class="col-lg-12">
                            <h1>Результаты по новостям</h1>
                            <hr>
                        </div>
                        @if (count($data['news']) === 0)
                            <div class="col-lg-12">
                                <div class="alert bg-danger text-danger">
                                    по запросу "{{ $search }}" новости не найдены
                                </div>
                            </div>
                        @endif
                        @foreach($data['news'] as $item)
                            <div class="col-lg-4 col-sm-4 col-md-4">
                                <div class="search">
                                    <img src="{{ asset('img/news/' . $item->img) }}" alt="">
                                    <div class="name">
                                        {{ $item->name }}
                                    </div>
                                    <div class="action">
                                        <form action="{{ route('deleteNews', ['id' =>  $item->id]) }}" method="post" class="pull-left">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <button class="material-btn b-danger">
                                                <i class="fa fa-trash fw"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('updateNews', ['id' =>  $item->id]) }}" class="pull-right" method="get">
                                            <button class="material-btn bg-primary">
                                                <i class="fa fa-refresh fw"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection