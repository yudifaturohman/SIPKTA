<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN PENGADUAN {{ date('Y') }}</title>
</head>

<body>

    <table border="0" style="margin: 0px auto;">
        <tr>
            <td><img src="{{ public_path('/img/logo.png') }}" width="150" height="150" alt=""></td>
            <td style="padding-left: 20px; padding-right: 20px;">
                <center>
                    <h1 style="margin-bottom: 10px; margin-top: 0px;">KOMNAS Perlindungan Anak Provinsi Banten</h1>
                    <h3 style="margin-bottom: 0px; margin-top: 0px;">Bukit Permai Blok E No. 18 RT. 01 RW. 15 Kel.
                        Serang Kec. Serang Kota Serang Banten</h3>
                </center>
            </td>
        </tr>
    </table>
    <hr>
    <table border="1" cellspacing="0" cellpadding="2" style="width: 100%; margin-top:20px; border: 1px solid #000">

        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pelapor</th>
                <th>Nama Korban</th>
                <th>Jenis Kelamin</th>
                <th>Umur Korban</th>
                <th>Kasus</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>




            @if ($pengaduans->count())
            @foreach($pengaduans as $p)
            <tr>
                <td style="text-align: center;">{{ $loop->iteration }}</td>
                <td style="text-align: center;">{{$p->waktu_kejadian}}</td>
                <td style="text-align: center;">{{$p->nama_pelapor}}</td>
                <td style="text-align: center;">{{$p->nama_korban}}</td>
                <td style="text-align: center;">{{$p->jenis_kelamin_korban}}</td>
                <td style="text-align: center;">{{$p->usia_korban}}</td>
                <td style="text-align: center;">{{$p->perkara_pelaporan}}</td>
                <td style="text-align: center;">{{$p->alamat_korban}}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="8">
                    <h4 style="margin-top: 20px; text-align: center;">Data tidak belum tersedia</h1>
                </td>
            </tr>
            @endif


        </tbody>
    </table>

</body>

</html>