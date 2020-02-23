@extends('admin.main')

@section('content')

@include('admin.nav')

<section>

   <!-- START Page content-->
   <div class="main-content">
      <h3>Vessel Schedule</h3>
      <!-- START panel-->
     
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                 <form method="POST" action="{{ route('sched.submit') }}">
                   @csrf
<!-- vessel -->  

                      <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right text-light">{{ __('Vessel') }}</label>
                            <div class="col-md-6"> 
                                <input id="vessel" type="text" class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="vessel" value="{{ old('vessel')}}" required autofocus>
                            </div>
                      </div>
<!-- voy -->    
                <div class="form-group row">
                   <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Voy') }}</label>
                        <div class="col-md-6">
                        <input id="voy" type="text"  class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="voy" value="{{ old('voy')}}" required>
                    </div>
                </div>
<!-- shihu -->
                    <div class="form-group row">
                       <label  class="col-md-4 col-form-label text-md-right text-light">{{ __('Shihu') }}</label>
                      <div class="col-md-6">
                            <div data-pick-time="false" class="datetimepicker input-group">
                                  <input type="text" class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="shihu" value="{{ old('shihu')}}" required>
                                    <span class="input-group-addon">
                                  <span class="fa fa-calendar"></span>
                               </span>
                              </div>
                         @if ($errors->has('shihu'))
                       <span class="invalid-feedback" role="alert">
                     <strong>Invalid date format for Shihu</strong>
                   </span>
                @endif
               </div>
             </div>

<!-- weitou -->
                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Weitou') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="weitou" value="{{ old('weitou')}}" required="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                                  @if ($errors->has('weitou'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Invalid date format for Weitou</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!--xiamen-->
                      <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Xiamen') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="xiamen" value="{{ old('xiamen')}}" required="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                                @if ($errors->has('xiamen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Invalid date format for Xiamen</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- mnl north -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Manila North') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="north" value="{{ old('north')}}" required="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                                @if ($errors->has('north'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Invalid date format for Manila North</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- mnl south -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Manila South') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control {{ $errors->has('vessel') ? ' is-invalid' : '' }}" name="south" value="{{ old('south')}}" required="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                                 @if ($errors->has('south'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Invalid date format for Manila South</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                    
                     
 <!--action-->       

                        <div class="form-group row mb-0">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary pull-right">
                                    {{ __('Upload') }}
                                </button>
                                 <a class="btn btn-link text-success pull-right" href="{{ url('sclist') }}">
                                    {{ __('Manage list') }}
                                </a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      <!-- END panel-->
   </div>
   <!-- END Page content-->
   <!-- START Page footer-->
   <footer>&copy; 2019 - Macro Ocean</footer>
   <!-- END Page Footer-->
</section>
@endsection
