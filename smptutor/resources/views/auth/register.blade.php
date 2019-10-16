<html>
<head>
<link href="{{asset('public/css/register.css')}}" rel="stylesheet">
</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
			<h1>Create Account</h1>
            <br/>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter a strong password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
			<br/>
            <button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
			<h1>Create Account</h1>
            <br/>
			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter a strong password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
			<br/>
            <button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello, Tutor!</h1>
				<p>Welcome to SMP Tutors. Please fill in the details to register with us.</p>
                <br>
                <h5>Enroll as a student?</h5>
				<button class="ghost" id="student">Student</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start an academic writing journey with us</p>
                <br>
                <h5>Register as a tutor?</h5>
				<button class="ghost" id="tutor">Tutor</button>
			</div>
		</div>
	</div>
</div>

<script>
const tutorButton = document.getElementById('tutor');
const studentButton = document.getElementById('student');
const container = document.getElementById('container');

tutorButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

studentButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>

</html>