@extends('base_outsource')
@section('content')
<section class="main-section">
<div class="content">
<div class="container container-body-index">
    <div class="row">
        <div class="col-md-12 font-head">
            <h3>SPLK</h3>
        </div>
    <section class="col-md-12 table" style="overflow-x: auto;">
    <div class="col-md-12 header-form">
            <h2>Laporan Kerja</h2>
    </div>
    <a href="{{ URL('laporan/create') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
    @if(Session::has('alert-success'))
                <div class="alert alert-success" style="width:auto; margin-left:20%">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
@endif
  @php echo date('j F Y', '2018-01-15 11:02:54'); @endphp  
    <table class="table table-inverse ">
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1; @endphp
    @foreach($data as $datas)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datas->judul }}</td>
            <td>{{ $datas->isi }}</td>
            <td>
                <form action="{{ route('laporan.destroy', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('laporan.edit',$datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
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