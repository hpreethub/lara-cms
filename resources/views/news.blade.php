@extends('layout_main')
@section('title')
    Craftpitch  | News
@endsection
@section('content')

    <div class="container mt-5">
        <h2 class="titles mt-5" id="news">News</h2>
        <div class="title-line-yellow"></div>
        <div class="row mt-2">
            <div class="col-md-12">


        @foreach($data as $b)
            <div class="mt-5 mb-3" data-aos="fade-up" data-aos-duration="1500"><strong>{{$b->name}}</strong></div>
            <div class="mb-4" data-aos="fade-up" data-aos-duration="2200">{{$b->meta_description}}</div>
                    <a href="{{route('story',$b->id)}}" class="btn btn-secondary btn-sm float-right" data-aos="flip-left" data-aos-duration="2500">Read More</a>
        @endforeach
            </div>
        </div>


        <div id="data_links" class="mt-5">
            {{$data->links()}}
        </div>
    </div>


@endsection
