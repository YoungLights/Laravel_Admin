@extends('layouts.main')

@section('content')
	<h2>Dashboard</h2>
	<form action="logout" method="post">
		@csrf
		<button>logout</button>
	</form>
@endsection