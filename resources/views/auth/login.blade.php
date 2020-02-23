@extends('admin.app')

@section('content')
<div class="row row-table page-wrapper">
   <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
      <!-- START panel-->
      <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
         <div class="panel-heading text-center">
            <a href="{{ url('/') }}">
               <img src="img/logo-sm.png" alt="Image" class="block-center img-rounded">
            </a>
            <p class="text-center mt-lg">
               <strong>SIGN IN TO CONTINUE.</strong>
            </p>
         </div>
         <div class="panel-body">
            <form role="form" class="mb-lg" method="POST" action="{{ route('login') }}">
              @csrf
               <div class="form-group has-feedback">
                  <input id="exampleInputEmail1" type="email" placeholder="Enter email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  <span class="fa fa-envelope form-control-feedback text-muted"></span>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
               </div>
               <div class="form-group has-feedback">
                  <input id="exampleInputPassword1" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  <span class="fa fa-lock form-control-feedback text-muted"></span>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
               </div>
               <div class="clearfix">
                  <div class="checkbox c-checkbox pull-left mt0">
                     <label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="fa fa-check"></span>Remember Me</label>
                  </div>
                  <div class="pull-right">
                    @if (Route::has('password.request'))
                      <a class="text-muted" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
                  </div>
               </div>
               <button type="submit" class="btn btn-block btn-danger">Login</button>
            </form>
         </div>
      </div>
      <!-- END panel-->
   </div>
</div>
@endsection
