@extends('master')
@section("content")

<div class="custom-product">

    <div class="trending-wrapper">
        <h3>Mobile Products</h3>
        @foreach($mob as $item)
        <div class="trening-item">
          <a href="detail/{{$item->id}}">
          <img class="trending-image" src="{{$item->gallery}}">
          <div class="">
            <h3>{{$item->name}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>

</div>

@endsection
