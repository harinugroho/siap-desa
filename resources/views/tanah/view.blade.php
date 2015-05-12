@extends('app')
@section('content')
    <!--content-->
    <div class="header container">Data Tanah - {{ $tanah->no_sppt_pbb }}</div>
    <div class="container" style="background:white;">

        <div class="row">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td width="140px"><label>No. SPPT PBB</label></td>
                        <td>{{ $tanah->no_sppt_pbb }}</td>
                    </tr>
                    <tr>
                        <td><label>No. Persil</label></td>
                        <td>{{ $tanah->no_persil }}</td>
                    </tr>
                    <tr>
                        <td><label>No Buku C</label></td>
                        <td>{{ $tanah->no_buku_c}}</td>
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
                        <td><label>Blok</label></td>
                        <td>{{ $tanah->blok }}</td>
                    </tr>
                    <tr>
                        <td><label>Kampung</label></td>
                        <td>{{ $tanah->kampung }}</td>
                    </tr>
                    <tr>
                        <td><label>Desa / Kelurahan</label></td>
                        <td>{{ $tanah->desa }}</td>
                    </tr>
                    <tr>
                        <td><label>Kecamatan</label></td>
                        <td>{{ $tanah->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td><label>Kabupaten / Kota</label></td>
                        <td>{{ $tanah->kabupaten }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table>
                    <tr>
                        <td><label>Status</label></td>
                        <td>
                            <a href="{{ URL::to("tanah/$tanah->id/status/masalah") }}">
                                @if ($tanah->masalah)
                                    <span class="btn btn-xs btn-warning">Bermasalah</span>
                                @else
                                    <span class="btn btn-xs btn-success">Tidak Bermasalah</span>
                                @endif
                            </a>
                            <a href="{{ URL::to("tanah/$tanah->id/status/keberatan/") }}">
                                @if ($tanah->keberatan)
                                    <span class="btn btn-xs btn-warning">Ada Keberatan</span>
                                @else
                                    <span class="btn btn-xs btn-success">Tidak Ada Keberatan</span>
                                @endif
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Diperoleh Dari</label></td>
                        <td>{{ $tanah->nama_sebelum }}</td>
                    </tr>
                    <tr>
                        <td><label>Tahun Diperoleh</label></td>
                        <td>{{ $tanah->diperoleh_tahun }}</td>
                    </tr>
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
                    <tr>
                        <td>
                            <span class="btn btn-success">Lihat Peta</span>
                            <a href="{{ URL::to("/tanah/riwayat/$tanah->id") }}"><span class="btn btn-success">Lihat Riwayat Pemilik</span></a>
                            <a href="{{ URL::to("/tanah/ubah_pemilik/$tanah->id") }}"><span class="btn btn-danger">Lakukan Peralihan Tanah</span></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>

        <h4>Dokumen</h4>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-striped">
            <tr>
                <th>Dokumen</th>
                <th style="text-align:center;">Edit</th>
                <th style="text-align:center;">Download</th>
            </tr>
            <tr>
                <td>Surat Pernyataan Penguasaan Fisik</td>
                @if (count($allSppf) == 0)
                    <td style="text-align:center;"><a href="{{ URL::to("surat/sppf/$tanah->id/create") }}">Buat Surat</a></td>
                    <td style="text-align:center;"><strike>Download</strike></td>
                @else
                    <td style="text-align:center;"><a href="{{ URL::to("surat/sppf/".$allSppf[0]->id."/edit") }}">Ubah Surat</a></td>
                    <td style="text-align:center;"><a href="{{ URL::to("generate/sppf/".$allSppf[0]->id) }}">Download</a></td>
                @endif
            </tr>
            <tr>
                <td>Surat Keterangan Riwayat Pemilik Tanah</td>
                @if (count($riwayat) == 0)
                    <td style="text-align:center;"><a href="{{ URL::to("surat/riwayat/$tanah->id/create") }}">Buat Surat</a></td>
                    <td style="text-align:center;"><strike>Download</strike></td>
                @else
                    <td style="text-align:center;"><a href="{{ URL::to("surat/riwayat/".$riwayat[0]->id."/edit") }}">Ubah Surat</a></td>
                    <td style="text-align:center;"><a href="{{ URL::to("generate/riwayat/".$riwayat[0]->id) }}">Download</a></td>
                @endif
            </tr>
        </table>
    </div>

@endsection