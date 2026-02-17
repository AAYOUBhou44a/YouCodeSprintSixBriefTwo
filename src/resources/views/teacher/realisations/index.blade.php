@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto w-full p-6 lg:p-10 space-y-8">
    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight uppercase">Suivi du Brief</h1>
            <p class="text-slate-500 font-medium">Plateforme E-commerce Laravel • <span class="text-indigo-600 font-bold">Promotion 2026</span></p>
        </div>
        <div class="flex bg-white p-1.5 rounded-2xl border border-slate-200 shadow-sm">
            <button class="px-6 py-2 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase tracking-widest">Tous ({{$realisations->count()}})</button>
            <button class="px-6 py-2 text-slate-400 text-[10px] font-black uppercase tracking-widest">À corriger ({{$realisations->count()}})</button>
        </div>
    </div>

    {{-- Grille des Étudiants --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        


    @foreach($realisations as $realisation)
        {{-- Card Étudiant (Exemple : En attente de correction) --}}
        <div class="bg-white rounded-[2.5rem] border-2 border-transparent hover:border-indigo-500 p-8 shadow-sm transition-all group relative">
            <div class="absolute top-6 right-6">
                <span class="bg-rose-50 {{$realisation->status === 'evaluated' ? 'text-green-500' : 'text-rose-600'}}  text-[8px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-rose-100">{{$realisation->status === 'evaluated' ? 'Evalué' : 'À corriger'}}</span>
            </div>
            
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 bg-slate-100 rounded-2xl flex items-center justify-center font-black text-slate-600 text-lg">JD</div>
                <div>
                    <h5 class="text-base font-black text-slate-900">{{$realisation->student->name}}</h5>
                    <p class="text-[10px] text-slate-400 font-bold uppercase">{{$realisation->created_at->diffForHumans()}}</p>
                </div>
            </div>

            <div class="flex items-center gap-2 mb-8">
                <div class="flex -space-x-2">
                    @foreach($realisation->brief->skills as $skill)
                    <div class="w-7 h-7 rounded-lg bg-slate-900 text-white border-2 border-white flex items-center justify-center text-[8px] font-black">C1</div>
                    @endforeach

                </div>
                <span class="text-[10px] text-slate-400 font-bold ml-2">{{$realisation->brief->skills->count()}} compétences visées</span>
            </div>

            @if($realisation->status === 'nonEvaluated')
            <a href="/realisations/show/{{$realisation->id}}" class="w-full block text-center bg-slate-50 group-hover:bg-indigo-600 group-hover:text-white py-4 rounded-2xl text-[10px] font-black uppercase tracking-widest transition-all">
                Évaluer le travail
            </a>
            @endif
        </div>
        @endforeach

        {{-- Card Étudiant (Exemple : Validé) --}}
        <!-- <div class="bg-slate-50/50 rounded-[2.5rem] border border-slate-100 p-8 opacity-75">
            <div class="flex items-center justify-between mb-6">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center font-black text-slate-300 text-lg">AM</div>
                <span class="bg-emerald-50 text-emerald-600 text-[8px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-emerald-100">Evalué</span>
            </div>
            <h5 class="text-base font-black text-slate-400 italic">Amine Mansouri</h5>
            <p class="text-[10px] text-slate-300 font-bold uppercase mt-1">Score : 100% Acquis</p>
            <button class="w-full mt-8 border border-slate-200 py-4 rounded-2xl text-[10px] font-black uppercase text-slate-400">Voir feedback</button>
        </div> -->

    </div>
</div>
@endsection