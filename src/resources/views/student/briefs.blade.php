<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Briefs - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#F8FAFC] text-slate-800 antialiased h-screen flex flex-col overflow-hidden">

    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-72 bg-white border-r border-slate-200 flex flex-col shrink-0 z-40">
            <div class="p-8 flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-2xl flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-layer-group text-lg"></i>
                </div>
                <span class="font-black text-xl tracking-tighter text-slate-900 uppercase">MyBrief</span>
            </div>
            <nav class="flex-1 px-6 space-y-2">
                <a href="student-dashboard.html" class="flex items-center gap-4 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-2xl font-bold text-sm transition">
                    <i class="fas fa-chart-pie"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 bg-indigo-50 text-indigo-700 rounded-2xl font-black text-sm transition">
                    <i class="fas fa-book-open"></i> Mes Briefs
                </a>
                <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-500 hover:bg-slate-50 rounded-2xl font-bold text-sm transition">
                    <i class="fas fa-award"></i> Compétences
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            
            <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-10 shrink-0">
                <h2 class="text-xl font-black text-slate-900 uppercase tracking-tight">Catalogue de mes projets</h2>
                <div class="flex items-center gap-4">
                    <div class="flex bg-slate-100 p-1 rounded-xl">
                        <button class="px-4 py-1.5 bg-white shadow-sm rounded-lg text-[10px] font-black uppercase">Actifs</button>
                        <button class="px-4 py-1.5 text-slate-400 text-[10px] font-black uppercase">Terminés</button>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-10 space-y-8">
                
                <section class="space-y-4">
                    <div class="flex items-center gap-2 mb-6">
                        <span class="w-2 h-2 bg-indigo-600 rounded-full animate-ping"></span>
                        <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Brief en cours d'exécution</h3>
                    </div>

                    <div class="bg-white rounded-[2.5rem] border-2 border-indigo-600 p-8 shadow-xl shadow-indigo-50 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-8 text-right">
                            <p class="text-[10px] font-black text-indigo-400 uppercase">Deadline</p>
                            <p class="text-lg font-black text-slate-900">05 Fév. 2026</p>
                        </div>
                        
                        <div class="relative z-10 max-w-2xl">
                            <span class="px-4 py-1.5 bg-indigo-600 text-white rounded-full text-[10px] font-black uppercase tracking-widest">Sprint 03</span>
                            <h4 class="text-3xl font-black text-slate-900 mt-4 mb-4">Architecture d'une API Sécurisée</h4>
                            <p class="text-slate-500 text-sm leading-relaxed mb-6">
                                Mise en place d'un système d'authentification JWT et gestion des droits d'accès (RBAC) pour une plateforme de gestion scolaire.
                            </p>
                            
                            <div class="flex items-center gap-6">
                                <a href="student-submit.html" class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-black text-xs hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">
                                    SOUMETTRE MON TRAVAIL
                                </a>
                                <button class="text-slate-400 hover:text-indigo-600 transition font-black text-xs uppercase tracking-widest">Voir le sujet complet</button>
                            </div>
                        </div>
                        <i class="fas fa-rocket absolute -right-6 -bottom-6 text-[12rem] text-slate-50 group-hover:text-indigo-50 transition-colors -rotate-12"></i>
                    </div>
                </section>

                <section class="space-y-4 pt-6">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-6">Historique des Sprints</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="bg-white rounded-3xl border border-slate-200 p-6 hover:border-indigo-300 transition-all group">
                            <div class="flex justify-between items-start mb-4">
                                <span class="w-10 h-10 flex items-center justify-center bg-slate-900 text-white rounded-xl font-black text-xs">02</span>
                                <span class="bg-green-100 text-green-600 text-[10px] font-black px-3 py-1 rounded-full uppercase italic">Validé</span>
                            </div>
                            <h5 class="text-lg font-black text-slate-900 group-hover:text-indigo-600 transition">Système de Débriefing</h5>
                            <p class="text-xs text-slate-400 mt-2 line-clamp-2">Gestion des retours pédagogiques entre formateurs et étudiants.</p>
                            <div class="mt-6 pt-6 border-t border-slate-50 flex justify-between items-center">
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-slate-200 border-2 border-white flex items-center justify-center text-[8px] font-black">C1</div>
                                    <div class="w-6 h-6 rounded-full bg-slate-200 border-2 border-white flex items-center justify-center text-[8px] font-black">C4</div>
                                </div>
                                <button class="text-[10px] font-black text-slate-400 uppercase hover:text-indigo-600">Voir Feedback</button>
                            </div>
                        </div>

                        <div class="bg-white rounded-3xl border border-slate-200 p-6 opacity-80 group">
                            <div class="flex justify-between items-start mb-4">
                                <span class="w-10 h-10 flex items-center justify-center bg-slate-200 text-slate-500 rounded-xl font-black text-xs">01</span>
                                <span class="bg-amber-100 text-amber-600 text-[10px] font-black px-3 py-1 rounded-full uppercase italic">En Correction</span>
                            </div>
                            <h5 class="text-lg font-black text-slate-900 italic">Maquetter une application SaaS</h5>
                            <p class="text-xs text-slate-400 mt-2 line-clamp-2">Phase de design et prototypage sous Figma.</p>
                            <div class="mt-6 pt-6 border-t border-slate-50 flex justify-end">
                                <span class="text-[10px] font-bold text-slate-400 uppercase italic">Soumis le 12/01</span>
                            </div>
                        </div>

                    </div>
                </section>

            </main>
        </div>
    </div>

</body>
</html>