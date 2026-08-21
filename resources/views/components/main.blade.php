<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col">
    {{-- TOP NAV --}}
    <div class="flex flex-row justify-between min-h-15 border-b-2 border-pink-200 px-5 py-2 items-center">
        <div>
            <img src="" alt="" srcset="">
            <h2 class="text-3xl"
                >Forum Yarn</h2>
        </div>
        <div>
            <form action="/search" method="post">
                <input class="border px-2 py-1 w-[50vw] h-11 rounded-2xl"
                    type="text" name="search" id="search" placeholder="Search..."
                >
            </form>
        </div>
        <div>
            <img src="" alt="" srcset="">
            <a href="/sample" class="text-2xl hover:underline"
                >{{ Auth::user()->name }}</a>
            
            <form action="/logout" method="POST">
                @csrf
                <button class="hover:underline"
                    type="submit">Logout</button>
            </form>
        </div>
    </div>

    <div class="flex flex-row justify-between">
        {{-- LEFT NAV --}}
        <div class="min-w-[20%] bg-red-400 overflow-y-scroll">
            <nav>
                <ul>
                    <li></li>
                </ul>
            </nav>
        </div>
        {{-- MAIN CONTENT --}}
        <div class="overflow-y-scroll">{{ $slot }}</div>
        {{-- RIGHT NAV --}}
        <div class="min-w-[20%] bg-red-400 overflow-y-scroll"></div>
    </div>
    
</body>
</html>