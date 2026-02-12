@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto w-full p-6 lg:p-10 space-y-12">

    {{-- En-tête simple --}}
    <div class="text-center space-y-4">
        <h1 class="text-4xl font-black tracking-tight text-slate-900">Mes Résultats</h1>
        <p class="text-slate-500 font-medium max-w-xl mx-auto">
            Consultez le détail de vos compétences validées pour chaque projet terminé.
        </p>
    </div>

    {{-- Grille des évaluations terminées --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
    @foreach($evaluations as $evaluation)
        <a href="/evaluations/show/{{$evaluation->id}}" class="group block relative bg-white rounded-[3rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-indigo-100/50 hover:-translate-y-2 transition-all duration-500 overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-500/5 rounded-full -mr-12 -mt-12 group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="relative z-10">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white text-xs">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase tracking-widest text-slate-400">Évaluation Complète</span>
                    </div>
                    <span class="text-xs font-black text-emerald-500 uppercase">A+</span>
                </div>

                <h2 class="text-2xl font-black text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">{{$evaluation->realisation->brief->title}}</h2>
                <p class="text-sm text-slate-500 mb-8 line-clamp-2">{{$evaluation->realisation->brief->description}}</p>

                <div class="flex items-end justify-between border-t border-slate-50 pt-6">
                    <div>
                        <p class="text-[9px] font-black text-slate-400 uppercase mb-2">Compétences validées</p>
                        <div class="flex -space-x-2">
                            @foreach($evaluation->skills as $skill)
                            <div class="w-8 h-8 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[8px] font-black">{{$skill->code}}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-indigo-600 font-black text-[10px] uppercase tracking-widest">
                        Détails <i class="fas fa-arrow-right ml-1 group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    </div>
</div>
@endsection