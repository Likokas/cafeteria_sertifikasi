@extends('layouts.app')

@section('content')

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h4>{{ __('You are logged in!') }}</h4>


            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('lihatkeranjang') }}" class="btn btn-primary px-3 pr-2">Lihat Keranjang</a>
                <button class="btn btn-primary px-3">Lihat History Belanja</button>
            </div>

            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th>Booths</th>
                    <th>Food Menu</th>
                    <th>Harga</th>
                    <th>Tambah ke keranjang</th>
                </tr>
                </thead>
                <tbody>
                @foreach($booths as $booth)
                <tr>
                    <td rowspan="{{ count($booth->menus) }}">{{ $booth->boothName }}</td>
                @foreach($booth->menus as $index => $menu)
                    @if($index > 0)
                        <tr>
                            @endif
                            <td>{{ $menu->menu }}</td>
                            <td>{{ $menu->harga }}</td>
                            <td>
                                <form action="{{ route('keranjang.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                    <button type="submit" class="btn btn-primary">Tambah ke keranjang</button>
                                </form>
                            </td>
                            @if($index > 0)
                        </tr>
                        @endif
                        @endforeach
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
