@extends('main_login')
@section('content')
 <div class="container">

      <form class="form-signin" method="post" action="{{url('login')}}">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
@endsection