<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Siap Desa</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    @yield('css')

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
            <a class="navbar-brand" href="{{ URL::to('/') }}">SIAP DESA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (!Auth::guest())
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Identitas <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ URL::to('pemilik/create') }}">Tambah Data</a></li>
                        <li><a href="{{ URL::to('pemilik') }}">Lihat Data</a></li>
                        <!--li class="divider"></li-->
                    </ul>
                </li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tanah <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ URL::to('tanah/create') }}">Tambah Data</a></li>
                        <li><a href="{{ URL::to('tanah') }}">Lihat Data</a></li>
                        <!--li class="divider"></li-->
                    </ul>
                </li>
                <li><a href="{{ URL::to('surat/pemohon') }}">Daftar Pemohon</a></li>
                @if (Auth::user()->role == 2)
                    <li><a href="{{URL::to('konflik/all')}}">Daftar Konflik
                        <!--TODO: IF Daftar Konflik != NULL-->
                        <span style="display:inline-block;border-radius: 50%;width: 8px;height: 8px; background:#f00">&nbsp;</span>
                    </a> 

                    </li>
                @endif
            </ul>
            <div class="collapse navbar-collapse">
                <div class="navbar-text navbar-right">Anda login sebagai <b>{{ Auth::user()->name }}</b>. <a href="{{ url('/auth/logout') }}" class="navbar-link">(Logout)</a>
                </div>
            </div><!-- /.navbar-collapse -->
            @endif
        </div><!-- /.container-fluid -->
    </div>
</nav>


	@yield('content')

    @if (!Auth::guest())
    <div class="footer container">
        &copy; 2015 SIAP DESA
    </div>
    @endif

<!-- Scripts -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/select2.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript">
        $('select').select2({
            placeholder: "Silakan Pilih"
        });

                            $("#tanggal").datepicker({
                                format: "dd/mm/yyyy"
                            })
        // $(function() {
        //     $( ".datepicker" ).datepicker();
        //     $( "#tanggal" ).datepicker();
        // });
    </script>
    @yield('script')
</body>
</html>
