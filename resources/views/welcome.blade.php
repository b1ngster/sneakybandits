<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sneaky Bandits</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

<?php
/**
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 */
?>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        <ul id="main_menu">

                                <li> <a href="/home">Home </a> </li>
                                <li> <a href="/news">News </a> </li>
                                <li> <a href="/stats">Stats </a> </li>
                                <li> <a href="/matches">Matches </a> </li>
                                <li> <a href="/live">Live </a> </li>
                        </ul>

                        <ul id="auth">
                                <li> <a href="/login">Login </a> </li>
                                <li> <a href="/sign_up">Sign Up </a> </li>
                        </ul>

                    </div>


            </div>
            </div>
        </div>
    </body>
</html>
               