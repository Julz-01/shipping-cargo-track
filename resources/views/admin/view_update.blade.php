@extends('admin.main')

@section('content')

@include('admin.nav')


<section>

   <!-- START Page content-->
   <div class="main-content">
      <h3>Vessel Update</h3>
      <!-- START panel-->

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="{{ url('admin/uplist').'/'.$data->id}}">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label  class="col-md-4 col-form-label text-md-right text-light">{{ __('BL Number') }}</label>
                    <div class="col-md-6">
                      <input id="vessel" type="text" class="form-control" value="{{ $data->blnumber }}" name="up_bl" required autofocus>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Container') }}</label>
                    <div class="col-md-6">
                      <input id="voy" type="text" class="form-control" value="{{ $data->container }}" name="up_container" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-md-4 col-form-label text-md-right text-light">{{ __('Consignee') }}</label>
                    <div class="col-md-6">
                      <input id="voy" type="text" class="form-control" value="{{ $data->consignee }}" name="up_consignee" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Port') }}</label>
                    <div class="col-md-6">
                      <input id="voy" type="text" class="form-control" value="{{ $data->port }}" name="up_port" required>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-4 col-form-label text-md-right text-light">{{ __('Discharge') }}</label>
                  <div class="col-md-6">
                    <input id="voy" type="text" class="form-control" value="{{ $data->discharge }}" name="up_discharge" required>
                  </div>
                </div>
              </div>

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
