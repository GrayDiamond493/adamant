
@extends('products.layout')

@section('content')
<div  id="subtitle">
<h1>Welcome to Adamant Dessert!</h1>
</div>

<div class="type-1">
  <div>
    <a href="https://www.instagram.com/adamant_dessert/" class="btn btn-ig">
      <span class="txt">Follow our Instagram</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>

  </div>
  <br>
  <div>
    <a href="{{ route('usr.index') }}" class="btn btn-sign">
      <span class="txt">Sign Up</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
  <br>
  <div>
    <a href="{{ route('log.index') }}" class="btn btn-login">
      <span class="txt">Log In</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
  <br>
  <div>
    <a href="{{ route('products.show',1) }}" class="btn btn-3">
      <span class="txt">Our Products</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
</div>




  <!--
<div id="order">
<p><a href="{{ route('products.create') }}">Make an order</a></p>
</div>

</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
-->
@endsection
