@extends('layout')
@section('title')
    Edit Category
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Edit Category
        </div>
        <div class="card-body">
            <h6>* Leave image blank if you donot want to update image</h6>
            <form class="form-inline" method="POST" action="{{route('cat.update',$data->id)}}" enctype="multipart/form-data">
            @csrf
                @method('PATCH')


            <!-- Text input-->

                <label class="sr-only" for="textinput">Name</label>

                <input id="textinput" name="name" type="text" value="{{$data->name}}" class="form-control input-md mr-sm-2" required>






                <!-- Textarea -->

                <label class="sr-only" for="image">Upload Category Image</label>

                <input type="file" name="image" class="form-control mr-sm-2">



                <!-- Button -->

                <label class="sr-only" for="singlebutton"></label>

                <button id="singlebutton" name="submit" class="btn btn-primary mr-sm-2">Save</button>




            </form>
        </div>
    </div>




@endsection
