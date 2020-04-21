<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- ADD TITLE ACCORDINGLY  --}}
    <title>Log In - Asset Manager</title>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
</head>
<body>
    <div class="container mt-3" id="app">
@yield('content')
    </div>
</body>
<script type="text/javascript" src="{{asset('js/datatables.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>