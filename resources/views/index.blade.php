<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogger</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
</head>
<body>

<div id="app">

        <navbar></navbar>

        <div class="container">
            <br>
            <router-view></router-view>
        </div>

        <!-- Тут идет показ роутов -->
</div>


<script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
