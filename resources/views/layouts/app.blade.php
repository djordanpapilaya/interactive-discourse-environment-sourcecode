<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,shrink-to-fit=no"/>
    <title>Vue Skeleton</title>
    <script>// enable to override webpacks publicPath
      // var webpackPublicPath = '/';</script>
    <link href="../version/1617029490833/css/vendors.css" rel="stylesheet">
    <link href="../version/1617029490833/css/app.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')
    <main>
        {{ $slot }}
    </main>
</div>

<script src="../version/1617029490833/js/vendors.js"></script>
<script src="../version/1617029490833/js/app.js"></script>
</body>
</html>