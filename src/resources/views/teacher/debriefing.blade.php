<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation Apprenant - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 h-screen flex flex-col overflow-hidden text-slate-800 antialiased">

    <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 shrink-0 z-20">
        <div class="flex items-center gap-4">
            <a href="dashboard.html" class="w-10 h-10 flex items-center justify-center rounded-xl bg-slate-50 text-slate-400 hover:bg-slate-100 hover:text-indigo-600 transition">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h1 class="text-sm font-black text-slate-900 uppercase tracking-tighter leading-none">Correction : Système de Débriefing</h1>
                <p class="text-[10px] text-slate-400 font-bold uppercase mt-1">Sprint 02 • Promotion DWWM 2026</p>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-[10px] font-black text-slate-400 bg-slate-100 px-2 py-1 rounded">BROUILLON ENREGISTRÉ</span>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl text-xs font-black shadow-lg shadow-indigo-100 transition transform active:scale-95">
                CLÔTURER LE BRIEF
            </button>
        </div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        
        <aside class="w-80 bg-white border-r border-slate-200 flex flex-col shrink-0">
            <div class="p-4 bg-slate-50/50">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                    <input type="text" placeholder="Chercher un apprenant..." 
                           class="w-full pl-9 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-xs focus:ring-2 focus:ring-indigo-500 outline-none transition">
                </div>
            </div>
            
            <div class="flex-1 overflow-y-auto custom-scrollbar">
                <ul class="divide-y divide-slate-50">
                    <li class="bg-indigo-50/50 border-r-4 border-indigo-600 p-4 cursor-pointer relative group">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img src="https://ui-avatars.com/api/?name=Sophie+Martin&background=6366f1&color=fff" class="w-10 h-10 rounded-xl shadow-sm">
                                <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-indigo-600 border-2 border-white rounded-full"></div>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-900 text-sm">Sophie Martin</h4>
                                <p class="text-[10px] font-black text-indigo-600 uppercase">En cours...</p>
                            </div>
                        </div>
                    </li>

                    <li class="p-4 hover:bg-slate-50 cursor-pointer transition group">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Lucas+Bernard&background=e2e8f0&color=64748b" class="w-10 h-10 rounded-xl grayscale group-hover:grayscale-0 transition">
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-700 text-sm group-hover:text-indigo-600">Lucas Bernard</h4>
                                <div class="flex items-center gap-1 text-[10px] font-black text-green-500 uppercase">
                                    <i class="fas fa-check-double"></i> Évalué
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="p-4 hover:bg-slate-50 cursor-pointer transition group">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Emma+Durand&background=e2e8f0&color=64748b" class="w-10 h-10 rounded-xl grayscale opacity-50">
                            <div class="flex-1">
                                <h4 class="font-bold text-slate-400 text-sm italic">Emma Durand</h4>
                                <p class="text-[10px] font-black text-slate-300 uppercase italic">Non soumis</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-8 bg-slate-50/50">
            <div class="max-w-4xl mx-auto pb-12">
                
                <div class="bg-white rounded-3xl p-6 mb-8 border border-slate-200 shadow-sm flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 bg-indigo-100 rounded-3xl flex items-center justify-center text-3xl font-black text-indigo-600">SM</div>
                        <div>
                            <h2 class="text-2xl font-black text-slate-900 tracking-tight">Sophie Martin</h2>
                            <div class="flex flex-wrap gap-4 mt-2">
                                <a href="#" class="text-xs font-bold text-slate-500 hover:text-indigo-600 flex items-center gap-2 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100 transition">
                                    <i class="fab fa-github text-base"></i> Dépôt GitHub
                                </a>
                                <a href="#" class="text-xs font-bold text-slate-500 hover:text-indigo-600 flex items-center gap-2 bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-100 transition">
                                    <i class="fas fa-external-link-alt"></i> Preview Live
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h-20 w-px bg-slate-100 hidden md:block"></div>
                    <div class="text-center md:text-right">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Rendu le</p>
                        <p class="text-sm font-bold text-slate-800">23 Janvier 2026</p>
                        <p class="text-xs text-slate-500 italic">14:45 (À l'heure)</p>
                    </div>
                </div>

                <form class="space-y-8">
                    
                    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                        <div class="px-8 py-5 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center">
                            <h3 class="font-black text-slate-800 uppercase text-xs tracking-widest flex items-center gap-2">
                                <i class="fas fa-award text-indigo-500"></i> Grille d'évaluation
                            </h3>
                            <span class="text-[10px] font-bold text-slate-400">3 Compétences visées</span>
                        </div>

                        <div class="p-8 space-y-12">
                            
                            <div class="skill-group">
                                <div class="flex items-center gap-3 mb-6">
                                    <span class="w-8 h-8 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-lg">C1</span>
                                    <h4 class="text-lg font-black text-slate-800 tracking-tight">Maquetter une application</h4>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <label class="group relative cursor-pointer">
                                        <input type="radio" name="c1" class="peer sr-only">
                                        <div class="p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 group-hover:bg-white group-hover:border-slate-200 peer-checked:border-red-500 peer-checked:bg-red-50 transition-all h-full">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-xs font-black uppercase tracking-widest text-slate-400 peer-checked:text-red-600">Imiter</span>
                                                <div class="w-4 h-4 rounded-full border-2 border-slate-200 peer-checked:bg-red-500 peer-checked:border-red-500"></div>
                                            </div>
                                            <p class="text-[11px] leading-relaxed text-slate-500">Exécution guidée. Reproduit sans autonomie majeure.</p>
                                        </div>
                                    </label>
                                    <label class="group relative cursor-pointer">
                                        <input type="radio" name="c1" class="peer sr-only" checked>
                                        <div class="p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 group-hover:bg-white group-hover:border-slate-200 peer-checked:border-amber-500 peer-checked:bg-amber-50 transition-all h-full">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-xs font-black uppercase tracking-widest text-slate-400 peer-checked:text-amber-600">Adapter</span>
                                                <div class="w-4 h-4 rounded-full border-2 border-slate-200 peer-checked:bg-amber-500 peer-checked:border-amber-500"></div>
                                            </div>
                                            <p class="text-[11px] leading-relaxed text-slate-500">Sait modifier et ajuster selon le contexte du projet.</p>
                                        </div>
                                    </label>
                                    <label class="group relative cursor-pointer">
                                        <input type="radio" name="c1" class="peer sr-only">
                                        <div class="p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 group-hover:bg-white group-hover:border-slate-200 peer-checked:border-green-500 peer-checked:bg-green-50 transition-all h-full">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-xs font-black uppercase tracking-widest text-slate-400 peer-checked:text-green-600">Transposer</span>
                                                <div class="w-4 h-4 rounded-full border-2 border-slate-200 peer-checked:bg-green-500 peer-checked:border-green-500"></div>
                                            </div>
                                            <p class="text-[11px] leading-relaxed text-slate-500">Maîtrise totale. Capable d'innover sur d'autres projets.</p>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="opacity-40 grayscale pointer-events-none">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="w-8 h-8 flex items-center justify-center bg-slate-300 text-white text-[10px] font-black rounded-lg">C4</span>
                                    <h4 class="text-lg font-black text-slate-400 tracking-tight">Base de données</h4>
                                </div>
                                <div class="h-24 border-2 border-dashed border-slate-200 rounded-2xl"></div>
                            </div>

                        </div>
                    </div>

                    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-8">
                        <label class="block text-xs font-black text-slate-800 uppercase tracking-widest mb-4">
                            <i class="far fa-comment-dots text-indigo-500 mr-2"></i> Feedback pédagogique
                        </label>
                        <textarea rows="5" class="w-full p-5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm italic" placeholder="Quels sont les points forts et les axes d'amélioration de Sophie sur ce brief ?"></textarea>
                    </div>

                    <div class="flex items-center justify-end gap-6 pt-4">
                        <button type="button" class="text-sm font-bold text-slate-400 hover:text-red-500 transition">Réinitialiser l'évaluation</button>
                        <button type="submit" class="bg-slate-900 text-white px-10 py-4 rounded-2xl font-black shadow-xl hover:bg-slate-800 transition transform active:scale-95">
                            ENREGISTRER LE DÉBRIEFING
                        </button>
                    </div>

                </form>
            </div>
        </main>
    </div>

</body>
</html>