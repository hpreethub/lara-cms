@extends('layout')
@section('title')
    Add Category
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Create a New Category
        </div>
        <div class="card-body">
            <form class="form-inline" method="POST" action="{{route('cat.store')}}" enctype="multipart/form-data">
                @csrf


                    <!-- Text input-->

                        <label class="sr-only" for="textinput">Name</label>

                            <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md mr-sm-2" required>






                    <!-- Textarea -->

                        <label class="sr-only" for="image">Upload Category Image</label>

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
            @if(isset($data)&&!empty($data))
                @foreach($data as $d)
                    <div class="col-md-2 p-3">
                        <div class="row">
                            <img src="/gallery/{{$d->image}}" alt="" class="img-fluid">
                        </div>
                        <div class="row">
                            <div class="col bg-warning font-weight-bold text-center p-2" style="color: #000">{{$d->name}}</div>
                        </div>
                        <div class="row">
                            <div class="col bg-primary "><a href="{{route('image.create',$d->id)}}" class="text-white">Images</a></div>
                            <div class="col bg-secondary"><a href="{{route('cat.edit',$d->id)}}" class="text-white">Edit</a></div>
                            <div class="col bg-danger">
                                <form action="{{route('cat.destroy',$d->id) }}" method="post">
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
