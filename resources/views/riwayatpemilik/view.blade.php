@extends('app')

@section('content')
<div class="header container">Tambah Riwayat Pemilik</div>
    <div class="container" action="#" method="post">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/tanah') }}">Pertanahan</a></li>
            <li><a href="{{ URL::to("/tanah/$tanah->id") }}">{{ $tanah->nama }}</a></li>
            <li class="active">Riwayat Pemilik</li>
        </ol>
        <a href="{{ URL::to("/tanah/riwayat/$tanah->id/add") }}"><span class="btn btn-primary">Tambah Riwayat Tanah</span></a>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <table>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Tanggal</td>
                    <td>No Buku C</td>
                    <td>Edit</td>
                    <td>Hapus</td>
                </tr>
            </thead>
            <tbody>
                <?php $ii=1; ?>
                @foreach($riwayat as $row)
                    <tr>
                        <td>{{ $ii++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->no_buku_c }}</td>
                        <td><a href="{{ URL::to("/tanah/riwayat/$row->id/edit") }}"><span class="btn btn-info">Edit</span></a></td>
                        <td>
                            <form action="{{ URL::to("/tanah/riwayat/$row->id/delete") }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_tanah_id" value="{{ $row->tanah_id }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection