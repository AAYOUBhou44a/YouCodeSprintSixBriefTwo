@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto w-full p-6 lg:p-10">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-lg text-[9px] font-black uppercase tracking-widest">Panel Admin</span>
            </div>
            <h1 class="text-4xl font-black text-slate-900 tracking-tight uppercase">Gestion des Classes</h1>
            <p class="text-slate-500 font-medium mt-2">Supervisez les cohortes, les effectifs et les formateurs référents.</p>
        </div>
        
        <div class="flex gap-4">
            <div class="bg-white px-6 py-4 rounded-2xl border border-slate-100 shadow-sm text-right">
                <p class="text-[9px] font-black text-slate-400 uppercase">Total Classes</p>
                <p class="text-xl font-black text-slate-900">{{$classes->count()}}</p>
            </div>
            <a href="/classes/create" class="inline-flex items-center px-8 py-4 bg-indigo-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-slate-900 transition-all shadow-xl shadow-indigo-100">
                <i class="fas fa-plus mr-3"></i> Nouvelle Classe
            </a>
        </div>
    </div>

    <div class="bg-white p-4 rounded-3xl border border-slate-200 mb-8 flex flex-col md:flex-row gap-4 items-center">
        <div class="relative flex-1 w-full">
            <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="text" placeholder="Rechercher une classe ou un formateur..." class="w-full pl-12 pr-6 py-3 bg-slate-50 border-none rounded-2xl text-sm focus:ring-2 focus:ring-indigo-500 transition-all">
        </div>
        <select class="px-6 py-3 bg-slate-50 border-none rounded-2xl text-xs font-bold text-slate-600 focus:ring-2 focus:ring-indigo-500">
            <option>Année Scolaire 2025/2026</option>
            <option>Année Scolaire 2024/2025</option>
        </select>
    </div>

    <div class="bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden shadow-sm">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/50 border-b border-slate-100">
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Nom de la Classe</th>
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Formateur</th>
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest text-center">Effectif</th>
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @foreach($classes as $classe)
                <tr class="hover:bg-slate-50/30 transition-colors group">
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-black text-xs shadow-lg shadow-indigo-100">W</div>
                            <div>
                                <p class="text-sm font-black text-slate-900">{{$classe->name}}</p>
                                <!-- <p class="text-[10px] text-slate-400 font-bold uppercase tracking-tighter">Code: WEB-2026</p> -->
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center">
                                <i class="fas fa-user-tie text-[10px] text-slate-400"></i>
                            </div>
                            <span class="text-sm font-bold text-slate-600">{{$classe->teacher->name}}</span>
                        </div>
                    </td>
                    <td class="px-8 py-6 text-center text-sm font-black text-slate-700">{{$classe->students_count}}</td>
            
                    <td class="px-8 py-6 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-2 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg text-slate-400 transition-all"><i class="fas fa-edit"></i></button>
                            <button class="p-2 hover:bg-rose-50 hover:text-rose-500 rounded-lg text-slate-400 transition-all"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection