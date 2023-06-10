@extends('layouts.app')

@section('content')
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('home') }}" class="btn btn-primary px-3 pr-2">Lihat Menu</a>
            <button class="btn btn-primary px-3">Lihat History Belanja</button>
        </div>

        <table class="table table-bordered mt-4">
            <thead>
            <tr>
                <th>Menu</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Cancel</th>
            </tr>
            </thead>
            <tbody>
            @php
                $totalHarga = 0; // Initialize the variable
            @endphp
            @foreach($keranjangs as $keranjang)
                        <tr>
                            <td>{{$keranjang->menu->menu}}</td>
                            <td>{{$keranjang->menu->harga}}</td>
                            @if ($keranjang->status == 0)
                                <td>Belum Dibayar</td>
                            @elseif ($keranjang->status == 1)
                                <td>Sudah Dibayar</td>
                            @endif
                            <td>
                                <form action="{{ route('keranjang.destroy', $keranjang->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $totalHarga += $keranjang->menu->harga;
//                             $menuId = $keranjang->menu_id;
                        @endphp


            @endforeach
            <tr>
                <td colspan="1" class="text-right"><strong>Total Harga:</strong></td>
                <td ><strong>{{ $totalHarga }}</strong></td>
            </tr>
            </tbody>
        </table>
        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{ route('keranjang.update', $keranjang->id) }}" method="POST">
                @csrf
                    @method('POST')
                    <input type="text" class="form-control" name="paymentAmount" placeholder="Bayar Disini">
                    <input type="hidden" name="totalHarga" value="{{ $totalHarga }}">
                    <button type="submit" class="btn btn-primary">Payment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
