@extends('app')
@section('content')
    <!--content-->
    <div class="container topper" style="padding:10px;"></div>
    <div class="container" style="background:white;">

        <div class="row">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td width="140px"><label>No. SPPT PBB</label></td>
                        <td>{{ $tanah->no_sppt_pbb }}</td>
                    </tr>
                    <tr>
                        <td><label>Alamat</label></td>
                        <td>{{ $tanah->jalan }}</td>
                    </tr>
                    <tr>
                        <td><label>RT / RW / Kode Pos</label></td>
                        <td>{{ $tanah->rt }} / {{ $tanah->rw }} / {{ $tanah->kodepos }}</td>
                    </tr>
                    <tr>
                        <td><label>Desa / Kelurahan</label></td>
                        <td>{{ $tanah->desa }}</td>
                    </tr>
                    <tr>
                        <td><label>Kabupaten / Kota</label></td>
                        <td>{{ $tanah->kabupaten }}</td>
                    </tr>
                    <tr>
                        <td><label>Diperoleh Dari</label></td>
                        <td>{{ $tanah->nama_sebelum }}</td>
                    </tr>
                    <tr>
                        <td><label>Tahun Diperoleh</label></td>
                        <td>{{ $tanah->diperoleh_tahun }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table>
                    <tr>
                        <td width="100px"><label>Atas Nama</label></td>
                        <td>{{ $tanah->nama }}</td>
                    </tr>
                    <tr>
                        <td width="200px"><label>Batas Utara</label></td>
                        <td>{{ $tanah->batas_utara }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Batas Timur</label></td>
                        <td>{{ $tanah->batas_timur }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Batas Selatan</label></td>
                        <td>{{ $tanah->batas_selatan }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Batas Barat</label></td>
                        <td>{{ $tanah->batas_barat }}</td>
                    </tr>
                    <tr>
                        <td width="100px"><label>Luas</label></td>
                        <td>{{ $tanah->luas }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>

        <h4>Dokumen</h4>

        <table class="table table-striped">
            <tr>
                <th>Dokumen</th>
                <th style="text-align:center;">Download</th>
            </tr>
            <tr>
                <td>Surat Pernyataan Penguasaan Fisik</td>
                <td style="text-align:center;"><a href="#">Download</a></td>
            </tr>
            <tr>
                <td>Surat Kuasa</td>
                <td style="text-align:center;"><a href="#">Lengkapi Data</a></td>
            </tr>
        </table>
    </div>

@endsection