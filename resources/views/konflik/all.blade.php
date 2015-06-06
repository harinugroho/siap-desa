@extends('app')

@section('content')

    <div class="header container">Konflik</div>
    <div class="container" style="padding-bottom:10px; padding-top:0px;">
        <br/><br/>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

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
                <tr class="{{ ($row->status!=0)?"danger":"success" }}">
                    <td>{{$ii++}}</td>
                    <td>{{$row->pengaju}}</td>
                    <td>{{$row->judul}}</td>
                    <td>{{$row->deskripsi}}</td>
                    <td>{{($row->jenis==0)?"Masalah":"Keberatan"}}</td>
                    <td>{{$status[$row->status]}}</td>
                    <td>
                        @if ($row->status == 0)
                            <a href="{{URL::to("konflik/setuju/$row->id")}}"><button>Setujui</button></a>
                            <a href="{{URL::to("konflik/tolak/$row->id")}}"><button>Tolak</button></a>
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