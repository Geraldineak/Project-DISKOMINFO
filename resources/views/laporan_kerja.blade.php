@extends('base_kabid')
@section('content')
<script>
@if(\Session::has('jabatan'))
        console.log("Jabatan anda: {{Session::get('jabatan')}}");
@endif
@if(\Session::has('nik'))
        console.log("NIK anda: {{Session::get('nik')}}");
@endif
@if(\Session::has('nik_atasan'))
        console.log("NIK Atasan anda: {{Session::get('nik_atasan')}}");
@endif
</script>
<section class="main-section">
<div class="content">
<div class="container container-body-index">
    <div class="row">
    <div class="col-md-12 font-head">
        <h3>SPLK</h3>
    </div>
    <div class="col-sm-12 col-lg-12 table-wrapper">
    <section class="table-grabbing col-md-12" style="overflow-x: auto;">
        <div class="col-md-12 header-form">
            <h2>Daftar Laporan Kerja {{Session::get('jabatan')}}</h2>
        </div>
            <table class="table table-inverse">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Judul</th>
                    <th>Pengirim</th>
                    <th>NI Karyawan</th>
                    <th>NIK Atasan</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>@php $no=1; @Endphp
            @foreach($data as $datas)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{date('j F Y',strtotime($datas->created_at))}}</td>
                    <td>{{date('H:i:s',strtotime($datas->created_at))}}</td>
                    <td>{{$datas->judul}}</td>
                    <td>{{$datas->nik}}</td>
                    <td>{{$datas->nik}}</td>
                    <td>{{$datas->nik_atasan}}</td>
                    <td>
                        <label for="">Disetujui</label>
                    </td>
                    <td>
                        <button type="submit" class="btn-lihat">Lihat</button>
                    </td>
                </tr>
                @endforeach
               <!-- <tr>
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
                </tr>-->
            </tbody>
        </table>
        </section>
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