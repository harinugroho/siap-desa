@extends('app')
@section('content')
    <!--content-->
    <div class="header container">Daftar Semua Data Tanah</div>
    <div class="container" style="background:white;">
        <ol class="breadcrumb" style="font-size:12px; background:none; text-align:left;">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('tanah') }}">Tanah</a></li>
            <li class="active">Daftar Data</li>
        </ol>
        <!--search
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Cari berdasarkan... <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Cari berdasarkan...</a></li>
                    <li><a href="#">Nomor KTP</a></li>
                    <li><a href="#">Nama</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div><!-- /btn-group 
            <input type="text" class="form-control" aria-label="...">
       <span class="input-group-btn">
        <button class="btn btn-default" type="button">Cari!</button>
      </span>
        </div><br/>
        <!--end of search--><br/>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <!--result table-->
        <table class="table table-striped datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No SPPT PBB</th>
                    <th>Nama Pemilik</th>
                    <th class="cell-icon">Lihat</th>
                    <th class="cell-icon">Edit</th>
                </tr>
            </thead>
            <tbody>
                <!-- generate-->
                <?php $ii=1; ?>
                @foreach($tanah as $row)
                <tr>
                    <td></td>
                    <td>{{ $row->no_sppt_pbb }}</td>
                    <td><a href="{{ URL::to("pemilik/$row->pemilik_id") }}">{{ $row->nama }}</a></td>
                    <td class="cell-icon" ><a href="{{ URL::to("tanah/$row->id") }}"><span class="glyphicon glyphicon-plus"></span> Lihat</a></td>
                    <td class="cell-icon" ><a href="{{ URL::to("tanah/$row->id/edit") }}"><span class="glyphicon glyphicon-cog"></span> Edit</a></td>
                </tr>
                @endforeach
                <!--generate-->
            </tbody>
        </table>
        <!--end of result table-->
        <!--pagination-->
        {{--<center>--}}
            {{--<nav>--}}
                {{--<ul class="pagination">--}}
                    {{--<li class="disabled">--}}
                        {{--<a href="#" aria-label="Previous">--}}
                            {{--<span aria-hidden="true">&laquo;</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#">5</a></li>--}}
                    {{--<li>--}}
                        {{--<a href="#" aria-label="Next">--}}
                            {{--<span aria-hidden="true">&raquo;</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        {{--</center>--}}
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
        #DataTables_Table_0_filter input {
            width: 700px    ;
        }
    </style>
@endsection