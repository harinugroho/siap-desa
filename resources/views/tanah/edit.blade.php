@extends('app')
@section('content')
    <div class="header container">Edit Data Tanah <span class="header-right">({{ $pemilik->no_ktp }} - {{ $pemilik->nama }})</span></div>
    <form class="container" action="{{ URL::to("tanah/$tanah->id") }}" method="post">
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
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="pemilik_id" value="{{ $pemilik->id }}">
        <input type="hidden" name="id" value="{{ $tanah->id }}">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to("pemilik/$pemilik->id") }}">{{ $pemilik->no_ktp }} - {{ $pemilik->nama }}</a></li>
            <li class="active">Tambah Tanah</li>
        </ol>
        <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. SPPT PBB</label>
                        <input name="no_sppt_pbb" type="text" class="form-control" placeholder="Masukkan Nomor SPPT PBB" autofocus value="@if (old('no_sppt_pbb')){{old('no_sppt_pbb')}}@else{{$tanah->no_sppt_pbb}}@endif">
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
                        <input name="jalan" type="text" class="form-control" placeholder="Masukkan Jalan" value="@if (old('jalan')){{old('jalan')}}@else{{$tanah->jalan}}@endif">
                    </div>
                </div>
                <div class="col-md-6 row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input name="rt" class="form-control" id="rt" placeholder="No RT" value="@if (old('rt')){{old('rt')}}@else{{$tanah->rt}}@endif">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input name="rw" class="form-control" id="rw" placeholder="No RW" value="@if (old('rw')){{old('rw')}}@else{{$tanah->rw}}@endif">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kodepos">Kode Pos</label>
                            <input name="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos" value="@if (old('kodepos')){{old('kodepos')}}@else{{$tanah->kodepos}}@endif">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                        <input name="desa" type="text" class="form-control" placeholder="Nama Desa" value="@if (old('desa')){{old('desa')}}@else{{$tanah->desa}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <input name="kabupaten" class="form-control" placeholder="Nama Kabupaten" value="@if (old('kabupaten')){{old('kabupaten')}}@else{{$tanah->kabupaten}}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Diperoleh dari</label>
                        <input name="nama_sebelum" type="text" class="form-control" placeholder="Pemilik Sebelumnya" value="@if (old('nama_sebelum')){{old('nama_sebelum')}}@else{{$tanah->nama_sebelum}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Diperoleh tahun</label>
                        <input name="diperoleh_tahun" class="form-control" placeholder="Diperoleh pada tahun" value="@if (old('diperoleh_tahun')){{old('diperoleh_tahun')}}@else{{$tanah->diperoleh_tahun}}@endif">
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
                        <label>Batas Utara</label>
                        <input name="batas_utara" type="text" class="form-control" placeholder="Batas utara tanah" autofocus value="@if (old('batas_utara')){{old('batas_utara')}}@else{{$tanah->batas_utara}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Timur</label>
                        <input name="batas_timur" class="form-control" id="pekerjaan" placeholder="Batas timur tanah" value="@if (old('batas_timur')){{old('batas_timur')}}@else{{$tanah->batas_timur}}@endif">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Selatan</label>
                        <input name="batas_selatan" type="text" class="form-control" placeholder="Batas selatan tanah" value="@if (old('batas_selatan')){{old('batas_selatan')}}@else{{$tanah->batas_selatan}}@endif">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batas Barat</label>
                        <input name="batas_barat" class="form-control" placeholder="Batas barat tanah" value="@if (old('batas_barat')){{old('batas_barat')}}@else{{$tanah->batas_barat}}@endif">
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
                            <input name="luas" class="form-control" placeholder="Luas Tanah" value="@if (old('luas')){{old('luas')}}@else{{$tanah->luas}}@endif">
                            <span class="input-group-addon"> m2</span>
                        </div>
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