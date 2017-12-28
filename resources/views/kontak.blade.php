@extends('base')
@section('content')
<section class="main-section">
    <div class="content">
    <section class="col-md-12 kolom-pencarian">
    <div class="col-md-12 header-form">
        <h2>Daftar Karyawan</h2>
    </div>
    <table class="table table-bordered" style="width:auto; margin-left:20%">
    @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
@endif
        <thread>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>No. Telp</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Department</th>
            <th>Username</th>
        </tr>
        </thread>
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
                <td>{{ $datas->username }}</td>
                <td>
                    <form action="{{ route('kontak.destroy', $datas->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('kontak.edit' ,$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </section>
    </div>
</section>
@endsection