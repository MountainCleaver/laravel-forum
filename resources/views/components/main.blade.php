<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    {{-- TOP NAV --}}
    <div class="flex flex-row">
        <div>
            <img src="" alt="" srcset="">
            <h2>Forum Yarn</h2>
        </div>
        <div>
            <input type="text" name="" id="">
        </div>
        <div>
            <img src="" alt="" srcset="">
            <h3>Username</h3>
        </div>
    </div>
    <h1>Main</h1>
    <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
    </form>
    {{ $slot }}
</body>
</html>