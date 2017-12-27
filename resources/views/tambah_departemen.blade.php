@extends('base_departemen')
@section('content')
<section class="main-section">
<div class="content">
<div class="container container-body-index">
    <div class="row">
    <div class="col-md-12 font-head">
        <h3>SPLK</h3>
    </div>
    <div class="col-md-12 form-kelas">
        <div class="col-md-12 header-form">
            <h2>Tambah Departement</h2>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nama Departement</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="form-control" require>
            </div>
        </form>
    </div>
    <section class="col-md-12 table" style="overflow-x: auto;">
    <table class="table table-inverse ">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Departement</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Departement Keuangan</td>
            <td>
                <input type="submit" value="Hapus" class="btn-hapus">
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Departement Sekretariat</td>
            <td>
                <input type="submit" value="Hapus" class="btn-hapus">
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Departement Kominfo</td>
            <td>
                <input type="submit" value="Hapus" class="btn-hapus">
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Departement Dokumentasi</td>
            <td>
                <input type="submit" value="Hapus" class="btn-hapus">
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
</section>
@endsection