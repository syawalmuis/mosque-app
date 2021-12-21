<?php

namespace App\Http\Controllers;

use App\Models\Sumbangan;
use Illuminate\Http\Request;


class SumbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $func;
    public function __construct()
    {
        $this->func = new Config;
    }


    public function index()
    {
        $data = Sumbangan::where('updated_at', 'LIKE', $this->date() . "%")->get();
        return view('home', []);
    }

    public function read()
    {
        $data = Sumbangan::all();
        return view('tes', [
            'sumbangan' => $data
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function show(Sumbangan $sumbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumbangan $sumbangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sumbangan $sumbangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumbangan $sumbangan)
    {
        //
    }

    public function today()
    {
        // ambil data
        $data = Sumbangan::where('created_at', 'LIKE', $this->func->date() . "%")->get();
        // definisikan nilai awal
        $sum = 0;
        // lakukan perulangan untuk menambah semua sumbangan
        foreach ($data as $d) {
            $sum += $d->value;
        }
        // format total data sumbangan agar mudah dibaca
        $total = number_format($sum);
        // mengembalikan nilai dalam bentuk json
        $result = [
            "status" => 'ok',
            "message" => "data per hari ini berhasil di jumlahkan",
            "data" => [$total, $this->func->terbilang($sum)]
        ];
        if ($sum === 0) {
            return response()->json([
                "status" => 'ok',
                "message" => "data per hari ini berhasil di jumlahkan",
                "data" => [$total, "Belum ada sumbangan masuk hari ini"]
            ]);
        }
        return response()->json($result);
    }

    public function month()
    {
        // ambil data
        $data = Sumbangan::where('created_at', 'LIKE', $this->func->thisMonth() . "%")->get();
        // definisikan nilai awal
        $sum = 0;
        // lakukan perulangan untuk menambah semua sumbangan
        foreach ($data as $d) {
            $sum += $d->value;
        }
        // format total data sumbangan agar mudah dibaca
        $total = number_format($sum);
        // mengembalikan nilai dalam bentuk json
        $result = [
            "status" => 'ok',
            "message" => "data per hari ini berhasil di jumlahkan",
            "data" => [$total, $this->func->terbilang($sum)]
        ];
        return response()->json($result);
    }
}
