@extends('products.layout')


@section('content')
<div  id="subtitle">
<h1>Our Products</h1>
</div>
<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
        </tr>
    </thead>
@foreach($products as $product)

    <tbody>
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
        </tr>
    </tbody>

@endforeach
</table>
    {!! $products->links() !!}
    <div class="type-1">
      <div>
        <a href="{{ route('products.index') }}" class="btn btn-1">
          <span class="txt">Return</span>
          <span class="round"><i class="fa fa-chevron-right"></i></span>
        </a>
      </div>
        <div>
          <a href="{{ route('usr.index') }}" class="btn btn-sign">
            <span class="txt">Sign In</span>
            <span class="round"><i class="fa fa-chevron-right"></i></span>
          </a>
        </div>
      <br>
      <div>
        <a href="{{ route('products.create') }}" class="btn btn-request">
          <span class="txt">Request</span>
          <span class="round"><i class="fa fa-chevron-right"></i></span>
        </a>
      </div>
    </div>
@endsection
