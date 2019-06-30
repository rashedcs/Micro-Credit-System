<!DOCTYPE html>
<html lang="en">
<head>
    @include('super.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
    @include('super.layouts.header')
    @section('content')
    @show
   @include('super.layouts.footer')
</div>
</body>
</html>