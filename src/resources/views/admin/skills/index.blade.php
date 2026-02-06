@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto w-full p-6 lg:p-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Référentiel Compétences</h1>
            <p class="text-slate-500 font-medium mt-1">Gérez les paliers d'acquisition (Imiter, Adapter, Transposer) pour chaque compétence.</p>
        </div>
        <button class="bg-slate-900 hover:bg-indigo-600 text-white px-6 py-3 rounded-2xl text-xs font-black shadow-xl shadow-slate-200 transition-all hover:-translate-y-1 flex items-center gap-2 uppercase tracking-widest">
            <i class="fas fa-plus-circle text-base"></i> Nouvelle Compétence
        </button>
    </div>

    <div class="flex gap-4 mb-8">
        <div class="relative flex-1 max-w-md">
            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="text" placeholder="Rechercher une compétence (ex: C1, Backend...)" class="w-full pl-11 pr-4 py-3 bg-white border border-slate-200 rounded-2xl text-sm outline-none focus:ring-2 focus:ring-indigo-500 transition-all shadow-sm">
        </div>
        <select class="bg-white border border-slate-200 px-4 py-3 rounded-2xl text-xs font-bold text-slate-600 outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm cursor-pointer">
            <option>Toutes les catégories</option>
            <option>Frontend</option>
            <option>Backend</option>
            <option>Base de données</option>
        </select>
    </div>

    <div class="space-y-6">
        
        <div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl shadow-slate-200/50 overflow-hidden group hover:border-indigo-200 transition-all">
            <div class="p-8 flex flex-col lg:flex-row gap-8">
                
                <div class="flex flex-col items-center shrink-0">
                    <div class="w-20 h-20 bg-indigo-600 text-white rounded-[1.5rem] flex items-center justify-center text-3xl font-black shadow-lg shadow-indigo-100 group-hover:scale-110 transition-transform">
                        C1
                    </div>
                    <span class="mt-4 text-[10px] font-black text-indigo-500 uppercase tracking-[0.2em] bg-indigo-50 px-3 py-1 rounded-full">Frontend</span>
                </div>

                <div class="flex-1">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-2xl font-black text-slate-800 tracking-tight">Maquetter une application</h3>
                            <p class="text-slate-500 text-sm mt-1 leading-relaxed max-w-2xl">
                                Concevoir des interfaces utilisateur ergonomiques et esthétiques en respectant les principes d'UX/UI Design.
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <button class="w-10 h-10 flex items-center justify-center rounded-xl border border-slate-100 text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                                <i class="fas fa-pen text-sm"></i>
                            </button>
                            <button class="w-10 h-10 flex items-center justify-center rounded-xl border border-slate-100 text-slate-400 hover:bg-red-50 hover:text-red-500 transition-all">
                                <i class="fas fa-trash-alt text-sm"></i>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                        <div class="bg-rose-50/50 p-5 rounded-3xl border border-rose-100 group/palier hover:bg-rose-50 transition-colors">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-2 h-2 bg-rose-500 rounded-full"></span>
                                <span class="text-[10px] font-black text-rose-600 uppercase tracking-widest">Palier 1 : Imiter</span>
                            </div>
                            <p class="text-xs text-rose-900/70 leading-relaxed font-medium italic">
                                "L'apprenant reproduit une maquette simple en suivant scrupuleusement un modèle existant."
                            </p>
                        </div>

                        <div class="bg-amber-50/50 p-5 rounded-3xl border border-amber-100 group/palier hover:bg-amber-50 transition-colors">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                <span class="text-[10px] font-black text-amber-600 uppercase tracking-widest">Palier 2 : Adapter</span>
                            </div>
                            <p class="text-xs text-amber-900/70 leading-relaxed font-medium italic">
                                "L'apprenant modifie les structures existantes pour intégrer de nouvelles fonctionnalités UI."
                            </p>
                        </div>

                        <div class="bg-emerald-50/50 p-5 rounded-3xl border border-emerald-100 group/palier hover:bg-emerald-50 transition-colors">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full"></span>
                                <span class="text-[10px] font-black text-emerald-600 uppercase tracking-widest">Palier 3 : Transposer</span>
                            </div>
                            <p class="text-xs text-emerald-900/70 leading-relaxed font-medium italic">
                                "L'apprenant crée de zéro un Design System complet et innovant pour un besoin complexe."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="px-8 py-4 bg-slate-50/50 border-t border-slate-100 flex items-center gap-6">
                <div class="flex items-center gap-2 text-[10px] font-bold text-slate-400 uppercase">
                    <i class="fas fa-calendar-alt"></i> Mis à jour le 04/02/2026
                </div>
                <div class="flex items-center gap-2 text-[10px] font-bold text-indigo-400 uppercase">
                    <i class="fas fa-briefcase"></i> Utilisée dans 6 Briefs
                </div>
            </div>
        </div>

    </div>
</div>
@endsection