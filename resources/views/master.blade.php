<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- ADD TITLE ACCORDINGLY  --}}
    <title>{{ ucwords(\Request::path()) }} - Asset Manager</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
      
    <div class="container mt-3" id="app">
@yield('content')
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>