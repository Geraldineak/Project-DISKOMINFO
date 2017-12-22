@extends('base')
@section('content')
<div class="container container-body-index">
    <div class="row">
    <div class="col-md-12 font-head">
        <h3>SPLK</h3>
    </div>
    <div class="col-md-12 form-kelas">
        <div class="col-md-12 header-form">
            <h2>Pendaftaran Karyawan</h2>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat-" id="alamat" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="">No. Telpon</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-control">
                    <option value="">Kasi</option>
                    <option value="">Kabid</option>
                    <option value="">Karyawan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Kasi</label>
                <input type="text" class="form-control" name="kasi" id="kasi" require>
            </div>
            <div class="form-group">
                <label for="">Kabid</label>
                <input type="text" class="form-control" name="kabid" id="kabid" require>
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="username" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" require>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="form-control" require>
            </div>
        </form>
    </div>
    <section class="col-md-12 kolom-pencarian">
    <div class="col-md-12 header-form">
        <h2>Daftar Karyawan</h2>
    </div>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="">Pencarian</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <table class="table table-inverse">
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
    <table class="table table-inverse ">
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
        <tr>
            <td>1.</td>
            <td>Ilham Saputra</td>
            <td>Kabid</td>
            <td>
                <input type="submit" value="Edit" class="btn-edit">
                <input type="submit" value="Hapus" class="btn-hapus">
            </td>
        </tr>
        <tr>
            <td>1.</td>
            <td>Ilham Saputra</td>
            <td>Kabid</td>
            <td>
                <input type="submit" value="Edit" class="btn-edit">
                <input type="submit" value="Hapus" class="btn-hapus">
            </td>
        </tr>
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
@endsection