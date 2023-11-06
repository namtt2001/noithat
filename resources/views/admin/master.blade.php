<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('asset')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('asset')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="{{asset('asset')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{asset('asset')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{asset('asset')}}/css/style.css" />

  <script src="{{asset('asset')}}/js/angular.min.js"></script>
  <script src="{{asset('asset')}}/js/app.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 @include('admin.layouts.header')
  <!-- =============================================== -->
 <!-- Left side column. contains the sidebar -->
 @include('admin.layouts.menu')


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield(('title-page'))

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('main-content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2023 <a href="#">TTTN</a>.</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{asset('asset')}}/js/jquery.min.js"></script>
<script src="{{asset('asset')}}/js/jquery-ui.js"></script>
<script src="{{asset('asset')}}/js/bootstrap.min.js"></script>
<script src="{{asset('asset')}}/js/adminlte.min.js"></script>
<script src="{{asset('asset')}}/js/dashboard.js"></script>
<script src="{{asset('asset')}}/js/function.js"></script>
<script src="{{asset('asset/ckeditor/ckeditor.js')}}"></script>
@yield('custom-js');
</html>
