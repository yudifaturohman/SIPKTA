<?php

namespace App\Http\Controllers;

use App\Models\Laporanpengaduan;
use Illuminate\Http\Request;

class LaporanpengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('laporanpengaduan.index', [
            'title' => 'Dashboard | Pengaduan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('laporanpengaduan.index', [
            'title' => 'Dashboard | Buat Pengaduan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return auth()->user()->id;
        $validatedData = $request->validate(['namapelapor' => 'required']);
        $validatedData['user_id'] = auth()->user()->id;
        Laporanpengaduan::create($validatedData);
        return 'berhasil';
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporanpengaduan $laporanpengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporanpengaduan $laporanpengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporanpengaduan $laporanpengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporanpengaduan $laporanpengaduan)
    {
        //
    }
}
