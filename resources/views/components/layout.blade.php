<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#7790ef",
                    },
                },
            },
        };
    </script>

    <link rel="icon" href="{{ url('images/icon.png') }}">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Find Jobs</title>
</head>
<body class="mb-48">
<nav class="flex justify-between items-center mb-4">
    <a href="/">
        <img class="w-24 logo" src="{{asset('images/logo.png')}}" alt=""/>
    </a>
    <ul class="flex space-x-6 mr-6 text-lg">

        @auth()
        <li>
            <span class="font-bold uppercase">
                Welcome {{ auth()->user()->name }}
            </span>
        </li>
        <li>
            <a href="/jobs/manage" class="hover:text-laravel">
                <i class="fa-solid fa-gear"></i>Manage jobs
            </a>
        </li>

            <li>
                <a  class="hover:text-laravel" href="#">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-open"></i> Logout
                    </button>
                </form>
                </a>
            </li>

        @else

        <li>
            <a href="/register" class="hover:text-laravel">
                <i class="fa-solid fa-user-plus"></i> Register
            </a>
        </li>
        <li>
            <a href="/login" class="hover:text-laravel">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>Login
            </a>
        </li>
        @endauth
    </ul>
</nav>

<main>
    {{$slot}}
</main>
<x-flash-message></x-flash-message>
@include('partials._footer')

</body>
</html>
