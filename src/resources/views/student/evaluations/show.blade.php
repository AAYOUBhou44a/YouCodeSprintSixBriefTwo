@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto w-full p-6 lg:p-10 space-y-8">
    
    <div class="flex items-center justify-between">
        <a href="#" class="flex items-center gap-3 text-slate-400 hover:text-indigo-600 transition group">
            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center group-hover:border-indigo-200 shadow-sm transition-all">
                <i class="fas fa-arrow-left text-xs"></i>
            </div>
            <span class="text-[10px] font-black uppercase tracking-widest">Retour à la liste</span>
        </a>
        <div class="flex items-center gap-2">
            <span class="px-4 py-2 bg-emerald-50 text-emerald-600 rounded-full text-[10px] font-black uppercase tracking-widest border border-emerald-100">
                Évaluation Terminée
            </span>
        </div>
    </div>

    <div class="bg-slate-900 rounded-[3rem] p-10 text-white shadow-2xl relative overflow-hidden">
        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-8">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="px-3 py-1 bg-indigo-500/20 text-indigo-300 rounded-lg text-[9px] font-black uppercase tracking-widest border border-indigo-500/30">Développement Backend</span>
                    <span class="text-slate-500 text-[10px] font-bold uppercase tracking-widest">ID: #BR-882</span>
                </div>
                <h1 class="text-4xl font-black tracking-tight">{{$evaluation->realisation->brief->title}}</h1>
                <div class="flex items-center gap-6 text-slate-400 text-[10px] font-black uppercase tracking-widest">
                    <span><i class="far fa-calendar-alt mr-2 text-indigo-400"></i>{{$evaluation->realisation->brief->created_at->diffForHumans()}}</span>
                    <span><i class="fas fa-user-tie mr-2 text-indigo-400"></i>Formateur: M. Marc Perrin</span>
                </div>
            </div>
            
            <div class="bg-white/5 backdrop-blur-xl p-8 rounded-[2.5rem] border border-white/10 text-center min-w-[180px] shadow-2xl">
                <p class="text-[10px] font-black text-indigo-400 uppercase mb-2 tracking-[0.2em]">Score de validation</p>
                <p class="text-5xl font-black text-white">92<span class="text-indigo-400 text-2xl">%</span></p>
            </div>
        </div>
        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-indigo-600/20 rounded-full blur-[100px]"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-[3rem] border border-slate-100 p-10 shadow-sm">
                <div class="flex items-center justify-between mb-10">
                    <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Analyse des compétences</h3>
                    <div class="flex gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span class="w-2 h-2 rounded-full bg-rose-500"></span>
                    </div>
                </div>
                
                <div class="space-y-4">
                    @foreach($evaluation->skills as $skill)
                    <div class="flex items-center justify-between p-6 bg-slate-50 rounded-[2rem] border border-slate-50 hover:border-indigo-100 transition-all group">
                        <div class="flex items-center gap-5">
                            @if($skill->pivot->validation)
                            <div class="w-14 h-14 bg-white text-emerald-500 rounded-2xl flex items-center justify-center shadow-sm group-hover:shadow-emerald-100 transition-all">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                            @else
                            <div class="w-14 h-14 bg-white text-rose-500 rounded-2xl flex items-center justify-center shadow-sm group-hover:shadow-rose-100 transition-all">
                                <i class="fas fa-exclamation-triangle text-xl"></i>
                            </div>
                            @endif
                            <div>
                                <h4 class="text-sm font-black text-slate-900">{{$skill->title}}</h4>
                                <p class="text-[10px] font-bold text-slate-400 uppercase mt-0.5">Niveau: {{$skill->pivot->level}}</p>
                            </div>
                        </div>
                        @if($skill->pivot->validation === 'valide')
                        <span class="px-4 py-2 bg-emerald-500 text-white rounded-xl text-[9px] font-black uppercase tracking-widest shadow-lg shadow-emerald-100">Acquis</span>
                        @else
                                                <span class="px-4 py-2 bg-rose-500 text-white rounded-xl text-[9px] font-black uppercase tracking-widest shadow-lg shadow-rose-100">À revoir</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-[3rem] border border-slate-100 p-8 shadow-sm relative overflow-hidden">
                <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-6 flex items-center gap-2">
                    <i class="fas fa-quote-left text-indigo-500"></i> Feedback Pédagogique
                </h3>
                <div class="bg-slate-50 rounded-[2rem] p-6">
                    <p class="text-xs text-slate-600 leading-relaxed font-medium italic">
                        "{{$evaluation->comment}}"
                    </p>
                </div>
            </div>

            <div class="bg-indigo-600 rounded-[3rem] p-8 text-white shadow-xl shadow-indigo-100">
                <h3 class="text-[10px] font-black text-indigo-200 uppercase tracking-[0.3em] mb-6">Détails du rendu</h3>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center"><i class="fab fa-github"></i></div>
                        <div>
                            <p class="text-[10px] font-black text-indigo-200 uppercase">Dépôt GitHub</p>
                            <a href="#" class="text-xs font-bold hover:underline">{{$evaluation->realisation->link}}</a>
                        </div>
                    </div>
                    <!-- <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center"><i class="fas fa-link"></i></div>
                        <div>
                            <p class="text-[10px] font-black text-indigo-200 uppercase">Version Déployée</p>
                            <a href="#" class="text-xs font-bold hover:underline">demo-api.railway.app</a>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <button class="w-full py-4 bg-slate-900 text-white rounded-3xl font-black text-[10px] uppercase tracking-widest hover:scale-[1.02] transition-all">
                    Demander un Recours
                </button>
                <button class="w-full py-4 bg-white border border-slate-200 text-slate-400 rounded-3xl font-black text-[10px] uppercase tracking-widest hover:bg-slate-50 transition-all">
                    Télécharger Certificat
                </button>
            </div>
        </div>
    </div>
</div>
@endsection