@extends('main')
@section('content')
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="box">
					<h1>Available Vouchers</h1>
					<h4>{{number_format($summary['available'])}}</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<h1>Redeemed Vouchers</h1>
					<h4>{{number_format($summary['redeemed'])}}</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<h1>Vouchers Sold</h1>
					<h4>{{number_format($summary['sold'])}}</h4>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="topBorder">
				<h3>
					Batches
				</h3>
					
					<div class="theContainer">
						<p>
							Below are the CSV files contains the voucher codes you have generated.
						</p>
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="dataTable table">
							@if(sizeof($vouchers)>0)
							<thead>
								<tr>
									<th>File</th>
									<th>Created At</th>
									<th>Status</th>
									
								</tr>
							</thead>
							<tbody>
								
									@foreach($batches as $batch)
									<?php
									$status = '';
									switch($batch->n_status){
										case 1:
											$status = "Downloaded";
										break;
										default:
											$status = "<a class='btn btn-info' href='".url('voucher/download',$batch->id)."'>Download</a>";
										break;
									}

									?>
									<tr>
										<td><a href="{{url('voucher/download/'.$batch->id)}}"><?=$batch->batch_file?></a></td>
										<td><?=date("d/m/Y H:i:s",strtotime($batch->created_dt))?></td>
										<td><?=$status?></td>
										
									</tr>
									@endforeach
								
								

							
							<tbody>
							@else
								<tr>
									<td colspan="3">
										<p>Belum ada batch yang tersedia.</p>
										<a href="{{url('vouchers/create')}}" class="btn btn-info">Generate Voucher</a>
									</td>
								</tr>
							@endif
							
						</table>
						</tbody>
					</table>
					</div>
					<div class="paging">

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="topBorder">
				<h3>
					All Vouchers
				</h3>
					<div class="searchbox">
						<form action="{{url('voucher/search')}}" method="get" enctype="application/x-www-form-urlencoded">
							<div class="col-md-8">
								<input type="text" name="q" value="" placeholder="Kode Voucher"/>
							</div>
							<div class="col-md-4">
								<input type="submit" name="btn" value="CARI" class="btn btn-info"/>
							</div>
						</form>
					</div>
					<div class="theContainer">
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="dataTable table">
							@if(sizeof($vouchers)>0)
							<thead>
								<tr>
									
									<th>Kode</th>
									<th>Subscription Length (month)</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								
									@foreach($vouchers as $voucher)
									<?php
									$status = '';
									switch($voucher->n_status){
										case 1:
											$status = "Redeemed";
										break;
										default:
											$status = "Available";
										break;
									}

									?>
									<tr>
										<td><?=$voucher->voucher_no?></td>
										<td><?=$voucher->subscription_time?></td>
										<td><?=$status?></td>
										<td>
											@if($voucher->is_sold==1)
											SOLD
											@endif
										</td>
									</tr>
									@endforeach
								
								

							
							<tbody>
							@else
								<tr>
									<td colspan="3">
										<p>Belum ada voucher yang tersedia.</p>
										<a href="{{url('vouchers/create')}}" class="btn btn-info">Generate Voucher</a>
									</td>
								</tr>
							@endif
							
						</table>
						</tbody>
					</table>
					</div>
					<div class="paging">

					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection