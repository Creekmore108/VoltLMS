<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'video cast' }}</title>
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <livewire:layout.navigation />

    <main class="w-full md:max-x-3xl mx-auto lg:max-x-6xl px-4 pt-6">
        {{ $slot }}
    </main>

</body>

</html>
