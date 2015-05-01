@extends('app')
@section('content')
    <div class="header container">Tambah Tanah</div>
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
        <input type="hidden" name="_mode" value="unknown">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li class="active">Tambah Tanah</li>
        </ol>
        <div id="form1">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. SPPT PBB</label>
                        <input name="no_sppt_pbb" type="text" class="form-control" placeholder="Masukkan Nomor SPPT PBB" autofocus value="{{ old('no_sppt_pbb') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <select class="form-control" name="pemilik_id">
                            <option></option>
                            @foreach($pemiliks as $row)
                                <option value="{{$row->id}}">{{$row->nama}} - {{$row->no_ktp}}</option>
                            @endforeach
                        </select>
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input name="rt" class="form-control" id="rt" placeholder="No RT" value="{{ old('rt') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input name="rw" class="form-control" id="rw" placeholder="No RW" value="{{ old('rw') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kodepos">Kode Pos</label>
                            <input name="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos" value="{{ old('kodepos') }}">
                        </div>
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
            <center>
                <a href="{{URL::to("/")}}"><span class="btn btn-danger">Batal</span></a>
                <span id="next" class="btn btn-success">Selanjutnya</span>
            </center>
        </div>

        <div id="form2">

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
            <center>
                <a href="{{URL::to("/")}}"><span class="btn btn-danger">Batal</span></a>
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