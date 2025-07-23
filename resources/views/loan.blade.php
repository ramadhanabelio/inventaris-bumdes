@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('borrow.loan.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Peminjaman Barang</div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_name">Peminjam</label>
                                        <input type="text" id="user_name" class="form-control"
                                            value="{{ auth()->user()->name }}" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="item_id">Barang</label>
                                        <select name="item_id" id="item_id" class="form-control" required>
                                            <option value="">Pilih Barang</option>
                                            @foreach ($items as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('item_id') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('item_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="borrowed_date">Tanggal Pinjam</label>
                                        <input type="date" name="borrowed_date" id="borrowed_date" class="form-control"
                                            value="{{ old('borrowed_date') }}" required>
                                        @error('borrowed_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="return_date">Tanggal Kembali</label>
                                        <input type="date" name="return_date" id="return_date" class="form-control"
                                            value="{{ old('return_date') }}" required>
                                        @error('return_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-action text-right">
                            <button type="submit" class="btn btn-success">Pinjam</button>
                            <a href="{{ route('borrow.home') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const borrowedInput = document.getElementById('borrowed_date');
            const returnInput = document.getElementById('return_date');

            const today = new Date();
            const todayStr = today.toISOString().split('T')[0];
            borrowedInput.min = todayStr;

            borrowedInput.addEventListener('change', function() {
                const borrowedDate = new Date(borrowedInput.value);
                if (isNaN(borrowedDate.getTime())) return;

                const minReturnDate = borrowedDate;
                const maxReturnDate = new Date(borrowedDate);
                maxReturnDate.setDate(maxReturnDate.getDate() + 6);

                returnInput.min = minReturnDate.toISOString().split('T')[0];
                returnInput.max = maxReturnDate.toISOString().split('T')[0];

                if (returnInput.value) {
                    const returnVal = new Date(returnInput.value);
                    if (returnVal < minReturnDate || returnVal > maxReturnDate) {
                        returnInput.value = "";
                    }
                }
            });
        });
    </script>
@endsection
