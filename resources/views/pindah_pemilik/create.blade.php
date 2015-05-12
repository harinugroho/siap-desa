@extends('app')

@section('content')
    <div class="header container">Pindah Kepemilikan Tanah ({{ $tanah->nama }})</div>
    <div class="container" style="padding-bottom:10px; padding-top:0px;">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="{{URL::to('tanah')}}">Tanah</a> </li>
            <li class="active">Pindah Kepemilikan</li>
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

        Tanah dimiliki oleh {{ $tanah->nama }} akan dipindahtangankan kepada :

        <form action="{{ URL::to("tanah/ubah_pemilik/$tanah->id/store") }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pemilik Tanah Selanjutnya</label>
                        <select name="next" autofocus>
                            <option></option>
                            @foreach($pemilik as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }} - {{ $row->no_ktp }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>No Buku C terbaru</label>
                        <input name="no_buku_c">
                    </div>
                </div>
            </div>
            <center>
                <a href="{{ URL::to('tanah') }}"><span class="btn btn-danger">Batal</span></a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </center>

        </form>
    </div>

@endsection