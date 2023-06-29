<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
</head>

<body class="antialiased">
    <?php

    use Illuminate\Support\Facades\DB;

    try {
        DB::connection()->getPDO();
        dd(DB::select("call Get_Products()"));
    } catch (Exception $e) {
        echo "no data fount";
    }

    ?>
</body>

</html>