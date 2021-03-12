@extends('layout')
@section('title')
    Add Images
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <a href="{{route('cat.create')}}" class="mb-4"><< back to all Categories</a>
    <div class="card">
        <div class="card-header">


            <h5>{{$data['cat_name']}}</h5>
        </div>
        <div class="card-body">
            <form class="form-inline" method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
            @csrf


            <!-- Text input-->
                <input type="hidden" name="cat_id" value="{{$data['cat_id']}}">

                <!-- Textarea -->

                <label class="sr-only" for="image">Upload Image</label>

                <input type="file" name="image" class="form-control mr-sm-2">



                <!-- Button -->

                <label class="sr-only" for="singlebutton"></label>

                <button id="singlebutton" name="submit" class="btn btn-primary mr-sm-2">Save</button>




            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                @if(isset($data['data'])&&!empty($data['data']))
                    @foreach($data['data'] as $d)
                        <div class="col-md-2 p-3">
                            <div class="row">
                                <img src="/gallery/{{$d->image}}" alt="" class="img-fluid">
                            </div>

                            <div class="row">
                               <div class="col bg-danger">
                                    <form action="{{route('image.destroy',$d->id) }}" method="post">
                                        <input class="bg-danger border-0" type="submit" value="Delete" />
                                        @method('delete')
                                        @csrf
                                    </form></div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3>No Category Found</h3>
                @endif
            </div>
        </div>
    </div>
@endsection
