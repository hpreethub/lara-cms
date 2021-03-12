@extends('layout')
@section('title')
Register - Super Admin
@endsection
@section('sidebar')
@include('superadmin.sidebar')
@endsection
@section('content')
<table class="table table-striped table-bordered">
<tr>
<th>S.No.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Role</th>
<th>Edit</th>

</tr>
<?php $i=1;?>
@foreach ($users as $user)

<tr>
    <td><?=$i?></td>
    <td>{{$user['firstname']}}</td>
    <td>{{$user['lastname']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['role']}}</td>
    <td><a href="{{url('/superadmin/users/edit/')}}/{{$user['id']}}">Edit</a></td>
    
</tr>
<?php $i++; ?>

@endforeach
</table>
@endsection