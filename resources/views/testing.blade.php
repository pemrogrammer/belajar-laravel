@extends('layouts.main')



@section('main-content')

	@foreach($students as $student)
		<h1>
			Halo, 
			
			@if ($student === 'Egin')
				Pak
			@else
				Bro
			@endif
			
			{{ $student }}
		</h1>
	@endforeach



@endsection



@section('title', 'testing')
