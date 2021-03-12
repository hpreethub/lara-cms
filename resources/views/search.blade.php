@extends('layout_main')
@section('title')
    Craftpitch  | Search
@endsection
@section('content')

    <div class="container pt-3">

    @if(isset($data['page'][0])&&!empty($data['page']))
        <h4 style="border-bottom: 1px solid #ccc" class="my-3">Show Results from following Pages</h4>
            @foreach($data['page'] as $d)
                <div class="mt-4">
                    <a href="{{url($d->url)}}">{{$d->name}}</a>
                </div>
            @endforeach
    @else
        <h4>No Page found with your search</h4>
    @endif

    @if(isset($data['news'][0])&&!empty($data['news']))
            <h4 style="border-bottom: 1px solid #ccc" class="my-3">Show Results from following News</h4>
        @foreach($data['news'] as $n)
            <div class="mt-4">
                <a href="{{url('/news/'.$n->id)}}">{{$n->name}}</a>
            </div>
        @endforeach
    @else
        <h4 class="my-5">No News found with your search</h4>
    @endif
    </div>

@endsection
