@extends('base_kasi')
@section('content')
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
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Nama Laporan</th>
                    <th>User</th>
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
                    <button type="submit" class="btn-hapus">Menolak</button>
                    </td>
                </tr>
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
@endsection