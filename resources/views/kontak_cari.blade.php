@extends('base')
@section('content')
<section class="main-section">
    <div class="content">
    <section class="col-md-12 kolom-pencarian">
    
    <div class="col-md-12 header-form" style="width:auto; margin-left:20%; margin-top:10%">
        <h2>Pencarian Karyawan</h2>
       
    </div>
    <br>
    <br>
    <a href="kontak" class="btn btn-raised btn-primary pull-right">Kembali</a>
            @php $no = 1; @endphp
            <table class="table table-inverse" style="width:auto; margin-left:20%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            @if(isset($details))
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->nama_lengkap }}</td>
                        <td>{{ $user->jabatan }}</td>
                        <td>
                        <form action="{{ route('kontak.destroy',$user->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="{{ route('kontak.edit',$user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                    <tr>
                        <!--<td>1.</td>
                        <td>Ilham Saputra</td>
                        <td>Kabid</td>
                        <td>
                            <input type="submit" value="Edit" class="btn-edit">
                            <input type="submit" value="Hapus" class="btn-hapus">
                        </td>-->
                    </tr>
                </tbody>
            @endif
            </table>
            <div class="form-group">
                <label for=""></label>
            </div>
    </section>
</div>
</div>
</section>
@endsection