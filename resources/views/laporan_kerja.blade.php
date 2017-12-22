@extends('base')
@section('content')
<div class="container container-body-index">
    <div class="row">
        <div class="col-md-12 font-head">
            <h3>SPLK</h3>
        </div>
    <section class="col-md-12 table" style="overflow-x: auto;">
    <div class="col-md-12 header-form">
            <h2>Laporan Kerja</h2>
    </div>
    <table class="table table-inverse ">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Ilham Saputra</td>
            <td>Disetujui</td>
            <td>
                <input type="submit" value="lihat" class="btn-lihat">
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Ilham Saputra</td>
            <td>Disetujui</td>
            <td>
                <input type="submit" value="lihat" class="btn-lihat">
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Ilham Saputra</td>
            <td>Disetujui</td>
            <td>
                <input type="submit" value="lihat" class="btn-lihat">
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Ilham Saputra</td>
            <td>Disetujui</td>
            <td>
                <input type="submit" value="lihat" class="btn-lihat">
            </td>
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
@endsection