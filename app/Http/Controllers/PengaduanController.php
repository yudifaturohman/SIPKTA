<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (auth()->user()->role === 1) {
            $pengaduans = Pengaduan::where('konselor', 'provinsi')->get();
        } else if (auth()->user()->role === 2) {
            $pengaduans = Pengaduan::where('konselor', 'kabupaten')->get();
        } else {
            $pengaduans = Pengaduan::where('user_id', auth()->user()->id)->get();
        }

        return view('pengaduan.index', [
            'title' => 'SIPKTA | Pengaduan',
            'pengaduans' => $pengaduans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pengaduan.create', [
            'title' => 'SIPKTA | Buat Pengaduan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $validatedData = $request->validate([
            'nama_pelapor' => 'required|max:255',
            'ttl_pelapor' => 'required|max:255',
            'usia_pelapor' => 'required|max:255',
            'jenis_kelamin_pelapor' => 'required|max:255',
            'nik_pelapor' => 'required|min:16',
            'agama_pelapor' => 'required|max:255',
            'kewarganegaraan_pelapor' => 'required|max:255',
            'suku_pelapor' => 'required|max:255',
            'pekerjaan_pelapor' => 'required|max:255',
            'pendidikan_pelapor' => 'required|max:255',
            'domisili_pelapor' => 'required|max:255',
            'nama_domisili_pelapor' => 'required|max:255',
            'alamat_pelapor' => 'required|max:500',
            'kode_pos_pelapor' => 'required|max:10',
            'email_pelapor' => 'required|email|string',
            'nohp_pelapor' => 'required|min:12',
            'hubungan_pelapor' => 'required|max:255',
            // validasi pelaku
            'nama_pelaku' => 'required|max:255',
            'ttl_pelaku' => 'required|max:255',
            'usia_pelaku' => 'required|max:255',
            'jenis_kelamin_pelaku' => 'required|max:255',
            'nik_pelaku' => 'nullable|min:16',
            'agama_pelaku' => 'required|max:255',
            'kewarganegaraan_pelaku' => 'required|max:255',
            'suku_pelaku' => 'nullable|max:255',
            'pekerjaan_pelaku' => 'required|max:255',
            'pendidikan_pelaku' => 'required|max:255',
            'domisili_pelaku' => 'required|max:255',
            'nama_domisili_pelaku' => 'required|max:255',
            'alamat_pelaku' => 'required|max:500',
            'kode_pos_pelaku' => 'required|max:10',
            'email_pelaku' => 'nullable|email|string',
            'nohp_pelaku' => 'nullable|max:12',
            'hubungan_pelaku' => 'required|max:255',
            // validasi korban
            'nama_korban' => 'required|max:255',
            'ttl_korban' => 'required|max:255',
            'usia_korban' => 'required|max:255',
            'jenis_kelamin_korban' => 'required|max:255',
            'nik_korban' => 'nullable|min:16',
            'agama_korban' => 'required|max:255',
            'kewarganegaraan_korban' => 'required|max:255',
            'suku_korban' => 'required|max:255',
            'pekerjaan_korban' => 'nullable|max:255',
            'pendidikan_korban' => 'nullable|max:255',
            'domisili_korban' => 'required|max:255',
            'nama_domisili_korban' => 'required|max:255',
            'alamat_korban' => 'required|max:500',
            'kode_pos_korban' => 'required|max:10',
            // validasi pelaporan
            'perkara_pelaporan' => 'required|max:500',
            'pasal_pelaporan' => 'required|max:500',
            'waktu_kejadian' => 'required',
            'jam_kejadian' => 'required',
            'tempat_kejadian' => 'required',
            'saksi1' => 'required',
            'saksi2' => 'required',
            'kronologi' => 'required',
            'bukti1' => 'image|file|max:2054',
            'bukti2' => 'image|file|max:2054',
            'bukti2' => 'image|file|max:2054',
            'konselor' => 'nullable',
            'status' => 'nullable|string',
            'tanggapan' => 'nullable|string',

        ]);
        if ($request->domisili_korban === $request->domisili_pelaku) {
            $validatedData['konselor'] = 'kabupaten';
        } else {
            $validatedData['konselor'] = 'provinsi';
        }

        if ($request->file('bukti1')) {
            $validatedData['bukti1'] = $request->file('bukti1')->store('bukti-kekerasan');
        }
        if ($request->file('bukti2')) {
            $validatedData['bukti2'] = $request->file('bukti2')->store('bukti-kekerasan');
        }
        if ($request->file('bukti3')) {
            $validatedData['bukti3'] = $request->file('bukti3')->store('bukti-kekerasan');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = 'progress';




        Pengaduan::create($validatedData);

        return redirect('/dashboard/pengaduan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
        return view('pengaduan.detail', [
            'title' => 'SIPKTA | Detail Pengaduan',
            'pengaduan' => $pengaduan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
        return view('pengaduan.edit', [
            'title' => 'SIPKTA | Edit Pengaduan',
            'pengaduan' => $pengaduan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
        $validatedData = $request->validate([
            'nama_pelapor' => 'required|max:255',
            'ttl_pelapor' => 'required|max:255',
            'usia_pelapor' => 'required|max:255',
            'jenis_kelamin_pelapor' => 'required|max:255',
            'nik_pelapor' => 'required|min:16',
            'agama_pelapor' => 'required|max:255',
            'kewarganegaraan_pelapor' => 'required|max:255',
            'suku_pelapor' => 'required|max:255',
            'pekerjaan_pelapor' => 'required|max:255',
            'pendidikan_pelapor' => 'required|max:255',
            'domisili_pelapor' => 'required|max:255',
            'nama_domisili_pelapor' => 'required|max:255',
            'alamat_pelapor' => 'required|max:500',
            'kode_pos_pelapor' => 'required|max:10',
            'email_pelapor' => 'required|email|string',
            'nohp_pelapor' => 'required|min:12',
            'hubungan_pelapor' => 'required|max:255',
            // validasi pelaku
            'nama_pelaku' => 'required|max:255',
            'ttl_pelaku' => 'required|max:255',
            'usia_pelaku' => 'required|max:255',
            'jenis_kelamin_pelaku' => 'required|max:255',
            'nik_pelaku' => 'nullable|min:16',
            'agama_pelaku' => 'required|max:255',
            'kewarganegaraan_pelaku' => 'required|max:255',
            'suku_pelaku' => 'nullable|max:255',
            'pekerjaan_pelaku' => 'required|max:255',
            'pendidikan_pelaku' => 'required|max:255',
            'domisili_pelaku' => 'required|max:255',
            'nama_domisili_pelaku' => 'required|max:255',
            'alamat_pelaku' => 'required|max:500',
            'kode_pos_pelaku' => 'required|max:10',
            'email_pelaku' => 'nullable|email|string',
            'nohp_pelaku' => 'nullable|max:12',
            'hubungan_pelaku' => 'required|max:255',
            // validasi korban
            'nama_korban' => 'required|max:255',
            'ttl_korban' => 'required|max:255',
            'usia_korban' => 'required|max:255',
            'jenis_kelamin_korban' => 'required|max:255',
            'nik_korban' => 'nullable|min:16',
            'agama_korban' => 'required|max:255',
            'kewarganegaraan_korban' => 'required|max:255',
            'suku_korban' => 'required|max:255',
            'pekerjaan_korban' => 'nullable|max:255',
            'pendidikan_korban' => 'nullable|max:255',
            'domisili_korban' => 'required|max:255',
            'nama_domisili_korban' => 'required|max:255',
            'alamat_korban' => 'required|max:500',
            'kode_pos_korban' => 'required|max:10',
            // validasi pelaporan
            'perkara_pelaporan' => 'required|max:500',
            'pasal_pelaporan' => 'required|max:500',
            'waktu_kejadian' => 'required',
            'jam_kejadian' => 'required',
            'tempat_kejadian' => 'required',
            'saksi1' => 'required',
            'saksi2' => 'required',
            'kronologi' => 'required',
            'bukti1' => 'image|file|max:2054',
            'bukti2' => 'image|file|max:2054',
            'bukti2' => 'image|file|max:2054',
            'konselor' => 'nullable',
            'status' => 'nullable|string',
            'tanggapan' => 'nullable|string',

        ]);
        if ($request->domisili_korban === $request->domisili_pelaku) {
            $validatedData['konselor'] = 'kabupaten';
        } else {
            $validatedData['konselor'] = 'provinsi';
        }

        if ($request->file('bukti1')) {
            if ($pengaduan->bukti1) {
                Storage::delete($pengaduan->bukti1);
            }
            $validatedData['bukti1'] = $request->file('bukti1')->store('bukti-kekerasan');
        }
        if ($request->file('bukti2')) {
            if ($pengaduan->bukti2) {
                Storage::delete($pengaduan->bukti2);
            }
            $validatedData['bukti2'] = $request->file('bukti2')->store('bukti-kekerasan');
        }
        if ($request->file('bukti3')) {
            if ($pengaduan->bukti3) {
                Storage::delete($pengaduan->bukti3);
            }
            $validatedData['bukti3'] = $request->file('bukti3')->store('bukti-kekerasan');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = 'progress';



        Pengaduan::where('id', $pengaduan->id)->update($validatedData);
        return redirect('/dashboard/pengaduan')->with('message', '<div class="alert alert-light-success color-success"> <i class="bi bi-check-circle"></i> Pengaduan berhasil diupdate!</div>');;
    }

    public function Tanggapan(Pengaduan $pengaduan)
    {
        return view('tanggapan.index', [
            'title' => 'SIPKTA | Tanggapan Pengaduan',
            'pengaduan' => $pengaduan
        ]);
    }
    public function konfirmasiTanggapan(Request $request, Pengaduan $pengaduan)
    {
        $validatedData = $request->validate([
            'tanggapan' => 'required'
        ]);
        $validatedData['status'] = 'success';

        Pengaduan::where('id', $pengaduan->id)->update($validatedData);
        return redirect('/dashboard/pengaduan')->with('message', '<div class="alert alert-light-success color-success"> <i class="bi bi-check-circle"></i> Pengaduan berhasil ditanggapi!</div>');
    }

    public function verifikasi(Pengaduan $pengaduan)
    {
        Pengaduan::where('id', $pengaduan->id)->update([
            'status' => 'verified'
        ]);
        return redirect('/dashboard/pengaduan')->with('message', '<div class="alert alert-light-success color-success"> <i class="bi bi-check-circle"></i> Pengaduan berhasil diverifikasi!</div>');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function cetakPdf()
    {


        if (auth()->user()->role === 1) {
            $pengaduans = Pengaduan::where('konselor', 'provinsi')->whereYear('created_at', date('Y'))->get();
        } else {
            $pengaduans = Pengaduan::where('konselor', 'kabupaten')->whereYear('created_at', date('Y'))->get();
        }

        $pdf = Pdf::loadview('pengaduan.pengaduan_pdf', ['pengaduans' => $pengaduans])->setPaper('a4', 'landscape');
        return $pdf->download('LAPORAN PENGADUAN ' . date('Y') . '.pdf');
    }
    public function destroy(Pengaduan $pengaduan)
    {
        //
        if ($pengaduan->bukti1) {
            Storage::delete($pengaduan->bukti1);
        }
        if ($pengaduan->bukti2) {
            Storage::delete($pengaduan->bukti2);
        }
        if ($pengaduan->bukti3) {
            Storage::delete($pengaduan->bukti3);
        }
        Pengaduan::destroy($pengaduan->id);
        return redirect('/dashboard/pengaduan')->with('message', '<div class="alert alert-light-success color-success"> <i class="bi bi-check-circle"></i> Pengaduan berhasil dihapus!</div>');;
    }
}
