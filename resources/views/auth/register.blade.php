{{-- @extends('layouts.app') --}}
@include('front.layouts.topmenu')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            {{-- <input type="hidden" name="role" id="role" value={{  }}> --}}
                        </div>
                        <div class="row md-5">
                            <select  name="role">
                                <option>Register as</option>
                    <option value="companyUser">job creation</option>
                    <option value="jobUser">Job seeker</option>
                  
                    </select>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                            </div>
                        {{-- <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <h3 class="mb-30">Register</h3>
                                <form action="#">
                                    <div class="mt-10">
                                        <input type="text" name="first_name" placeholder="First Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                                            class="single-input">
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="last_name" placeholder="Last Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                            class="single-input">
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="last_name" placeholder="Last Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                            class="single-input">
                                    </div>
                                    <div class="mt-10">
                                        <input type="email" name="EMAIL" placeholder="Email address"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                                            class="single-input">
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                        <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Address'" required class="single-input">
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                        <div class="form-select" id="default-select"">
                                                    <select>
                                                        <option value=" 1">City</option>
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group-icon mt-10">
                                        <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="form-select" id="default-select"">
                                                    <select>
                                                        <option value=" 1">Country</option>
                                            <option value="1">Bangladesh</option>
                                            <option value="1">India</option>
                                            <option value="1">England</option>
                                            <option value="1">Srilanka</option>
                                            </select>
                                        </div> --}}
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <span>   if you have account :   </span>
                    {{-- <div class="row mb-0">
                        <div class="col-md-6 offset-md-4"> --}}
                             <a href="{{ route('login') }}" class="btn head-btn2">  Login</a>
                              
                           
                       
                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="./front/js/app.js"></script>

</body>
