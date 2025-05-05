@vite('resources/css/app.css')

<div class="flex justify-center items-center px-4 py-8 bg-green-50 h-full">
    <div class="rounded-xl shadow p-8 max-w-md mx-auto bg-white">
        <div class="text-center mb-6 text-2xl font-bold">Login</div>
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        
        <form class="" action="{{ route('signIn') }}" method="post">
            @csrf
            
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="email"
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                    placeholder=" " required />
                <label for="email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email
                </label>
            </div>
            <p>@error('email')
                {{ $message }}
            @enderror</p>

            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" id="password"
                    class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"
                    placeholder=" " required />
                <label for="password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Password
                </label>
            </div>
            <p>@error('password')
                {{ $message }}
            @enderror</p>

            <div class="">
                <button type="submit"
                    class="relative z-0 w-full mb-5 group align-middle text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Login
                </button>
            </div>

            <div class="flex justify-between gap-6 text-md text-gray-500">
                <div>
                    <a href="#" class="text-green-600 hover:text-green-900">Forgot password?</a>
                </div>
                <div>
                    <p>Don't have an account?
                        <a href="{{ route('signUp') }}" class="text-green-600 hover:text-green-900">Sign Up</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>