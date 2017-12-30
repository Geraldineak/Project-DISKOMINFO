@extends('base_outsource')
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
            <h2>Edit Laporan Kerja</h2>
        </div>
        @foreach($data as $datas)
        <form action="{{ route('laporan.update',$datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="">Judul Laporan Kerja</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $datas->judul }}" require>
            </div>
            <div class="form-group">
                <label for="">Isi Laporan Kerja</label>
                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control" value="{{ $datas->isi }}"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</div>
</div>
</section>
@endsection