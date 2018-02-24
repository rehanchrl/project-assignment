<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register {{config('app.name')}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/iCheck/square/blue.css")}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  {{--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  --}}
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register</p>

    <form action="{{ route('register')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        <input type="text" class="form-control" name="name" placeholder="Nama" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('name'))
          <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
      </div>
      <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
          <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
          <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
      </div>
      <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password_confirmation'))
          <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
    </form>
    
    <a href="{{ route('login')}}" class="text-center">I already have an account</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- iCheck -->
<script src="{{ asset("/bower_components/admin-lte/plugins/iCheck/icheck.min.js")}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
