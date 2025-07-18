<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Peminjaman BUMDes</title>
</head>

<body>
    <h3>Halo, {{ $loan->user->name }},</h3>

    @if ($loan->status === 'Dipinjam')
        <p>Permintaan Anda sedang diproses. Silakan tunggu konfirmasi lebih lanjut dari kami.</p>
    @else
        <p>Permintaan peminjaman Anda dengan rincian berikut telah <strong>{{ $loan->status }}</strong>:</p>
    @endif

    <ul>
        <li>Nama Barang: {{ $loan->item->name }}</li>
        <li>Tanggal Pinjam: {{ $loan->borrowed_date }}</li>
        <li>Tanggal Kembali: {{ $loan->return_date }}</li>
    </ul>

    @if ($loan->status === 'Disetujui')
        <p>Silakan datang untuk mengambil barang sesuai jadwal. Terima kasih telah menggunakan layanan kami.</p>
    @elseif($loan->status === 'Ditolak')
        <p>Mohon maaf, permintaan Anda tidak dapat disetujui. Jika ada pertanyaan, silakan hubungi kami.</p>
    @endif

    <p>Hormat kami,<br>BUMDes Sumber Rezeki</p>
</body>

</html>
