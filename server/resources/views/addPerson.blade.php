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
                            <form action="{{ route('addPerson') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-lg-12">
                                    <h1>Добавление героя</h1>
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
                                            Герой добавлен ! <a href="/admin/search?search={{ old('name') }}">{{ old('name') }}</a>
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
                                        <label for="personName">Имя</label>
                                        <input type="text" class="form-control" id="personName" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Краткое описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="anime_id">id Аниме</label>
                                        <input type="text" class="form-control" id="anime_id" name="anime_id" value="{{ old('anime_id') }}" placeholder="введите название аниме">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Полное описание</label>
                                        <textarea class="form-control" id="text" name="text" >{{ old('text') }}</textarea>
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
        <div class="changeAnime">
            <div class="changeAnime-inner">
                <span class="close" id="closeChange">&times;</span>
                <ul id="changeAnime">
                </ul>
            </div>
        </div>
    </div>
@endsection