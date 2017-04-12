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
                            <form action="{{ route('addAnimePost') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-lg-12">
                                    <h1>Добавление видео</h1>
                                </div>
                                @if (session()->has('message'))
                                    <div class="col-lg-12">
                                        <div class="alert bg-danger text-danger">
                                            {{ session('message') }}
                                        </div>
                                    </div>
                                @endif
                                @if (session()->has('success'))
                                    <div class="col-lg-12">
                                        <div class="alert bg-success text-success">
                                            Видео добавленно ! <a href="/admin/search?search={{ old('name') }}">{{ old('name') }}</a>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-lg-12">
                                    <div>
                                        <input type="file" title="<i class='fa fa-upload fw'></i> выбрать" name="img">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="animeName">Название</label>
                                        <input type="text" class="form-control" id="animeName" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Краткое описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Полное описание</label>
                                        <textarea class="form-control" id="text" name="text" >{{ old('text') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Тип</label>
                                        <select name="type" id="type" class="form-control">
                                            @foreach($type->subMenu as $sub)
                                                <option value="{{ $sub->name }}">{{ $sub->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="genre">Жанр</label>
                                        <select name="genre" id="genre" class="form-control">
                                            @foreach($genre->subMenu as $sub)
                                                <option value="{{ $sub->name }}">{{ $sub->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Год</label>
                                        <select name="year" id="yaer" class="form-control">
                                            @foreach($year->subMenu as $sub)
                                                <option value="{{ $sub->name }}">{{ $sub->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="series_all">Всего серий</label>
                                        <input type="number" class="form-control" id="series_all" name="series_all" value="{{ old('series_all') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="time_series">Длительность одной серии (мин)</label>
                                        <input type="number" class="form-control" id="time_series" name="time_series" value="{{ old('time_series') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="material-btn b-success b-width">
                                        <i class="fa fa-plus fw"></i>добавить
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="changeAnime">
        <div class="changeAnime-inner">
            <span class="close" id="closeChange">&times;</span>
            <h2>Выберите аниме</h2>
            <div>*если есть совпадения то проверте, вдруг это аниме уже добавлено</div>
            <ul id="changeAnime">
            </ul>
        </div>
    </div>
@endsection