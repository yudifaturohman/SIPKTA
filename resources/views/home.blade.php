@extends('layouts.main')


@section('content')
<section class="pt-20 hero-section">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">
        <div class="flex flex-wrap w-full">
            <div class="flex items-center order-2 w-full box-hero-section1 lg:w-1/2 sm:w-full lg:order-1 sm:order-2">
                <div class="lg:w-[500px] md:w-full sm:w-full w-full title-box-hero">
                    <h1
                        class="text-[#00c4ff] font-bold lg:text-[45px] md:text-5xl sm:text-4xl text-4xl lg:mb-3 sm:mb-4 mb-4">
                        Save the child, and you save the nation
                    </h1>
                    <h3
                        class="mb-5 text-2xl font-semibold lg:mb-7 md:mb-9 lg:text-2xl md:text-3xl sm:text-2xl text-slate-500">
                        Selamatkan anak-anak, maka Anda menyelamatkan negara.
                    </h3>
                    <a href="#"
                        class="lg:px-14 lg:py-3 px-12 py-2 md:px-16 md:py-4 rounded-full bg-[#00c4ff] text-white text-lg font-semibold">Lapor</a>
                </div>
            </div>
            <div class="order-1 w-full mb-4 box-hero-section2 lg:w-1/2 sm:w-full sm:mb-4 lg:order-2 sm:order-1">
                <img src="/img/img-hero.png" class="lg:h-[450px] w-full" alt="" />
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="lg:-mt-[80px] md:mt-[10px] sm:mt-5 mt-5 mb-0">
        <path fill="#00c4ff" fill-opacity="1"
            d="M0,96L24,117.3C48,139,96,181,144,176C192,171,240,117,288,117.3C336,117,384,171,432,176C480,181,528,139,576,128C624,117,672,139,720,165.3C768,192,816,224,864,240C912,256,960,256,1008,218.7C1056,181,1104,107,1152,117.3C1200,128,1248,224,1296,229.3C1344,235,1392,149,1416,106.7L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
        </path>
    </svg>
</section>

<section class="section-statistic pt-20 bg-[#00c4ff] text-white">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">
        <canvas id="myChart" class="mb-6 lg:mb-10"></canvas>

        <h2 class="text-2xl font-semibold text-center text-white mb-11 lg:text-4xl md:text-3xl lg:mb-20">Berdasarkan
            gender
            <span class="text-3xl lg:text-5xl">{{ $presentase }}%</span> kekerasan terjadi kepada anak {{ $gender }}
        </h2>

        <div class="flex flex-wrap items-start justify-center w-full">
            <div class="w-full lg:w-1/2 md:w-1/2 box-statistic lg:mb-0 mb-11">
                <div class="w-full mx-auto text-center lg:w-1/2 subbox-statistic">
                    <h1 class="mb-4 text-4xl font-semibold lg:text-7xl md:text-4xl lg:mb-4 md:mb-6">80</h1>
                    <h3 class="text-2xl font-semibold lg:text-2xl ">Data kasus berdasarkan usia korban</h3>
                </div>
            </div>
            <div class="w-full lg:w-1/2 md:w-1/2 box-statistic">
                <div class="w-full mx-auto text-center lg:w-3/4 subbox-statistic">
                    <h1 class="mb-4 text-3xl font-semibold lg:text-7xl lg:mb-4 md:mb-6 md:text-4xl">194</h1>
                    <h3 class="text-2xl font-semibold lg:text-2xl ">Data pendampingan kasus PA Prov Banten
                        berdasarkan wilayah
                        tahun 2022</h3>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#EFF6FF" fill-opacity="1"
            d="M0,192L48,208C96,224,192,256,288,234.7C384,213,480,139,576,117.3C672,96,768,128,864,165.3C960,203,1056,245,1152,234.7C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<section class="pt-16 section-data text-slate-500">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">
        <div class="flex flex-wrap items-start justify-center w-full">
            <div class="w-full lg:w-1/2 md:w-1/2 box-statistic lg:mb-0 mb-11">
                <div class="w-full mx-auto text-center lg:w-1/2 subbox-statistic">
                    <h1 class="mb-4 text-4xl font-semibold lg:text-7xl md:text-4xl lg:mb-4 md:mb-6">80</h1>
                    <h3 class="text-2xl font-semibold lg:text-2xl ">Data kasus berdasarkan jenis kelamin</h3>
                </div>
            </div>
            <div class="w-full lg:w-1/2 md:w-1/2 box-statistic">
                <div class="w-full mx-auto text-center lg:w-3/4 subbox-statistic">
                    <h1 class="mb-4 text-3xl font-semibold lg:text-7xl lg:mb-4 md:mb-6 md:text-4xl">194</h1>
                    <h3 class="text-2xl font-semibold lg:text-2xl ">Data pendampingan kasus PA Prov Banten
                        berdasarkan wilayah
                        tahun 2022</h3>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#00c4ff" fill-opacity="1"
            d="M0,224L48,234.7C96,245,192,267,288,261.3C384,256,480,224,576,202.7C672,181,768,171,864,192C960,213,1056,267,1152,261.3C1248,256,1344,192,1392,160L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<section class="section-statistic pt-36 pb-32 bg-[#00c4ff] text-white font-poppins">
    <div class="container w-full h-full mx-auto lg:px-20 px-7 lg:max-w-full md:max-w-full sm:max-w-full">
        <h2 class="text-2xl font-semibold text-center text-white mb-11 lg:text-4xl md:text-3xl lg:mb-11">Mekanisme
            Penanganan Kasus di LPA Prov.Banten
        </h2>

        <h3 class="text-2xl font-semibold mb-3">PROSEDUR</h3>
        <h3 class="text-lg underline underline-offset-4 mb-3">Penanganan Pengaduan Secara Langsung</h3>
        <p class="text-base mb-3 text-justify">Yang dimaksud dengan Pengaduan Langsung adalah pelapor (korban /
            keluarga/orang
            lain/kelompok masyarakat/institusi)
            datang secara langsung mengadukan/melaporkan adanya tindak kekerasan yang dialaminya sendiri/orang
            lain/keluarganya/komunitasnya/institusinya.</p>
        <h3 class="text-lg underline underline-offset-4 mb-3">Penanganan Pengaduan Tidak Langsung</h3>
        <p class="text-base mb-5 text-justify">Yang dimaksud dengan Pengaduan Tidak Langsung adalah pelapor (korban atau
            keluarga)
            melaporkan tindak kekerasan yang
            dialaminya sendiri atau anggota keluarganya melalui media telepon/hotline, surat/email ataupun
            faximili. Termasuk pengaduan tidak langsung yaitu laporan yang dilakukan/dirujuk oleh masyarakat dan/atau
            lembaga lain
            mengenai adanya tindak kekerasan yang dialami oleh korban.</p>
        <h3 class="text-2xl font-semibold mb-3">PENJANGKAUAN KORBAN (Outreach)</h3>
        <p class="text-base mb-3 text-justify">Jika korban tidak bisa datang langsung, tetapi harus segera
            ditindaklajnuti maka petugas akan mengkoordinasikan dengan
            lembaga layanan yang relevan dengan sifat kedaruratan pelapor. Petugas menginformasikan layanan yang
            ditawarkan sesuai
            dengan kebutuhan korban dan tugas serta kapasitas lembaga, dimana tempat dan waktu kejadian. Bila pelapor
            setuju
            (consent ) maka akan ditindaklanjuti.</p>
        <p class="text-base mb-3 text-justify">Outreach perlu memperhatikan aspek keamanan baik bagi korban, keluarga
            atau petugas unit pelayanan. Outreach perlu
            dilakukan dengan lebih terencana dan hati-hati untuk memastikan bahwa outreach tidak akan menyebabkan korban
            dalam
            situasi yang lebih buruk. Dalam kasus kekerasan terhadap isteri misalnya,
            petugas harus memastikan bahwa ketika itu pelaku (suami korban) sedang tidak ada di rumah.</p>
        <p class="text-base mb-5 text-justify">Outreach dapat pula tidak dilakukan di tempat tinggal korban bila korban
            merasa tidak aman melakukan pengaduan dan
            wawancara di rumah.</p>
        <h3 class="text-2xl font-semibold mb-4">PENANGANAN PENGADUAN PADA UPT PPA PROVINSI KALIMANTAN TENGAH</h3>
        <div class="img-mekanisme">
            <img src="/img/mekanisme.jpg" alt="" class="w-full">
        </div>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: {{ $tahun }},
        datasets: [
          {
            label: "# of Votes",
            data: {{ $dataPengaduan }},
            borderWidth: 1,
            backgroundColor: ["rgb(255, 255, 255)"],
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              color: "white",
              borderColor: "white",
              tickColor: "white",
            },
            ticks: {
              color: "white",
              font: function (context) {
                var width = context.chart.width;
                var size = Math.round(width / 38);

                return {
                  weight: 'bold',
                  size: size
                };
              }
            },
          },
          x: {
            grid: {
              color: "white",
              borderColor: "white",
              tickColor: "white",
            },
            ticks: {
              color: "white",
              font: function (context) {
                var width = context.chart.width;
                var size = Math.round(width / 38);

                return {
                  weight: 'bold',
                  size: size
                };
              }
            },
          },
        },
      },
    });
</script>
@endsection