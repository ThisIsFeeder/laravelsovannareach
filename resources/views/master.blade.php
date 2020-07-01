<!DOCTYPE html>
<html llang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Stock Management</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('/dashboard/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dashboard/dist/css/adminlte.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('/dashboard/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini accent-indigo">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.master.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.master.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content-header')
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->
  @include('layouts.master.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('/dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('/dashboard/dist/js/adminlte.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('/dashboard/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('/dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/dashboard/dist/js/demo.js')}}"></script>
<script src="{{asset('/dashboard/dist/js/pages/dashboard3.js')}}"></script>
<script src="{{asset('/js/edit-delete-category.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>

<script>
$('#edit').on('show.bs.modal', function (event) {  
  var button = $(event.relatedTarget)
  var name = button.data('name')
  var description = button.data('description')
  var catid = button.data('catid')
  var modal = $(this)

  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #editdescription').val(description);
  // modal.find('.modal-body #parent').val(parent);
  modal.find('.modal-body #catid').val(catid);
});

$('#delete').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var catid = button.data('catid') 
  var modal = $(this)
  modal.find('.modal-body #catid').val(catid);
});
</script>
</body>
</html>
