@extends('app')

@section('content')
    <div class="header container">Surat Keterangan Riwayat Tanah</div>
    <form class="container" action="{{ URL::to("surat/riwayat/$tanah->id") }}" method="post">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to("/tanah/$tanah->id") }}">{{ $tanah->nama }}</a></li>
            <li class="active">Surat Keterangan Riwayat Tanah</li>
        </ol>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Surat</label>
                        <input name="no_surat" required type="text" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="{{ old('no_surat') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lurah / Kepala Desa</label>
                        <input name="nama_lurah" required type="text" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="{{ old('nama_lurah') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIP Lurah / Kepala Desa</label>
                        <input name="nip_lurah" required type="text" class="form-control" placeholder="Masukkan NIP Lurah/ Kepala Desa" autofocus value="{{ old('nip_lurah') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Pembuatan Surat</label>
                        <input name="tanggal" required type="date" class="form-control" placeholder="Masukkan Tanggal Pembuatan Surat" autofocus value="{{ old('tanggal') }}">
                    </div>
                </div>
            </div>
            <br/>
            Surat Pernyataan Penguasaan Tanah memerlukan dua orang saksi untuk ikut menandatangani surat tersebut, silakan isi pada kolom berikut:
            <br/>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Pertama</label>
                        <input name="saksi_1" required type="text" class="form-control" placeholder="Masukkan Nama Saksi Pertama" value="{{ old('saksi_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Kedua</label>
                        <input name="saksi_2" required type="text" class="form-control" placeholder="Masukkan Nama Saksi Kedua" value="{{ old('saksi_2') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pemohon Surat</label>
                        <input name="pemohon" required type="text" class="form-control" placeholder="Masukkan Nama Pemohon" value="{{ old('pemohon') }}">
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