@extends('app')

@section('content')
    <div class="header container">Tambah Identitas</div>
    <div class="container" style="padding-bottom:10px; padding-top:0px;">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{URL::to('pemilik')}}">Identitas</a> </li>
            <li class="active">Tambah Data</li>
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
        <form action="{{ URL::to('pemilik') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap (sesuai KTP)</label>
                        <input name="nama" type="text" value="{{old('nama')}}" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Sesuai KTP" autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noKtp">Nomor KTP</label>
                        <input name="no_ktp" value="{{old('no_ktp')}}" class="form-control" id="noKtp" placeholder="Masukkan Nomor KTP">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Tempat/Tanggal Lahir</label>
                        <div class="form-inline">
                            <input name="tempat_lahir" value="{{old('tempat_lahir')}}" class="form-control " id="tempat" placeholder="Tempat Lahir">
                            <input name="tanggal_lahir" type="text" value="{{old('tanggal_lahir')}}" class="form-control datepicker" id="tanggal" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="agama">Agama</label>

                        <select name="agama" class="form-control">
                            <option></option>
                            <option @if ("Islam" == (old('agama'))){{ "selected" }}@endif value="Islam">Islam</option>
                            <option @if ("Kristen" == (old('agama'))){{ "selected" }}@endif value="Kristen">Kristen</option>
                            <option @if ("Katholik" == (old('agama'))){{ "selected" }}@endif value="Katholik">Katholik</option>
                            <option @if ("Hindu" == (old('agama'))){{ "selected" }}@endif value="Hindu">Hindu</option>
                            <option @if ("Budha" == (old('agama'))){{ "selected" }}@endif value="Budha">Budha</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap">{{old('alamat')}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input value="{{old('pekerjaan')}}" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan">
                    </div>
                </div>
            </div>
            <center>
                <a href="{{ URL::to('pemilik') }}"><span class="btn btn-danger">Batal</span></a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </center>

        </form>
    </div>

@endsection