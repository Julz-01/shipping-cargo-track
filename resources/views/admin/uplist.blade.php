@extends('admin.main')

@section('content')

@include('admin.nav')

<section>
   <!-- START Page content-->
   <div class="main-content">

      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-heading">
           <h3>Vessel Updates</h3>
         </div>
         <div class="panel-body">
           <table class="table table-bordered">
             <thead>
               <th>ID</th>
               <th>BL Number</th>
               <th>Container</th>
               <th>Consignee</th>
               <th>Port</th>
               <th>Discharge</th>
               <th>Action</th>
             </thead>
             <tbody>
               @foreach($data as $dt)
               <tr>
                 <td>{{ $dt->id }}</td>
                 <td>{{ $dt->blnumber }}</td>
                 <td>{{$dt->container }}</td>
                 <td>{{ $dt->consignee }}</td>
                 <td>{{ $dt->port }}</td>
                 <td>{{ $dt->discharge }}</td>
                 <td><a href="{{url('admin/uplist') . '/' .$dt->id }}" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a></td>
                 @endforeach
               </tbody>
             </table>
           </div>
         <div class="panel-footer text-center">
           {{$data->links()}}
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
