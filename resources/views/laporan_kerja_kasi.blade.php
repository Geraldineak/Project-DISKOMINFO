@extends('base_kasi')
@section('content')
<section class="main-content">
<div class="content">
<div class="container container-body-index">
    <div class="row">
    <div class="col-md-12 font-head">
        <h3>SPLK</h3>
    </div>
    <div class="col-sm-12 col-lg-12 table-wrapper">
    <section class="table-grabbing col-md-12" style="overflow-x: auto;">
        <div class="col-md-12 header-form">
            <h2>Daftar Laporan Kerja Kasi</h2>
        </div>
            <table class="table table-inverse">
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
            <th>Waktu</th><!--ini kolom barunya-->
            <th>Judul Laporan</th>
            <th>Pengirim</th>
            <th>NIK</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1; @endphp
    @foreach($data as $datas)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $datas->created_at }}</td><!--ini kolom barunya-->
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
            <!-- <thead>
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Nama Laporan</th>
                    <th>Pengirim</th>
                    <th>NI Karyawan</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>16 November 2017</td>
                    <td>17.30 PM</td>
                    <td>Mubes</td>
                    <td>Miche</td>
                    <td>46150100014</td>
                    <td>
                        <label for="">Disetujui</label>
                    </td>
                    <td>
                        <button type="submit" class="btn-lihat">Lihat</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>16 November 2017</td>
                    <td>17.30 PM</td>
                    <td>Mubes</td>
                    <td>Miche</td>
                    <td>46150100014</td>
                    <td>
                        <label for="">Disetujui</label>
                    </td>
                    <td>
                        <button type="submit" class="btn-lihat">Lihat</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>16 November 2017</td>
                    <td>17.30 PM</td>
                    <td>Mubes</td>
                    <td>Miche</td>
                    <td>46150100014</td>
                    <td>
                        <label for="">Pending</label>
                    </td>
                    <td>
                        <button type="submit" class="btn-terima">Menyetujui</button>
                        <button type="submit" class="btn-lihat">Lihat</button>
                        <button type="submit" class="btn-hapus">Menolak</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>16 November 2017</td>
                    <td>17.30 PM</td>
                    <td>Mubes</td>
                    <td>Miche</td>
                    <td>46150100014</td>
                    <td>
                        <label for="">Pending</label>
                    </td>
                    <td>
                        <button type="submit" class="btn-terima">Menyetujui</button>
                        <button type="submit" class="btn-lihat">Lihat</button>
                        <button type="submit" class="btn-hapus">Menolak</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>16 November 2017</td>
                    <td>17.30 PM</td>
                    <td>Mubes</td>
                    <td>Miche</td>
                    <td>46150100014</td>
                    <td>
                        <label for="">Pending</label>
                    </td>
                    <td>
                        <button type="submit" class="btn-terima">Menyetujui</button>
                        <button type="submit" class="btn-lihat">Lihat</button>
                        <button type="submit" class="btn-hapus">Menolak</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </section> -->
            <div class="col-md-12 table-footer">
            <div class="row">
                  <div class="col col-xs-4">
                  </div>
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
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection