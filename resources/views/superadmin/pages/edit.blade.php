@extends('layout')
@section('title')
    Edit Page
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Edit Page
        </div>
        <div class="card-body">
            @if(isset($data))
            <form class="form-horizontal" method="POST" action="{{route('superadmin.page.update',$data->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Page Title</label>
                        <div class="col-md-8">
                            <input required id="textinput" name="name" type="text" placeholder="Page Name" class="form-control input-md" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Page url *use - or _ for spaces</label>
                        <div class="col-md-8">
                            <input required id="textinput" name="url" type="text" placeholder="Page Name" class="form-control input-md" value="{{$data->url}}">
                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Page Content</label>
                        <div class="col-md-12">
                            <textarea required class="form-control summernote" id="myTextarea" name="content">{{$data->content}}</textarea>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Keywords</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="textarea" name="keywords">{{$data->keywords}}</textarea>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Meta Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="textarea2" name="meta_description">{{$data->meta_description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="active">Active</label>
                        <div class="col-md-8">
                            <select name="is_active" id="" class="form-control">
                                <option value="1" {{$data->is_active==1?"selected":""}}>Active</option>
                                <option value="0" {{$data->is_active==0?"selected":""}}>Disable</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>

                </fieldset>
            </form>
                @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({


                height:300,

            });
        });
    </script>
@endsection

