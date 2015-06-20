@extends('app')

@section('content')
    <!--content-->
    <div class="header container">Koordinat Tanah</div>
    <div class="container" style="background:white;">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/tanah') }}">Pertanahan</a></li>
            <li><a href="{{ URL::to("/tanah/$tanah->id") }}">{{ $tanah->nama }}</a></li>
            <li class="active">Koordinat Tanah</li>
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
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th style="text-align:center;">Delete</th>
            </tr>
            <?php $ii=1; ?>
            @foreach($koordinat as $row)
            <tr>
                <td>{{ $ii++ }}</td>
                <td>{{ $row->latitude }}</td>
                <td>{{ $row->longitude }}</td>
                <td><a href="{{URL::to("tanah/$tanah->id/koordinat/delete/$row->id")}}">Delete</a></td>
            </tr>
            @endforeach

            <tr>
                <form action="{{ URL::to("/tanah/$tanah->id/koordinat") }}" method="POST">
                    <td>
                        Tambah Baru
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </td>
                    <td>
                        <input type="text" name="latitude" value="{{ old('latitude') }}">
                    </td>
                    <td>
                        <input type="text" name="longitude" value="{{ old('longitude') }}">
                    </td>
                    <td>
                        <input type="submit">
                    </td>
                </form>
            </tr>
        </table>
    </div>
@endsection
