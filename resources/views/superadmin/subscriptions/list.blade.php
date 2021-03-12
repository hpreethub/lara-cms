@extends('layout')
@section('title')
    View All Subscriptions
@endsection
@section('sidebar')
    @include('superadmin.sidebar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            View All Subscriptions
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">


            @foreach($data as $d)
                <tr>
                    <td>{{$d->email}}</td>
                </tr>

            @endforeach
            </table>
        </div>
    </div>
    <div>
        {{$data->links()}}
    </div>

@endsection
