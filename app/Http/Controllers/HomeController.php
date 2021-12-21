<?php

namespace App\Http\Controllers;

use App\Models\Sumbangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $func;

    public function __construct()
    {
        $this->middleware('auth');
        $this->func = new Config();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // ambil data
        $data = Sumbangan::where('created_at', 'LIKE', date('Y-m-d') . "%")->get();
        // ambil semua jumlah data sumbangan
        $all = Sumbangan::all();
        // definisikan nilai awal
        $sum = 0;
        $ttl = 0;
        // lakukan perulangan untuk menambah semua sumbangan
        foreach ($data as $d) {
            $sum += $d->value;
        }
        foreach ($all as $a) {
            $ttl += $a->value;
        }
        // format total data sumbangan agar mudah dibaca
        $terbilang = $this->func->terbilang($sum);
        $terbilang_all = $this->func->terbilang($ttl);
        $total = number_format($sum);
        $ttl = number_format($ttl);
        if ($sum === 0) {
            $terbilang = "Belum ada sumbangan masuk hari ini";
        }
        // mengembalikan nilai dalam bentuk json
        return view('home', [
            'total' => $total,
            'terbilang' => $terbilang,
            'all' => $ttl,
            'terbilang_all' => $terbilang_all
        ]);
    }
}
