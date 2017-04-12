@extends('loyauts.app')
@section('content')
    @if (count($video) === 0)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="alert bg-danger text-warning">
                           На сайт еще не добавленно видео
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="block-info">
                            @include('common.menu')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('common.search')
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @foreach($video as $anime)
                        <div class="block-search clearfix">
                            <div class="col-lg-3">
                                <img src="{{ asset('img/anime/'. $anime->img) }}">
                            </div>
                            <div class="info clearfix col-lg-5">
                                <span>{{ $anime->name }}</span>
                                <span>#{{ $anime->id }}</span>
                            </div>
                            <div class="action col-lg-4">
                                <form action="{{ route('deleteAnime', ['id' => $anime->id]) }}" method="post">
                                    {!! method_field('delete') !!}
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash fw"></i>удалить
                                    </button>
                                </form>
                                <a href="{{ route('refactoreAnime', ['id' => $anime->id]) }}" class="btn btn-warning margin-top">
                                    <i class="fa fa-refresh fw"></i>изменить
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4">
                    <div class="block-info">
                        @include('common.menu')
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection