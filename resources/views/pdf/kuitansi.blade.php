<html>
    <style>
        body {
            font-family: 'times new roman';
        }
        .square {
            border: solid 1px black;
            margin:3px;
            padding: 3px;
        }
        .outer {
            padding: 6px;
            padding-right: 10px;
            margin-right: 10px;
        }
        .under {
            border-bottom: solid 1px black;
        }
        .title {
            font-weight: bold;
            font-size: 15pt;
        }
        .jum {
            font-weight: bold;
            font-size: 13pt;
            text-transform: uppercase;
            font-style: italic;
        }
    </style>
    <body>
    <p align="center" class="title">KUITANSI</p>

<table style="width:100%;">
    <tbody>
        <tr>
            <td style="width:15%;">No</td>
            <td style="width:1%;"> : </td>
            <td style="width:84%;">{{$data['no']}}</td>
        </tr>
        <tr>
            <td>Sudah Terima dari</td>
            <td> : </td>
            <td>{{$data['nama']}}</td>
        </tr>
        <tr>
            <td>Banyaknya Uang</td>
            <td> : </td>
            <td class="square">{{$data['terbilang']}}</td>
        </tr>
        <tr>
            <td>Untuk Pembayaran</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="under">{{$data['keterangan']}}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="under">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
<table style="width:100%;">
    <tr>
        <td style="width:50%;">&nbsp;</td>
        <td style="width:20%;">&nbsp;</td>
        <td style="width:30%; text-align:center;" class="under">{{$data['tanggal']}}</td>
    </tr>
    <tr class="jum">
        <td class="square outer">JUMLAH: Rp {{$data['nominal']}}</td>
        <td>&nbsp;</td>
        <td style=" text-align:center;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style=" text-align:center;"><br/><br/><br/>Petugas</br></td>
    </tr>
</table>

<p>&nbsp;</p>

    </body>

</html>
