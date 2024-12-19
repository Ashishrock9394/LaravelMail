<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/3463/3463581.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<!-- Hamburgers -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<!-- Select2 -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<!-- Custom Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{ asset('images/img-01.png') }}" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="{{ url('/sendEmail') }}" method="POST">
                        @csrf
				<div class="contact1-form-title">
					<p id="metal">Get in Touch</p>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Name is required">
					<input class="input1" type="text" name="name" placeholder="Name" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input1" type="email" name="email" placeholder="Email" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Message is required">
					<textarea class="input1" name="message" placeholder="Message" required></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!-- Popper -->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<!-- Tilt -->
	<script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		});
	</script>
    <script>
        window.onload = function() {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 2000);  // 5000 ms = 5 seconds
            }
        };
    </script>
	<!-- Custom JS -->
	<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
