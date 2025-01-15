<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class NomorEmpat {

	public function getJson () {
		// Mengambil semua jadwal
		$events = Event::with('user')->get();

		// Mengubah format data sesuai kebutuhan
		$data = $events->map(function($event) {
			return [
				'id' => $event->id,
				'title' => $event->name . ' (' . $event->user->name . ')',
				'start' => Carbon::parse($event->start)->format('Y-m-d'), // Format tanggal normal
				'end' => Carbon::parse($event->end)->format('Y-m-d'), // Format tanggal normal
				'backgroundColor' => $event->user_id === Auth::id() ? '#0d6efd' : '#6c757d',
				'borderColor' => $event->user_id === Auth::id() ? '#0d6efd' : '#6c757d',
				'textColor' => '#ffffff'
			];
		});

		return response()->json($data);
	}
}

?>
