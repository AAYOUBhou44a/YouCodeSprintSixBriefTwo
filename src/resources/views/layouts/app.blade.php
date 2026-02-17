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
            @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-xl shadow-sm flex items-center justify-between animate-fade-in">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3"></i>
                    <span class="text-sm font-bold uppercase tracking-tight">{{session('success')}}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-emerald-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            @endif
            <main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
    </div>
</body>
</html>