<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        if (auth()->user()->role === 1) {
            $dataPengaduan = Pengaduan::select(DB::raw("count(*) as pengaduan"))
                ->where('konselor', 'provinsi')
                ->groupBy(DB::raw("YEAR(created_at)"))
                ->pluck('pengaduan');

            $tahun = Pengaduan::select(DB::raw("YEAR(created_at) as year"))
                ->where('konselor', 'provinsi')
                ->groupBy(DB::raw("YEAR(created_at)"))
                ->pluck('year');
        } else if (auth()->user()->role === 2) {
            $dataPengaduan = Pengaduan::select(DB::raw("count(*) as pengaduan"))
                ->where('konselor', 'kabupaten')
                ->groupBy(DB::raw("YEAR(created_at)"))
                ->pluck('pengaduan');

            $tahun = Pengaduan::select(DB::raw("YEAR(created_at) as year"))
                ->where('konselor', 'kabupaten')
                ->groupBy(DB::raw("YEAR(created_at)"))
                ->pluck('year');
        }


        $status = ['progress', 'verified'];
        

        if (auth()->user()->role === 1) {
            $totalPengaduan = Pengaduan::where('konselor', 'provinsi')->get();
            $belumDitanggapi = Pengaduan::where('konselor', 'provinsi')->whereIn('status', $status)->get();
            $sudahDitanggapi = Pengaduan::where('konselor', 'provinsi')->where('status', 'success');
        } else {
            $totalPengaduan = Pengaduan::where('konselor', 'kabupaten')->get();
            $belumDitanggapi = Pengaduan::where('konselor', 'kabupaten')->whereIn('status', $status)->get();
            $sudahDitanggapi = Pengaduan::where('konselor', 'kabupaten')->where('status', 'success');
        }



        return view('dashboard', [
            'title' => 'SIPKTA | Dashboard',
            'tahun' => $tahun,
            'users' => User::all(),
            'dataPengaduan' => $dataPengaduan,
            'totalPengaduan' => $totalPengaduan,
            'belumDitanggapi' => $belumDitanggapi,
            'sudahDitanggapi' => $sudahDitanggapi

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
