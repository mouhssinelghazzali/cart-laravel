@extends('layouts.app')

@section('content')
<div class="container">

    <section>
        <div class="row">
        @foreach($products  as $product)
        <div class="col-md-4">
                <div class="card mb-2" >
                <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$product->title}}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p><strong> $ {{ $product->price }}</strong></p>
                          <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                </div>
        </div>

        @endforeach
        </div>

    </section>
</div>

@endsection
