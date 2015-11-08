@extends('app')
@section('content')
    <div class="header container">Tambah Tanah <span class="header-right">({{ $pemilik->no_ktp }} - {{ $pemilik->nama }})</span></div>
    <form class="container" action="{{ URL::to("tanah/store") }}" method="post">
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
        <input type="hidden" name="pemilik_id" value="{{ $pemilik->id }}">
        <input type="hidden" name="_mode" value="known">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to("pemilik/$pemilik->id") }}">{{ $pemilik->no_ktp }} - {{ $pemilik->nama }}</a></li>
            <li class="active">Tambah Tanah</li>
        </ol>
        <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="row col-md-6">
                        <div class="form-group">
                            <label>No. SPPT PBB</label>
                            <input name="no_sppt_pbb" type="text" class="form-control" placeholder="Masukkan Nomor SPPT PBB" autofocus value="{{ old('no_sppt_pbb') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No. Buku C</label>
                            <input name="no_buku_c" type="text" class="form-control" placeholder="Masukkan Nomor Buku C" value="{{ old('no_buku_c') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <input disabled class="form-control" value="@if (old('nama')){{old('nama')}}@else{{$pemilik->nama}}@endif">
                        <input type="hidden" name="nama" class="form-control" placeholder="Masukkan Nama" value="@if (old('nama')){{old('nama')}}@else{{$pemilik->nama}}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jalan</label>
                        <input name="jalan" type="text" class="form-control" placeholder="Masukkan Jalan" value="{{ old('jalan') }}">
                    </div>
                </div>
                <div class="col-md-6 row">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="blok">Blok</label>
                            <input name="blok" class="form-control" id="blok" value="{{ old('blok') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input name="rt" class="form-control" id="rt" value="{{ old('rt') }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input name="rw" class="form-control" id="rw" value="{{ old('rw') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kodepos">Kode Pos</label>
                            <input name="kodepos" class="form-control" id="kodepos" value="{{ old('kodepos') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="no_persil">No Persil</label>
                            <input name="no_persil" class="form-control" id="no_persil" value="{{ old('no_persil') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kampung</label>
                        <input name="kampung" type="text" class="form-control" placeholder="Nama Kampung" value="{{ old('kampung') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input name="kecamatan" class="form-control" placeholder="Nama Kecamatan" value="{{ old('kecamatan') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                        <input name="desa" type="text" class="form-control" placeholder="Nama Desa" value="{{ old('desa') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <input name="kabupaten" class="form-control" placeholder="Nama Kabupaten" value="{{ old('kabupaten') }}">
                    </div>
                </div>
            </div>
            <center>
                <a href="{{URL::to("pemilik/$pemilik->id")}}"><span class="btn btn-danger">Batal</span></a>
                <span id="next" class="btn btn-success">Selanjutnya</span>
            </center>
        </div>

        <div id="form2">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Diperoleh dari</label>
                        <input name="nama_sebelum" type="text" class="form-control" placeholder="Pemilik Sebelumnya" value="{{ old('nama_sebelum') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Diperoleh tahun</label>
                        <input name="diperoleh_tahun" class="form-control" placeholder="Diperoleh pada tahun" value="{{ old('diperoleh_tahun') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Utara</label>
                        <input name="batas_utara" type="text" class="form-control" placeholder="Batas utara tanah" autofocus value="{{ old('batas_utara') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Timur</label>
                        <input name="batas_timur" class="form-control" id="pekerjaan" placeholder="Batas timur tanah" value="{{ old('batas_timur') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Selatan</label>
                        <input name="batas_selatan" type="text" class="form-control" placeholder="Batas selatan tanah" value="{{ old('batas_selatan') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Barat</label>
                        <input name="batas_barat" class="form-control" placeholder="Batas barat tanah" value="{{ old('batas_barat') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Lokasi Peta</label><br/>
                        <a href="#">Ambil Lokasi di Peta</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Luas</label>
                        <div class="input-group">
                            <input name="luas" class="form-control" placeholder="Luas Tanah" value="{{ old('luas') }}">
                            <span class="input-group-addon"> m2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    
                </div><div class="col-md-6">
                    <div class="form-group">
                        <label>Scan Letter C</label><br/>
                        <input name="scan_letter_c" type="file">
                    </div>
                </div>
            </div>
            <center>
                <a href="{{URL::to("pemilik/$pemilik->id")}}"><span class="btn btn-danger">Batal</span></a>
                <span id="before" class="btn btn-warning">Sebelumnya</span>
                <input type="submit" class="btn btn-success">
            </center>
        </div>


    </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#form2").hide();

            $("#next").click(function(){
                $("#form1").hide();
                $("#form2").show();
            });
            $("#before").click(function(){
                $("#form1").show();
                $("#form2").hide();
            });
        });
    </script>
@endsection