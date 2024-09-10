@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">
    <div class="tranding-wrapper">
        <h2>Your Cart Products</h2><br>
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        @foreach ($products as $item)
        <div class="searched-item cart-list-divider">
          <div class="row searched-item">
            <div class="col-sm-3">
                <a href="detail/{{ $item->id }}">
                    <img class="trending-image" src="{{ $item->gallery }}" >
                    </a>
            </div>

            <div class="col-sm-3">
               <div class="">
                        <h2>{{ $item->name }}</h2>
                        <h5>{{ $item->description }}</h5>
                      </div>
                 
            </div>

            <div class="col-sm-3">
                <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove Product</a>
            </div>

          </div>
        </div>
        @endforeach
        </div>
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>

</div>  
</div>
@endsection