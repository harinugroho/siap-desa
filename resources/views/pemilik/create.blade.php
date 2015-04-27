<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>~~~</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.html">SIAP DESA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="dashboard.html">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tambah Data <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Identitas</a></li>
                        <li><a href="#">Tanah</a></li>
                        <!--li class="divider"></li-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lihat Data <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Identitas</a></li>
                        <li><a href="#">Tanah</a></li>
                        <!--li class="divider"></li-->
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse">
                <div class="navbar-text navbar-right">Anda login sebagai <b>{{ Auth::user()->name }}</b>. <a href="{{ url('/auth/logout') }}" class="navbar-link">(Logout)</a>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>

<div class="form-container" >
    <ol class="breadcrumb" style="font-size:12px; background:none; text-align:left;">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pemilik/save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Lengkap (sesuai KTP)</label>
                    <input required="required" name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Sesuai KTP" autofocus>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="noKtp">Nomor KTP</label>
                    <input required="required" name="no_ktp" class="form-control" id="noKtp" placeholder="Masukkan Nomor KTP">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Tempat/Tanggal Lahir</label>
                    <div class="form-inline">
                        <input required="required" name="tempat_lahir" class="form-control" id="tempat" placeholder="Tempat Lahir">
                        <input required="required" name="tanggal_lahir" type="date" class="form-control" id="tanggal" placeholder="Tanggal Lahir">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select required="required" name="agama" class="form-control">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea required="required" name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input required="required" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan">
        </div>
        <center>
            <a href="{{ URL::to('pemilik') }}"><span class="btn btn-danger">Batal</span></a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </center>
    </form>
</div>

</body>
</html>