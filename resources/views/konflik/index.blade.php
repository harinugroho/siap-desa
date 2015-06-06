@extends('app')

@section('content')

    <div class="header container">Konflik Pada Tanah Milik {{$pemilik->nama}}</div>
    <div class="container" style="padding-bottom:10px; padding-top:0px;">
        <ol class="breadcrumb" style="font-size:12px; background:none; text-align:left;">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('tanah')}}">Daftar Tanah</a> </li>
            <li><a href="{{URL::to("tanah/$tanah->id")}}">{{$pemilik->nama}}</a> </li>
        </ol>
        <br/>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <a href="{{ URL::to("/konflik/$tanah->id/create") }}"><span class="btn btn-danger">Ajukan Konflik Baru</span></a>
        <br><br/>
        <table class="table table-striped datatable">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pengaju</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Tindakan</th>
            </tr>
            </thead>
            <tbody>
            <!-- generate-->
            <?php $ii = 1; ?>
            @foreach($konflik as $row)
                <tr>
                    <td>{{$ii++}}</td>
                    <td>{{$row->pengaju}}</td>
                    <td>{{$row->judul}}</td>
                    <td>{{$row->deskripsi}}</td>
                    <td>{{($row->jenis==0)?"Masalah":"Keberatan"}}</td>
                    <td>{{$status[$row->status]}}</td>
                    <td>
                        @if ($row->status == 0)
                            <a href="{{URL::to("konflik/batal/$row->id")}}"><button>Batalkan</button></a>
                        @elseif($row->status == 1)
                            <a href="{{URL::to("konflik/solve/$row->id")}}"><button>Ajukan Penyelesaian</button></a>
                        @else
                            --
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script>
    $(document).ready(function(){
var t = $('.datatable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],
        "oLanguage": { 
            "sSearch": "Cari data: ",
            "sInfo": "Menampilkan _START_ ke _END_ dari _TOTAL_ data",
            "sLengthMenu":   "Tampilkan _MENU_ data",
        }
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
        });
    </script>
@endsection

@section('css')
    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <style>
        .dataTables_filter {
            width: 50%;
        }
        .dataTables_filter input{
            width: 80%;
        }
        .dataTables_filter label{
            width: 100%;
        }
    </style>
@endsection