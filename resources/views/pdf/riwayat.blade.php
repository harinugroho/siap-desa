<html>
    <style>
        body {
            font-family: 'times new roman';
        }
        .isian {
            padding-left: 20px;
        }
        p {
            margin: 0px;
            padding: 0px;
        }
    </style>
    <body>
    <table>
        <tr style="width:100%;">
            <td style="width:90%;">
                <table>
                    <tr><td>PEMERINTAH DESA/KELURAHAN</td><td>: {{ $data['tanah']->desa }}</td></tr>

                    <tr><td>KECAMATAN</td><td>: {{ $data['tanah']->kecamatan }}</td></tr>

                    <tr><td>KABUPATEN</td><td>: {{ $data['tanah']->kabupaten }}</td></tr>
                </table>    
            </td>
            <td style="width:10%;">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(150)->generate(URL::to('generate/'.$data['hashed'].'pdf'))) }} ">
            </td>
        </tr>
    </table>
                <center>
                SURAT KETERANGAN RIWAYAT TANAH
                <br>
                No: {{ $data['surat']->no_surat }}
                </center>

    <p>Kami yang bertanda tangan di bawah ini, Luraj / Kepala Desa: {{ $data['tanah']->desa }}, Kecamatan {{ $data['tanah']->kecamatan }}, Kabupaten {{ $data['tanah']->kabupaten }}, dengan ini menerangkan dengan sebenar-benarnya, bahwa tanah yang dimiliki oleh {{ $data['tanah']->nama }} seluas ± {{ $data['tanah']->luas }} m2, adalah betul-betul merupakan tanah Milik Adat sejak sebelum tanggal 14 September 1960. </p>
    <p>Adapun tanah tersebut, terletak pada Persil {{ $data['tanah']->no_persil }}, Blok {{ $data['tanah']->blok }}, Kampung {{ $data['tanah']->kampung }}, Desa/Kelurahan {{ $data['tanah']->desa }}, Kecamatan {{ $data['tanah']->kecamatan }}, Kabupaten {{ $data['tanah']->kabupaten }}</p>
    <p><b><u>Dengan batas-batas sebagai berikut:</u></b></p>
    <table class="isian">
        <tr>
            <td>UTARA</td>
            <td>: {{ $data['tanah']->batas_utara }}</td>
        </tr>
        <tr>
            <td>TIMUR</td>
            <td>: {{ $data['tanah']->batas_timur }}</td>
        </tr>
        <tr>
            <td>SELATAN</td>
            <td>: {{ $data['tanah']->batas_selatan }}</td>
        </tr>
        <tr>
            <td>BARAT</td>
            <td>: {{ $data['tanah']->batas_barat }}</td>
        </tr>
    </table>

    <p>Dan menurut catatan di Kantor kami, Riwayat Tanah tersebut adalah sebagai berikut: </p>
    <ol>
        <?php $ok = 1; ?>
        @foreach($data['riwayat'] as $row)
            @if($ok++==1)
                <li>Tanggal {{$row->tanggal}}, atas nama {{$row->nama}}, tercatat dalam buku C No. {{$row->no_buku_c}}</li>
            @else
                <li>Tanggal {{$row->tanggal}}, beralih kepada {{$row->nama}} Berdasarkan {{$row->no_buku_c}} </li>
            @endif
        @endforeach
    </ol>


    <p>Kemudian perlu kami jelaskan pula, bahwa tanah tersebut <u>TIDAK DALAM SENGKETA</u> baik pemiliknya maupun batas-batasnya, dan juga sampai saat ini belum mempunyai <u>SERTIPIKAT/SERTIPIKAT SEMENTARA</u>. 
    </p>

    <p>Demikian Surat Keterangan ini kami buat dengan sebenarnya dan apabila Surat Keterangan ini tidak benar, kami bersedia dituntut sesuai hukum yang berlaku. 
    </p>

    <table style="width:100%;">
        <tr>
            <td style="width:60%;">
                <b>SAKSI-SAKSI</b>
                <br><br>
                <table>
                    <tr>
                        <td>{{$data['surat']->saksi_1}}</td>
                        <td>(...........)</td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr style="padding-top: 25px;">
                        <td>{{$data['surat']->saksi_2}}</td>
                        <td>(...........)</td>
                    </tr>
                </table>
            </td>
            <td style="width:40%;">
                <p>Nomor: {{$data['surat']->no_surat}}</p>
                <p>LURAH / KEPALA DESA</p>
                <br>
                <br>
                <br>
                <br>
                <u>{{$data['surat']->nama_lurah}}</u>
                <p> NIP {{$data['surat']->nip_lurah}}</p>

            </td>
        </tr>
    </table>
    </body>
    </html>
