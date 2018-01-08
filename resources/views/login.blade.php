@extends('base_login')
@section('content')
<section class="main-section">
<div class="content">
  <div class="container">
  <div class="col-md-12 div-body">
    <div class="col-md-4 col-md-offset-4 login-form">
      <form action="{{ url('/loginPost') }}" method="post">
      {{ csrf_field() }}
        <div class="form-group text-center">
          <img src="assets/img/yang.png" alt="" width="100">
        </div>
        <div class="form-group header-login text-center">
          <h3><b>S P L K</b></h3>
          <h2>Sign In</h2>
        </div>
        <!--Alert untuk username-->
        @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="alamat">Password</label>
                    <input type="password" class="form-control" id="password" name="password"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </div>
</form>
    </div>
  </div>
</div>
</div>
</section>

