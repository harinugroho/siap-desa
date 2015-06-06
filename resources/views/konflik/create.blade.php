@extends('app')

@section('content')
    <div class="header container">Tambah Konflik pada tanah milik {{$pemilik->nama}}</div>
    <div class="container" style="padding-bottom:10px; padding-top:0px;">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{URL::to('tanah')}}">Tanah</a> </li>
            <li><a href="{{URL::to("tanah/$tanah->id")}}">{{$pemilik->nama}}</a> </li>
            <li class="active">Tambah Konflik</li>
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
        <form action="{{ URL::to("konflik/$tanah->id") }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pengaju">Nama Pengaju (sesuai KTP)</label>
                        <input name="pengaju" type="text" value="{{old('pengaju')}}" class="form-control" id="pengaju" placeholder="Masukkan Nama Lengkap Sesuai KTP" autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input name="judul" value="{{old('judul')}}" class="form-control" id="judul" placeholder="Masukkan Judul Pengajuan Konflik">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <select name="jenis" class="form-control">
                            <option {{(old('jenis')==0)?"selected":""}} value="0">Pengajuan Masalah</option>
                            <option {{(old('jenis')==1)?"selected":""}} value="1">Pengajuan Keberatan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" placeholder="Masukkan Deskripsi Pengajuan">{{old('deskripsi')}}</textarea>
                    </div>
                </div>

            </div>
            <center>
                <a href="{{ URL::to("tanah/$tanah->id") }}"><span class="btn btn-danger">Batal</span></a>
                <input type="hidden" name="tanah_id" value="{{$tanah->id}}">
                <button type="submit" class="btn btn-success">Simpan</button>
            </center>

        </form>
    </div>

@endsection