@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto w-full p-6 lg:p-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Configuration Sprints</h1>
            <p class="text-slate-500 font-medium mt-1">Définissez la structure chronologique de la formation.</p>
        </div>
        <a href="/sprints/create" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-2xl text-xs font-black shadow-xl shadow-indigo-100 transition-all hover:-translate-y-1 flex items-center gap-2 uppercase tracking-widest">
            <i class="fas fa-plus text-base"></i> Nouveau Sprint
        </a>
    </div>

    <div class="bg-white p-4 rounded-[2rem] border border-slate-200 shadow-sm mb-8 flex items-center justify-between px-8">
        <label class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Promotion cible</label>
        <select class="bg-slate-50 border-none text-sm font-bold text-slate-700 rounded-xl px-4 py-2 focus:ring-2 focus:ring-indigo-500 outline-none cursor-pointer">
            <option>DWWM 2026</option>
            <option>CDA 2025</option>
        </select>
    </div>

    <div class="space-y-4 relative">
        <div class="absolute left-10 top-0 bottom-0 w-0.5 bg-slate-100 -z-10"></div>
        @foreach($sprints as $sprint)
        <div class="bg-white border border-slate-200 rounded-[2rem] p-6 flex items-center justify-between group hover:border-indigo-200 transition-all shadow-sm ml-4">
            <div class="flex items-center gap-6">
                <div class="w-14 h-14 bg-slate-100 text-slate-400 rounded-2xl flex items-center justify-center font-black text-xl border-4 border-white shadow-sm">
                    Sp
                </div>
                <div>
                    <h4 class="font-black text-slate-800 text-lg tracking-tight">{{$sprint->name}}</h4>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">
                        <i class="fas fa-calendar-alt mr-1"></i> {{$sprint->start_date->diffInDays($sprint->end_date)}} jours • commence le {{$sprint->start_date->isoFormat('LL')}}
                    </p>
                </div>
            </div>
            <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-all">

                <a href="/sprints/edit/{{$sprint->id}}" class="w-10 h-10 flex items-center justify-center rounded-xl text-slate-400 hover:bg-indigo-50 hover:text-indigo-600 transition-all">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="/sprints/{{$sprint->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-10 h-10 flex items-center justify-center rounded-xl text-slate-400 hover:bg-red-50 hover:text-red-500 transition-all">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>


                
            </div>
        </div>
        @endforeach
    </div>
</div>

<div id="modal-sprint" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[100] hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-[2.5rem] shadow-2xl w-full max-w-md overflow-hidden transform transition-all border border-white/20">
        <div class="p-8 border-b border-slate-50 flex justify-between items-center bg-slate-50/50">
            <h3 class="text-xl font-black text-slate-900 uppercase tracking-tighter">Nouveau Sprint</h3>
            <button onclick="document.getElementById('modal-sprint').classList.add('hidden')" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-slate-200 transition-colors text-slate-400">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form class="p-8 space-y-6">
            <div>
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Titre du module</label>
                <input type="text" placeholder="ex: API Rest & Sécurité" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none font-bold text-slate-700 transition-all">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Durée (sem)</label>
                    <input type="number" value="2" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none font-bold text-slate-700 text-center">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Position</label>
                    <input type="number" value="3" class="w-full px-5 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none font-bold text-slate-700 text-center">
                </div>
            </div>
            <div class="pt-4 flex gap-4">
                <button type="button" onclick="document.getElementById('modal-sprint').classList.add('hidden')" class="flex-1 px-4 py-4 border-2 border-slate-100 text-slate-400 rounded-2xl hover:bg-slate-50 transition font-black text-[10px] uppercase tracking-widest">Annuler</button>
                <button type="submit" class="flex-1 px-4 py-4 bg-slate-900 text-white rounded-2xl hover:bg-indigo-600 transition font-black text-[10px] uppercase tracking-widest shadow-xl shadow-slate-200">Créer le Sprint</button>
            </div>
        </form>
    </div>
</div>
@endsection