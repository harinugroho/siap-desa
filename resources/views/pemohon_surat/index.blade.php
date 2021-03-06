@extends('app')
@section('content')
    <!--content-->
    <div class="header container">Daftar Semua Pemohon Surat</div>
    <div class="container" style="background:white;">
        <ol class="breadcrumb" style="font-size:12px; background:none; text-align:left;">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('tanah') }}">Tanah</a></li>
            <li class="active">Daftar Data</li>
        </ol>
        <table  class="table table-striped datatable">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Pemohon</td>
                    <td>Jenis Surat</td>
                    <td>No Persil</td>
                    <td>Status</td>
                    <td>Download</td>
                </tr>
            </thead>
            <tbody>
                <?php $ii=1; ?>

                {{--SPPF--}}
                @foreach($sppf as $row)
                    <tr>
                        <td>{{ $ii++ }}</td>
                        <td>{{ $row->pemohon }}</td>
                        <td>Penguasaan Fisik</td>
                        <td>{{ $row->no_persil }}</td>
                        <td>
                            @if($row->status == 0)
                                Belum Dibayar
                            @elseif($row->status == 1)
                                Ok
                            @elseif($row->status == 2)
                                Diarsipkan
                            @endif
                        </td>
                        <td>
                            @if($row->status != 0)
                                <a href="{{ URL::to("generate/sppf/$row->tanah_id") }}">Download</a>
                            @else
                                <strike>Download</strike>
                            @endif
                        </td>
                    </tr>
                @endforeach

                {{--Surat Keterangan Riwayat Pemilik--}}
                @foreach($riwayat as $row)
                    <tr>
                        <td>{{ $ii++ }}</td>
                        <td>{{ $row->pemohon }}</td>
                        <td>Ket. Riwayat Pemilik</td>
                        <td>{{ $row->no_persil }}</td>
                        <td>
                            @if($row->status == 0)
                                Belum Dibayar
                            @elseif($row->status == 1)
                                Ok
                            @elseif($row->status == 2)
                                Diarsipkan
                            @endif
                        </td>
                        <td>
                            @if($row->status != 0)
                                <a href="{{ URL::to("generate/sppf/$row->tanah_id") }}">Download</a>
                            @else
                                <strike>Download</strike>
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