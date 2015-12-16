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
                        <td width="100px"><label>Letter C</label></td>
                        @if($tanah->scan_letter_c != '')
                        <td><a href="/public/scan_letter_c/{{ $tanah->scan_letter_c }}">Download</a></td>
                        @else
                        <td><strike>Download</strike></td>
                        @endif
                    </tr>
                    <tr>
                        <td width="100px"><label>Download Salinan</label></td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <tr>
                    </table>
                    <div class="buttons">
                        <div class="row">
                            <!-- <td> -->
                                <a href="{{ URL::to("/konflik/$tanah->id") }}"><span class="btn btn-success">Lihat Konflik</span></a>
                            <!-- </td> -->
                            <!-- <td> -->
                                <a href="{{ URL::to("/tanah/riwayat/$tanah->id") }}"><span class="btn btn-success">Lihat Riwayat Pemilik</span></a>
                            <!-- </td> -->
                            <!-- <td> -->
                                <a href="{{ URL::to("/tanah/ubah_pemilik/$tanah->id") }}"><span class="btn btn-danger">Lakukan Peralihan Tanah</span></a>
                            <!-- </td> -->

                            {{--<td>--}}
                                {{--@if ((count($riwayat)>0 && $riwayat[0]->status == 0) ||--}}
                                    {{--(count($allSppf)>0 && $allSppf[0]->status == 0))--}}
                                    {{--<a href="{{URL::to("administrasi/bayar/$tanah->id")}}"><span class="btn btn-info">Bayar Administrasi</span></a>--}}
                                {{--@else--}}
                                    {{--<span class="btn btn-info" disabled>Administrasi Lunas</span>--}}
                                {{--@endif--}}
                            {{--</td>--}}
                        </div>
                        <div class="row" style="padding-top:8px;">
                            <!-- <td> -->
                                <a href="{{ URL::to("/peta/tanah/$tanah->id") }}"><span class="btn btn-success">Lihat Peta</span></a>
                            <!-- </td> -->
                            <!-- <td> -->
                                <a href="{{ URL::to("/tanah/$tanah->id/koordinat") }}"><span class="btn btn-success">Lihat Koordinat</span></a>
                            <!-- </td> -->
                        </div>
                    </div>
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
                <th>Pemohon</th>
                <th style="text-align:center;">Edit</th>
                <th style="text-align:center;">Download</th>
                <th style="text-align:center;">Status Pembayaran</th>
            </tr>
            <tr>
                <td>Surat Pernyataan Penguasaan Fisik</td>
                @if (count($allSppf) == 0)
                    <td>--</td>
                    <td style="text-align:center;"><a href="{{ URL::to("surat/sppf/$tanah->id/create") }}">Buat Surat</a></td>
                    <td style="text-align:center;"><strike>Download</strike></td>
                    <td style="text-align:center;">Lunas</td>
                @elseif ($allSppf[0]->status == 0)
                    <td>{{ $allSppf[0]->pemohon }}</td>
                    <td style="text-align:center;"><a href="{{ URL::to("surat/sppf/".$allSppf[0]->id."/edit") }}">Ubah Surat</a></td>
                    <!-- <td style="text-align:center;"><a href="{{URL::to("administrasi/bayar/sppf/".$allSppf[0]->id)}}" class="btn btn-danger">Bayar</a></td> -->
                    <td style="text-align:center;"><a data-toggle="modal" data-target="#kuitansi"class="btn btn-danger" data-url="{{URL::to("administrasi/bayar/sppf/".$allSppf[0]->id)}}">Bayar</a></td>
                    <td style="text-align:center;">Belum Lunas</td>
                @else
                    <td>{{ $allSppf[0]->pemohon }}</td>
                    <td style="text-align:center;"><a href="{{ URL::to("surat/sppf/".$allSppf[0]->id."/edit") }}">Ubah Surat</a></td>
                    <td style="text-align:center;"><a href="{{ URL::to("generate/sppf/".$allSppf[0]->id) }}" class="btn btn-success">Download</a></td>
                    <td style="text-align:center;">Lunas</td>
                @endif
            </tr>
            <tr>
                <td>Surat Keterangan Riwayat Pemilik Tanah</td>
                @if (count($riwayat) == 0)
                    <td>--</td>
                    <td style="text-align:center;"><a href="{{ URL::to("surat/riwayat/$tanah->id/create") }}">Buat Surat</a></td>
                    <td style="text-align:center;"><strike>Download</strike></td>
                    <td style="text-align:center;">Lunas</td>
                @elseif ($riwayat[0]->status == 0)
                    <td>{{ $riwayat[0]->pemohon }}</td>
                    <td style="text-align:center;"><a href="{{ URL::to("surat/riwayat/".$riwayat[0]->id."/edit") }}">Ubah Surat</a></td>
                    <!-- <td style="text-align:center;"><a href="{{URL::to("administrasi/bayar/riwayat/".$riwayat[0]->id)}}" class="btn btn-danger">Bayar</a></td> -->
                    <td style="text-align:center;"><a data-toggle="modal" data-target="#kuitansi"class="btn btn-danger"  data-url="{{URL::to("administrasi/bayar/riwayat/".$riwayat[0]->id)}}">Bayar</a></td>
                    
                    <td style="text-align:center;">Belum Lunas</td>
                @else
                    <td>{{ $riwayat[0]->pemohon }}</td>
                    <td style="text-align:center;"><a href="{{ URL::to("surat/riwayat/".$riwayat[0]->id."/edit") }}">Ubah Surat</a></td>
                    <td style="text-align:center;"><a href="{{ URL::to("generate/riwayat/".$riwayat[0]->id) }}" class="btn btn-success">Download</a></td>
                    
                    <td style="text-align:center;">Lunas</td>
                @endif
            </tr>
        </table>

        <div class="modal fade" id="kuitansi" tabindex="-1" role="dialog" aria-labelledby="kuitansiLabel">
            <form name="form_modal" method="POST">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="kuitansiLabel">Masukkan Nomor Kuitansi</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                            <label>Nomor Kuitansi</label><br/>
                            <input name="no_kuitansi" type="text" class="form-control" placeholder="Nomor Kuitansi" autofocus>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Bayar"/>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </div>

@endsection

@section('css')
    <style>
        .buttons tr td {
            padding-right: 5px;
        }
    </style>
@endsection
@section('script')
    <script>
        $('#kuitansi').on('show.bs.modal', function(e) {
        //get data-id attribute of the clicked element
        var url = $(e.relatedTarget).data('url');
            console.log(url);

        //populate the textbox
        $(e.currentTarget).find('form[name="form_modal"]').attr('action',url);
        });

    </script>
@endsection