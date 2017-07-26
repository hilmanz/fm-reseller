@extends('main')
@section('content')
<div class="section">
    <div class="container">
      <div class="paralax section1">
        <div class="img">
        	<?php
        	$images = ['banner1.jpg','banner2.jpg'];
        	?>
          <img src="{{url('images/'.$images[rand(0,1)])}}" alt="" />
        </div>
      </div>
      <div class="paralax section2">
        <div class="col-md-6">
          <div class="entry-left">
           <form action="{{url('register')}}" method="post">
					<h3>Pendaftaran</h3>
					<p>Isi form dibawah ini dengan lengkap</p>
					@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
					@endif
					<label>
						Name
					</label>
					<input type="text" name="name" value=""/>
					<label>
						Email
					</label>
					<input type="text" name="email" value=""/>
					<label>
						Tanggal lahir
					</label>
					<input type="text" name="birthday" value=""/>
					<label>
						Alamat
					</label>
					<textarea name="address"></textarea>
					<label>
						Nomor Telp
					</label>
					<input type="text" name="phone" value=""/>
					<label>
						Mobile Phone
					</label>
					<input type="text" name="mobile" value=""/>
					<label>
						Nomor KTP
					</label>
					<input type="text" name="ktp" value=""/>
					<label>
						Nomor NPWP
					</label>
					<input type="text" name="npwp" value=""/>
					
					<hr size="1"/>
					<label>
						Username
					</label>
					<input type="text" name="username" value=""/>
					<label>
						Password
					</label>
					<input type="password" name="password" value=""/>
					<input type="submit" name="btn" value="DAFTAR" class="button"/>
				</form>
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