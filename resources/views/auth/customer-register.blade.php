@extends('layouts.app')

@section('content')
    <div class="row no-gutters flex-row-reverse ht-100v">
        <div class="col-md-6 bg-gray-200 d-flex align-items-center justify-content-center">

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="login-wrapper wd-250 wd-xl-350 mg-y-30">
                    <h4 class="tx-inverse tx-center">Sign Up</h4>
                    <p class="tx-center mg-b-60">Create your own account.</p>

                    <div class="form-group">
                        <input id="name" type="text"  class="form-control" placeholder="Enter your full name" name="name" value="{{ old('name') }}" required autofocus>
                    </div><!-- form-group -->

                    
                      <!-- have not done the panel body-->
                     <div class="form-group">
                         <input id="contact number" type="number"  class="form-control" name="number"  placeholder="Enter your contact number" value="{{ old('number') }}" required autofocus>
                    </div><!-- form-group -->
                    
                     <div class="form-group">
                         <input id="address" type="text"  class="form-control" name="address1"  placeholder="Address line 1" value="{{ old('address') }}" required autofocus>
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="address" type="text"  class="form-control" name="address2"  placeholder="Address line 2" value="{{ old('address') }}">
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="city" type="text"  class="form-control" name="city"  placeholder="Enter city/state" value="{{ old('city') }}" required autofocus>
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="zipcode" type="number"  class="form-control" name="zipcode"  placeholder="Enter your zipcode" value="{{ old('zipcode') }}" required autofocus>
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="country" type="text"  class="form-control" name="country"  placeholder="Enter country you are in" value="{{ old('address') }}" required autofocus>
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="email" type="text"  class="form-control" name="email"  placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                    </div><!-- form-group -->   
                    
                     <div class="form-group">
                        <input id="username" type="text"  class="form-control" name="username"  placeholder="Enter your desired username" value="{{ old('name') }}" required autofocus>
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="password" type="password" class="form-control" placeholder="Enter your password" name="password" required>
                    </div><!-- form-group -->
                    
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Enter your password" name="password_confirmation" required>
                    </div><!-- form-group -->

                    <button type="submit" class="btn btn-info btn-block">Sign Up</button>

                    <div class="mg-t-60 tx-center">Already a member? <a href="" class="tx-info">Sign In</a></div>
                </div><!-- login-wrapper -->
            </form>
        </div><!-- col -->


        <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center">
            <div class="wd-250 wd-xl-450 mg-y-30">
                <div class="signin-logo tx-28 tx-bold tx-white"><span class="tx-normal">[</span> AliFast <span class="tx-info">EZ</span> <span class="tx-normal">]</span></div>
                <div class="tx-white-7 mg-b-60">The Admin Template For Perfectionist</div>

                <h5 class="tx-white">Why bracket plus?</h5>
                <p class="tx-white-6">When it comes to websites or apps, one of the first impression you consider is the design. It needs to be high quality enough otherwise you will lose potential users due to bad design.</p>
                <p class="tx-white-6 mg-b-60">When your website or app is attractive to use, your users will not simply be using it, they’ll look forward to using it. This means that you should fashion the look and feel of your interface for your users.</p>
                <a href="" class="btn btn-outline-light bd bd-white bd-2 tx-white pd-x-25 tx-uppercase tx-12 tx-spacing-2 tx-medium">Purchase Template</a>
            </div><!-- wd-500 -->
        </div>

    </div><!-- row -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
