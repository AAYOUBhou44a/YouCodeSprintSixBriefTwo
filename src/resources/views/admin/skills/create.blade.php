@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-8 py-12">
        
        <header class="flex flex-col md:flex-row justify-between items-end gap-8 mb-16">
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
                       <span class="text-[10px] font-black uppercase tracking-[0.3em] text-indigo-600/60">Configuration Système</span>
                </div>
                <h1 class="text-6xl font-black tracking-tighter leading-none">Référentiel<br/>des <span class="text-indigo-600 underline decoration-indigo-100 underline-offset-8">Skills</span>.</h1>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="bg-white px-6 py-4 rounded-[2rem] border border-slate-100 shadow-sm">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Total Skills</p>
                    <p class="text-2xl font-black">{{$skills->count()}}</p>
                </div>
            </div>
        </header>

        <div class="grid grid-cols-12 gap-8">
            
            <div class="col-span-12 lg:col-span-4">
                <div class="bg-white rounded-[3rem] p-10 border border-slate-100 shadow-xl shadow-slate-100/50 sticky top-12">
                    <h2 class="text-2xl font-black mb-8 tracking-tight">Éditeur de<br/>compétence</h2>
                    
                    <form action="{{isset($skill) ? '/skills/' . $skill->id : '/skills'}}" method="POST" class="space-y-6">
                        @csrf
                        @if(isset($skill))
                            @method('PUT')
                        @endif
                        <div class="group">
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">Code Unique</label>
                            <input type="text" name="code" value="{{isset($skill) ? $skill->code : old('code') }}" placeholder="ex: C1" class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:bg-white focus:border-indigo-500/20 focus:ring-4 focus:ring-indigo-500/5 outline-none font-bold transition-all">
                            @error('code')
                                <span class="text-rose-500 text-[10px] font-bold mt-1 ml-2">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="group">
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">Nom de la compétence</label>
                            <input type="text" name="title" value="{{isset($skill) ? $skill->title : old('title') }}" placeholder="ex: Maquetter une application" class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:bg-white focus:border-indigo-500/20 focus:ring-4 focus:ring-indigo-500/5 outline-none font-bold transition-all">
                            @error('title')
                                <span class="text-rose-500 text-[10px] font-bold mt-1 ml-2">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all">
                                Enregistrer les modifications
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-8 space-y-6">
                
            @foreach($skills as $skill)
                <div class="group bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-indigo-500/5 transition-all flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">
                    <div class="w-20 h-20 bg-indigo-50 rounded-3xl flex items-center justify-center text-indigo-600 font-black text-2xl group-hover:bg-indigo-600 group-hover:text-white transition-all shrink-0">
                        {{$skill->code}}
                    </div>
                    
                    <div class="flex-1 space-y-2">
                        <div class="flex items-center gap-3">
                            <h3 class="text-xl font-black tracking-tight">{{$skill->title}}</h3>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-[8px] font-black uppercase rounded-full">Actif</span>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <a href="/skills/edit/{{$skill->id}}" class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-slate-900 hover:text-white transition-all flex items-center justify-center">
                            <i class="fas fa-pen-nib text-xs"></i>
                        </a>
                        <form action="/skills/{{$skill->id}}" method="POST" onsubmit="return confirm('Supprimer cette compétence ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-rose-500 hover:text-white transition-all flex items-center justify-center">
                                <i class="fas fa-trash-alt text-xs"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach

                <div class="pt-8 flex justify-center">
                    <button class="px-8 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest hover:text-indigo-600 transition-colors">
                        Charger plus de compétences
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection