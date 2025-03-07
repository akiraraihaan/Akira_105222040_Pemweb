<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-dialog-centered" role="document">
    	<form class="modal-content" method="POST" action="{{ route('event.submit') }}">
            @csrf
      		<div class="modal-header">
        		<h5 class="modal-title" id="addModalLabel">Tambah Jadwal</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
	      	<div class="modal-body">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required>
                <label class="mt-2">Start</label>
                <input type="date" class="form-control" name="start" required>
                <label class="mt-2">End</label>
                <input type="date" class="form-control" name="end" required>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="submit" class="btn btn-primary"> Submit </button>
	      	</div>
    	</form>
  	</div>
</div>
