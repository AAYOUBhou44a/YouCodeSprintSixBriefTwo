<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration Sprints - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-hidden">

    <div class="flex h-screen">
        
        <aside class="w-64 bg-slate-900 text-white flex flex-col shrink-0">
            <div class="h-16 flex items-center justify-center border-b border-slate-800 font-bold text-xl">
                <span class="text-indigo-500">MY</span>BRIEF <span class="ml-2 text-[10px] bg-red-500 px-1 rounded">ADMIN</span>
            </div>
            <nav class="flex-1 py-6 px-3 space-y-1">
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <i class="fas fa-th-large w-5"></i> <span class="text-sm">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <i class="fas fa-school w-5"></i> <span class="text-sm">Classes</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 bg-indigo-600 text-white rounded-lg shadow-lg">
                    <i class="fas fa-redo w-5"></i> <span class="text-sm font-bold">Configuration Sprints</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <i class="fas fa-award w-5"></i> <span class="text-sm">Compétences</span>
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col">
            
            <header class="h-16 bg-white border-b border-slate-200 flex justify-between items-center px-8">
                <h2 class="text-lg font-bold">Structure des Sprints</h2>
                <button onclick="toggleModal('modal-sprint')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-md transition">
                    <i class="fas fa-plus mr-2"></i>Nouveau Sprint
                </button>
            </header>

            <main class="p-8 overflow-y-auto">
                <div class="max-w-4xl mx-auto">
                    
                    <div class="mb-6 flex justify-between items-center">
                        <label class="text-sm font-bold text-slate-500 uppercase tracking-widest">Sprints - Classe DWWM 2026</label>
                        <select class="bg-white border border-slate-300 rounded-md text-sm px-3 py-1">
                            <option>Filtrer par Classe...</option>
                            <option selected>DWWM 2026</option>
                            <option>CDA 2025</option>
                        </select>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white border border-slate-200 rounded-xl p-6 flex items-center justify-between group hover:border-indigo-300 transition shadow-sm">
                            <div class="flex items-center gap-6">
                                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center font-bold text-xl">1</div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-lg tracking-tight">Sprint 01 : Intégration & Maquettage</h4>
                                    <p class="text-sm text-slate-500">Durée : 4 semaines | Ordre : 1</p>
                                </div>
                            </div>
                            <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition">
                                <button class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded"><i class="fas fa-edit"></i></button>
                                <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-indigo-500 rounded-xl p-6 flex items-center justify-between shadow-md">
                            <div class="flex items-center gap-6">
                                <div class="w-12 h-12 bg-indigo-600 text-white rounded-lg flex items-center justify-center font-bold text-xl">2</div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-slate-800 text-lg tracking-tight">Sprint 02 : Backend & MVC</h4>
                                        <span class="px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-bold rounded uppercase">Actif</span>
                                    </div>
                                    <p class="text-sm text-slate-500">Durée : 3 semaines | Ordre : 2</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="p-2 text-indigo-600 hover:bg-indigo-50 rounded"><i class="fas fa-edit"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="modal-sprint" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                <h3 class="text-xl font-bold text-slate-800">Nouveau Sprint</h3>
                <button onclick="toggleModal('modal-sprint')" class="text-slate-400 hover:text-slate-600"><i class="fas fa-times"></i></button>
            </div>
            <form class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Nom du Sprint</label>
                    <input type="text" placeholder="ex: Fondamentaux JavaScript" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Durée (en semaines)</label>
                        <input type="number" value="2" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Ordre Chronologique</label>
                        <input type="number" value="3" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-1">Assigner à la classe</label>
                    <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none transition">
                        <option>DWWM 2026</option>
                        <option>CDA 2025</option>
                    </select>
                </div>
                <div class="pt-4 flex gap-3">
                    <button type="button" onclick="toggleModal('modal-sprint')" class="flex-1 px-4 py-2 border border-slate-200 text-slate-600 rounded-lg hover:bg-slate-50 transition font-medium">Annuler</button>
                    <button type="submit" class="flex-1 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-bold shadow-lg shadow-indigo-200">Créer le Sprint</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleModal(id) {
            const modal = document.getElementById(id);
            modal.classList.toggle('hidden');
        }
    </script>
</body>
</html>