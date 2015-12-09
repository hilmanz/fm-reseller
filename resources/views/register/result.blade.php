@extends('main_login')
@section('content')
<section id="content">
	<div class="row">
		<div class="col-md-12">
			<div class="panel">
			@if($status==0)
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@else
					{!!$msg!!}
				@endif
			@else
				{!!$msg!!}
			@endif
				<div>
					<a href="{{url('login')}}" class="btn btn-info">Lanjut</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection