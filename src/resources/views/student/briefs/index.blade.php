@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto w-full p-6 lg:p-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight uppercase">Catalogue de mes projets</h1>
            <p class="text-slate-500 font-medium mt-1">Suivez votre progression et accédez à vos livrables.</p>
        </div>
        <div class="flex bg-white p-1.5 rounded-2xl border border-slate-200 shadow-sm">
            <button class="px-6 py-2 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase tracking-widest shadow-lg">Actifs</button>
            <button class="px-6 py-2 text-slate-400 text-[10px] font-black uppercase tracking-widest hover:text-indigo-600 transition">Terminés</button>
        </div>
    </div>

    <section class="mb-16">
        <div class="flex items-center gap-3 mb-8">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-indigo-600"></span>
            </span>
            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Brief en cours d'exécution</h3>
        </div>

        <div class="bg-white rounded-[3rem] border-2 border-indigo-600 p-10 shadow-2xl shadow-indigo-100/50 relative overflow-hidden group">
            <div class="absolute top-0 right-0 p-10 text-right hidden md:block">
                <p class="text-[10px] font-black text-indigo-400 uppercase tracking-widest">Échéance</p>
                <p class="text-xl font-black text-slate-900">{{$latestBrief->created_at->diffForHumans()}}</p>
            </div>
            
            <div class="relative z-10 max-w-2xl">
                <span class="px-5 py-2 bg-indigo-600 text-white rounded-xl text-[10px] font-black uppercase tracking-[0.2em] shadow-lg shadow-indigo-200">
                    {{$latestBrief->sprint->title}}
                </span>
                <h4 class="text-4xl font-black text-slate-900 mt-6 mb-4 leading-tight">{{$latestBrief->title}}</h4>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    {{$latestBrief->description}}
                </p>
                
                <div class="flex flex-wrap items-center gap-6">
                    <a href="#" class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-indigo-600 transition-all hover:-translate-y-1 shadow-xl shadow-slate-200">
                        Soumettre mon travail
                    </a>
                    <a href="#" class="text-slate-400 hover:text-indigo-600 transition font-black text-[10px] uppercase tracking-[0.2em]">
                        Voir le sujet complet
                    </a>
                </div>
            </div>

            <i class="fas fa-rocket absolute -right-10 -bottom-10 text-[15rem] text-slate-50 group-hover:text-indigo-50/50 transition-colors -rotate-12 pointer-events-none"></i>
        </div>
    </section>

    <section>
        <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-8 ml-4">Historique des Sprints</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @foreach($briefs as $brief)
        
            <div class="bg-white rounded-[2.5rem] border border-slate-200 p-8 hover:border-indigo-300 transition-all group shadow-sm">
                <div class="flex justify-between items-start mb-6">
                    <span class="w-12 h-12 flex items-center justify-center bg-slate-100 text-slate-800 rounded-2xl font-black text-sm group-hover:bg-indigo-600 group-hover:text-white transition-colors">02</span>
                    <span class="bg-emerald-50 text-emerald-600 text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest border border-emerald-100">Validé</span>
                </div>
                <h5 class="text-xl font-black text-slate-900 mb-2">{{$brief->title}}</h5>
                <p class="text-sm text-slate-400 leading-relaxed line-clamp-2">{{$brief->description}}</p>
                
                <div class="mt-8 pt-6 border-t border-slate-50 flex justify-between items-center">
                    <div class="flex -space-x-2">
                        @foreach($brief->skills as $skill)
                        <div class="w-8 h-8 rounded-xl bg-slate-900 text-white border-2 border-white flex items-center justify-center text-[9px] font-black shadow-sm">{{$skill->code}}</div>
                        @endforeach
                    </div>
                    <a href="#" class="text-[10px] font-black text-indigo-600 uppercase tracking-widest hover:underline">
                        Voir Feedback
                    </a>
                </div>
            </div>

        @endforeach

        </div>
    </section>
</div>
@endsection