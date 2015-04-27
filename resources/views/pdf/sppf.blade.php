<?php
    $nama = $order['nama'];
    $pekerjaan = $order['pekerjaan'];
    $alamat = $order['alamat'];
    $no_ktp = $order['no_ktp'];
?>
<html>
    <style>
        body {
            font-family: 'times new roman';
        }
    </style>
    <body>
    <center>
    SURAT PERNYATAAN PENGUASAAN FISIK
    <br>
    BIDANG TANAH (SPORADIK)
    </center>
    <p>Yang bertanda tangan dibawah ini :</p>

    <table>
        <tr>
            <td>Nama</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$pekerjaan}}</td>
        </tr>
        <tr>
            <td>Nomor KTP</td>
            <td>: {{$no_ktp}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$alamat}}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{$nama}}</td>
        </tr>
    </table>

    <p>Dengan ini menyatakan bahwa saya dengan itikad baik telah menguasai sebidang tanah yang terletak di :
    </p>
    <table>
        <tr>
            <td>Jalan</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>RT/RW</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Desa/Kelurahan</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Kabupaten/Kotamadya</td>
            <td>: {{$nama}}</td>
        </tr>
    </table>
    <p>Dengan batas-batas tanah :
    </p>

    <table>
        <tr>
            <td>Sebelah Utara</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Sebelah Timur</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Sebelah Selatan</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Sebelah Barat</td>
            <td>: {{$nama}}</td>
        </tr>
    </table>

    <p>Tanah tersebut saya peroleh dari	{{$nama}} sejak tahun {{$nama}}  yang saat ini saya kuasai secara terus menerus, tidak dijadikan/menjadi jaminan sesuatu hutang dan tidak dalam sengketa.
    </p>

    <p>Pernyataan ini saya buat dengan sebenarnya dan penuh tanggung jawab serta saya bersedia untuk diangkat sumpah bila diperlukan, apabila pernyataan ini tidak benar dikemudian hari ada pihak yang dirugikan, maka saya bersedia dituntut sesuai hukum yang berlaku.
    </p>

    <p>Disaksikan oleh :
    </p>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$nama}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$nama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$nama}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>{{$nama}}</td>
                        <td>(...........)</td>
                    </tr>
                    <tr>
                        <td>{{$nama}}</td>
                        <td>(...........)</td>
                    </tr>
                </table>
            </td>
            <td>
                <p>{{$nama}}</p>
                <p>Yang membuat pernyataan</p>
                <p> </p>
                <p> </p>

            </td>
        </tr>
    </table>
    </body>
    </html>