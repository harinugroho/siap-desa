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
    <table>
        <tr style="width:100%;">
            <td style="width:90%;">
                <table>
                    <tr><td>PEMERINTAH DESA/KELURAHAN</td><td>: ........... </td></tr>

                    <tr><td>KECAMATAN</td><td>: ...........</td></tr>

                    <tr><td>KABUPATEN</td><td>: ..................</td></tr>
                </table>    
            </td>
            <td style="width:10%;">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(150)->generate(URL::to('generate/'))) }} ">
            </td>
        </tr>
    </table>
                <center>
                SURAT KETERANGAN RIWAYAT TANAH
                <br>
                No: ................
                </center>

    <p>Kami yang bertanda tangan di bawah ini, Luraj / Kepala Desa: ...... , Kecamatan ......, Kabupaten ......, dengan ini menerangkan dengan sebenar-benarnya, bahwa tanah yang dimiliki oleh ......... seluas ± ......m2, adalah betul-betul merupakan tanah Milik Adat sejak sebelum tanggal 14 September 1960. </p>
    <p>Adapun tanah tersebut, terletak pada Persil ......, Blok ......, Kampung ......, Desa/Kelurahan ......, Kecamatan ......, Kabupaten .......</p>
    <p><b><u>Dengan batas-batas sebagai berikut:</u></b></p>
    <table class="isian">
        <tr>
            <td>UTARA</td>
            <td>: ........</td>
        </tr>
        <tr>
            <td>TIMUR</td>
            <td>: ........</td>
        </tr>
        <tr>
            <td>SELATAN&nbsp;&nbsp;</td>
            <td>: ........</td>
        </tr>
        <tr>
            <td>BARAT</td>
            <td>: ........</td>
        </tr>
    </table>

    <p>Dan menurut catatan di Kantor kami, Riwayat Tanah tersebut adalah sebagai berikut: </p>
    <ol>
        <li>Tanggal ......, atas nama ......, tercatat dalam buku C No. ...... </li>
        <li>Tanggal ......, beralih kepada ....... Berdasarkan ...... </li>
    </ol>


    <p>Kemudian perlu kami jelaskan pula, bahwa tanah tersebut <u>TIDAK DALAM SENGKETA</u> baik pemiliknya maupun batas-batasnya, dan juga sampai saat ini belum mempunyai <u>SERTIPIKAT/SERTIPIKAT SEMENTARA</u>. 
    </p>

    <p>Demikian Surat Keterangan ini kami buat dengan sebenarnya dan apabila Surat Keterangan ini tidak benar, kami bersedia dituntut sesuai hukum yang berlaku. 
    </p>

    <table style="width:100%;">
        <tr>
            <td style="width:60%;">
                <b>SAKSI-SAKSI</b>
                <table>
                    <tr>
                        <td>............</td>
                        <td>(...........)</td>
                    </tr>
                    <tr style="padding-top: 25px;">
                        <td>.............</td>
                        <td>(...........)</td>
                    </tr>
                </table>
            </td>
            <td style="width:40%;">
                <p>Nomor:</p>
                <p>LURAH / KEPALA DESA</p>
                <br>
                <br>
                <br>
                <br>
                <u>..........................................</u>
                <p> NIP .................. </p>

            </td>
        </tr>
    </table>
    </body>
    </html>
