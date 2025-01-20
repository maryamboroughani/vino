@extends('layouts.app')
@section('js', asset('js/pages/purchase.js'))
@section('title', "Liste d'achat")
@section('content')
<section>
	<header data-js="header">
		<h2>Liste d'achat</h2>
	</header>
	<template id="alerte">
		<div class="alerte">
			<p>{{ session('erreur') }}</p>
			<button data-js-action="fermer">x</button>
		</div>
	</template>
	@forelse($purchases as $purchase)
	<article class="card_bottle" data-js-id="{{$purchase->id}}">
		<button data-js-action="supprimer">
			<svg enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<title>Icone de poubelle</title>
				<path d="M6,12v15c0,1.654,1.346,3,3,3h14c1.654,0,3-1.346,3-3V12H6z M12,25c0,0.552-0.448,1-1,1s-1-0.448-1-1v-9  c0-0.552,0.448-1,1-1s1,0.448,1,1V25z M17,25c0,0.552-0.448,1-1,1s-1-0.448-1-1v-9c0-0.552,0.448-1,1-1s1,0.448,1,1V25z M22,25  c0,0.552-0.448,1-1,1s-1-0.448-1-1v-9c0-0.552,0.448-1,1-1s1,0.448,1,1V25z" id="XMLID_237_" />
				<path d="M27,6h-6V5c0-1.654-1.346-3-3-3h-4c-1.654,0-3,1.346-3,3v1H5C3.897,6,3,6.897,3,8v1c0,0.552,0.448,1,1,1h24  c0.552,0,1-0.448,1-1V8C29,6.897,28.103,6,27,6z M13,5c0-0.551,0.449-1,1-1h4c0.551,0,1,0.449,1,1v1h-6V5z" id="XMLID_243_" />
			</svg>
		</button>
		<picture>
			<img src="{{$purchase->bottle->image_url}}" alt="">
		</picture>
		<section>
			<header>
				<p class="card_purchase__metainfo">{{$purchase->bottle->type}}</p>
				<h3>{{$purchase->bottle->name}}</h3>
				<p class="card_purchase__metainfo">{{$purchase->bottle->volume}} ml | {{$purchase->bottle->country}}</p>
			</header>
			<div>
				<p>$ {{$purchase->bottle->price}}</p>
				<div class="card_purchase__actions">
					<button data-js-action = "reduire">-</button>
					<span data-js-quantite = "quantite">{{$purchase->quantity}}</span>
					<button data-js-action = "augmenter">Ajouter</button>
				</div>
			</div>
		</section>
	</article>
	@empty
	<p>Aucune bouteille à acheter</p>
	@endforelse
</section>
@endsection