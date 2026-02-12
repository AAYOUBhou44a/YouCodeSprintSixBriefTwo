@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto w-full p-6 lg:p-10 space-y-10">
    
    <div class="relative bg-slate-900 rounded-[4rem] p-12 overflow-hidden shadow-2xl">
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
            <div class="space-y-6">
                <div class="flex flex-wrap gap-3">
                    <!-- <span class="px-4 py-1.5 bg-indigo-500 text-white rounded-full text-[10px] font-black uppercase tracking-widest">Niveau 2</span> -->
                    <span class="px-4 py-1.5 bg-white/10 text-indigo-200 rounded-full text-[10px] font-black uppercase tracking-widest backdrop-blur-md">Durée : {{$brief->start_date->diffInDays($brief->end_date)}} jours</span>
                </div>
                <h1 class="text-5xl font-black text-white leading-tight max-w-2xl">
                    {{$brief->title}}
                </h1>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center text-white">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <!-- <div>
                        <p class="text-[10px] font-black text-indigo-300 uppercase tracking-widest">Technologie principale</p>
                        <p class="text-white font-bold">Laravel 11 & PostgreSQL</p>
                    </div> -->
                </div>
            </div>
            
            <div class="bg-white/5 backdrop-blur-2xl border border-white/10 p-8 rounded-[3rem] text-center min-w-[220px]">
                <p class="text-[10px] font-black text-indigo-400 uppercase tracking-widest mb-4">Date Limite de Rendu</p>
                <p class="text-3xl font-black text-white">{{$brief->end_date->isoFormat('LL')}}</p>
                <div class="mt-4 h-1.5 w-full bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-indigo-500 w-2/3 shadow-[0_0_15px_rgba(99,102,241,0.5)]"></div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px]"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        
        <div class="lg:col-span-2 space-y-10">
            
            <section class="bg-white rounded-[3.5rem] p-10 border border-slate-100 shadow-sm">
                <h2 class="text-2xl font-black text-slate-900 mb-6 flex items-center gap-4">
                    <span class="w-2 h-8 bg-indigo-600 rounded-full"></span>
                    La description
                </h2>
                <div class="text-slate-600 leading-relaxed space-y-4 font-medium">
                    <p>
                        {{$brief->description}}
                    </p>
                </div>

                <h2 class="text-2xl font-black text-slate-900 mb-6 flex items-center gap-4">
                    <span class="w-2 h-8 bg-indigo-600 rounded-full"></span>
                    Le Contexte du Projet
                </h2>
                <div class="text-slate-600 leading-relaxed space-y-4 font-medium">
                    <p>
                        {{$brief->content}}
                    </p>
                </div>
            </section>

            <!-- <section class="bg-indigo-50/50 rounded-[3.5rem] p-10 border border-indigo-100/50">
                <h2 class="text-2xl font-black text-slate-900 mb-8">Livrables Attendus</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="text-indigo-600 mt-1"><i class="fas fa-code"></i></div>
                        <div>
                            <h4 class="font-black text-slate-900 text-sm">Dépôt GitHub</h4>
                            <p class="text-xs text-slate-500 mt-1 italic">Code propre et commenté</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="text-indigo-600 mt-1"><i class="fas fa-project-diagram"></i></div>
                        <div>
                            <h4 class="font-black text-slate-900 text-sm">Schéma MCD/MLD</h4>
                            <p class="text-xs text-slate-500 mt-1 italic">Format PDF ou Image</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="text-indigo-600 mt-1"><i class="fas fa-book"></i></div>
                        <div>
                            <h4 class="font-black text-slate-900 text-sm">Documentation API</h4>
                            <p class="text-xs text-slate-500 mt-1 italic">Postman ou Swagger</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 flex items-start gap-4">
                        <div class="text-indigo-600 mt-1"><i class="fas fa-vial"></i></div>
                        <div>
                            <h4 class="font-black text-slate-900 text-sm">Rapport de Tests</h4>
                            <p class="text-xs text-slate-500 mt-1 italic">Minimum 10 tests unitaires</p>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>

        <div class="space-y-8">
            
            <div class="bg-white rounded-[3.5rem] p-8 border border-slate-100 shadow-sm">
                <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-8">Compétences à valider</h3>
                <div class="space-y-4">
                    @foreach($brief->skills as $skill)
                    <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl">
                        <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white text-[10px] font-black">{{$skill->code}}</div>
                        <span class="text-xs font-bold text-slate-700">{{$skill->title}}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded-[3.5rem] p-8 border border-slate-100 shadow-sm flex items-center gap-5">
                <div class="w-16 h-16 bg-slate-900 rounded-[2rem] flex items-center justify-center text-white font-black">MP</div>
                <div>
                    <p class="text-[10px] font-black text-slate-400 uppercase">Créé par</p>
                    <p class="text-sm font-black text-slate-900">{{$brief->classe->teacher->name}}</p>
                </div>
            </div>

            @if($brief->realisations->isEmpty())
                <a href="/brief/show/{{$brief->id}}" class="inline-flex items-center justify-center w-full py-6 bg-slate-900 hover:bg-indigo-600 text-white rounded-[2.5rem] font-black text-[11px] uppercase tracking-widest transition-all duration-300 shadow-xl shadow-slate-200 group">
                    Soumettre mon travail
                    <i class="fas fa-paper-plane ml-3 group-hover:translate-x-2 group-hover:-translate-y-2 transition-transform"></i>
                </a>
            @endif
        </div>
    </div>
</div>
@endsection