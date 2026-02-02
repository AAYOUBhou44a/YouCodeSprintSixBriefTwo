<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Débriefing - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased h-screen flex flex-col overflow-hidden">

    <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-10 shrink-0 z-20">
        <div class="flex items-center gap-6">
            <a href="student-briefs.html" class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-indigo-600 hover:text-white transition">
                <i class="fas fa-chevron-left"></i>
            </a>
            <div>
                <h1 class="text-sm font-black uppercase tracking-widest text-slate-400">Résultat de l'évaluation</h1>
                <h2 class="text-xl font-black text-slate-900 tracking-tight">Système de Débriefing & Feedback</h2>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <span class="px-4 py-2 bg-green-50 text-green-600 rounded-xl text-[10px] font-black uppercase border border-green-100 italic">Brief Validé</span>
        </div>
    </header>

    <main class="flex-1 overflow-y-auto p-10">
        <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="lg:col-span-2 space-y-8">
                
                <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 shadow-sm relative overflow-hidden">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=4f46e5&color=fff" class="w-12 h-12 rounded-2xl shadow-lg shadow-indigo-100">
                        <div>
                            <p class="text-xs font-black text-slate-900">Jean Dupont</p>
                            <p class="text-[10px] text-slate-400 uppercase font-bold">Formateur Référent</p>
                        </div>
                    </div>
                    <div class="relative">
                        <i class="fas fa-quote-left text-4xl text-indigo-50 absolute -top-2 -left-2"></i>
                        <p class="relative z-10 text-slate-600 leading-relaxed italic text-lg pl-6">
                            "Sophie, ton travail sur la couche service est exemplaire. L'organisation du code est modulaire et facile à lire. Pour le prochain projet, essaie d'approfondir la partie tests unitaires (PHPUnit) pour sécuriser davantage tes routes."
                        </p>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest ml-2">Analyse par compétence</h3>
                    
                    <div class="bg-white rounded-3xl border border-slate-200 p-6 flex items-center justify-between group hover:border-indigo-300 transition">
                        <div class="flex items-center gap-5">
                            <div class="w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-xs uppercase">C1</div>
                            <div>
                                <h4 class="font-black text-slate-900">Maquettage UX/UI</h4>
                                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-tighter">Palier atteint : ADAPTER</p>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="w-8 h-2 bg-red-400 rounded-full"></div>
                            <div class="w-8 h-2 bg-amber-400 rounded-full shadow-md shadow-amber-100"></div>
                            <div class="w-8 h-2 bg-slate-100 rounded-full"></div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl border border-slate-200 p-6 flex items-center justify-between group hover:border-indigo-300 transition">
                        <div class="flex items-center gap-5">
                            <div class="w-12 h-12 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-xs uppercase">C4</div>
                            <div>
                                <h4 class="font-black text-slate-900">Base de données SQL</h4>
                                <p class="text-[10px] text-slate-400 font-bold uppercase tracking-tighter">Palier atteint : TRANSPOSER</p>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <div class="w-8 h-2 bg-red-400 rounded-full"></div>
                            <div class="w-8 h-2 bg-amber-400 rounded-full"></div>
                            <div class="w-8 h-2 bg-green-500 rounded-full shadow-md shadow-green-100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                
                <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-xl shadow-slate-200">
                    <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-6">Tes livrables</h3>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center justify-between p-4 bg-white/5 rounded-2xl hover:bg-white/10 transition border border-white/10">
                            <span class="text-xs font-bold truncate mr-4 italic">github.com/sophie/brief-02</span>
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-4 bg-white/5 rounded-2xl hover:bg-white/10 transition border border-white/10">
                            <span class="text-xs font-bold italic">Version live</span>
                            <i class="fas fa-external-link-alt text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 shadow-sm">
                    <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-6">Timing</h3>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-slate-500">Soumission</span>
                        <span class="text-xs font-black uppercase text-slate-900">À l'heure</span>
                    </div>
                    <div class="w-full h-1.5 bg-green-500 rounded-full mb-6"></div>
                    
                    <div class="p-4 bg-slate-50 rounded-2xl text-center">
                        <p class="text-[9px] font-black text-slate-400 uppercase mb-1">Date d'évaluation</p>
                        <p class="text-sm font-black text-slate-900">23 Janvier 2026</p>
                    </div>
                </div>

                <button class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-black text-xs uppercase tracking-widest shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">
                    Télécharger le compte-rendu (PDF)
                </button>
            </div>

        </div>
    </main>

</body>
</html>