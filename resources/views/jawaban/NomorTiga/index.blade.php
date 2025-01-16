<table class="table table-schedule">
    <thead>
        <tr>
            <th style="text-align: center;">Nama</th>
            <th style="text-align: center;">Start</th>
            <th style="text-align: center;">End</th>
            <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->start }}</td>
                <td>{{ $item->end }}</td>
                <td style="text-align: center;">
                    <button class="btn btn-sm btn-primary edit-btn"
                            data-id="{{ $item->id }}"
                            data-toggle="modal"
                            data-target="#editModal">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button class="btn btn-sm btn-danger delete-btn"
                            data-id="{{ $item->id }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <form class="modal-content" method="POST" action="{{ route('event.update') }}">
           @csrf
           <input type="hidden" name="id" id="edit_id">
             <div class="modal-header">
               <h5 class="modal-title" id="editModalLabel">Edit Event</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" id="edit_nama" value="{{ old('data.name') }}" required>
                <label class="mt-2">Start</label>
                <input type="date" class="form-control" name="start" id="edit_start" value="{{ old('data.start') }}" required>
                <label class="mt-2">End</label>
                <input type="date" class="form-control" name="end" id="edit_end" value="{{ old('data.end') }}" required>
             </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Update</button>
             </div>
       </form>
     </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
