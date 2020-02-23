@extends('admin.main')

@section('content')

@include('admin.nav')

<section>
   <!-- START Page content-->
   <div class="main-content">
      <h3>Vessel Schedule</h3>
      <!-- START panel-->
      <div class="panel panel-default">
         <div class="panel-body">
            <table class="table table-bordered">
            <thead>
               <th>Vessel</th>
               <th>Voy</th>
               <th>Shihu</th>
               <th>Weitou</th>
               <th>Xiamen</th>
               <th>Manila North</th>
               <th>Manila South</th>
               <th>Action</th>

            </thead>
            <tbody>
               @foreach($datas as $dt)
          <tr>
      <td>{{ $dt->vessel}}</td>
      <td>{{$dt->voy}}</td> 
      <td>{{ $dt->shihu }}</td>
      <td>{{ $dt->weitou }}</td>
      <td>{{ $dt->xiamen }}</td>
      <td>{{ $dt->north }}</td>
      <td>{{ $dt->south }}</td>
      <td><a href="{{url('admin/sclist') . '/' .$dt->id }}" class="btn btn-primary"><i class="fa fa-edit">&nbsp;&nbsp;Edit</a></td>
          @endforeach
            </tbody>
         </table>
            {{$datas->links()}}


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
