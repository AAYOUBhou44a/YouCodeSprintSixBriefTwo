@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto w-full p-6 lg:p-10 space-y-8">
    
    {{-- Retour & Navigation Rapide --}}
    <div class="flex items-center justify-between">
        <a href="#" class="flex items-center gap-3 text-slate-400 hover:text-indigo-600 transition group">
            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center group-hover:border-indigo-200 shadow-sm">
                <i class="fas fa-arrow-left text-xs"></i>
            </div>
            <span class="text-[10px] font-black uppercase tracking-widest">Retour au suivi</span>
        </a>
        <div class="flex gap-2">
            <button class="p-3 bg-white border border-slate-200 rounded-xl text-slate-400 hover:text-indigo-600"><i class="fas fa-chevron-left"></i></button>
            <button class="p-3 bg-white border border-slate-200 rounded-xl text-slate-400 hover:text-indigo-600"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    {{-- Formulaire avec espacement interne accru --}}
    <form action="/evaluation" method="POST" class="space-y-8">
        @csrf
        {{-- Header Étudiant & Livrables --}}
        <div class="bg-slate-900 rounded-[3rem] p-10 text-white shadow-2xl shadow-slate-200 relative overflow-hidden">
            <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-8">
                <div class="flex items-center gap-6">
                    <div class="w-20 h-20 bg-indigo-500 rounded-[2rem] flex items-center justify-center text-3xl font-black">JD</div>
                    <div>
                        <h2 class="text-3xl font-black tracking-tight">{{$realisation->student->name}}</h2>
                        <div class="flex items-center gap-3 mt-2">
                            <a href="#" class="text-indigo-400 text-xs font-bold hover:underline italic"><i class="fab fa-github mr-2"></i>{{$realisation->link}}</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white/5 border border-white/10 p-6 rounded-3xl backdrop-blur-sm">
                    <p class="text-[10px] font-black text-indigo-400 uppercase mb-2">Note de l'étudiant</p>
                    <p class="text-sm text-slate-300 leading-relaxed italic font-medium">"{{$realisation->commentaire}}"</p>
                </div>
            </div>
        </div>

        {{-- Évaluation des Compétences --}}
        <div class="bg-white rounded-[3rem] border border-slate-100 p-10 shadow-sm">
            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-10">Grille de validation</h3>
            
            <div class="divide-y divide-slate-50">
                @foreach($realisation->brief->skills as $skill)
                <div class="py-8 first:pt-0 last:pb-0 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex items-center gap-5">
                        <div class="w-12 h-12 bg-slate-100 text-slate-900 rounded-2xl flex items-center justify-center font-black text-xs">{{$skill->code}}</div>
                        <div>
                            <p class="text-sm font-black text-slate-900">{{$skill->title}}</p>
                            <p class="text-[10px] font-bold text-indigo-500 uppercase">Objectif : {{$skill->pivot->level}}</p>
                        </div>
                    </div>
                    
                    <div class="flex p-1.5 bg-slate-50 rounded-2xl border border-slate-100">
                        <label class="cursor-pointer">
                            <input type="radio" name="validation[{{$skill->id}}]" value="invalide" class="peer hidden">
                            <div class="px-5 py-2.5 rounded-xl text-[9px] font-black uppercase text-slate-400 peer-checked:bg-rose-500 peer-checked:text-white transition-all">Non acquis</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="validation[{{$skill->id}}]" value="valide" class="peer hidden" checked>
                            <div class="px-5 py-2.5 rounded-xl text-[9px] font-black uppercase text-slate-400 peer-checked:bg-emerald-500 peer-checked:text-white transition-all">Acquis</div>
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Feedback Final & Actions --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2">
                <textarea rows="5" class="w-full p-8 bg-white border border-slate-100 rounded-[2.5rem] focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all text-sm shadow-sm" name="comment" placeholder="Votre feedback pédagogique..."></textarea>
            </div>
            <div class="flex flex-col gap-4">
                <input type="hidden" name="realisation_id" value="{{$realisation->id}}">
                <button class="flex-1 bg-indigo-600 text-white rounded-3xl font-black text-[10px] uppercase tracking-widest shadow-xl shadow-indigo-100 hover:bg-slate-900 transition-all">
                    Enregistrer l'évaluation
                </button>
                <button class="flex-1 bg-white border border-slate-200 text-slate-400 rounded-3xl font-black text-[10px] uppercase tracking-widest hover:bg-slate-50 transition-all">
                    Mettre en brouillon
                </button>
            </div>
        </div>
    </form>
</div>
@endsection