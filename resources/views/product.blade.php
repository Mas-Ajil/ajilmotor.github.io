@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="css/product.css"> 
@endsection

@section('container')
<section class="content">
@foreach ($products as $product)
    <div class="product">
      @if ($product->gambar)
        <img class="img-product" src="{{ asset('storage/' . $product->gambar) }}" > 
      @else
        <img src="{{ $product['gambar'] }}" alt="{{ $product['nama'] }}">
      @endif
      <h2>{{ $product['nama'] }}</h2>
      <p>{{ $product['deskripsi'] }}</p>
      <p>Harga: {{ $product['harga'] }}</p>
      <a href="{{ url('/products/' .$product->id) }}" class="beli-btn">Order</a>
    </div>
@endforeach
</section>

@endsection