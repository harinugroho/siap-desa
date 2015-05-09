@extends('app')

@section('content')
    <div class="header container">Tambah Riwayat Pemilik</div>
    <form class="container" action="{{ URL::to("/tanah/riwayat/store") }}" method="post">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/tanah') }}">Pertanahan</a></li>
            <li><a href="{{ URL::to("/tanah/$tanah->id") }}">{{ $tanah->nama }}</a></li>
            <li class="active">Tambah Riwayat Pemilik</li>
        </ol>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="tanah_id" value="{{ $tanah->id }}">
            <div id="form1">
            <div id="rows">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal[]" type="date" class="form-control" required autofocus value="{{ old('tanggal') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Pemilik Baru</label>
                            <input name="nama[]" type="text" class="form-control" placeholder="Masukkan Nama Pemilik Baru" required value="{{ old('nama') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No. Buku C</label>
                            <input name="no_buku_c[]" type="text" class="form-control" placeholder="Masukkan No Buku C" required value="{{ old('no_buku_c') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <span class="btn btn-success add-button">+</span>
                        <!--enabled when 2-->
                    </div>
                </div>
            </div>
            <center>
                <a href="{{ URL::to("/tanah/$tanah->id") }}"><span class="btn btn-danger">Batal</span></a>
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

@section('script')

    <!--generate-->
    <script>
    $( ".add-button" ).click(function() {
        $( "#rows" ).append('<div class="row"><div class="col-md-2"><div class="form-group"><label>Tanggal</label><input name="tanggal[]" type="date" class="form-control" required autofocus value="{{ old('tanggal') }}"></div></div><div class="col-md-4"><div class="form-group"><label>Nama Pemilik Baru</label><input name="nama[]" type="text" class="form-control" placeholder="Masukkan Nama Pemilik Baru" required value="{{ old('nama') }}"></div></div><div class="col-md-4"><div class="form-group"><label>No. Buku C</label><input name="no_buku_c[]" type="text" class="form-control" placeholder="Masukkan No Buku C" required value="{{ old('no_buku_c') }}"></div></div><div class="col-md-2">DELETE</div></div>');
        });
    
    </script>
@endsection