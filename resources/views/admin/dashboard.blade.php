@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p>Welcome, {{ Auth::user()->name }}</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
    <div class="container">
        <h2 class="mb-4">Inventaris Barang BUMDes Sumber Reseki</h2>

        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Data Barang</h5>
                        <p class="display-6">{{ $totalItems }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Barang Rusak</h5>
                        <p class="display-6">{{ $totalRusak }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Barang tak Terpakai</h5>
                        <p class="display-6">{{ $totalTakTerpakai }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h5>Transaksi Peminjam</h5>
        <div class="card mb-4">
            <div class="card-body">
                <p>Data transaksi peminjaman akan ditampilkan di sini (bisa menggunakan tabel).</p>
            </div>
        </div>

        <h5>Jumlah Barang Masuk dan Barang Keluar</h5>
        <div class="card">
            <div class="card-body">
                <canvas id="grafikBarang" height="100"></canvas>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('grafikBarang').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode(collect($grafikData)->pluck('label')) !!},
                    datasets: [{
                            label: 'Barang Masuk',
                            data: {!! json_encode(collect($grafikData)->pluck('masuk')) !!},
                            backgroundColor: 'rgba(54, 162, 235, 0.7)',
                        },
                        {
                            label: 'Barang Keluar',
                            data: {!! json_encode(collect($grafikData)->pluck('keluar')) !!},
                            backgroundColor: 'rgba(255, 99, 132, 0.7)',
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection
