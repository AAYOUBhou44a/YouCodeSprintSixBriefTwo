<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - EduConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .glass-effect { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); }
    </style>
</head>
<body class="bg-slate-50 min-h-full font-sans antialiased text-slate-900">
    <div class="flex min-h-screen"> 
        <!-- @auth 
            @include('partials.sidebar')
        @endauth -->

        <div class="flex-1 flex flex-col">
            
            @include('partials.header')

            <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
    </div>
</body>
</html>