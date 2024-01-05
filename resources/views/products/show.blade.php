@extends('layouts.main')

@section('container')
<style>


  
    .img-product {
        max-width: 100%;
        height: auto;
        border-radius: 5px; /* Adjust the border radius as needed */
        
    }
  
   
  </style>

<section class="content">
    <div class="product">
    <img class="img-product" src="{{ asset('storage/' . $products->gambar) }}" > 
    <h1>{{ $products->nama }}</h1>
    <p>{{ $products->deskripsi }}</p>
    <p>Price: {{ $products->harga }}</p>

        @if(auth()->check() && !auth()->user()->hasPurchased($products))
            <form method="post" action="{{ route('product.purchase', ['productId' => $products->id]) }}">
                @csrf
                <button type="submit">Purchase</button>
            </form>
        @else
            <p>You have already purchased this product.</p>
        @endif
</div>
</section>


@endsection