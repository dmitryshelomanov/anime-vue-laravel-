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
                                <h1>измнение новости</h1>
                            </div>
                            <form action="{{ route('updateNewsPost', ['id' => $data->id]) }}" method="post">
                                {{ csrf_field() }}
                                @if (session()->has('message'))
                                    <div class="col-lg-12">
                                        <div class="alert bg-danger text-danger">
                                            {{ session('message') }}
                                        </div>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Краткое описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ $data->description }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="news">Полное описание</label>
                                        <textarea class="form-control" id="news" name="text" >{{ $data->text }}</textarea>
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
@endsection