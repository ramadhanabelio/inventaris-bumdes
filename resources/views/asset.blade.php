@extends('layouts.app')

@section('content')
    <div class="page-inner mt--5">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round text-center">
                        <div class="card-body">
                            <div class="icon-big mb-3">
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        style="width: 100%; height: 150px; object-fit: contain; border-radius: 8px;">
                                @else
                                    <i class="fas fa-box text-secondary" style="font-size: 80px;"></i>
                                @endif
                            </div>
                            <div class="numbers">
                                <p class="card-category">
                                    {{ $item->category ? $item->category->name : 'Kategori Tidak Ada' }}
                                </p>
                                <h4 class="card-title">{{ $item->name }}</h4>
                                <p class="card-category text-muted" style="font-size: 0.85rem;">
                                    {{ $item->brand ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
