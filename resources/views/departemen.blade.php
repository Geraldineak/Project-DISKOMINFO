@extends('base')
@section('content')
<section class="main-section">
    <div class="content">
    <section class="col-md-12 kolom-pencarian" style="margin-top:7%;">
    <div class="col-md-12 header-form" style="width:auto; margin-left:20%">
        <h2>Daftar Departemen</h2>
    </div>
    <a href="{{ URL('departemen/create') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
    <table class="table table-bordered" style="width:auto; margin-left:20%">
    @if(Session::has('alert-success'))
                <div class="alert alert-success" style="width:auto; margin-left:20%">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
@endif
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Departemen</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1; @endphp
        @foreach($data as $datas)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $datas->nama_departemen }}</td>
                <td>
                    <form action="{{ route('departemen.destroy', $datas->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('departemen.edit', $datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
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