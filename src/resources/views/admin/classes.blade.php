<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Classes - MyBrief Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased h-screen flex flex-col overflow-hidden">

    <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 shrink-0 z-20">
        <div class="flex items-center gap-4">
            <span class="font-bold text-xl tracking-tighter text-indigo-600 uppercase">Administration</span>
            <span class="text-slate-300">/</span>
            <h1 class="text-sm font-bold text-slate-500 uppercase tracking-widest">Gestion des Classes</h1>
        </div>
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-xl text-sm font-black shadow-lg shadow-indigo-100 transition">
            <i class="fas fa-plus mr-2"></i> Créer une Classe
        </button>
    </header>

    <div class="flex flex-1 overflow-hidden">
        
        <aside class="w-72 bg-white border-r border-slate-200 overflow-y-auto">
            <div class="p-4 space-y-3">
                <div class="p-4 bg-indigo-50 border-2 border-indigo-500 rounded-2xl cursor-pointer shadow-sm transition">
                    <h3 class="font-black text-indigo-900 uppercase tracking-tight">DWWM 2026</h3>
                    <p class="text-[10px] text-indigo-600 font-bold mt-1 uppercase tracking-tighter">24 Apprenants • 2 Formateurs</p>
                </div>

                <div class="p-4 border border-slate-100 rounded-2xl cursor-pointer hover:bg-slate-50 transition">
                    <h3 class="font-bold text-slate-700 uppercase tracking-tight">CDA 2025</h3>
                    <p class="text-[10px] text-slate-400 font-bold mt-1 uppercase tracking-tighter">18 Apprenants • 1 Formateur</p>
                </div>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto bg-slate-50 p-8">
            <div class="max-w-5xl mx-auto space-y-8">
                
                <section>
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-black text-slate-800 uppercase text-sm tracking-widest flex items-center gap-2">
                            <i class="fas fa-chalkboard-teacher text-indigo-500"></i> Formateurs Référents
                        </h4>
                        <button class="text-indigo-600 text-xs font-bold hover:underline">+ Assigner un formateur</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-2xl border border-slate-200 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center font-bold text-slate-600">JD</div>
                                <div>
                                    <p class="font-bold text-sm">Jean Dupont</p>
                                    <p class="text-[10px] text-slate-400 font-bold uppercase">Lead Formateur</p>
                                </div>
                            </div>
                            <button class="text-slate-300 hover:text-red-500 transition"><i class="fas fa-user-minus"></i></button>
                        </div>
                    </div>
                </section>

                <hr class="border-slate-200">

                <section>
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-black text-slate-800 uppercase text-sm tracking-widest flex items-center gap-2">
                            <i class="fas fa-user-graduate text-indigo-500"></i> Liste des Apprenants
                        </h4>
                        <div class="flex gap-2">
                            <input type="text" placeholder="Rechercher..." class="text-xs px-3 py-1.5 border border-slate-200 rounded-lg outline-none focus:ring-1 focus:ring-indigo-500">
                            <button class="bg-slate-800 text-white px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-slate-700 transition">Importer CSV</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50 border-b border-slate-200">
                                <tr>
                                    <th class="px-6 py-3 text-[10px] font-black text-slate-400 uppercase tracking-widest">Apprenant</th>
                                    <th class="px-6 py-3 text-[10px] font-black text-slate-400 uppercase tracking-widest">Email</th>
                                    <th class="px-6 py-3 text-[10px] font-black text-slate-400 uppercase tracking-widest">Status</th>
                                    <th class="px-6 py-3 text-right text-[10px] font-black text-slate-400 uppercase tracking-widest">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=Sophie+Martin&background=random" class="w-8 h-8 rounded-full">
                                        <span class="text-sm font-bold text-slate-700">Sophie Martin</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-slate-500 italic">sophie@student.com</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-0.5 bg-green-100 text-green-700 text-[9px] font-black rounded-full uppercase tracking-tighter">Actif</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-indigo-600 p-1"><i class="fas fa-ellipsis-v"></i></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition">
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=Lucas+Bernard&background=random" class="w-8 h-8 rounded-full">
                                        <span class="text-sm font-bold text-slate-700">Lucas Bernard</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-slate-500 italic">lucas@student.com</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-0.5 bg-green-100 text-green-700 text-[9px] font-black rounded-full uppercase tracking-tighter">Actif</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-slate-400 hover:text-indigo-600 p-1"><i class="fas fa-ellipsis-v"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>

</body>
</html>