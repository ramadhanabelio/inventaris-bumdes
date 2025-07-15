<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Peralatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            margin: 0;
            padding: 20px;
        }

        .header {
            position: relative;
            margin-bottom: 25px;
            height: 80px;
        }

        .header img {
            position: absolute;
            left: 0;
            top: 0;
            width: 50px;
        }

        .header .title {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: max-content;
        }

        .header h2 {
            margin: 5px 0;
            font-size: 22px;
        }

        .header p {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            font-size: 13px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px 10px;
            vertical-align: top;
        }

        th {
            background-color: #f4f4f4;
            text-align: center;
        }

        td.center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('img/logo.png') }}" alt="Logo">
        <div class="title">
            <h2>Laporan Peralatan</h2>
            <p>BUMDes Sumber Rezeki - Desa Bantan Sari</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Tanggal Input</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $index => $inv)
                <tr>
                    <td class="center">{{ $index + 1 }}.</td>
                    <td>{{ $inv->name }}</td>
                    <td>{{ $inv->category ?? '-' }}</td>
                    <td>{{ $inv->unit ?? '-' }}</td>
                    <td>Rp. {{ number_format($inv->price ?? 0, 0, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($inv->created_at)->translatedFormat('d F Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
