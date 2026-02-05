@extends('layouts.app')

@section('content')
<div class="flex h-screen w-full overflow-hidden bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200 border border-slate-200">
    
    <aside class="w-80 bg-slate-50/50 border-r border-slate-200 flex flex-col">
        <div class="p-6 border-b border-slate-200 bg-white">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Promotions</h2>
                <button class="h-8 w-8 bg-indigo-600 text-white rounded-lg flex items-center justify-center hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    <i class="fas fa-plus text-xs"></i>
                </button>
            </div>
            <div class="relative">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input type="text" placeholder="Filtrer..." class="w-full pl-9 pr-4 py-2 text-xs bg-slate-100 border-transparent rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 transition outline-none">
            </div>
        </div>

        <div class="flex-1 overflow-y-auto p-4 space-y-3">
            <div class="p-4 bg-white border-2 border-indigo-500 rounded-2xl cursor-pointer shadow-md shadow-indigo-50 transition-all transform hover:scale-[1.02]">
                <div class="flex justify-between items-start">
                    <h3 class="font-black text-indigo-900 uppercase tracking-tight">DWWM 2026</h3>
                    <span class="h-2 w-2 bg-indigo-500 rounded-full animate-pulse"></span>
                </div>
                <p class="text-[10px] text-indigo-600 font-bold mt-2 uppercase tracking-tighter flex items-center gap-2">
                    <i class="fas fa-users"></i> 24 Apprenants • 2 Formateurs
                </p>
            </div>

            <div class="p-4 bg-transparent border border-slate-200 rounded-2xl cursor-pointer hover:bg-white hover:border-slate-300 transition-all">
                <h3 class="font-bold text-slate-700 uppercase tracking-tight">CDA 2025</h3>
                <p class="text-[10px] text-slate-400 font-bold mt-2 uppercase tracking-tighter">
                    18 Apprenants • 1 Formateur
                </p>
            </div>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto bg-white">
        <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between sticky top-0 bg-white/80 backdrop-blur-md z-10">
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">Détails de la Promotion</h1>
                <p class="text-slate-400 text-sm">Promotion : <span class="text-indigo-600 font-bold uppercase">DWWM 2026</span></p>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 border border-slate-200 text-slate-600 rounded-xl text-xs font-bold hover:bg-slate-50 transition">Exporter Liste</button>
                <button class="px-4 py-2 bg-slate-900 text-white rounded-xl text-xs font-bold hover:bg-slate-800 transition shadow-lg">Paramètres Classe</button>
            </div>
        </div>

        <div class="p-8 space-y-10">
            <section>
                <div class="flex items-center justify-between mb-6">
                    <h4 class="font-black text-slate-800 uppercase text-xs tracking-[0.15em] flex items-center gap-2">
                        <i class="fas fa-chalkboard-teacher text-indigo-500"></i> Formateurs Référents
                    </h4>
                    <button class="text-indigo-600 text-xs font-black hover:text-indigo-800 transition-all">+ ASSIGNER</button>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="group bg-slate-50 p-4 rounded-2xl border border-transparent hover:border-indigo-100 hover:bg-white transition-all flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=6366f1&color=fff" class="w-12 h-12 rounded-xl shadow-md">
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                            </div>
                            <div>
                                <p class="font-black text-slate-800 text-sm uppercase">Jean Dupont</p>
                                <p class="text-[10px] text-indigo-500 font-black uppercase tracking-tighter">Lead Formateur</p>
                            </div>
                        </div>
                        <button class="h-8 w-8 text-slate-300 hover:text-red-500 hover:bg-red-50 rounded-lg transition-all"><i class="fas fa-user-minus text-xs"></i></button>
                    </div>
                </div>
            </section>

            <section>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <h4 class="font-black text-slate-800 uppercase text-xs tracking-[0.15em] flex items-center gap-2">
                        <i class="fas fa-user-graduate text-indigo-500"></i> Liste des Apprenants
                    </h4>
                    <div class="flex gap-2">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[10px]"></i>
                            <input type="text" placeholder="Rechercher un élève..." class="pl-8 pr-4 py-2 border border-slate-200 rounded-xl text-xs outline-none focus:ring-2 focus:ring-indigo-500 w-48 transition-all">
                        </div>
                        <button class="bg-indigo-50 text-indigo-600 px-4 py-2 rounded-xl text-xs font-black hover:bg-indigo-100 transition">IMPORT CSV</button>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-xl shadow-slate-100/50">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50/50 border-b border-slate-100">
                            <tr>
                                <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Apprenant</th>
                                <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest">Email</th>
                                <th class="px-6 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Status</th>
                                <th class="px-6 py-4 text-right text-[10px] font-black text-slate-400 uppercase tracking-widest">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <tr class="group hover:bg-indigo-50/30 transition-all">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <img src="https://ui-avatars.com/api/?name=Sophie+Martin&background=random" class="w-9 h-9 rounded-xl shadow-sm group-hover:scale-110 transition-transform">
                                    <span class="text-sm font-bold text-slate-700">Sophie Martin</span>
                                </td>
                                <td class="px-6 py-4 text-xs text-slate-500 font-medium italic">sophie@student.com</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-[9px] font-black rounded-lg uppercase tracking-widest">Actif</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="h-8 w-8 text-slate-400 hover:text-indigo-600 hover:bg-white rounded-lg transition-all shadow-sm"><i class="fas fa-ellipsis-h"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
</div>
@endsection