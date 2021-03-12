@extends('layout')
@section('title')
    Super Admin
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            All Pages
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Status</th>
            </tr>

            @foreach($data as $p)
                <tr>
                    <td><a href="{{route('superadmin.page.edit',$p->id)}}">{{$p->name}}</a></td>
                    <td>{{$p->url}}</td>
                    <td>{{$p->is_active==1?"Active":"In active"}}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
