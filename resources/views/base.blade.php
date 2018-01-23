<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPLK | DISKOMINFO</title>
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse">
            <div class="profile">
                <div class="profile-pic">
                    <img src="assets/img/user.png" alt="">
                </div>
                <ul class="nav navbar-nav profile-header">
                    <li><a href="#">Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--Akhir header-->
<div class="sidebar-menu">
<img src="assets/img/logo.PNG"  width="75">
    <div class="list-menu">
        <ul class="list-group">
            <li class="list-group-item">
                <i class="fa fa-home"></i>
                <a class="dropdown-toggle" href="/">Home</a>
            </li>
            <li class="list-group-item">
                <i class="fa fa-user"></i>
                <a class="dropdown-toggle" href="kontak">Karyawan</a>
            </li>
            <li class="list-group-item">
                <i class="fa fa-building"></i>
                <a class="dropdown-toggle" href="departemen">Departement</a>
            </li>
            <li class="list-group-item">
                <i class="fa fa-file-text"></i>
                <a class="dropdown-toggle" href="laporan">Laporan Kerja</a>
            </li>
            <br>
            <div class="form-group one-group text-center"><a href="/logout">
                <button type="button" class="btn btn-primary btn-logout" >Logout</button></a>
            </div>
        </ul>
    </div>
</div>
@yield('content')
</body>
</html>