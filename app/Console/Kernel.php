<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->call(function () {
        //     $tanggal = date('Y-m-d');
        //     // Masukkan logika pembaruan data otomatis berdasarkan hari di sini
        //     // Contoh: 
        //     DB::table('penjumlahans')->where('tgl', $tanggal)->update(['jumlah_box' => $totalreturn]);
        //     // DB::table('nama_tabel')->where('hari', 'Senin')->update(['kolom' => 'nilai']);
        // })->weekly()->mondays()->at('08:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
