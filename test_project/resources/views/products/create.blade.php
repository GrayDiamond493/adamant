@extends('products.layout')

@section('content')

<div  id="subtitle">
<h1>Request New Products</h1>
</div>

<table class="styled-table">
  <thead>
      <tr>
          <th>Name</th>
          <th>Details</th>
          <th>Price</th>
          <th>Make Request</th>
      </tr>
  </thead>

<form action="{{ route('products.store') }}" method="POST">
    @csrf


    <tbody>
                  <tr>
                    <td><input type="text" name="name" style="height:150px"  class="form-control" placeholder="Name"></td>
                    <td><input type="text" name="detail" style="height:150px"  placeholder="Detail"></td>
                    <td><input type="decimal" name="price" style="height:150px" value=10.00 /></td>
                    <td>
                      <div>
                        <a href="" class="btn btn-request">
                          <button type="submit" class="btn btn-request">Request</button>
                          <span class="round"><i class="fa fa-chevron-right"></i></span>
                        </a>
                      </div>
                    </td>
                  </tr>
   </tbody>
</form>

</table>
<div class="type-1">
    <a href="{{ route('products.index') }}" class="btn btn-1">
      <span class="txt">Return</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
