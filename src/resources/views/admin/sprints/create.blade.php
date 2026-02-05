@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto w-full">
    <a href="#" class="inline-flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-800 transition mb-8 group">
        <i class="fas fa-chevron-left mr-2 transition-transform group-hover:-translate-x-1"></i> 
        Retour à la structure
    </a>

    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-8 border-b border-slate-100 flex items-center gap-5 bg-gradient-to-r from-white to-slate-50">
            <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-2xl shadow-inner">
                <i class="fas fa-running"></i>
            </div>
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tight">Planifier un nouveau Sprint</h1>
                <p class="text-slate-400 text-sm">Définissez une période de formation et ses objectifs.</p>
            </div>
        </div>

        <form action="/store" method="POST" class="p-8 space-y-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Nom du Sprint</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <i class="fa-solid fa-flag-checkered"></i>
                        </span>
                        <input type="text" placeholder="ex: Sprint 03 - Approfondissement Frameworks" required name="name"
                            class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-bold text-slate-700">
                            @error('name')
                                <span style="color: red; font-size: 12px;">{{$message}}</span>
                            @enderror
                    </div>
                </div>

                <!-- <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Classe concernée</label>
                    <select class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-semibold text-slate-600 appearance-none cursor-pointer">
                        <option>DWWM 2026</option>
                        <option>CDA 2025</option>
                    </select>
                </div> -->

                <!-- <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Ordre dans le cursus</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <i class="fa-solid fa-list-ol"></i>
                        </span>
                        <input type="number" value="3" 
                            class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-bold text-slate-700">
                    </div>
                </div> -->
            </div>

            <div class="bg-indigo-50/50 p-6 rounded-2xl border border-indigo-100">
                <h3 class="text-xs font-black text-indigo-900 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <i class="far fa-calendar-alt"></i> Période du Sprint
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[9px] font-bold text-indigo-400 uppercase mb-1 ml-1">Date de début</label>
                        <input type="date" name="start_date" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-500 font-medium text-slate-600 transition">
                        @error('start_date')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-[9px] font-bold text-indigo-400 uppercase mb-1 ml-1">Date de fin prévue</label>
                        <input type="date" name="end_date" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-500 font-medium text-slate-600 transition">
                        @error('end_date')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- <div>
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Objectifs du Sprint (Description)</label>
                <textarea rows="4" name="description" placeholder="Quels sont les grands thèmes abordés durant ces semaines ?" 
                          class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition text-sm text-slate-600 leading-relaxed"></textarea>
            </div> -->

            <div class="pt-6 flex items-center justify-end gap-6 border-t border-slate-50">
                <button type="button" class="text-sm font-bold text-slate-400 hover:text-red-500 transition">Annuler</button>
                <button type="submit" class="bg-slate-900 text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-slate-200 hover:bg-indigo-600 transition-all transform active:scale-95">
                    <i class="fa-solid fa-floppy-disk mr-2"></i> Enregistrer le Sprint
                </button>
            </div>
        </form>
    </div>
</div>
@endsection