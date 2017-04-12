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
                                <h1>Изменение {{ $anime->name }}</h1>
                            </div>
                            @if (session()->has('message'))
                                <div class="col-lg-12">
                                    <div class="alert bg-danger text-danger">
                                        {{ session('message') }}
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-12 refresh">
                                <div>
                                    <img src="{{ asset('img/anime/'. $anime->img) }}">
                                </div>
                                <div>
                                    <form action="{{ route('updateImgAnime', ['id' => $anime->id]) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="file" title="<i class='fa fa-upload fw'></i> выбрать" name="img"> <br>
                                        <button type="submit" class="material-btn b-primary b-width">
                                            <i class="fa fa-refresh fw"></i>изменить
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <form action="{{ route('refactoreAnimePost', ['id' => $anime->id]) }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $anime['name'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Краткое описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ $anime->description }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Полное описание</label>
                                        <textarea class="form-control" id="text" name="text" >{{ $anime->text }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Тип</label>
                                        <select name="type" id="type" class="form-control">
                                            @foreach($type->subMenu as $sub)
                                                <option value="{{ $sub->name }}" @if($anime->type == $sub->name) selected @endif>
                                                    {{ $sub->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="genre">Жанр</label>
                                        <select name="genre" id="genre" class="form-control">
                                            @foreach($genre->subMenu as $sub)
                                                <option value="{{ $sub->name }}" @if($anime->genre == $sub->name) selected @endif>
                                                    {{ $sub->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Год</label>
                                        <select name="year" id="yaer" class="form-control">
                                            @foreach($year->subMenu as $sub)
                                                <option value="{{ $sub->name }}" @if($anime->year == $sub->name) selected @endif>
                                                    {{ $sub->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="series_all">Всего серий</label>
                                        <input type="number" class="form-control" id="series_all" name="series_all" value="{{ $anime->series_all }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="time_series">Длительность одной серии (мин)</label>
                                        <input type="number" class="form-control" id="time_series" name="time_series" value="{{ $anime->time_series }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="material-btn b-danger b-width">
                                        <i class="fa fa-refresh fw"></i>сохранить
                                    </button>
                                </div>
                            </form>
                            <div class="col-lg-12">
                                <h1>Серии</h1>
                                <div>
                                    <form action="{{ route('addSeries', ['id' => $anime['id']])}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Ссылка</label>
                                                <input type="text" class="form-control" name="link">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="">Номер</label>
                                                <input type="number" class="form-control" name="series_number">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="">Добавить</label>
                                                <div>
                                                    <button type="submit" class="material-btn b-success">
                                                        <i class="fa fa-plus fw"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @if (count($anime->series) > 0)
                                @foreach($anime->series as $series)
                                        <div>
                                            <form action="{{ route('updateSeries', ['id' => $series->id])}}" method="post">
                                                {{ csrf_field() }}
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="">Ссылка</label>
                                                        <input type="text" class="form-control" name="link" value="{{ $series->link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="">Номер</label>
                                                        <input type="number" class="form-control" name="series_number" value="{{ $series->number }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="">Изменить</label>
                                                        <div>
                                                            <button type="submit" class="material-btn b-success">
                                                                <i class="fa fa-refresh fw"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="col-lg-2">
                                                <form action="{{ route('deleteSeries', ['id' => $series->id])}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <div class="form-group">
                                                        <label for="">Удалить</label>
                                                        <div>
                                                            <button type="submit" class="material-btn b-danger">
                                                                <i class="fa fa-trash fw"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection