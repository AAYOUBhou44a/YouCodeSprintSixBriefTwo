<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumettre mon Brief - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col">

    <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 shrink-0">
        <div class="flex items-center gap-4">
            <a href="student-dashboard.html" class="text-slate-400 hover:text-indigo-600 transition">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-sm font-black uppercase tracking-tighter">Soumission du projet</h1>
        </div>
        <div class="flex items-center gap-2">
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
            <span class="text-[10px] font-black text-slate-400 uppercase">Ouvert jusqu'au 05 Fév.</span>
        </div>
    </header>

    <main class="flex-1 p-6 md:p-12">
        <div class="max-w-3xl mx-auto space-y-8">
            
            <div class="bg-indigo-600 rounded-3xl p-8 text-white shadow-xl shadow-indigo-100 relative overflow-hidden">
                <div class="relative z-10">
                    <span class="px-3 py-1 bg-white/20 rounded-full text-[10px] font-black uppercase tracking-widest">Sprint 02</span>
                    <h2 class="text-3xl font-black mt-4 tracking-tight">Système de Débriefing</h2>
                    <p class="text-indigo-100 mt-2 text-sm leading-relaxed max-w-xl">
                        Développez une application web permettant la gestion des évaluations entre formateurs et apprenants.
                    </p>
                </div>
                <i class="fas fa-code-branch absolute -right-4 -bottom-4 text-8xl text-white/10 rotate-12"></i>
            </div>

            <form action="#" method="POST" class="space-y-6">
                
                <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6">Livrables du projet</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Lien du dépôt GitHub <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <i class="fab fa-github absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                                <input type="url" required placeholder="https://github.com/votre-pseudo/votre-repo" 
                                       class="w-full pl-12 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Lien de la version en ligne (Optionnel)</label>
                            <div class="relative">
                                <i class="fas fa-link absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                                <input type="url" placeholder="https://votre-projet.vercel.app" 
                                       class="w-full pl-12 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6">Compétences évaluées sur ce brief</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="w-8 h-8 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-lg">C1</span>
                            <span class="text-xs font-bold text-slate-700">Maquetter une application</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                            <span class="w-8 h-8 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-lg">C4</span>
                            <span class="text-xs font-bold text-slate-700">Créer une base de données</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-4">Note à l'attention du formateur</label>
                    <textarea rows="4" placeholder="Difficultés rencontrées, fonctionnalités bonus, etc..." 
                              class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm"></textarea>
                </div>

                <div class="flex items-center justify-between pt-4">
                    <p class="text-xs text-slate-400 font-medium italic"><i class="fas fa-info-circle mr-1"></i> Vous pourrez modifier votre rendu jusqu'à la date limite.</p>
                    <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-indigo-100 hover:bg-indigo-700 transition transform active:scale-95">
                        SOUMETTRE MON TRAVAIL
                    </button>
                </div>

            </form>
        </div>
    </main>

</body>
</html>