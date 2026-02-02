<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 h-screen flex overflow-hidden">

    <div class="hidden lg:flex w-1/2 bg-slate-900 justify-center items-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')] bg-cover bg-center"></div>
        <div class="relative z-10 text-center px-10">
            <h1 class="text-5xl font-bold text-white mb-4 tracking-tight">MyBrief</h1>
            <p class="text-slate-300 text-lg font-light">
                La plateforme de suivi des compétences<br>et de débriefing pédagogique.
            </p>
        </div>
    </div>

    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center bg-white p-8 sm:p-12 lg:p-24">
        <div class="w-full max-w-md">
            <div class="mb-10">
                <h2 class="text-3xl font-extrabold text-slate-900">Bienvenue</h2>
                <p class="text-slate-500 mt-2">Connectez-vous à votre espace formateur.</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email professionnel</label>
                    <input type="email" id="email" name="email" required 
                        class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none"
                        placeholder="nom@ecole-numerique.com">
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1">
                        <label for="password" class="block text-sm font-medium text-slate-700">Mot de passe</label>
                        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Oublié ?</a>
                    </div>
                    <input type="password" id="password" name="password" required 
                        class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none"
                        placeholder="••••••••">
                </div>

                <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg hover:shadow-indigo-500/30 transition duration-200 transform active:scale-95">
                    Se connecter
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-slate-400">
                © 2026 Système Pédagogique - Version 1.0
            </p>
        </div>
    </div>

</body>
</html>