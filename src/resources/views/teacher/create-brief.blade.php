@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto w-full p-6 lg:p-10">
    
    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        <div class="bg-slate-900 px-10 py-8 text-white relative">
            <div class="relative z-10">
                <h1 class="text-2xl font-black tracking-tight">Nouveau Brief Pédagogique</h1>
                <p class="text-slate-400 text-xs mt-2 uppercase tracking-widest font-bold">Définition des objectifs et compétences</p>
            </div>
            <i class="fas fa-pen-nib absolute right-10 top-1/2 -translate-y-1/2 text-5xl text-white/5"></i>
        </div>

        <form action="#" method="POST" class="p-10 space-y-10">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="md:col-span-2 space-y-3">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Titre du Brief</label>
                    <input type="text" name="titre" placeholder="ex: Architecture Micro-services avec Laravel" 
                           class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all font-bold text-slate-700">
                </div>

                <div class="space-y-3">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Sprint Associé</label>
                    <div class="relative">
                        <select name="sprint_id" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all font-bold text-slate-700 appearance-none">
                            <option value="">Sélectionner un sprint</option>
                            <option>Sprint 02 : Backend & MVC</option>
                            <option>Sprint 03 : Sécurité & Auth</option>
                        </select>
                        <i class="fas fa-chevron-down absolute right-6 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-xs"></i>
                    </div>
                </div>

                <div class="space-y-3">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Type de travail</label>
                    <div class="flex gap-4">
                        <label class="flex-1 relative cursor-pointer group">
                            <input type="radio" name="type" value="individuel" class="peer hidden" checked>
                            <div class="flex items-center justify-center gap-3 p-4 bg-slate-50 border border-slate-100 rounded-2xl peer-checked:bg-indigo-600 peer-checked:text-white transition-all shadow-sm">
                                <i class="fas fa-user text-xs"></i>
                                <span class="text-xs font-black uppercase">Individuel</span>
                            </div>
                        </label>
                        <label class="flex-1 relative cursor-pointer group">
                            <input type="radio" name="type" value="collectif" class="peer hidden">
                            <div class="flex items-center justify-center gap-3 p-4 bg-slate-50 border border-slate-100 rounded-2xl peer-checked:bg-indigo-600 peer-checked:text-white transition-all shadow-sm">
                                <i class="fas fa-users text-xs"></i>
                                <span class="text-xs font-black uppercase">Collectif</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-3">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Consignes détaillées</label>
                    <textarea name="description" rows="5" placeholder="Décrivez les livrables attendus et les contraintes techniques..." 
                              class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-[2rem] focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all text-sm font-medium leading-relaxed"></textarea>
                </div>
            </div>

            <div class="h-px bg-slate-100"></div>

            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Compétences à évaluer</h3>
                    <span class="text-[9px] font-bold bg-amber-50 text-amber-600 px-3 py-1 rounded-full border border-amber-100 italic">Sélectionnez au moins une cible</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach(['C1 - Maquetter une application', 'C4 - Créer une base de données', 'C8 - Développer une API'] as $index => $competence)
                    <label class="relative flex items-start gap-4 p-5 bg-white border border-slate-100 rounded-2xl cursor-pointer hover:border-indigo-200 hover:shadow-md transition-all group">
                        <div class="relative flex items-center">
                            <input type="checkbox" name="competences[]" class="peer w-5 h-5 border-2 border-slate-200 rounded-lg checked:bg-indigo-600 checked:border-indigo-600 transition-all appearance-none">
                            <i class="fas fa-check absolute text-[10px] text-white opacity-0 peer-checked:opacity-100 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <div class="flex-1">
                            <span class="block text-xs font-black text-slate-700 uppercase tracking-tight">{{ $competence }}</span>
                            <span class="block text-[10px] text-slate-400 mt-1 font-medium italic">Objectif technique du référentiel</span>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center justify-end gap-6 pt-6 border-t border-slate-50">
                <button type="button" class="text-xs font-black text-slate-400 hover:text-rose-500 uppercase tracking-widest transition">
                    Annuler
                </button>
                <button type="submit" class="bg-slate-900 text-white px-10 py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] shadow-xl shadow-slate-200 hover:bg-indigo-600 hover:-translate-y-1 transition-all active:scale-95">
                    Publier le Brief
                </button>
            </div>
        </form>
    </div>
</div>
@endsection