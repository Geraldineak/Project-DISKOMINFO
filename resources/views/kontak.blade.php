@extends('base')
@section('content')
<section class="main-section">
    <div class="content">
    <section class="col-md-12 kolom-pencarian">
    <div class="col-md-12 header-form">
        <h2>Daftar Karyawan</h2>
    </div>
        <form action="" method="post" class="form" style="width:auto; margin-left:20%">
            <div class="form-group">
                <label for="">Pencarian</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <table class="table table-inverse" style="width:auto; margin-left:20%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Ilham Saputra</td>
                        <td>Kabid</td>
                        <td>
                            <input type="submit" value="Edit" class="btn-edit">
                            <input type="submit" value="Hapus" class="btn-hapus">
                        </td>
                    </tr>
                </tbody>

            </table>
            <div class="form-group">
                <label for=""></label>
            </div>
        </form>
    </section>
    <section class="col-md-12 table" style="overflow-x: auto;">
    @if(Session::has('alert-success'))
                <div class="alert alert-success" style="width:auto; margin-left:20%">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
@endif
    <table class="table table-inverse" style="width:auto; margin-left:20%">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>No.Telp</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1; @endphp
    @foreach($data as $datas)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datas->nama_lengkap }}</td>
            <td>{{ $datas->no_telp }}</td>
            <td>{{ $datas->alamat }}</td>
            <td>{{ $datas->jabatan }}</td>
            <td>{{ $datas->departemen }}</td>
            <td>
                <form action="{{ route('kontak.destroy',$datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('kontak.edit',$datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
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
</section>
@endsection