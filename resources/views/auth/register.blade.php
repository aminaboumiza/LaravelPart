@extends('layouts.loginLayout')
@section('content')

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<span class="login100-form-title p-b-43">
						<div >{{ __('Register') }}</div>
					</span>
                    
                    

					<div class="form-group row">
					<div class="wrap-input100 validate-input" data-validate = "Valid name is required">
						<input class="input100" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<span class="focus-input100"></span>
						<span class="label-input100">{{ __('Name') }}</span>
					</div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
                            <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('E-Mail Address') }}</span>
                        </div>
                        </div>

                        <div class="form-group row">
                            <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
                                <input class="input100"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                <span class="focus-input100"></span>
                                <span class="label-input100">{{ __('Password') }}</span>
                            </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
                                    <input class="input100"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">{{ __('Confirm Password') }}</span>
                                </div>
                            </div>
                            <div class="flex-sb-m w-full p-t-3 p-b-32">

                                <div>
                                    @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('already have an account login?') }}</a>
                                    @endif
                                </div>
                                
                            </div> 
                      
                  
                    


				
				
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							{{ __('Register') }}
						</button>
						
					</div>
					
					
					
				</form>

@endsection

