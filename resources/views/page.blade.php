@extends('layout_main')
@section('title')
    Craftpitch  | {{$data->name}}
@endsection
@section('content')

    <div class="container pt-3" data-aos="fade-up" data-aos-duration="2500">
        {!! $data->content !!}
    </div>

@endsection
