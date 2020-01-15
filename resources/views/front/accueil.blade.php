@extends('layouts.master')

@section('content')
@foreach($products as $product)
<div>
<a href="{{route('produit', $product->id)}}">{{$product->title}}</a>
<p>{{$product->price}} €</p>
</div>
@endforeach
@endsection

