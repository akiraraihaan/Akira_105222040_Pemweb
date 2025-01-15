<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			headerToolbar: {
				left: '',
				center: 'title',
				right: 'prev,next'
			},
			titleFormat: {
				year: 'numeric',
				month: 'long'
			},
			locale: 'id', // menggunakan bahasa Indonesia
			initialView: 'dayGridMonth',
			editable: false,
			dayMaxEvents: true,
			events: '/event/get-json',
			displayEventEnd: false, // tidak menampilkan waktu selesai di kalender
			eventDisplay: 'block',
			dayHeaderFormat: {
				weekday: 'short' // format header hari (SEN, SEL, dst)
			},
			displayEventTime: true,
			eventTimeFormat: {
				hour: '2-digit',
				minute: '2-digit',
				hour12: false
			},
			loading: function(isLoading) {
				if (!isLoading) {
					console.log('Events loaded:', calendar.getEvents());
				}
			},
			eventSourceFailure: function(error) {
				console.error('Error loading events:', error);
			}
		});

		calendar.render();
	});
</script>
