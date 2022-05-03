@extends('layouts.auth')

@section('form')
	<form class="form" method="POST" action="{{$action}}">
		@csrf
		<header class="auth-header"><i class="fa-solid fa-pencil"></i><h4>{{$title}}</h4></header>
		@if (Route::is('register'))
			<x-form-item name="username" text="Username" icon="fa-solid fa-user"></x-form-item>
		@endif
		<x-form-item name="email" text="E-Mail" icon="fa-envelope"></x-form-item>
		<x-form-item type="password" name="password" text="Passwort" icon="fa-lock"></x-form-item>
		<button class="form-submit" type="submit">jetzt einloggen</button>
	</form>
@endsection
