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
                            @if (session()->has('message'))
                                <div class="col-lg-12">
                                    <div class="alert bg-danger text-danger">
                                        {{ session('message') }}
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-12">
                                <h1>Изменение героя {{ $data->name }}</h1>
                            </div>
                            <div class="col-lg-12 refresh">
                                <div>
                                    <img src="{{ asset('img/persona/'. $data->img) }}">
                                </div>
                                <div>
                                    <form action="{{ route('uploadImagePerson', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="file" title="<i class='fa fa-upload fw'></i> выбрать" name="img"> <br>
                                        <button type="submit" class="material-btn b-primary b-width">
                                            <i class="fa fa-refresh fw"></i>изменить
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <form action="{{ route('updatePerson', ['id' =>  $data->id]) }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="anime_id">Из аниме (* не меняется)</label>
                                        <input type="text" disabled class="form-control" id="anime_id" name="anime_id" value="{{ $data->anime->name }}" placeholder="введите название аниме">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Краткое описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ $data->description }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Полное описание</label>
                                        <textarea class="form-control" id="text" name="text" >{{ $data->text }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="material-btn b-success b-width">
                                        <i class="fa fa-refresh fw"></i>изменить
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection