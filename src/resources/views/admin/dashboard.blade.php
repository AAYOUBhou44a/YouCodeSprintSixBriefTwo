<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Formateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-64 bg-slate-900 text-white flex flex-col fixed h-full z-30 transition-all duration-300" id="sidebar">
            <div class="h-16 flex items-center justify-center border-b border-slate-800 px-6">
                <div class="font-bold text-xl tracking-wider text-white">
                    <span class="text-indigo-500">MY</span>BRIEF
                </div>
            </div>

            <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1">
                
                <p class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 mt-2">Principal</p>
                
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 bg-indigo-600 text-white rounded-lg transition-colors shadow-lg shadow-indigo-900/20">
                    <i class="fas fa-chart-pie w-5 text-center"></i>
                    <span class="font-medium text-sm">Vue d'ensemble</span>
                </a>

                <p class="px-3 text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2 mt-6">Pédagogie</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-300 hover:text-white hover:bg-slate-800 rounded-lg transition-colors group">
                    <i class="fas fa-layer-group w-5 text-center group-hover:text-indigo-400 transition"></i>
                    <span class="font-medium text-sm">Briefs & Sprints</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-300 hover:text-white hover:bg-slate-800 rounded-lg transition-colors group">
                    <i class="fas fa-users w-5 text-center group-hover:text-indigo-400 transition"></i>
                    <span class="font-medium text-sm">Mes Apprenants</span>
                </a>
                
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-300 hover:text-white hover:bg-slate-800 rounded-lg transition-colors group">
                    <i class="fas fa-clipboard-check w-5 text-center group-hover:text-indigo-400 transition"></i>
                    <span class="font-medium text-sm">Débriefings</span>
                    <span class="ml-auto bg-indigo-500 text-white py-0.5 px-2 rounded-full text-xs font-bold">3</span>
                </a>

            </nav>

            <div class="p-4 border-t border-slate-800">
                <button class="flex items-center gap-3 w-full p-2 rounded-lg hover:bg-slate-800 transition">
                    <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=6366f1&color=fff" class="w-8 h-8 rounded-full">
                    <div class="text-left hidden md:block">
                        <p class="text-xs font-medium text-white">Jean Dupont</p>
                        <p class="text-[10px] text-slate-400">Formateur Lead</p>
                    </div>
                </button>
            </div>
        </aside>

        <div class="flex-1 flex flex-col ml-64 overflow-hidden">
            
            <header class="h-16 bg-white border-b border-slate-200 flex justify-between items-center px-8 z-20">
                <h2 class="text-lg font-semibold text-slate-800">Tableau de bord</h2>
                
                <div class="flex items-center gap-4">
                    <button class="text-slate-500 hover:text-slate-700 relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 h-2 w-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="h-8 w-px bg-slate-200 mx-2"></div>
                    <a href="#" class="text-sm font-medium text-slate-600 hover:text-indigo-600">Déconnexion</a>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 p-8">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Sprint Actuel</p>
                            <h3 class="text-2xl font-bold text-slate-800 mt-1">Sprint 2</h3>
                            <p class="text-xs text-green-600 font-medium mt-1"><i class="fas fa-arrow-up"></i> J-4 avant fin</p>
                        </div>
                        <div class="p-3 bg-indigo-50 rounded-full text-indigo-600">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Briefs à corriger</p>
                            <h3 class="text-2xl font-bold text-slate-800 mt-1">12</h3>
                            <p class="text-xs text-orange-500 font-medium mt-1">Urgents</p>
                        </div>
                        <div class="p-3 bg-orange-50 rounded-full text-orange-600">
                            <i class="fas fa-pen-nib text-xl"></i>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Moyenne Classe</p>
                            <h3 class="text-2xl font-bold text-slate-800 mt-1">78%</h3>
                            <p class="text-xs text-slate-400 mt-1">Sur les compétences C1-C4</p>
                        </div>
                        <div class="p-3 bg-green-50 rounded-full text-green-600">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center">
                        <h3 class="font-bold text-slate-800">Activité Récente</h3>
                        <button class="text-indigo-600 text-sm font-medium hover:underline">Voir tout</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-slate-600">
                            <thead class="text-xs text-slate-500 uppercase bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3">Brief</th>
                                    <th class="px-6 py-3">État</th>
                                    <th class="px-6 py-3">Compétences</th>
                                    <th class="px-6 py-3 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 font-medium text-slate-900">
                                        Système de Débriefing
                                        <div class="text-xs text-slate-400 font-normal">Sprint 2 • PHP/MVC</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">En cours</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-1">
                                            <span class="bg-slate-100 border border-slate-200 px-2 py-0.5 rounded text-xs">C1</span>
                                            <span class="bg-slate-100 border border-slate-200 px-2 py-0.5 rounded text-xs">C4</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 font-medium">Gérer</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>