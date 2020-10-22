@extends('usr.layout')

@section('content')

<!--
@php
global $granted;
foreach($userinfo as $usr){
  $str=$usr->username;
  $str=substr($str, 0, strrpos($str, ' '));
    if (isset($_GET["username"]) && isset($_GET["password"])) {
      if(($_GET["username"]==$usr->username) && ($_GET["password"]==$usr->password)){
      $granted=true;
      }
    }
}
@endphp
{!! $userinfo->links() !!}
-->


<body>
<div class="container">

<div id="subtitle">
<h1>Log In to make an order!!!</h1>

</div>
<div id="inputbox">
  <form action="{{ route('log.store') }}" method="post"> <!--fix route-->
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
      <a href="" class="btn btn-2">
              <button type="submit" class="btn btn-2">Log In</button>
              <span class="round"><i class="fa fa-chevron-right"></i></span>
      </a>
      <br>
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
      <a href="{{ route('usr.index') }}" class="btn btn-sign">
        <span class="txt">Sign Up</span>
        <span class="round"><i class="fa fa-chevron-right"></i></span>
      </a>
    </div>

<!--
  @if($granted==true)
  <div>
    <a href="{{ route('sales.index') }}" class="btn btn-login">
      <span class="txt">Go!</span>
      <span class="round"><i class="fa fa-chevron-login"></i></span>
    </a>
  </div>
  @endif
-->

</div>




</body>
