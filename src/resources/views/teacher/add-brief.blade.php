<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un Brief - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased p-8">

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-slate-900 px-8 py-6 text-white">
            <h1 class="text-2xl font-bold">Nouveau Brief Pédagogique</h1>
            <p class="text-slate-400 text-sm mt-1">Définissez les objectifs et les compétences cibles pour ce travail.</p>
        </div>

        <form action="#" class="p-8 space-y-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-slate-700 mb-2 tracking-wide uppercase">Titre du Brief</label>
                    <input type="text" placeholder="ex: Développement d'une API REST" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Sprint Associé</label>
                    <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                        <option>Sprint 02 : Backend & MVC</option>
                        <option>Sprint 03 : Sécurité & Auth</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Type de projet</label>
                    <div class="flex gap-4 mt-2">
                        <label class="flex-1 flex items-center justify-center gap-2 p-3 border-2 border-slate-100 rounded-xl cursor-pointer hover:bg-indigo-50 transition peer">
                            <input type="radio" name="type" class="text-indigo-600" checked>
                            <span class="text-sm font-bold">Individuel</span>
                        </label>
                        <label class="flex-1 flex items-center justify-center gap-2 p-3 border-2 border-slate-100 rounded-xl cursor-pointer hover:bg-indigo-50 transition">
                            <input type="radio" name="type" class="text-indigo-600">
                            <span class="text-sm font-bold">Collectif</span>
                        </label>
                    </div>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Description / Consignes</label>
                    <textarea rows="4" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition" placeholder="Détaillez les attendus du projet..."></textarea>
                </div>
            </div>

            <hr class="border-slate-100">

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-4 tracking-wide uppercase">Compétences à évaluer (Cibles)</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <label class="flex items-start gap-3 p-4 border border-slate-200 rounded-xl cursor-pointer hover:border-indigo-500 hover:bg-indigo-50/30 transition group">
                        <input type="checkbox" class="mt-1 w-4 h-4 text-indigo-600 rounded">
                        <div>
                            <span class="block text-sm font-bold text-slate-800">C1 - Maquetter une application</span>
                            <span class="block text-xs text-slate-500 mt-0.5">Interface utilisateur et UX</span>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 p-4 border border-slate-200 rounded-xl cursor-pointer hover:border-indigo-500 hover:bg-indigo-50/30 transition group">
                        <input type="checkbox" class="mt-1 w-4 h-4 text-indigo-600 rounded">
                        <div>
                            <span class="block text-sm font-bold text-slate-800">C4 - Créer une base de données</span>
                            <span class="block text-xs text-slate-500 mt-0.5">Modélisation SQL et MCD</span>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 p-4 border border-slate-200 rounded-xl cursor-pointer hover:border-indigo-500 hover:bg-indigo-50/30 transition group">
                        <input type="checkbox" class="mt-1 w-4 h-4 text-indigo-600 rounded">
                        <div>
                            <span class="block text-sm font-bold text-slate-800">C8 - Développer une API</span>
                            <span class="block text-xs text-slate-500 mt-0.5">Endpoints et formats JSON</span>
                        </div>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4 border-t border-slate-100 pt-8">
                <button type="button" class="px-6 py-3 text-slate-500 font-bold hover:text-slate-800 transition">Annuler</button>
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white font-black rounded-xl shadow-xl shadow-indigo-100 hover:bg-indigo-700 transform hover:-translate-y-1 transition-all">
                    Publier le Brief
                </button>
            </div>
        </form>
    </div>

</body>
</html>