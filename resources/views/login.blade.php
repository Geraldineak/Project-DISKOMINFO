@extends('base_login')
@section('content')
<section class="main-section">
<div class="content">
  <div class="container">
  <div class="col-md-12 div-body">
    <div class="col-md-4 col-md-offset-4 login-form">
      <form>
        <div class="form-group text-center">
          <img src="assets/img/yang.png" alt="" width="100">
        </div>
        <div class="form-group header-login text-center">
          <h3><b>S P L K</b></h3>
          <h2>Sign In</h2>
        </div>
          <div class="form-inline" style="margin:auto 20px";>
            <i class="fa fa-user"></i>
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="bar"></div>      
          </div>
          <div class="form-inline" style="margin:auto 20px">
            <i class="fa fa-key"></i>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="bar"></div>
          </div>
          <div class="col-md-12">
          <div class="form-group one-group">
            <button type="submit" name="button" class="form-control login">Login</button>
          </div>
          </div>
          
      </form>
    </div>
  </div>
</div>
</div>
</section>

