@extends('app')

@section('content')
    <!--content-->
    <div class="topper container" style="padding:10px;"></div>
    <div class="container h-center">
        <div class="db-header"><h1 class="db-h">Sistem Informasi Pertanahan</h1><h3 class="db-h">Desa Cisomang Barat</h3></div>

            <div class="col-md-6">
              <div class="header-db">1. Identitas</div>
              <div class="button-container">
                <a class="btn btn-danger grid-button" href="create-identitas.html">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="font-size:3em;"></span><br/>Tambah data identitas
                </a>        
                <a class="btn btn-warning grid-button" href="view-identitas-all.html">
                  <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size:3em;"></span><br/>Lihat data identitas
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="header-db">2. Tanah</div>
              <div class="button-container">
              
            <a class="btn btn-success grid-button" href="view-identitas-all.html">
              <span class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="font-size:3em;"></span><br/>Tambah data tanah
            </a>
            <a class="btn btn-info grid-button" href="view-identitas-all.html">
              <span class="glyphicon glyphicon-grain" aria-hidden="true" style="font-size:3em;"></span><br/>Lihat data tanah
            </a>
          </div>
        </div>
    </div>
@endsection
