<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Apprenant - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased font-sans">

    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-72 bg-white border-r border-slate-200 flex flex-col shrink-0 z-40">
            <div class="p-8 flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-indigo-200">
                    <i class="fas fa-layer-group text-lg"></i>
                </div>
                <span class="font-black text-xl tracking-tighter text-slate-900 uppercase">MyBrief</span>
            </div>

            <nav class="flex-1 px-6 space-y-2 overflow-y-auto">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4 ml-2">Menu Principal</p>
                <a href="#" class="flex items-center gap-4 px-4 py-3 bg-indigo-50 text-indigo-700 rounded-2xl font-black text-sm transition group">
                    <i class="fas fa-chart-pie transition group-hover:scale-110"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-2xl font-bold text-sm transition group">
                    <i class="fas fa-book-open transition group-hover:scale-110"></i> Mes Briefs
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-2xl font-bold text-sm transition group">
                    <i class="fas fa-award transition group-hover:scale-110"></i> Compétences
                </a>
            </nav>

            <div class="p-6">
                <div class="bg-slate-900 rounded-3xl p-5 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <p class="text-[9px] font-black text-indigo-400 uppercase tracking-[0.2em]">Promotion</p>
                        <p class="text-sm font-black">DWWM - 2026</p>
                        <div class="mt-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center font-black text-[10px]">SM</div>
                            <div>
                                <p class="text-xs font-bold">Sophie Martin</p>
                                <p class="text-[9px] text-slate-400 italic">Modifier le profil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            
            <header class="h-20 bg-white/80 backdrop-blur-md border-b border-slate-200 flex items-center justify-between px-10 shrink-0 z-30">
                <div>
                    <h2 class="text-xl font-black text-slate-900 tracking-tight">Bonjour, Sophie 👋</h2>
                    <p class="text-xs text-slate-400 font-medium">Voici où tu en es dans ton parcours pédagogique.</p>
                </div>
                <div class="flex gap-4">
                    <button class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-slate-50 transition relative">
                        <i class="far fa-bell"></i>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <button class="bg-slate-900 text-white px-5 py-2 rounded-xl text-xs font-black shadow-lg shadow-slate-200 active:scale-95 transition">
                        PROCHAIN BRIEF
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-10 space-y-10 custom-scrollbar">
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm relative overflow-hidden group">
                        <div class="relative z-10">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Taux de Validation</p>
                            <h3 class="text-3xl font-black text-slate-900 mt-2">78%</h3>
                        </div>
                        <i class="fas fa-check-circle absolute -right-4 -bottom-4 text-6xl text-slate-50 opacity-0 group-hover:opacity-100 transition-all"></i>
                    </div>
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm relative overflow-hidden group">
                        <div class="relative z-10">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Niveau Moyen</p>
                            <h3 class="text-3xl font-black text-amber-500 mt-2">ADAPTER</h3>
                        </div>
                        <i class="fas fa-bolt absolute -right-4 -bottom-4 text-6xl text-slate-50 opacity-0 group-hover:opacity-100 transition-all"></i>
                    </div>
                    <div class="bg-indigo-600 p-6 rounded-[2rem] shadow-xl shadow-indigo-100 text-white relative overflow-hidden">
                        <div class="relative z-10">
                            <p class="text-[10px] font-black text-indigo-200 uppercase tracking-widest">Sprint Actuel</p>
                            <h3 class="text-3xl font-black mt-2">S.03</h3>
                        </div>
                        <i class="fas fa-running absolute -right-4 -bottom-4 text-6xl text-white/10"></i>
                    </div>
                    <div class="bg-white p-6 rounded-[2rem] border border-slate-200 shadow-sm">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Compétences Or</p>
                        <div class="flex items-center gap-2 mt-2">
                            <h3 class="text-3xl font-black text-slate-900">03</h3>
                            <span class="text-[10px] font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">Transposées</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                    
                    <div class="lg:col-span-2 space-y-6">
                        <div class="flex items-center justify-between">
                            <h4 class="font-black text-slate-900 uppercase text-xs tracking-widest flex items-center gap-3">
                                <span class="w-1.5 h-6 bg-indigo-600 rounded-full"></span> Historique des Evaluations
                            </h4>
                            <button class="text-[10px] font-black text-indigo-600 hover:underline uppercase">Voir tout</button>
                        </div>
                        
                        <div class="bg-white rounded-[2rem] border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition">
                            <div class="p-8">
                                <div class="flex justify-between items-start mb-6">
                                    <div>
                                        <span class="px-3 py-1 bg-slate-100 text-slate-500 rounded-full text-[9px] font-black uppercase tracking-tighter">Janvier 2026</span>
                                        <h5 class="font-black text-slate-900 text-xl mt-2 leading-tight">Système de Débriefing & Feedback</h5>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-[9px] font-black text-slate-400 uppercase mb-1">Évaluateur</p>
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs font-bold text-slate-700">Jean Dupont</span>
                                            <img src="https://ui-avatars.com/api/?name=Jean+Dupont" class="w-6 h-6 rounded-lg">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                        <div class="flex items-center gap-3">
                                            <span class="w-8 h-8 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-lg uppercase">C1</span>
                                            <span class="text-[11px] font-bold text-slate-600 uppercase">Maquetter</span>
                                        </div>
                                        <span class="text-[10px] font-black text-amber-500 bg-amber-50 px-2 py-1 rounded-md uppercase">Adapter</span>
                                    </div>
                                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                        <div class="flex items-center gap-3">
                                            <span class="w-8 h-8 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-lg uppercase">C4</span>
                                            <span class="text-[11px] font-bold text-slate-600 uppercase">Base de données</span>
                                        </div>
                                        <span class="text-[10px] font-black text-green-500 bg-green-50 px-2 py-1 rounded-md uppercase">Transposer</span>
                                    </div>
                                </div>

                                <div class="bg-indigo-50/50 p-5 rounded-2xl border-l-4 border-indigo-500 relative">
                                    <i class="fas fa-quote-left absolute top-4 right-4 text-indigo-100 text-2xl"></i>
                                    <p class="text-sm italic text-slate-600 leading-relaxed pr-8">
                                        "Une architecture MVC très propre. Tu as bien compris l'injection de dépendances. Concentre-toi maintenant sur l'optimisation des requêtes SQL."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <h4 class="font-black text-slate-900 uppercase text-xs tracking-widest flex items-center gap-3">
                            <span class="w-1.5 h-6 bg-amber-500 rounded-full"></span> Maîtrise des Compétences
                        </h4>
                        
                        <div class="bg-white rounded-[2rem] border border-slate-200 p-8 shadow-sm">
                            <div class="space-y-8">
                                <div>
                                    <div class="flex justify-between items-end mb-3">
                                        <div>
                                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Interface</p>
                                            <h6 class="text-xs font-black text-slate-800 uppercase">C1 - Maquettage UX/UI</h6>
                                        </div>
                                        <span class="text-[10px] font-black text-amber-500 uppercase italic">Niveau 2</span>
                                    </div>
                                    <div class="h-3 w-full bg-slate-100 rounded-full flex gap-1 p-0.5">
                                        <div class="h-full w-1/3 bg-red-400 rounded-full shadow-sm"></div>
                                        <div class="h-full w-1/3 bg-amber-400 rounded-full shadow-sm"></div>
                                        <div class="h-full w-1/3 bg-slate-200 rounded-full"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between items-end mb-3">
                                        <div>
                                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Back-end</p>
                                            <h6 class="text-xs font-black text-slate-800 uppercase">C4 - Architecture SQL</h6>
                                        </div>
                                        <span class="text-[10px] font-black text-green-500 uppercase italic">Niveau 3</span>
                                    </div>
                                    <div class="h-3 w-full bg-slate-100 rounded-full flex gap-1 p-0.5">
                                        <div class="h-full w-1/3 bg-red-400 rounded-full shadow-sm"></div>
                                        <div class="h-full w-1/3 bg-amber-400 rounded-full shadow-sm"></div>
                                        <div class="h-full w-1/3 bg-green-500 rounded-full shadow-sm"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 pt-6 border-t border-slate-100 space-y-4">
                                <p class="text-[9px] font-black text-slate-400 uppercase text-center tracking-widest">Légende des paliers</p>
                                <div class="grid grid-cols-3 gap-2 text-[8px] font-black text-center uppercase tracking-tighter">
                                    <div class="p-2 bg-red-50 text-red-500 rounded-lg border border-red-100">IMITER</div>
                                    <div class="p-2 bg-amber-50 text-amber-500 rounded-lg border border-amber-100">ADAPTER</div>
                                    <div class="p-2 bg-green-50 text-green-600 rounded-lg border border-green-100">TRANSPOSER</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>

</body>
</html>