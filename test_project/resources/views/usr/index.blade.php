@extends('usr.layout')

@section('content')
<body>
<div class="container">

<div id="subtitle">
<h1>Sign Up to make an order!!!</h1>
</div>
<div id="inputbox">
  <form action="{{ route('usr.store') }}" method="POST"> <!--fix route-->
      @csrf
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Username:</strong>
                  <input type="text" name="username" class="form-control" placeholder="username">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Password:</strong>
                  <input type="password" class="form-control" name="password" placeholder="password">
              </div>
          </div>
      </div>
      <br>

      <div>
        <a href="" class="btn btn-sign">
          <button type="submit" class="btn btn-sign">Sign Up</button>
          <span class="round"><i class="fa fa-chevron-right"></i></span>
        </a>
      </div>
      <br>
</form>
</div>
<div class="type-1">
  <div>
    <a href="{{ route('products.index') }}" class="btn btn-1">
      <span class="txt">Return</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
  <div>
    <a href="{{ route('log.index') }}" class="btn btn-login">
      <span class="txt">Login</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
</div>




</body>
