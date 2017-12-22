@extends('base_outsource')
@section('content')
<div class="container container-body-index">
    <div class="row">
    <div class="col-md-12 font-head">
        <h3>SPLK</h3>
    </div>
    <div class="col-md-12 form-kelas">
        <div class="col-md-12 header-form">
            <h2>Kirim Laporan Kerja</h2>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Judul Kegiatan Kerja</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="">Isi Kegiatan Kerja</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="form-control" require>
            </div>
        </form>
    </div>
</div>
@endsection