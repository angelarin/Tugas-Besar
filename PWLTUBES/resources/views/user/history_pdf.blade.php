<!DOCTYPE html>
<html>

<head>
    <title>REPORT DATA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h1>KAS {{ Auth::user()->name }}</h1>
        <hr>
    </center>
    <div class="container-fluid" style="width: 75%">
    <div class="row">
        <h5>Histori Tagihan</h5>
        <table class='table table-bordered' id="adminTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kegiatan</th>
                    <th>Nominal</th>
                    <th>Transaction Date</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tagih as $tagi)
                    @if ($tagi->id_siswa == Auth::user()->id)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $tagi->kegiatans->nama }}</td>
                            <td>Rp{{ $tagi->total_tagihan }}</td>
                            <td>{{ $tagi->created_at }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <h5>Histori Top-up</h5>
        <table class='table table-bordered' id="adminTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bank</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Transaction Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($topup as $top)
                    @if ($top->id_siswa == Auth::user()->id)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td>{{ $top->banks->nama_bank }}</td>
                            <td>Rp{{ $top->nominal }}</td>
                            <td>{{ $top->status }}</td>
                            <td>{{ $top->created_at }}</td>

                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        @foreach ($saldos as $sal)
        @if ($sal->id_siswa == Auth::user()->id)
        <h5>Total saldo : Rp {{$sal->saldo}}</h5>
        @endif
        @endforeach
    </div>
    </div>
</body>

</html>
