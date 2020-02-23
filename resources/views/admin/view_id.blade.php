@extends('admin.main')

@section('content')

@include('admin.nav')


<section>

   <!-- START Page content-->
   <div class="main-content">
      <h3>Vessel Schedule update</h3>
      <!-- START panel-->
     
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ url('admin/sclist').'/'.$datas->id}}">
                        @csrf
                         @method('PUT')
<!-- vessel -->                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right text-light">{{ __('Vessel') }}</label>
                            <div class="col-md-6"> 
                                <input id="vessel" type="text" class="form-control" value="{{ $datas->vessel }}" name="up_vessel" required autofocus>
                            </div>
                        </div>
<!-- voy -->                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Voy') }}</label>

                            <div class="col-md-6">
                               <input id="voy" type="text" class="form-control" value="{{ $datas->voy }}" name="up_voy" required>
                            </div>
                        </div>
<!-- shihu -->
                    <div class="form-group row">
                     <label  class="col-md-4 col-form-label text-md-right text-light">{{ __('Shihu') }}</label>
                      <div class="col-md-6">
                                <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control" value="{{ $datas->shihu }}" name="up_shihu" required="" readonly="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                            </div>
                        </div>

<!-- weitou -->
                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Weitou') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control" value="{{ $datas->weitou }}" name="up_weitou" required="" readonly="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                            </div>
                        </div>

<!--xiamen-->
                      <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Xiamen') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control" value="{{ $datas->xiamen }}" name="up_xiamen" required="" readonly="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                            </div>
                        </div>
<!-- mnl north -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Manila North') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control" value="{{ $datas->north }}" name="up_north" required="" readonly="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                            </div>
                        </div>
<!-- mnl south -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Manila South') }}</label>
                            <div class="col-md-6">
                                 <div data-pick-time="false" class="datetimepicker input-group">
                                 <input type="text" class="form-control" value="{{ $datas->south }}" name="up_south" required="" readonly="">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                              </div>
                            </div>
                        </div>                    
                     
 <!--action-->       

                        <div class="form-group row mb-0">
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-primary pull-right">
                                    {{ __('Update') }}
                                </button>
                                
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
