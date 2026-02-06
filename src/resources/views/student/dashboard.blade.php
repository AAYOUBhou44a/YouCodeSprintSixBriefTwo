@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto w-full p-6 lg:p-10 space-y-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div>
            <h2 class="text-3xl font-black text-slate-900 tracking-tight">Bonjour, Sophie 👋</h2>
            <p class="text-sm text-slate-400 font-medium">Voici l'état actuel de ton parcours pédagogique.</p>
        </div>
        <div class="flex gap-4">
            <button class="bg-slate-900 text-white px-6 py-3 rounded-2xl text-[10px] font-black tracking-widest shadow-xl shadow-slate-200 active:scale-95 transition-all uppercase">
                Prochain Brief
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm relative overflow-hidden group">
            <div class="relative z-10">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Taux de Validation</p>
                <h3 class="text-4xl font-black text-slate-900 mt-2">78%</h3>
            </div>
            <i class="fas fa-check-circle absolute -right-6 -bottom-6 text-7xl text-slate-50 group-hover:text-emerald-50 transition-all duration-500"></i>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm relative overflow-hidden group">
            <div class="relative z-10">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Niveau Moyen</p>
                <h3 class="text-4xl font-black text-amber-500 mt-2 tracking-tighter">ADAPTER</h3>
            </div>
            <i class="fas fa-bolt absolute -right-6 -bottom-6 text-7xl text-slate-50 group-hover:text-amber-50 transition-all duration-500"></i>
        </div>

        <div class="bg-indigo-600 p-8 rounded-[2.5rem] shadow-2xl shadow-indigo-200 text-white relative overflow-hidden group hover:scale-[1.02] transition-transform">
            <div class="relative z-10">
                <p class="text-[10px] font-black text-indigo-200 uppercase tracking-widest">Sprint Actuel</p>
                <h3 class="text-4xl font-black mt-2">S.03</h3>
            </div>
            <i class="fas fa-running absolute -right-6 -bottom-6 text-7xl text-white/10 group-hover:scale-110 transition-transform duration-500"></i>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm relative group overflow-hidden">
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Compétences Or</p>
            <div class="flex items-center gap-2 mt-2 relative z-10">
                <h3 class="text-4xl font-black text-slate-900">03</h3>
                <span class="text-[9px] font-black text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg uppercase">Transposées</span>
            </div>
            <i class="fas fa-award absolute -right-6 -bottom-6 text-7xl text-slate-50 group-hover:text-indigo-50 transition-all duration-500"></i>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <div class="lg:col-span-2 space-y-6">
            <div class="flex items-center justify-between px-2">
                <h4 class="font-black text-slate-900 uppercase text-[10px] tracking-[0.2em] flex items-center gap-3">
                    <span class="w-1.5 h-6 bg-indigo-600 rounded-full"></span> Dernier Feedback
                </h4>
                <a href="#" class="text-[10px] font-black text-indigo-600 hover:text-slate-900 uppercase tracking-widest transition">Voir tout l'historique</a>
            </div>
            
            <div class="bg-white rounded-[3rem] border border-slate-100 p-10 shadow-xl shadow-slate-200/40 hover:shadow-2xl transition-all duration-500">
                <div class="flex flex-col md:flex-row justify-between items-start gap-6 mb-10">
                    <div>
                        <span class="px-4 py-1.5 bg-slate-100 text-slate-500 rounded-full text-[9px] font-black uppercase tracking-widest">Janvier 2026</span>
                        <h5 class="font-black text-slate-900 text-2xl mt-4 leading-tight tracking-tight">Système de Débriefing & Feedback</h5>
                    </div>
                    <div class="flex items-center gap-4 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                        <div class="text-right">
                            <p class="text-[8px] font-black text-slate-400 uppercase tracking-widest mb-0.5">Évaluateur</p>
                            <p class="text-xs font-black text-slate-700">Jean Dupont</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=0f172a&color=fff" class="w-10 h-10 rounded-xl shadow-md">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                    <div class="flex items-center justify-between p-5 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-indigo-200 transition">
                        <div class="flex items-center gap-4">
                            <span class="w-10 h-10 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-xl uppercase">C1</span>
                            <span class="text-xs font-black text-slate-600 uppercase tracking-tight">Maquettage</span>
                        </div>
                        <span class="text-[9px] font-black text-amber-500 bg-amber-50 px-3 py-1.5 rounded-lg uppercase tracking-widest">Adapter</span>
                    </div>
                    <div class="flex items-center justify-between p-5 bg-white rounded-2xl border border-slate-100 shadow-sm hover:border-emerald-200 transition">
                        <div class="flex items-center gap-4">
                            <span class="w-10 h-10 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-xl uppercase">C4</span>
                            <span class="text-xs font-black text-slate-600 uppercase tracking-tight">Base de données</span>
                        </div>
                        <span class="text-[9px] font-black text-emerald-500 bg-emerald-50 px-3 py-1.5 rounded-lg uppercase tracking-widest">Transposer</span>
                    </div>
                </div>

                <div class="bg-indigo-50/40 p-8 rounded-[2rem] border-l-8 border-indigo-500 relative italic">
                    <i class="fas fa-quote-left absolute top-6 right-8 text-indigo-100 text-4xl"></i>
                    <p class="text-base text-slate-600 leading-relaxed pr-12">
                        "Une architecture MVC très propre. Tu as bien compris l'injection de dépendances. Concentre-toi maintenant sur l'optimisation des requêtes SQL."
                    </p>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <h4 class="font-black text-slate-900 uppercase text-[10px] tracking-[0.2em] flex items-center gap-3 px-2">
                <span class="w-1.5 h-6 bg-amber-500 rounded-full"></span> Maîtrise Globale
            </h4>
            
            <div class="bg-white rounded-[3rem] border border-slate-100 p-10 shadow-sm">
                <div class="space-y-10">
                    <div>
                        <div class="flex justify-between items-end mb-4">
                            <div>
                                <p class="text-[8px] font-black text-slate-400 uppercase tracking-widest mb-1">Interface & UX</p>
                                <h6 class="text-sm font-black text-slate-800 uppercase tracking-tight">C1 - Maquettage UI</h6>
                            </div>
                            <span class="text-[10px] font-black text-amber-500 uppercase">Niveau 2</span>
                        </div>
                        <div class="h-3.5 w-full bg-slate-50 rounded-full flex gap-1.5 p-1 border border-slate-100">
                            <div class="h-full w-1/3 bg-rose-400 rounded-full shadow-sm"></div>
                            <div class="h-full w-1/3 bg-amber-400 rounded-full shadow-md"></div>
                            <div class="h-full w-1/3 bg-slate-200/50 rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-end mb-4">
                            <div>
                                <p class="text-[8px] font-black text-slate-400 uppercase tracking-widest mb-1">Architecture Back</p>
                                <h6 class="text-sm font-black text-slate-800 uppercase tracking-tight">C4 - Structure SQL</h6>
                            </div>
                            <span class="text-[10px] font-black text-emerald-500 uppercase">Niveau 3</span>
                        </div>
                        <div class="h-3.5 w-full bg-slate-50 rounded-full flex gap-1.5 p-1 border border-slate-100">
                            <div class="h-full w-1/3 bg-rose-400 rounded-full shadow-sm"></div>
                            <div class="h-full w-1/3 bg-amber-400 rounded-full shadow-sm"></div>
                            <div class="h-full w-1/3 bg-emerald-500 rounded-full shadow-md"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-slate-50 space-y-6">
                    <p class="text-[9px] font-black text-slate-400 uppercase text-center tracking-[0.2em]">Paliers d'apprentissage</p>
                    <div class="grid grid-cols-3 gap-3 text-[8px] font-black text-center uppercase tracking-tighter">
                        <div class="py-3 bg-rose-50 text-rose-500 rounded-xl border border-rose-100">Imiter</div>
                        <div class="py-3 bg-amber-50 text-amber-500 rounded-xl border border-amber-100">Adapter</div>
                        <div class="py-3 bg-emerald-50 text-emerald-600 rounded-xl border border-emerald-100">Transposer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection