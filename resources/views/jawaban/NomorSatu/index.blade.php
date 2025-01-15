<div class="dropdown-menu dropdown-menu-right ">
	@if (Auth::user())
		<a href="{{ route('logout') }}" class="dropdown-item">
			<i class="ni ni-user-run"></i> <span>Logout</span>
		</a>
	@else
		<a class="dropdown-item" data-toggle="modal" data-target="#loginModal">
			<i class="ni ni-bold-right"></i> <span>Login</span>
		</a>
	@endif
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-dialog-centered" role="document">
    	<form class="modal-content" method="POST" action="{{ route('auth') }}">
            @csrf
      		<div class="modal-header">
        		<h5 class="modal-title" id="loginModalLabel">Login</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
	      	<div class="modal-body">
	        	<label>Username / Email</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan username atau email" required>
                <label class="mt-3">Password</label>
                <div class="position-relative">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
                    <span class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;" onclick="togglePassword()">
                        <i class="fa fa-eye" id="toggleIcon"></i>
                    </span>
                </div>
                <script>
                    function togglePassword() {
                        var x = document.getElementById("password");
                        var icon = document.getElementById("toggleIcon");
                        if (x.type === "password") {
                            x.type = "text";
                            icon.className = "fa fa-eye-slash";
                        } else {
                            x.type = "password";
                            icon.className = "fa fa-eye";
                        }
                    }
                </script>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="submit" class="btn btn-primary"> Submit </button>
	      	</div>
    	</form>
  	</div>
</div>
