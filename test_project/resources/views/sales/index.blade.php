@extends('products.layout')

@section('content')

<!--
@php
global $total;
foreach($products as $product){
  $str=$product->name;
  $str=substr($str, 0, strrpos($str, ' '));
    if (isset($_GET[$str])||isset($_GET[$product->name])){
      $total+=$product->price;
    }
}
@endphp
-->
<div  id="subtitle">
<h1>Welcome to Adamant Dessert!</h1>
</div>
@if($total>0){
<div  id="total">
<h1>It´ll cost {{$total}}$</h1>
</div>
}
@endif
<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Buy</th>
        </tr>
    </thead>
@foreach($products as $product)
<form action="{{ route('sales.index') }}" method="GET">
  @csrf
    <tbody>
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
            <input type="decimal" value={{$product->price}}>
            </td>
            <td><input type="checkbox"  value="{{ csrf_token() }}" name={{$product->name}}></td>
        </tr>

@endforeach
{!! $products->links() !!}
    </tbody>
</table>
<div>
  <a href="" class="btn btn-3">
    <input type="submit" class="btn btn-3" value="Buy!!">
    <input class="round"><i class="fa fa-chevron-right"></i></span>
  </a>
</div>

</form>
<div class="type-1">
  <div>
    <a href="{{ route('products.index') }}" class="btn btn-1">
      <span class="txt">Return</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
</div>
<br>
