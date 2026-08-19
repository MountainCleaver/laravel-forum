<x-index>
    <div class="flex flex-col min-w-full p-10">
        <h2 class="text-3xl mb-10">Login</h2>
        @if ($errors->any())
    <div class="text-red-500 mb-4">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
        <form action="/login" method="post" class="flex flex-col gap-2" id="login-form">
            @csrf
            <input class="px-2.5 rounded-md h-10 border border-black" type="email" name="email" id="" placeholder="Email">
            <input class="px-2.5 rounded-md h-10 border" type="password" name="password" id="" placeholder="Password">
            <button class="bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-pink-600 cursor-pointer focus:ring-2 focus:ring-pink-400" type="submit" id="login-form-btn">Sign In</button>
        </form>
        <div class="flex flex-row justify-between px-2">
            <a href="/sample" class="hover:underline">Forgot Password</a>
            
            <a href="{{ route('toRegister') }}" class= "hover:underline">Register</a>
        </div>
        <br>
        <hr>
        <br>
        <div class="flex flex-col items-center">
            <p class="text-black-500">Or sign in with</p>
            <a href="/sample">
                <img class="w-20 rounded-4xl border border-pink-100 shadow-md hover:border-pink-600 " src="https://img.icons8.com/color/1200/google-logo.jpg" alt="">
            </a>
        </div>
    </div>
</x-index>
<script>
    document.getElementById('login-form').addEventListener('submit', () => {
        document.getElementById('login-form-btn').disabled = true;
    });
</script>