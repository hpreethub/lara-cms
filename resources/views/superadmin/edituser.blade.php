@extends('layout')
@section('title')
Register - Super Admin
@endsection
@section('sidebar')
@include('superadmin.sidebar')
@endsection
@section('content')
<?php foreach($usr as $ur){
    $user=$ur;
    }?>

<form method="POST" action="{{url('/superadmin/users/edit/')}}/{{$user['id']}}" class="mt-5">
{{method_field('PATCH')}}
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user['lastname'] }}" required autocomplete="firstname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Reset Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Multiple Radios -->
<div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right" for="radios">User Login</label>
  <div class="col-md-6">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="is_active" id="radios-0" value="1" <?=$user->is_active==1?"checked":"" ?>>
      Enabled
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="is_active" id="radios-1" value="0" <?=$user->is_active==0?"checked":"" ?>>
      Disabled
    </label>
	</div>
  </div>
</div>


                        <div class="form-group row">
    <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

    <div class="col-md-6">
        <select name="role" class="form-control" >
        <option value="superadmin" <?=$user->role=="superadmin"? "selected":""; ?>>Super Admin</option>
            <option value="admin" <?=$user->role=="admin"? "selected":""; ?>>Admin</option>
        </select>
    </div>
</div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
@endsection
