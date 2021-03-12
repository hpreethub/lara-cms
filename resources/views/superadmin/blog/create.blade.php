@extends('layout')
@section('title')
    Add News
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Create a New Story
        </div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{route('superadmin.blog.store')}}" enctype="multipart/form-data">
                @csrf
                <fieldset>

                <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Page Title</label>
                        <div class="col-md-8">
                            <input id="textinput" name="name" type="text" placeholder="Page Name" class="form-control input-md" required>
                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Page Content</label>
                        <div class="col-md-12">
                            <textarea class="form-control summernote" id="myTextarea" name="content" required></textarea>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Keywords</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="textarea" name="keywords"></textarea>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Meta Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="textarea2" name="meta_description" required></textarea>
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
