@extends('layouts.main')

@section('content')

@include('layouts.header')


<div class="page-title">
<div class="container">
	<div class="padding-tb-120px">
		<h1>Cargo Transportation</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Cargo Transportation</li>
		</ol>
	</div>
</div>
</div>


<div class="padding-tb-100px">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>Tracking Number: {{$bl_no}}</h2>
		</div>
	</div>
<!-- 	<div class="row mt-3">
		<div class="col-md-6">
			<div class="cart-counters background-midnight">
				<div class="icon"><img src="{{ asset('img/icons/service-light-2.png') }}" alt=""></div>
				<h2>Shipper Address</h2>
				<hr>
				<div class="text">
					John<br/>
					354 BEACH AVE. RIVERSIDE, CA 92509, CALIFORNIA.<br/>
					+658 359746<br/>
					JOHN@HOTMAIL.COM
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="cart-counters background-midnight">
				<div class="icon"><img src="{{ asset('img/icons/service-light-3.png') }}" alt=""></div>
				<h2>Receiver Address</h2>
				<hr>
				<div class="text">
					CENA<br/>
					LEVEL 20, 28 FRESHWATER PLACE, SOUTHBANK VIC AUSTRALIA 3006.<br/>
					+348 2546981<br/>
					CENA@HOTMAIL.COM<br/>
				</div>
			</div>
		</div>
	</div> -->
	<div class="row mt-3 text-center">
		<div class="col-md-12">
			@if(!empty($data))
			<table class="table table-bordered">
				<thead>
					<th>BL Number</th>
					<th>Container</th>
					<th>Consignee</th>
					<th>Port</th>
					<th>Discharge</th>
				</thead>
				<tbody>
					@foreach($data as $dt)
					<tr>
						<td><center>{{$dt->blnumber}}</center></td>
						<td><center>{{$dt->container}}</center></td>
						<td><center>{{$dt->consignee}}</center></td>
						<td><center>{{$dt->port}}</center></td>
						<td><center>{{$dt->discharge}}</center></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
				<h3 class="text-center">No Data Found</h3>
			@endif
		</div>
	</div>
</div>
</div>

@include('layouts.footer')

@endsection
