<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Yarn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (Auth::check())
        <p>Authenticated</p>
        {{ Auth::user()->name }}
    @else
        <p>Not authenticated</p>
    @endif

    <div class="flex min-h-screen">
        <div class="w-8/12 flex flex-col">
            <h1 class="text-6xl px-2 py-2">Forum Yarn</h1>
            <div class="flex-1 flex items-center justify-center">
                <img 
                    class="max-h-[80vh] max-w-[80%] object-contain"
                    src="https://static.vecteezy.com/system/resources/previews/056/565/915/non_2x/cozy-pink-yarn-ball-isolated-on-transparent-background-png.png" 
                    alt="yarn haha" >
            </div>
        </div>

        {{-- Auth Pages --}}
        <div class="flex items-center justify-center min-h-screen w-4/12 border-l border-red-200">
            {{ $slot }}
        </div>
    </div>
</body>
</html>