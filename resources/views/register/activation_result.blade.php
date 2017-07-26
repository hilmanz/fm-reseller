@extends('main')
@section('content')

<div class="section">
    <div class="container">
      <div class="paralax section1">
        <div class="img">
          <img src="{{url('images/Iei-2.jpg')}}" alt="" />
        </div>
      </div>
      <div class="paralax section2">
        <div class="col-md-6">
          <div class="entry-left">
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
							<p>{!!$msg!!}</p>
						@endif
					@else
						<p>{!!$msg!!}</p>
					@endif
				<div>
					<a href="{{url('login')}}" class="button">Lanjut</a>
				</div>
			</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img fr">
            
          </div>
        </div>
      </div>
    </div><!-- end .container -->
</div>

@endsection