@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto w-full p-6 lg:p-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
        <div class="flex items-center gap-6">
            <a href="#" class="w-12 h-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-indigo-600 hover:text-white transition-all shadow-sm">
                <i class="fas fa-chevron-left"></i>
            </a>
            <div>
                <h1 class="text-[10px] font-black uppercase tracking-[0.2em] text-indigo-500 mb-1">Résultat de l'évaluation</h1>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">Système de Débriefing & Feedback</h2>
            </div>
        </div>
        <div class="flex items-center">
            <span class="px-6 py-2.5 bg-emerald-50 text-emerald-600 rounded-2xl text-[10px] font-black uppercase border border-emerald-100 shadow-sm italic tracking-widest">
                <i class="fas fa-check-circle mr-2"></i> Brief Validé
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <div class="lg:col-span-2 space-y-10">
            
            <div class="bg-white rounded-[3rem] border border-slate-200 p-10 shadow-xl shadow-slate-200/50 relative overflow-hidden">
                <div class="flex items-center gap-4 mb-8">
                    <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=4f46e5&color=fff" class="w-14 h-14 rounded-2xl shadow-lg shadow-indigo-100">
                    <div>
                        <p class="text-sm font-black text-slate-900">Jean Dupont</p>
                        <p class="text-[10px] text-slate-400 uppercase font-black tracking-widest">Formateur Référent</p>
                    </div>
                </div>
                <div class="relative">
                    <i class="fas fa-quote-left text-5xl text-indigo-50 absolute -top-4 -left-2"></i>
                    <p class="relative z-10 text-slate-600 leading-relaxed italic text-xl pl-8">
                        "Sophie, ton travail sur la couche service est exemplaire. L'organisation du code est modulaire et facile à lire. Pour le prochain projet, essaie d'approfondir la partie tests unitaires (PHPUnit) pour sécuriser davantage tes routes."
                    </p>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-6">Analyse détaillée des acquis</h3>
                
                <div class="bg-white rounded-[2rem] border border-slate-100 p-8 flex flex-col md:flex-row items-center justify-between group hover:border-indigo-300 transition-all shadow-sm gap-6">
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-sm shadow-lg">C1</div>
                        <div>
                            <h4 class="font-black text-slate-900 text-lg">Maquettage UX/UI</h4>
                            <p class="text-[10px] text-indigo-500 font-black uppercase tracking-widest mt-1">Palier atteint : ADAPTER</p>
                        </div>
                    </div>
                    <div class="flex gap-2 bg-slate-50 p-2 rounded-2xl">
                        <div class="w-10 h-3 bg-rose-400 rounded-full shadow-sm"></div>
                        <div class="w-10 h-3 bg-amber-400 rounded-full shadow-md shadow-amber-200 border-2 border-white"></div>
                        <div class="w-10 h-3 bg-slate-200 rounded-full"></div>
                    </div>
                </div>

                <div class="bg-white rounded-[2rem] border border-slate-100 p-8 flex flex-col md:flex-row items-center justify-between group hover:border-indigo-300 transition-all shadow-sm gap-6">
                    <div class="flex items-center gap-6">
                        <div class="w-14 h-14 bg-slate-900 text-white rounded-2xl flex items-center justify-center font-black text-sm shadow-lg">C4</div>
                        <div>
                            <h4 class="font-black text-slate-900 text-lg">Base de données SQL</h4>
                            <p class="text-[10px] text-emerald-500 font-black uppercase tracking-widest mt-1">Palier atteint : TRANSPOSER</p>
                        </div>
                    </div>
                    <div class="flex gap-2 bg-slate-50 p-2 rounded-2xl">
                        <div class="w-10 h-3 bg-rose-400 rounded-full"></div>
                        <div class="w-10 h-3 bg-amber-400 rounded-full"></div>
                        <div class="w-10 h-3 bg-emerald-500 rounded-full shadow-md shadow-emerald-200 border-2 border-white"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-8">
            
            <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-2xl shadow-slate-300">
                <h3 class="text-[10px] font-black text-slate-500 uppercase tracking-widest mb-6">Sources du projet</h3>
                <div class="space-y-4">
                    <a href="#" class="flex items-center justify-between p-4 bg-white/5 rounded-2xl hover:bg-indigo-600 transition-all border border-white/10 group">
                        <span class="text-xs font-bold italic opacity-80 group-hover:opacity-100">github.com/sophie/brief-02</span>
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="flex items-center justify-between p-4 bg-white/5 rounded-2xl hover:bg-emerald-600 transition-all border border-white/10 group">
                        <span class="text-xs font-bold italic opacity-80 group-hover:opacity-100">Consulter la démo live</span>
                        <i class="fas fa-external-link-alt text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 shadow-sm">
                <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-6">Informations de dépôt</h3>
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-bold text-slate-500">Statut de livraison</span>
                    <span class="text-[10px] font-black uppercase text-emerald-600 bg-emerald-50 px-2 py-1 rounded-lg">À l'heure</span>
                </div>
                <div class="w-full h-2 bg-slate-100 rounded-full mb-8 overflow-hidden">
                    <div class="h-full bg-emerald-500 w-full shadow-[0_0_10px_rgba(16,185,129,0.5)]"></div>
                </div>
                
                <div class="p-5 bg-slate-50 rounded-[1.5rem] text-center">
                    <p class="text-[9px] font-black text-slate-400 uppercase mb-1">Évalué par le système le</p>
                    <p class="text-base font-black text-slate-900 tracking-tight">23 Janvier 2026</p>
                </div>
            </div>

            <button class="w-full py-5 bg-indigo-600 text-white rounded-[2rem] font-black text-[10px] uppercase tracking-[0.2em] shadow-xl shadow-indigo-100 hover:bg-slate-900 transition-all hover:-translate-y-1">
                <i class="fas fa-file-pdf mr-2"></i> Exporter le Feedback
            </button>
        </div>

    </div>
</div>
@endsection