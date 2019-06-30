<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
    @include('user.layouts.header')
    @section('content')
    @show
   @include('user.layouts.footer')
</div>
</body>
</html>