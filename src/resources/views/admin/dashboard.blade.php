@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto w-full p-6 lg:p-10 space-y-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Tableau de bord</h1>
            <p class="text-slate-500 font-medium">Content de vous revoir, <span class="text-indigo-600">Jean</span>. Voici l'état de vos classes.</p>
        </div>
        <div class="flex items-center gap-3">
            <span class="flex items-center gap-2 px-4 py-2 bg-white border border-slate-200 rounded-2xl text-xs font-bold text-slate-600 shadow-sm">
                <span class="h-2 w-2 bg-emerald-500 rounded-full animate-pulse"></span>
                Session Active : DWWM 2026
            </span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/40 border border-slate-100 flex items-center justify-between group hover:border-indigo-300 transition-all cursor-default">
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Sprint Actuel</p>
                <h3 class="text-3xl font-black text-slate-900">Sprint 02</h3>
                <div class="mt-4 flex items-center gap-2 text-emerald-600 font-black text-[10px] bg-emerald-50 px-3 py-1.5 rounded-xl w-fit">
                    <i class="fas fa-hourglass-half"></i> J-4 AVANT FIN
                </div>
            </div>
            <div class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-[1.5rem] flex items-center justify-center text-3xl group-hover:rotate-12 transition-transform shadow-inner">
                <i class="fas fa-rocket"></i>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/40 border border-slate-100 flex items-center justify-between group hover:border-orange-300 transition-all cursor-default">
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Briefs à corriger</p>
                <h3 class="text-3xl font-black text-slate-900">12 copies</h3>
                <div class="mt-4 flex items-center gap-2 text-orange-600 font-black text-[10px] bg-orange-50 px-3 py-1.5 rounded-xl w-fit">
                    <i class="fas fa-exclamation-circle"></i> ACTION REQUISE
                </div>
            </div>
            <div class="w-16 h-16 bg-orange-50 text-orange-600 rounded-[1.5rem] flex items-center justify-center text-3xl group-hover:rotate-12 transition-transform shadow-inner">
                <i class="fas fa-pen-fancy"></i>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/40 border border-slate-100 flex items-center justify-between group hover:border-emerald-300 transition-all cursor-default">
            <div>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Moyenne Promotion</p>
                <h3 class="text-3xl font-black text-slate-900">78.5 %</h3>
                <div class="mt-4 flex items-center gap-2 text-slate-400 font-black text-[10px] bg-slate-50 px-3 py-1.5 rounded-xl w-fit">
                    <i class="fas fa-chart-line"></i> STABLE
                </div>
            </div>
            <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-[1.5rem] flex items-center justify-center text-3xl group-hover:rotate-12 transition-transform shadow-inner">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-slate-100 overflow-hidden">
        <div class="p-8 border-b border-slate-50 flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-slate-50/30">
            <div>
                <h3 class="text-xl font-black text-slate-900 tracking-tight italic">Briefs en cours d'acquisition</h3>
                <p class="text-xs text-slate-400 font-bold uppercase mt-1 tracking-tighter">Suivi détaillé des compétences par projet</p>
            </div>
            <button class="px-6 py-3 bg-white border-2 border-slate-100 text-indigo-600 rounded-2xl text-[10px] font-black hover:border-indigo-600 transition-all shadow-sm uppercase tracking-widest">
                Voir tous les briefs
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-white">
                        <th class="px-10 py-5 text-[10px] font-black text-slate-300 uppercase tracking-[0.2em]">Brief / Module</th>
                        <th class="px-10 py-5 text-[10px] font-black text-slate-300 uppercase tracking-[0.2em]">Progression Classe</th>
                        <th class="px-10 py-5 text-[10px] font-black text-slate-300 uppercase tracking-[0.2em]">Compétences cibles</th>
                        <th class="px-10 py-5 text-right text-[10px] font-black text-slate-300 uppercase tracking-[0.2em]">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    <tr class="group hover:bg-indigo-50/20 transition-all cursor-pointer">
                        <td class="px-10 py-8">
                            <div class="flex items-center gap-5">
                                <div class="w-12 h-12 bg-indigo-600 text-white rounded-2xl flex items-center justify-center font-black shadow-lg shadow-indigo-200">
                                    DB
                                </div>
                                <div>
                                    <p class="font-black text-slate-800 text-base">Système de Débriefing</p>
                                    <p class="text-[10px] text-indigo-500 font-black uppercase mt-0.5">Sprint 02 • Architecture MVC</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-10 py-8">
                            <div class="flex items-center gap-4">
                                <div class="flex-1 h-3 bg-slate-100 rounded-full overflow-hidden max-w-[140px] border border-slate-200/50">
                                    <div class="h-full bg-indigo-500 rounded-full w-[65%] shadow-[0_0_12px_rgba(99,102,241,0.4)]"></div>
                                </div>
                                <span class="text-xs font-black text-slate-700">65%</span>
                            </div>
                        </td>
                        <td class="px-10 py-8">
                            <div class="flex gap-2">
                                <span class="px-3 py-1.5 bg-white border border-slate-200 text-slate-600 text-[10px] font-black rounded-xl shadow-sm">C1</span>
                                <span class="px-3 py-1.5 bg-white border border-slate-200 text-slate-600 text-[10px] font-black rounded-xl shadow-sm">C4</span>
                            </div>
                        </td>
                        <td class="px-10 py-8 text-right">
                            <button class="bg-slate-900 text-white px-6 py-3 rounded-2xl text-[10px] font-black hover:bg-indigo-600 transition-all hover:-translate-y-1 shadow-xl shadow-slate-200 hover:shadow-indigo-100">
                                PILOTER LE PROJET
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection