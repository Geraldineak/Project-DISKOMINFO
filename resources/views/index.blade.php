@extends('base')
@section('content')
<section class="main-section">
<div class="content">
<div class="container container-body-index">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2 font-head">
                <h3>SPLK</h3>
            </div>
        </div>
        <div class="col-md-4 content-widget">
            <div class="col-md-12 header-content bg-green">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <p>Karyawan</p>
                    <h1>190</h1>
                </div>
                <div class="col-md-8 fa">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 content-widget">
            <div class="col-md-12 header-content bg-green">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <p>Laporan</p>
                    <h1>2220</h1>
                </div>
                <div class="col-md-8 fa">
                    <i class="fa fa-file-text-o"></i>
                </div>
            </div>
        </div> 
        <div class="col-md-4 content-widget">
            <div class="col-md-12 header-content bg-green">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <p>Admin</p>
                    <h1>3</h1>
                </div>
                <div class="col-md-8 fa">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div> 
        <section class="col-md-12 table" style="overflow-x: auto;">
        <div class="col-md-12 header-form">
            <h2>Data Log Kegiatan</h2>
        </div>
        <table class="table table-inverse ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Mubes</td>
                    <td>17 Desember 2017</td>
                    <td>Admin1</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Mubes</td>
                    <td>17 Desember 2017</td>
                    <td>Admin1</td>
                </tr>
                 <tr>
                    <td>1.</td>
                    <td>Mubes</td>
                    <td>17 Desember 2017</td>
                    <td>Admin1</td>
                </tr>
                 <tr>
                    <td>1.</td>
                    <td>Mubes</td>
                    <td>17 Desember 2017</td>
                    <td>Admin1</td>
                </tr>
            </tbody>
        </table>
        </section>
        <section class="col-md-12">
            <div class="col-md-12 table-footer">
                <div class="col col-xs-4"></div>
                    <div class="col col-xs-8">
                        <ul class="pagination hidden-xs pull-right">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                        <ul class="pagination visible-xs pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
            </div>
        </section>
    </div>
</div>
</div>
</section>
@endsection