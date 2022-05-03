@props(['type' => false,'name','text','icon'])

<div class="form-item">
	<label for="{{$name}}"><i class="fa-solid {{$icon}}"></i>{{$text}}</label>
	@if ($type === 'password')
		<div class="form-item-password">
			<i class="fa-solid fa-eye-slash"></i>
			<input 
				@error($name) class="error" placeholder="{{$message}}" @enderror
				value="{{old($name)}}"
				type="password" name="{{$name}}">
		</div>
	@else
		<input 
			@error($name) class="error" placeholder="{{$message}}" @enderror 
			value="{{old($name)}}"
			type="text" name="{{$name}}">	
	@endif
</div>