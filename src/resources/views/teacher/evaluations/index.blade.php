@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto w-full p-6 lg:p-10 space-y-8">

    {{-- Header & Statistiques Rapides --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h1 class="text-4xl font-black tracking-tight text-slate-900">Index des Évaluations</h1>
            <p class="text-slate-500 font-medium mt-2">Suivi global des compétences validées par promotion.</p>
        </div>
        <div class="flex gap-4">
            <div class="bg-white border border-slate-100 p-4 px-6 rounded-[2rem] shadow-sm">
                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest">Total Évalués</p>
                <p class="text-xl font-black text-indigo-600">24 Étudiants</p>
            </div>
            <div class="bg-indigo-600 p-4 px-6 rounded-[2rem] shadow-lg shadow-indigo-100">
                <p class="text-[9px] font-black text-indigo-200 uppercase tracking-widest">Moyenne Classe</p>
                <p class="text-xl font-black text-white">78%</p>
            </div>
        </div>
    </div>

    {{-- Filtres & Recherche --}}
    <div class="flex flex-col md:flex-row gap-4 bg-white p-4 rounded-[2.5rem] border border-slate-100 shadow-sm">
        <div class="relative flex-1">
            <i class="fas fa-search absolute left-6 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
            <input type="text" placeholder="Rechercher un étudiant ou un brief..." class="w-full pl-14 pr-6 py-4 bg-slate-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
        </div>
        <select class="px-8 py-4 bg-slate-50 border-none rounded-2xl text-xs font-black uppercase tracking-widest text-slate-600 outline-none">
            <option>Tous les Briefs</option>
            <option>Application SaaS</option>
            <option>API RESTful</option>
        </select>
    </div>

    {{-- Grille des Évaluations --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        {{-- Carte Étudiant 1 --}}
        <div class="group bg-white rounded-[3.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-slate-200 transition-all duration-500 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 rounded-full -mr-16 -mt-16 group-hover:bg-emerald-500/10 transition-colors"></div>
            
            <div class="relative z-10">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-16 h-16 bg-slate-900 rounded-3xl flex items-center justify-center text-white text-xl font-black shadow-lg">JD</div>
                    <span class="px-4 py-2 bg-emerald-50 text-emerald-600 rounded-xl text-[9px] font-black uppercase tracking-widest">Validé</span>
                </div>

                <h3 class="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">Jean Dupont</h3>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-tighter mt-1 mb-6">Brief: Dashboard Analytics</p>

                <div class="space-y-4 mb-8">
                    <div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-slate-400">
                        <span>Progression</span>
                        <span class="text-slate-900">4/5 Skills</span>
                    </div>
                    <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-emerald-500 w-[80%] rounded-full"></div>
                    </div>
                </div>

                <a href="#" class="flex items-center justify-center w-full py-4 bg-slate-50 group-hover:bg-indigo-600 group-hover:text-white rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] transition-all">
                    Voir les détails
                </a>
            </div>
        </div>

        {{-- Carte Étudiant 2 --}}
        <div class="group bg-white rounded-[3.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-slate-200 transition-all duration-500 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-rose-500/5 rounded-full -mr-16 -mt-16 group-hover:bg-rose-500/10 transition-colors"></div>
            
            <div class="relative z-10">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-16 h-16 bg-indigo-500 rounded-3xl flex items-center justify-center text-white text-xl font-black shadow-lg">AM</div>
                    <span class="px-4 py-2 bg-rose-50 text-rose-600 rounded-xl text-[9px] font-black uppercase tracking-widest">En attente</span>
                </div>

                <h3 class="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">Alice Martin</h3>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-tighter mt-1 mb-6">Brief: API Authentification</p>

                <div class="space-y-4 mb-8">
                    <div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-slate-400">
                        <span>Progression</span>
                        <span class="text-slate-900">2/5 Skills</span>
                    </div>
                    <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-rose-500 w-[40%] rounded-full"></div>
                    </div>
                </div>

                <a href="#" class="flex items-center justify-center w-full py-4 bg-slate-50 group-hover:bg-indigo-600 group-hover:text-white rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] transition-all">
                    Voir les détails
                </a>
            </div>
        </div>

        {{-- Carte Étudiant 3 --}}
        <div class="group bg-white rounded-[3.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-slate-200 transition-all duration-500 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-amber-500/5 rounded-full -mr-16 -mt-16 group-hover:bg-amber-500/10 transition-colors"></div>
            
            <div class="relative z-10">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-16 h-16 bg-slate-200 rounded-3xl flex items-center justify-center text-slate-600 text-xl font-black shadow-inner">KB</div>
                    <span class="px-4 py-2 bg-amber-50 text-amber-600 rounded-xl text-[9px] font-black uppercase tracking-widest">Brouillon</span>
                </div>

                <h3 class="text-xl font-black text-slate-900 group-hover:text-indigo-600 transition-colors">Karim Ben</h3>
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-tighter mt-1 mb-6">Brief: Application Mobile</p>

                <div class="space-y-4 mb-8">
                    <div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-slate-400">
                        <span>Progression</span>
                        <span class="text-slate-900">0/5 Skills</span>
                    </div>
                    <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-amber-400 w-[10%] rounded-full"></div>
                    </div>
                </div>

                <a href="#" class="flex items-center justify-center w-full py-4 bg-slate-50 group-hover:bg-indigo-600 group-hover:text-white rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] transition-all">
                    Voir les détails
                </a>
            </div>
        </div>

    </div>
</div>
@endsection