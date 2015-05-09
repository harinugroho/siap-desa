@extends('app')

@section('content')
    <div class="header container">Surat Keterangan Riwayat Tanah</div>
    <form class="container" action="{{ URL::to("surat/riwayat/$riwayat->id") }}" method="post">
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
            <input type="hidden" name="_method" value="put">
            <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. Surat</label>
                        <input name="no_surat" required type="text" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="@if(old('no_surat')){{old('no_surat')}}@else{{$riwayat->no_surat}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lurah / Kepala Desa</label>
                        <input name="nama_lurah" required type="text" class="form-control" placeholder="Masukkan Nama Lurah/Kepala Desa" autofocus value="@if(old('nama_lurah')){{old('nama_lurah')}}@else{{$riwayat->nama_lurah}}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIP Lurah / Kepala Desa</label>
                        <input name="nip_lurah" required type="text" class="form-control" placeholder="Masukkan NIP Lurah/ Kepala Desa" autofocus value="@if(old('nip_lurah')){{old('nip_lurah')}}@else{{$riwayat->nip_lurah}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Pembuatan Surat</label>
                        <input name="tanggal" required type="date" class="form-control" placeholder="Masukkan Tanggal Pembuatan Surat" autofocus value="@if(old('tanggal')){{old('tanggal')}}@else{{$riwayat->tanggal}}@endif">
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
                        <input name="saksi_1" required type="text" class="form-control" placeholder="Masukkan Nama Saksi Pertama" value="@if(old('saksi_1')){{old('saksi_1')}}@else{{$riwayat->saksi_1}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Saksi Kedua</label>
                        <input name="saksi_2" required type="text" class="form-control" placeholder="Masukkan Nama Saksi Kedua" value="@if(old('saksi_2')){{old('saksi_2')}}@else{{$riwayat->saksi_2}}@endif">
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