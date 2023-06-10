<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjangs = Keranjang::with('menu')->get();

        return view('lihatkeranjang', compact('keranjangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menuId = $request->input('menu_id');

        $user = Auth::user();

        $keranjang = new Keranjang();
        $keranjang->user_id = $user->id;
        $keranjang->menu_id = $menuId;
        $keranjang->status = 0;
        $keranjang->save();

        return redirect('home')->with('status', 'Menu Telah Telah Masuk Keranjang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $totalHarga = (float) $request->input('totalHarga');
        $paymentAmount = (float) $request->input('paymentAmount');

//        dd($keranjang,$totalHarga, $paymentAmount);

            if ($paymentAmount < $totalHarga) {
                return redirect('home')->with('status', 'Payment failed. Please enter an amount equal to or greater than the total price.');
            } elseif ($paymentAmount == $totalHarga) {
                $keranjang->status = 1;
                $keranjang->save();

                return redirect('home')->with('status', 'Payment successful. Order status updated to paid.');
            } elseif ($paymentAmount > $totalHarga) {
                $keranjang->status = 1;
                $keranjang->save();

                $changeAmount = $paymentAmount - $totalHarga;
                return redirect('home')->with('status', 'Payment successful. Order status updated to paid. Your change amount is ' . $changeAmount);
            }


            dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->route('lihatkeranjang')
            ->with('success', 'Menu Berhasil Di Cancel.');
    }
}
