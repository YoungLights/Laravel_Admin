@extends('layouts.auth')

@section('content')
	<img src="{{asset('img/logo/yl-logo-blue.png')}}">
	<form class="form" method="POST" action="{{$action}}">
		@csrf
		@if (Route::is('register'))
			<div class="form-item">
				<label><i class="fa-solid fa-user"></i>Username</label>
				<input type="text" name="username" @error('username') placeholder="{{$message}}" @enderror value="{{old('username')}}">
			</div>
		@endif
		<div class="form-item">
			<label><i class="fa-solid fa-envelope"></i>Email</label>
			<input type="text" name="email" @error('email') placeholder="{{$message}}" @enderror>
		</div>
		<div class="form-item">
			<label><i class="fa-solid fa-lock"></i>Password</label>
			<input type="password" name="password" @error('password') placeholder="{{$message}}" @enderror>
		</div>
		<div class="form-item">
			<button>Login</button>
		</div>
	</form>
@endsection
