<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/') }} " alt="E voting"></a>
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/0000000000000000?d=mp" alt="alt"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>
    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi odit laudantium alias, similique deserunt
            suscipit, ab excepturi amet fuga aliquid sequi. Aliquid, iure eos! Recusandae, unde, illo repellat et,
            officia corporis quaerat earum similique ipsa quidem adipisci sed! Magni ratione fugiat natus aspernatur
            sequi consectetur quisquam. Officia culpa quis dignissimos labore quaerat eius totam voluptas harum dolor
            fugit laborum, reiciendis fugiat ab possimus et expedita eos! Laborum laudantium accusamus voluptas, nisi
            sapiente modi, architecto tenetur officia maxime ipsum explicabo mollitia rem iste, doloribus nesciunt
            blanditiis magni sed nemo quam quo quidem vel. Repudiandae similique nihil animi modi esse molestiae soluta!
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (100)</a></li>
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Consdiering
                            (23)
                        </a>
                    </li>
                    <li>
                    
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue"> In
                            Progress (10)
                        </a>
                    </li>
                    
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                     <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Implemented
                            (23)
                        </a>
                    <li>
                        <a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Closed (21)
                        </a>
                    </li>
                    
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
