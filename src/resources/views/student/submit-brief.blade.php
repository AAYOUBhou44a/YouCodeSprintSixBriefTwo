@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto w-full p-6 lg:p-10 space-y-8">

    <div class="flex items-center justify-between">
        <a href="#" class="flex items-center gap-3 text-slate-400 hover:text-indigo-600 transition group">
            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center group-hover:border-indigo-200 shadow-sm">
                <i class="fas fa-arrow-left text-xs"></i>
            </div>
            <span class="text-[10px] font-black uppercase tracking-widest">Retour aux briefs</span>
        </a>
        <div class="flex items-center gap-3 bg-emerald-50 px-4 py-2 rounded-xl border border-emerald-100">
            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
            <span class="text-[10px] font-black text-emerald-700 uppercase tracking-tight">Ouvert jusqu'au 05 Fév.</span>
        </div>
    </div>

    <div class="bg-slate-900 rounded-[3rem] p-10 text-white shadow-2xl shadow-slate-200 relative overflow-hidden">
        <div class="relative z-10">
            <span class="px-4 py-1.5 bg-indigo-500 rounded-lg text-[9px] font-black uppercase tracking-[0.2em]">Sprint 02</span>
            <h2 class="text-4xl font-black mt-6 tracking-tight leading-tight">Système de Débriefing</h2>
            <p class="text-slate-400 mt-4 text-base leading-relaxed max-w-2xl">
                Développez une application web permettant la gestion des évaluations et des feedbacks entre formateurs et apprenants.
            </p>
        </div>
        <i class="fas fa-code-branch absolute -right-8 -bottom-8 text-[12rem] text-white/5 rotate-12 pointer-events-none"></i>
    </div>

    <form action="#" method="POST" class="space-y-8">
        @csrf
        
        <div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm space-y-8">
            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-2">Livrables du projet</h3>
            
            <div class="grid grid-cols-1 gap-8">
                <div class="space-y-3">
                    <label class="block text-xs font-black text-slate-700 uppercase tracking-wide">Lien du dépôt GitHub <span class="text-indigo-500">*</span></label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <i class="fab fa-github text-slate-400 group-focus-within:text-indigo-500 transition-colors"></i>
                        </div>
                        <input type="url" name="github_link" required 
                               placeholder="https://github.com/votre-pseudo/votre-repo" 
                               class="w-full pl-14 pr-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all font-medium text-sm">
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="block text-xs font-black text-slate-700 uppercase tracking-wide">Version en ligne (Déploiement)</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <i class="fas fa-link text-slate-400 group-focus-within:text-indigo-500 transition-colors"></i>
                        </div>
                        <input type="url" name="demo_link" 
                               placeholder="https://votre-projet.vercel.app" 
                               class="w-full pl-14 pr-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all font-medium text-sm">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm">
            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-8">Compétences ciblées</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-4 p-5 bg-slate-50 rounded-2xl border border-slate-100 group hover:bg-white hover:border-indigo-200 transition-all">
                    <span class="w-10 h-10 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-xl">C1</span>
                    <span class="text-xs font-black text-slate-600 uppercase tracking-tight">Maquetter une application</span>
                </div>
                <div class="flex items-center gap-4 p-5 bg-slate-50 rounded-2xl border border-slate-100 group hover:bg-white hover:border-indigo-200 transition-all">
                    <span class="w-10 h-10 flex items-center justify-center bg-slate-900 text-white text-[10px] font-black rounded-xl">C4</span>
                    <span class="text-xs font-black text-slate-600 uppercase tracking-tight">Créer une base de données</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm space-y-4">
            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Note au formateur (Optionnel)</label>
            <textarea name="comment" rows="4" 
                      placeholder="Décrivez vos difficultés, vos choix techniques ou vos fonctionnalités bonus..." 
                      class="w-full p-6 bg-slate-50 border border-slate-100 rounded-[2rem] focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all text-sm leading-relaxed"></textarea>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-4">
            <div class="flex items-start gap-3">
                <i class="fas fa-info-circle text-indigo-500 mt-0.5"></i>
                <p class="text-[11px] text-slate-400 font-medium leading-relaxed italic max-w-xs">
                    Vous avez la possibilité de mettre à jour votre rendu jusqu'à la fermeture du brief.
                </p>
            </div>
            <button type="submit" class="w-full md:w-auto bg-indigo-600 text-white px-12 py-5 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] shadow-2xl shadow-indigo-200 hover:bg-slate-900 hover:-translate-y-1 transition-all active:scale-95">
                Soumettre le projet
            </button>
        </div>

    </form>
</div>
@endsection