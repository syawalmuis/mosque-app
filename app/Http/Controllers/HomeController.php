<?php

namespace App\Http\Controllers;

use App\Models\Sumbangan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $func;
    private $sumbangan;

    public function __construct()
    {
        $this->middleware('auth');
        $this->func = new Config();
        $this->sumbangan = new SumbanganController();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // ambil data
        $data = $this->sumbangan->today();

        $today_angka = $data['data'][0];
        $today_terbilang = $data['data'][1];
        // ambil semua jumlah data sumbangan
        $all = Sumbangan::all();
        // definisikan nilai awal
        $sum = 0;
        // lakukan perulangan untuk menambah semua sumbangan
        foreach ($all as $a) {
            $sum += $a->value;
        }
        // format total data sumbangan agar mudah dibaca
        $terbilang_all = $this->func->terbilang($sum);
        $sum = number_format($sum);
        // if ($today_angka === 0) {
        //     $today_terbilang = "Belum ada sumbangan masuk hari ini";
        // }
        // mengembalikan nilai dalam bentuk json
        return view('home', [
            'total' => $today_angka,
            'terbilang' => $today_terbilang,
            'all' => $sum,
            'terbilang_all' => $terbilang_all
        ]);
    }
}
