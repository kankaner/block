@extends('_layout')

@section('content')
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5 {{$key}}</div>
				<div class="title">{{ $path }}</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
@endsection
