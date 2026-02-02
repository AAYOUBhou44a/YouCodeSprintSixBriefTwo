<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archives Projets - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased h-screen flex flex-col overflow-hidden">

    <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 shrink-0 z-30">
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center text-white shadow-indigo-200 shadow-lg">
                    <i class="fas fa-archive text-xs"></i>
                </div>
                <h1 class="text-sm font-black uppercase tracking-tighter">Bibliothèque des Briefs</h1>
            </div>
            <nav class="hidden md:flex items-center gap-1">
                <span class="text-slate-300 mx-2">/</span>
                <span class="text-xs font-bold text-slate-400">HISTORIQUE GLOBAL</span>
            </nav>
        </div>
        
        <div class="flex items-center gap-4">
            <div class="relative hidden sm:block">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input type="text" placeholder="Rechercher un projet..." class="pl-9 pr-4 py-2 bg-slate-100 border-none rounded-xl text-xs focus:ring-2 focus:ring-indigo-500 w-64 transition-all">
            </div>
            <button class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-slate-200 transition">
                <i class="fas fa-filter text-sm"></i>
            </button>
        </div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        
        <aside class="w-64 bg-white border-r border-slate-200 p-6 flex flex-col gap-8 shrink-0">
            <div>
                <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4">Filtrer par Classe</h3>
                <div class="space-y-2">
                    <label class="flex items-center gap-3 p-2 rounded-lg bg-indigo-50 text-indigo-700 cursor-pointer">
                        <input type="checkbox" checked class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="text-xs font-black uppercase">DWWM 2026</span>
                    </label>
                    <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-slate-50 text-slate-500 cursor-pointer transition">
                        <input type="checkbox" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="text-xs font-bold uppercase">CDA 2025</span>
                    </label>
                </div>
            </div>

            <div>
                <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4">Statut de validation</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-[11px] font-bold">
                        <span class="text-slate-500">Taux de réussite</span>
                        <span class="text-indigo-600">88%</span>
                    </div>
                    <div class="w-full h-1.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-indigo-500" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto bg-slate-50/50 p-8">
            <div class="max-w-5xl mx-auto">
                
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Sprint</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Titre du Projet</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Validation</th>
                                <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Clôture</th>
                                <th class="px-8 py-5"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            
                            <tr class="group hover:bg-indigo-50/30 transition-colors">
                                <td class="px-8 py-6">
                                    <span class="w-10 h-10 flex items-center justify-center bg-slate-100 rounded-xl font-black text-slate-600 group-hover:bg-white transition shadow-sm">01</span>
                                </td>
                                <td class="px-8 py-6">
                                    <h4 class="text-sm font-black text-slate-800 tracking-tight">Maquetter une application SaaS</h4>
                                    <p class="text-[10px] font-bold text-indigo-500 uppercase mt-1">3 Compétences visées</p>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center justify-center gap-2">
                                        <span class="text-xs font-black text-green-600">95%</span>
                                        <div class="w-16 h-1 bg-slate-100 rounded-full overflow-hidden">
                                            <div class="h-full bg-green-500" style="width: 95%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="text-xs font-medium text-slate-500">12 Déc. 2025</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <button class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 hover:bg-indigo-600 hover:text-white transition flex items-center justify-center ml-auto shadow-sm">
                                        <i class="fas fa-external-link-alt text-xs"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr class="group hover:bg-indigo-50/30 transition-colors">
                                <td class="px-8 py-6">
                                    <span class="w-10 h-10 flex items-center justify-center bg-slate-100 rounded-xl font-black text-slate-600 group-hover:bg-white transition shadow-sm">02</span>
                                </td>
                                <td class="px-8 py-6">
                                    <h4 class="text-sm font-black text-slate-800 tracking-tight">API REST avec Laravel & MySQL</h4>
                                    <p class="text-[10px] font-bold text-indigo-500 uppercase mt-1">4 Compétences visées</p>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center justify-center gap-2">
                                        <span class="text-xs font-black text-amber-500">72%</span>
                                        <div class="w-16 h-1 bg-slate-100 rounded-full overflow-hidden">
                                            <div class="h-full bg-amber-500" style="width: 72%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="text-xs font-medium text-slate-500">15 Janv. 2026</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <button class="w-8 h-8 rounded-lg bg-slate-50 text-slate-400 hover:bg-indigo-600 hover:text-white transition flex items-center justify-center ml-auto shadow-sm">
                                        <i class="fas fa-external-link-alt text-xs"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="mt-8 flex items-center justify-center gap-2">
                    <button class="p-2 text-slate-400 hover:text-indigo-600 font-black uppercase text-[10px] tracking-widest">Précédent</button>
                    <span class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-xs font-black">1</span>
                    <button class="p-2 text-slate-400 hover:text-indigo-600 font-black uppercase text-[10px] tracking-widest">Suivant</button>
                </div>
            </div>
        </main>
    </div>

</body>
</html>