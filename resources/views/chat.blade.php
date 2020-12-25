<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 60vh;
        }
    </style>

</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-900 sm:pt-0">

    <div class="flex justify-center mx-auto sm:px-6 lg:px-8 mt-20 min-w-full" id="app">
        <div class="rounded bg-white py-6 w-3/4">
            <div class="flex bg-purple-500 justify-between py-1 px-4">
                <h3 class="text-sm">Chat Room</h3>
                <svg class="h-4 text-gray-200 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z"/></svg>
            </div>
            <div class="text-sm mt-2 px-4">
                <ul class="list-group" v-chat-scroll>
                    <li>
                        <message v-for="value in chat.message" color="blue" :key="value.index"> @{{ value }} </message>
                    </li>
                </ul>
                <p class="mt-3 text-gray-dark"><input type="text" class="focus:outline-none" placeholder="Enter Text ..." v-model='message' @keydown.enter="send"></p>
            </div>
        </div>
    </div>
</div>


<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
