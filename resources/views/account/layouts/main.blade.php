<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css">
    
</head>
<body>

    @include('account.partials.sidebar')

<div class="container mt-4 " style="margin-left: 90px;" id="main-container">
    @yield('container')
</div>

    {{-- @include('partials.footer') --}}
    <script src="assets/scripts/script.js"></script>
</body>

</html>



