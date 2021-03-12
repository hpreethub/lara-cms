@extends('layout_main')
@section('title')
    Craftpitch  | News
@endsection
@section('keywords')
    {{$data->keywords}}
@endsection
@section('meta_description')
    {{$data->meta_description}}
@endsection
@section('content')

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/news')}}">News</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$data->name}}</li>
            </ol>
        </nav>
        <h2 class="titles mt-5" id="news">{{$data->name}}</h2>

        <div class="row mt-5">
            <div class="col-md-12">
            {!! $data->content !!}


            </div>
        </div>



    </div>


@endsection
