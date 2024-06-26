<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <!-- reference CSS and JavaScript file -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    {{-- Set padding around the navbar --}}
    <div class="px-10">
        {{-- spread nav items horizontally across the page, and border-white/20 means white border 20% --}}
        <nav class="flex justify-between items-centre py-4 border-b border-white/20">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" />
                </a>
            </div>

            <div class="space-x-6">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>
                <a href="#">Post a Job</a>
            </div>
        </nav>
        {{-- max width values can be set with custom value in [] --}}
        <main class="mt-10 max-w-[986px]">
            {{ $slot }}
        </main>
    </div>
</body>
</html>