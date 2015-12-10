@extends('main')
@section('content')
<section id="content">
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<div class="box">
					<h1>Referral Code</h1>
					<h4>{{($referral_code)}} <span data-toggle="tooltip" data-placement="left"
				title="minta customer anda untuk memasukkan kode ini ketika melakukan pembayaran paket Premium" class="tips">?</span></h4>

				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<h1>Total Customers</h1>
					<h4>{{number_format($summary['total_customers'])}}</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<h1>Total Revenue</h1>
					<h4>Rp. {{number_format($summary['total_revenue'])}}</h4>
				</div>
			</div>


		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="topBorder">
				<h3>
					All Subscriptions
				</h3>
				<!--
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
				-->
					<div class="theContainer">

						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="dataTable table">
							@if(sizeof($subscriptions)>0)
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Nama</th>
									<th>Telp</th>
									<th>Paket</th>
								</tr>
							</thead>
							<tbody>

									@foreach($subscriptions as $s)

									<tr>
										<td data-th="Tanggal"><?=date("d/m/Y",strtotime($s->subscribe_date))?></td>
										<td data-th="Nama"><?=$s->name?></td>
										<td data-th="Telp"><?=$s->phone_number?></td>
										<td data-th="Paket">
											{{str_replace("_"," ",$s->trx_type)}}
										</td>
									</tr>
									@endforeach




							<tbody>
							@else
								<tr>
									<td colspan="3">
										<p>Belum ada subskripsi yang tersedia.</p>
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
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection
