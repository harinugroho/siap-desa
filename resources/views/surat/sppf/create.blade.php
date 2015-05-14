@extends('app')
@section('content')
    <div class="header container">Surat Pernyataan Penguasaan Fisik <span class="header-right">({{ $pemilik->no_ktp }} - {{ $pemilik->nama }})</span></div>
    <form class="container" action="{{ URL::to("surat/sppf/$tanah->id") }}" method="post">
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
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('tanah') }}">Pertanahan</a></li>
            <li><a href="{{ URL::to("tanah/$tanah->id") }}">{{ $tanah->no_sppt_pbb}}</a></li>
            <li class="active">Surat Pernyataan Penguasaan Fisik</li>
        </ol>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="tanah_id" value="{{ $tanah->id }}">
            Surat Pernyataan Penguasaan Tanah memerlukan dua orang saksi untuk ikut menandatangani surat tersebut, silakan isi pada kolom berikut:
            <br/><br>
            <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Pertama</label>
                        <input name="nama_1" type="text" class="form-control" placeholder="Masukkan Nama Saksi Pertama" autofocus value="{{ old('nama_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Kedua</label>
                        <input name="nama_2" type="text" class="form-control" placeholder="Masukkan Nama Saksi Kedua" autofocus value="{{ old('nama_2') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pekerjaan Saksi Pertama</label>
                        <input name="pekerjaan_1" class="form-control" placeholder="Masukkan Pekerjaan Saksi Pertama" value="{{ old('pekerjaan_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pekerjaan Saksi Kedua</label>
                        <input name="pekerjaan_2" class="form-control" placeholder="Masukkan Pekerjaan Saksi Kedua" value="{{ old('pekerjaan_2') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Umur Saksi Pertama</label>
                        <input name="umur_1" type="text" class="form-control" placeholder="Masukkan Umur Saksi Pertama" value="{{ old('umur_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Umur Saksi Kedua</label>
                        <input name="umur_2" type="text" class="form-control" placeholder="Masukkan Umur Saksi Kedua" value="{{ old('umur_2') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat Saksi Pertama</label>
                        <input name="alamat_1" type="text" class="form-control" placeholder="Masukkan Alamat Saksi Pertama" value="{{ old('alamat_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat Saksi Kedua</label>
                        <input name="alamat_2" type="text" class="form-control" placeholder="Masukkan Alamat Saksi Kedua" value="{{ old('alamat_2') }}">
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
                <a href="{{URL::to("tanah/$tanah->id")}}"><span class="btn btn-danger">Batal</span></a>
                <button type="submit" id="next" class="btn btn-success">Simpan</button>
            </center>
        </div>
    </form>
    </div>
@endsection