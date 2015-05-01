@extends('app')

@section('content')
    <div class="header container">Surat Keterangan Riwayat Tanah</div>
    <form class="container" action="#" method="post">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="#">Pertanahan</a></li>
            <li><a href="#">no</a></li>
            <li class="active">Surat Keterangan Riwayat Tanah</li>
        </ol>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="tanah_id" value="#">
            <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Surat</label>
                        <input name="no_surat" type="text" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="{{ old('nama_2') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pemilik Baru</label>
                        <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Pemilik Baru" autofocus value="{{ old('nama_1') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIP Lurah / Kepala Desa</label>
                        <input name="nip_lurah" type="text" class="form-control" placeholder="Masukkan NIP Lurah/ Kepala Desa" autofocus value="{{ old('nama_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lurah / Kepala Desa</label>
                        <input name="nama_lurah" type="text" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="{{ old('nama_2') }}">
                    </div>
                </div>
            </div>
            <br/>
            Surat Pernyataan Penguasaan Tanah memerlukan dua orang saksi untuk ikut menandatangani surat tersebut, silakan isi pada kolom berikut:
            <br/><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Pertama</label>
                        <input name="nama_1" type="text" class="form-control" placeholder="Masukkan Nama Saksi Pertama" value="{{ old('umur_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Kedua</label>
                        <input name="nama_2" type="text" class="form-control" placeholder="Masukkan Nama Saksi Kedua" value="{{ old('umur_2') }}">
                    </div>
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