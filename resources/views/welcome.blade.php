@extends('layouts.app')
@section('js', asset('js/pages/login.js'))
@section('title', 'Ajouter cellier')
@section('content')
<section class="login-page">

	<div style="width: 300px; height: 150px; background-color: #ccc; border: 1px solid #000;"></div>

	<form class="form" action="{{ route('login') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" placeholder="Votre email" required>
		</div>
		<div class="form-group">
			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
		</div>
		<div>
			<a href="{{ route('user.forgot') }}">Mot de passe oublié ?</a>
			<button type="submit" class="btn">Connexion</button>
		</div>

	</form>
	<div class="register-prompt">
		<p>Pas encore membre ?</p>
		<a href="{{ route('user.create') }}" class="btn">Enregistrement</a>

</section>
@endsection