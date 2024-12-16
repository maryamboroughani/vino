@extends('layouts.app')
@section('title', 'Celliers')
@section('content')
<section>
	<header>
		<h2>Celliers</h2>
	</header>
	@foreach($cellars as $cellar)
	<article class="cellar">
		<p>{{$cellar->name}}</p>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
			<path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
		</svg>
	</article>
	@endforeach
</section>
@endsection