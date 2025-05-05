@vite('resources/css/app.css')
<div class="container mx-auto px-4 py-8">
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    <div class="text-end my-4 text-md">
        @auth
            <span class="text-gray-600">Welcome, {{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-blue-500 hover:text-blue-700">Logout</button>
            </form>
        @else
            <div class="text-center my-4 text-xl font-bold">Welcome To Dashboard</div>
            <a href="{{ route('signIn') }}" class="text-blue-500 hover:text-blue-700">Login</a>
        @endauth
        
    </div>
</div>