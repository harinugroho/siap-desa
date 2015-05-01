@extends('app')

@section('content')

    <div class="header container">Daftar Identitas</div>
    <div class="container" style="padding-bottom:10px; padding-top:0px;">
        <ol class="breadcrumb" style="font-size:12px; background:none; text-align:left;">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('pemilik')}}">Identitas</a> </li>
            <li>Daftar Data</li>
        </ol>
        <!--search-->
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
            </div><!-- /btn-group -->
            <input type="text" class="form-control" aria-label="...">
       <span class="input-group-btn">
        <button class="btn btn-default" type="button"> Cari </button>
      </span>
        </div><br/>
        <!--end of search-->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        {{--<h6>Menampilkan 1 dari 1 data</h6>--}}
        <!--result table-->
        <table class="table table-striped datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Lihat</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <!-- generate-->
                <?php $ii = 1; ?>
                @foreach($pemilik as $key => $value)
                <tr>
                    <td>{{ $ii++ }}</td>
                    <td>{{ $value->no_ktp}}</td>
                    <td>{{ $value->nama }}</td>
                    <td><a href="{{ URL::to("pemilik/$value->id") }}" title="Lihat Identitas"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    <td><a href="{{ URL::to("pemilik/$value->id/edit") }}" title="Ubah Identitas"><span class="glyphicon glyphicon-cog"></span> Edit</a></td>
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
//              $('.datatable').DataTable();

            $('.datatable').dataTable( {
                "aoColumns": [
                  { "bSortable": false },
                  null,
                  null,
                  null,
                  null
            ] } );
        });
    </script>
@endsection

@section('css')
    <link href="{{ asset('/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection