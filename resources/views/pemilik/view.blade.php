@extends('app')

@section('content')
    <!--content-->
    <div class="container topper" style="padding:10px;"></div>
    <div class="container" style="background:white;">

        <div class="row">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td width="100px"><label>No. KTP</label></td>
                        <td>{{ $pemilik->no_ktp }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Nama</label></td>
                        <td>{{ $pemilik->nama }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Alamat</label></td>
                        <td>{{ $pemilik->alamat }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table>
                    <tr>
                        <td width="200px"><label>Tempat/Tanggal Lahir</label></td>
                        <td>{{ $pemilik->tempat_lahir }} / {{ $pemilik->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Agama</label></td>
                        <td>{{ $pemilik->agama }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Pekerjaan</label></td>
                        <td>{{ $pemilik->pekerjaan }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>

        <h4>Daftar Tanah &nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="{{ URL::to("tanah/$pemilik->id/create") }}" role="button">Tambahkan Tanah</a>
        </h4>

        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>No. SPPT PBB</th>
                <th>Alamat</th>
                <th style="text-align:center;"> </th>
            </tr>
            <?php $ii=1; ?>
            @foreach($tanah as $row)
            <tr>
                <td>{{ $ii++ }}</td>
                <td>{{ $row->no_sppt_pbb }}</td>
                <td>{{ $row->jalan }}</td>
                <td style="text-align:center;"><a href="{{ URL::to("tanah/$row->id") }}"><span class="glyphicon glyphicon-file"></span></a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
