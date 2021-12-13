@extends('loginform.layout.main')
@section('title')
    Sign up
@endsection
@section('content')
    <div class="main">
	    <section class="signup">
	        <div class="container">

				@if ($errors->any())
					@foreach ($errors->all() as $value)
						<div class="bg-danger p-1" style="background-color: red; color: white; border-radius: 10px; padding: 5px; margin-top: 5px;">{{ $value }}</div>
					@endforeach
				@endif

	            <div class="signup-content">
	                <div class="signup-form">
	                    <h2 class="form-title">Sign up</h2>
	                    <form method="POST" class="register-form" id="register-form" action="{{ route('new_user') }}">
	                    	@csrf
	                        <div class="form-group">
	                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
	                            <input type="text" name="name" id="name" placeholder="Your Name" />
	                        </div>
	                        <div class="form-group">
	                            <label for="email"><i class="zmdi zmdi-email"></i></label>
	                            <input type="email" name="email" id="email" placeholder="Your Email" />
	                        </div>
	                        <div class="form-group">
	                            <label for="phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
	                            <input type="text" name="phone" id="phone" placeholder="Your Phonenumber" />
	                        </div>
	                        <div class="form-group">
	                            <label for="address"><i class="zmdi zmdi-home material-icons-name"></i></label>
	                            <input type="text" name="address" id="address" placeholder="Your Address" />
	                        </div>
	                        <div class="form-group">
	                            <label for="user"><i class="zmdi zmdi-account material-icons-name"></i></label>
	                            <input type="text" name="username" id="user" placeholder="Username" />
	                        </div>
	                        <div class="form-group">
	                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
	                            <input type="password" name="password" id="pass" placeholder="Password" />
	                        </div>
	                        <div class="form-group">
	                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
	                            <input type="password" name="confirm" id="re_pass" placeholder="Repeat your password" />
	                        </div>
	                        <div class="form-group">
	                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
	                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
	                                statements in <a href="#" class="term-service">Terms of service</a></label>
	                        </div>
	                        <div class="form-group form-button">
	                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
	                        </div>
	                    </form>
	                </div>
	                <div class="signup-image">
	                    <figure><img src="{{asset('login_template/images/signup-image.jpg')}}" alt="sing up image"></figure>
	                    <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
	                </div>
	            </div>
	        </div>
	    </section>
	</div>

@endsection