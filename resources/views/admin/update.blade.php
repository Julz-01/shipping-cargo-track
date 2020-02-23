@extends('admin.main')

@section('content')

@include('admin.nav')

<section>
   <!-- START Page content-->
   <div class="main-content">
      <h3>Vessel Update</h3>
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">Upload document</div>
         <div class="panel-body">
            <form role="form" class="form-inline" action="{{ route('upload.submit') }}" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="form-group">
                  <label for="input-email" class="sr-only">Email address</label>
                  <input id="input-email" name="your_file" type="file" placeholder="Type your email" class="form-control {{ $errors->has('your_file') ? ' is-invalid' : '' }}" required autofocus>
                   <button type="submit" class="btn btn-default">Upload</button>
               </div>

                   @if ($errors->has('your_file'))
                      <span class="invalid-feedback" role="alert">
                        <br><br>
                          <strong>File format must be an Excel type!</strong>
                         
                      </span>
                  @endif
                    </form>
               </div>
            <div class="panel-footer">
           <a href="{{ url('/uplist') }}">Manage List</a>
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
