<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UabsensiPeserta;
use App\Http\Controllers\UabsensiPesertaController;

class CheckAbsensiHarian
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentHour = Carbon::now('Asia/Jakarta')->hour;
        if ($currentHour < 7 || $currentHour >= 23) {
            return redirect()->route('dashboard')->with('error', 'Maaf, waktu absensi hanya dari jam 07:00 sampai 12:00.');
        }
        if (Auth::check()) {
            $user = Auth::user();
            $today = Carbon::today();
            $hasAbsenToday = UabsensiPeserta::where('user_id', $user->id)
            ->whereDate('tanggal_absensi', $today)
            ->exists();
            if ($hasAbsenToday) {
                return redirect()->route('dashboard')->with('error', 'Anda sudah absen hari ini.');
            }

        return $next($request);
    }
    return redirect()->route('login');
}
}
