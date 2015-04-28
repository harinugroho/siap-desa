@extends('app')

@section('content')
    <!--content-->
    <div class="topper container" style="padding:10px;"></div>
    <div class="container" style="padding-top:50px;">


        <center>
            <a class="btn btn-danger grid-button" href="{{ URL::to('pemilik') }}">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="font-size:3em;"></span><br/>Tambah data identitas
            </a>
            <a class="btn btn-warning grid-button" href="view-identitas-all.html">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="font-size:3em;"></span><br/>Tambah data tanah
            </a>
            <a class="btn btn-success grid-button" href="view-identitas-all.html">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size:3em;"></span><br/>Lihat data identitas
            </a>
            <a class="btn btn-info grid-button" href="view-identitas-all.html">
                <span class="glyphicon glyphicon-grain" aria-hidden="true" style="font-size:3em;"></span><br/>Lihat data tanah
            </a>
        </center>
    </div>
@endsection
