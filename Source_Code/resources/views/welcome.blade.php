<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body>
        <div>
        <h1><a href="/profile">My Profile</a></h1>
        </div>
        <br>
        <br>
        <div>
        <h1>Laporan Kejadian Gempa</h1>
        </div>
        <div style="border:3px solid black;">
            <form action="/create-report" method="POST">
                @csrf
                <textarea type="text" name="lokasi" placeholder="lokasi kejadian"></textarea>
                <textarea type="text" name="deskripsi" placeholder="deskripsi"></textarea>
                <input type="number" name="kedalaman" placeholder="kedalaman (bilangan bulat)">
                <input type="decimal" name="magnitude" placeholder="magnitude (desimal)">
                <input type="datetime-local" name="waktu_kejadian" placeholder="waktu kejadian">
                    <button>Save Report</button>
            </form>
        </div>
    </body>
</html>
