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
                            <form action="{{ route('addNew') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-lg-12">
                                    <h1>Добавление новости</h1>
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
                                            Новость добавлена! <a href="/admin/search?search={{ old('name') }}">{{ old('name') }}</a>
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
                                        <label for="personName">Название</label>
                                        <input type="text" class="form-control" id="personName" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Краткое описание</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="news">Полное описание</label>
                                        <textarea class="form-control" id="news" name="text" >{{ old('text') }}</textarea>
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
@endsection