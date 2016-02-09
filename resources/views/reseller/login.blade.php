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
            <form class="form-signin" method="post" action="{{url('login')}}">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <div>
                    <button class="button" type="submit">Sign in</button>
                </div>
                <div>
                    <p>Belum jadi anggota ? <a href="{{url('register')}}">Klik Untuk mendaftar dan memulai perjalanan Anda sebagai Enterpreneur</a> </p>
                </div>
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