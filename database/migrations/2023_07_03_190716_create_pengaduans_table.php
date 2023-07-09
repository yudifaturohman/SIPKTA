<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('nama_pelapor')->nullable();
            $table->string('ttl_pelapor')->nullable();
            $table->string('usia_pelapor')->nullable();
            $table->string('jenis_kelamin_pelapor')->nullable();
            $table->string('nik_pelapor')->nullable();
            $table->string('agama_pelapor')->nullable();
            $table->string('kewarganegaraan_pelapor')->nullable();
            $table->string('suku_pelapor')->nullable();
            $table->string('pekerjaan_pelapor')->nullable();
            $table->string('pendidikan_pelapor')->nullable();
            $table->string('domisili_pelapor')->nullable();
            $table->string('nama_domisili_pelapor')->nullable();
            $table->string('alamat_pelapor')->nullable();
            $table->string('kode_pos_pelapor')->nullable();
            $table->string('email_pelapor')->nullable();
            $table->string('nohp_pelapor')->nullable();
            $table->string('hubungan_pelapor')->nullable();
            // ! data pelaku
            $table->string('nama_pelaku')->nullable();
            $table->string('ttl_pelaku')->nullable();
            $table->string('usia_pelaku')->nullable();
            $table->string('jenis_kelamin_pelaku')->nullable();
            $table->string('nik_pelaku')->nullable();
            $table->string('agama_pelaku')->nullable();
            $table->string('kewarganegaraan_pelaku')->nullable();
            $table->string('suku_pelaku')->nullable();
            $table->string('pekerjaan_pelaku')->nullable();
            $table->string('pendidikan_pelaku')->nullable();
            $table->string('domisili_pelaku')->nullable();
            $table->string('nama_domisili_pelaku')->nullable();
            $table->string('alamat_pelaku')->nullable();
            $table->string('kode_pos_pelaku')->nullable();
            $table->string('email_pelaku')->nullable();
            $table->string('nohp_pelaku')->nullable();
            $table->string('hubungan_pelaku')->nullable();
            // ! end data pelaku

            // ! data korban
            $table->string('nama_korban')->nullable();
            $table->string('ttl_korban')->nullable();
            $table->string('usia_korban')->nullable();
            $table->string('jenis_kelamin_korban')->nullable();
            $table->string('nik_korban')->nullable();
            $table->string('agama_korban')->nullable();
            $table->string('kewarganegaraan_korban')->nullable();
            $table->string('suku_korban')->nullable();
            $table->string('pekerjaan_korban')->nullable();
            $table->string('pendidikan_korban')->nullable();
            $table->string('domisili_korban')->nullable();
            $table->string('nama_domisili_korban')->nullable();
            $table->string('alamat_korban')->nullable();
            $table->string('kode_pos_korban')->nullable();
            // ! end data korban
            $table->string('perkara_pelaporan')->nullable();
            $table->string('pasal_pelaporan')->nullable();
            $table->string('waktu_kejadian')->nullable();
            $table->string('jam_kejadian')->nullable();
            $table->string('tempat_kejadian')->nullable();
            $table->string('saksi1')->nullable();
            $table->string('saksi2')->nullable();
            $table->longText('kronologi')->nullable();
            $table->string('bukti1')->nullable();
            $table->string('bukti2')->nullable();
            $table->string('bukti3')->nullable();
            $table->string('konselor')->nullable();
            $table->string('status')->nullable();
            $table->string('tanggapan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
