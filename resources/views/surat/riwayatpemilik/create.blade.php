@extends('app')

@section('content')
    <div class="header container">Tambah Riwayat Pemilik</div>
    <form class="container" action="#" method="post">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="#">Pertanahan</a></li>
            <li><a href="#">no</a></li>
            <li class="active">STambah Riwayat Pemilik</li>
        </ol>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="tanah_id" value="#">
            <div id="form1">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input name="tgl_1" type="date" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="{{ old('nama_2') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Pemilik Baru</label>
                        <input name="nama_1" type="text" class="form-control" placeholder="Masukkan Nama Pemilik Baru" autofocus value="{{ old('nama_1') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>No. Buku C</label>
                        <input name="no_buku_c_1" type="text" class="form-control" placeholder="Masukkan NIP Lurah/ Kepala Desa" autofocus value="{{ old('nama_1') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <span class="btn btn-success add-button">+</span>
                    <!--enabled when 2-->
                    <span class="btn btn-warning add-button">-</span>
                </div>
            </div>
            <center>
                <a href="#"><span class="btn btn-danger">Batal</span></a>
                <button type="submit" id="next" class="btn btn-success">Simpan</button>
            </center>
        </div>
    </form>
    </div>

@endsection

@section('css')
<style>
    .add-button {
        margin-top: 25px;
    }
</style>
@endsection