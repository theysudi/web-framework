<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function index()
    {
        return view('hitung/index');
    }

    public function luasPersegiPanjang(Request $request)
    {
        if ($request->panjang) {
            $luas = $request->panjang * $request->lebar;

            return view('hitung/hasil', [
                'fungsi' => 'Luas Persegi Panjang',
                'hasil' => $luas,
            ]);
        } else {
            return redirect('hitung');
        }
    }
}
