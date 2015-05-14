<html>
    <style>
        body {
            font-family: 'times new roman';
        }
        .isian {
            padding-left: 20px;
        }
    </style>
    <body>
    <table style="margin:0;">
        <tr>
            <td style="width:520px;">
                <center>
                SURAT PERNYATAAN PENGUASAAN FISIK
                <br>
                BIDANG TANAH (SPORADIK)
                </center>
            </td>
            <td style="width:150px; text-align:right;margin-right:0px;">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(150)->generate(URL::to('generate/'.$order['hashed']."pdf"))) }} ">
            </td>
        </tr>
    </table>

    <p>Yang bertanda tangan dibawah ini :</p>
    <table class="isian">
        <tr>
            <td>Nama</td>
            <td>: {{ $order['pemilik']->nama }}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{ $order['umur'] }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{ $order['pemilik']->pekerjaan }}</td>
        </tr>
        <tr>
            <td>Nomor KTP</td>
            <td>: {{$order['pemilik']->no_ktp}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$order['pemilik']->alamat}}</td>
        </tr>
    </table>

    <p>Dengan ini menyatakan bahwa saya dengan itikad baik telah menguasai sebidang tanah yang terletak di :
    </p>
    <table class="isian">
        <tr>
            <td>Jalan</td>
            <td>: {{$order['tanah']->jalan}}</td>
        </tr>
        <tr>
            <td>RT/RW</td>
            <td>: {{$order['tanah']->rt}} / {{$order['tanah']->rw}}</td>
        </tr>
        <tr>
            <td>Desa/Kelurahan</td>
            <td>: {{$order['tanah']->desa}}</td>
        </tr>
        <tr>
            <td>Kabupaten/Kotamadya</td>
            <td>: {{$order['tanah']->kabupaten}}</td>
        </tr>
    </table>
    <p>Dengan batas-batas tanah :
    </p>

    <table class="isian">
        <tr>
            <td>Sebelah Utara</td>
            <td>: {{$order['tanah']->batas_utara}}</td>
        </tr>
        <tr>
            <td>Sebelah Timur</td>
            <td>: {{$order['tanah']->batas_timur}}</td>
        </tr>
        <tr>
            <td>Sebelah Selatan</td>
            <td>: {{$order['tanah']->batas_selatan}}</td>
        </tr>
        <tr>
            <td>Sebelah Barat</td>
            <td>: {{$order['tanah']->batas_barat}}</td>
        </tr>
    </table>

    <p>Tanah tersebut saya peroleh dari {{$order['tanah']->nama_sebelum}} sejak tahun {{$order['tanah']->diperoleh_tahun}}  yang saat ini saya kuasai secara terus menerus, tidak dijadikan/menjadi jaminan sesuatu hutang dan tidak dalam sengketa.
    </p>

    <p>Pernyataan ini saya buat dengan sebenarnya dan penuh tanggung jawab serta saya bersedia untuk diangkat sumpah bila diperlukan, apabila pernyataan ini tidak benar dikemudian hari ada pihak yang dirugikan, maka saya bersedia dituntut sesuai hukum yang berlaku.
    </p>

    <p>Disaksikan oleh :
    </p>
    <table class="isian">
        <tr>
            <td>Nama</td>
            <td>: {{$order['sppf']->nama_1}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$order['sppf']->umur_1}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$order['sppf']->pekerjaan_1}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$order['sppf']->alamat_1}}</td>
        </tr>
    </table>
    <br>
    <table class="isian">
        <tr>
            <td>Nama</td>
            <td>: {{$order['sppf']->nama_2}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$order['sppf']->umur_2}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$order['sppf']->pekerjaan_2}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$order['sppf']->alamat_2}}</td>
        </tr>
    </table>

    <table style="width:100%;">
        <tr>
            <td style="width:60%;">
                <table>
                    <tr>
                        <td>{{$order['sppf']->nama_1}}</td>
                        <td>(...........)</td>
                    </tr>
                    <tr style="padding-top: 25px;">
                        <td>{{$order['sppf']->nama_2}}</td>
                        <td>(...........)</td>
                    </tr>
                </table>
            </td>
            <td style="width:40%;">
                <p>Cisomang Barat, {{$order['tanggal']}}</p>
                <p>Yang membuat pernyataan</p>
                <br>
                <p> {{ $order['pemilik']->nama }} </p>

            </td>
        </tr>
    </table>
    </body>
    </html>