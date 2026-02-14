@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto w-full p-4 lg:p-12">
    {{-- Header --}}
    <div class="relative bg-slate-900 rounded-t-[3rem] p-12 overflow-hidden border-b border-white/10">
        <div class="relative z-10 flex justify-between items-center">
            <div>
                <span class="inline-block px-4 py-1.5 bg-indigo-500/20 border border-indigo-400/30 rounded-full text-indigo-300 text-[10px] font-black uppercase tracking-[0.3em] mb-4">
                    Espace Formateur
                </span>
                <h1 class="text-4xl font-black text-white tracking-tight">Nouveau Brief <span class="text-indigo-400">Pédagogique</span></h1>
            </div>
            <div class="hidden md:flex w-16 h-16 bg-white/5 rounded-2xl items-center justify-center border border-white/10">
                <i class="fas fa-layer-group text-2xl text-indigo-400"></i>
            </div>
        </div>
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-indigo-600/20 rounded-full blur-[100px]"></div>
    </div>
    
    <form action="{{isset($brief) ? '/briefs/' . $brief->id : '/teacher/briefs'}}" method="POST" class="bg-white rounded-b-[3rem] shadow-2xl shadow-slate-200/60 p-8 md:p-14 space-y-12">
        @if(isset($brief))
            @method('PUT')
        @endif
        @error('classe_id')
            <p class="bg-red-500 text-white p-4 mb-6 rounded-xl">{{$message}}</p>
        @enderror
        @csrf
        {{-- Section 1 : Identité --}}
        <div class="space-y-8">
            <div class="flex items-center gap-4">
                <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center text-xs font-black">01</span>
                <h2 class="text-xs font-black uppercase tracking-[0.2em] text-slate-400">Informations Générales</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2 space-y-3">
                    <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Titre du projet</label>
                    <input type="text" name="title" value="{{isset($brief) ? $brief->title : old('title') }}" 
                        class="w-full px-8 py-5 bg-slate-50 border-2 border-transparent rounded-2xl focus:bg-white focus:border-indigo-500 focus:ring-0 transition-all font-bold text-slate-800">
                        @error('title')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                </div>

                <div class="space-y-3">
                    <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Sprint</label>
                    <select name="sprint_id" class="w-full px-8 py-5 bg-slate-50 border-2 border-transparent rounded-2xl focus:bg-white focus:border-indigo-500 outline-none transition-all font-bold text-slate-700 appearance-none">
                        @foreach($sprints as $sprint)
                        <option value="{{$sprint->id}}" @selected(isset($brief) && $brief->sprint->id === $sprint->id)>{{$sprint->name}}</option>
                        @endforeach
                    </select>
                    @error('sprint_id')
                        <span style="color: red; font-size: 12px;">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Section 2 : Configuration & Dates --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 py-8 border-y border-slate-50">
            <div class="space-y-4">
                <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Modalité</label>
                <div class="flex gap-2 p-1.5 bg-slate-100 rounded-2xl">
                    <label class="flex-1 cursor-pointer text-center">
                        <input type="radio" name="type" value="individuel" class="peer hidden" {{isset($brief) ? 'checked' : '' }}>
                        <div class="py-3 rounded-xl text-[10px] font-black uppercase peer-checked:bg-white peer-checked:text-indigo-600 transition-all text-slate-400">Solo</div>
                    </label>
                    <label class="flex-1 cursor-pointer text-center">
                        <input type="radio" name="type" value="collectif" class="peer hidden" {{isset($brief) ? 'checked' : '' }}>
                        <div class="py-3 rounded-xl text-[10px] font-black uppercase peer-checked:bg-white peer-checked:text-indigo-600 transition-all text-slate-400">Groupe</div>
                    </label>
                </div>
                @error('type')
                    <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>

            <div class="space-y-3">
                <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Début</label>
                <input type="date" name="start_date" value="{{isset($brief) ? $brief->start_date->format('Y-m-d') : old('start_date') }}" class="w-full px-6 py-4 bg-slate-50 border-2 border-transparent rounded-2xl font-bold text-slate-700">
                @error('start_date')
                    <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>

            <div class="space-y-3">
                <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Fin</label>
                <input type="date" name="end_date" value="{{isset($brief) ? $brief->end_date->format('Y-m-d') : old('end_date') }}" class="w-full px-6 py-4 bg-slate-50 border-2 border-transparent rounded-2xl font-bold text-rose-500">
                @error('end_date')
                    <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>
        </div>

        {{-- Section 3 : Contenu --}}
        <div class="space-y-8">
            <div class="space-y-3">
                <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Description</label>
                <textarea name="description" rows="2" class="w-full px-8 py-5 bg-slate-50 border-2 border-transparent rounded-2xl font-medium text-slate-600">{{isset($brief) ? $brief->description : old('description') }}</textarea>
                @error('description')
                    <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>
            <div class="space-y-3">
                <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-1">Contenu détaillé</label>
                <textarea name="content" rows="4" class="w-full px-8 py-6 bg-slate-50 border-2 border-transparent rounded-[2.5rem] font-medium text-slate-600 text-sm">{{isset($brief) ? $brief->content : old('content') }}</textarea>
                @error('content')
                    <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>
        </div>

        {{-- Section 4 : TOUTES LES COMPÉTENCES (Sélection + Niveau) --}}
        <div class="space-y-8 pt-8 border-t border-slate-50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center text-xs font-black">02</span>
                    <h2 class="text-xs font-black uppercase tracking-[0.2em] text-slate-400">Compétences & Niveaux Requis</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4">
                {{-- Bloc C --}}

                
                @if(isset($brief))
                @foreach($brief->skills as $skill)
                <div class="flex flex-col md:flex-row md:items-center justify-between p-6 bg-slate-50 border-2 border-transparent rounded-3xl hover:bg-white hover:border-indigo-100 transition-all gap-4">
                    <div class="flex items-center gap-5">
                        <div class="relative flex items-center">
                            <input type="checkbox" name="skill_ids[]" value="{{$skill->id}}" class="peer w-6 h-6 border-2 border-slate-200 rounded-lg checked:bg-indigo-600 appearance-none cursor-pointer">
                            <i class="fas fa-check absolute text-[10px] text-white opacity-0 peer-checked:opacity-100 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-black text-slate-700 uppercase">{{$skill->code}} - {{$skill->title}}</span>
                            <span class="block text-[11px] text-slate-400 font-medium italic">{{$skill->title}}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white p-2 rounded-2xl shadow-sm border border-slate-100 w-fit">
                        <span class="text-[9px] font-black text-slate-400 uppercase px-2">Niveau</span>
                        
                        {{-- Niveau 1 --}}
                        <label class="cursor-pointer">
                            <input type="radio" name="level[{{ $skill->id }}]" value="IMITER" class="peer hidden" {{isset($brief) && $skill->pivot->level === 'IMITER' ? 'checked' : '' }}>
                            <div class="w-8 h-8 flex items-center justify-center rounded-xl text-xs font-black bg-slate-50 text-slate-400 peer-checked:bg-indigo-600 peer-checked:text-white transition-all">1</div>
                        </label>
                        
                        {{-- Niveau 2 --}}
                        <label class="cursor-pointer">
                            <input type="radio" name="level[{{ $skill->id }}]" value="S_ADAPTER" class="peer hidden" {{isset($brief) && $skill->pivot->level === 'S_ADAPTER' ? 'checked' : '' }}>
                            <div class="w-8 h-8 flex items-center justify-center rounded-xl text-xs font-black bg-slate-50 text-slate-400 peer-checked:bg-indigo-600 peer-checked:text-white transition-all">2</div>
                        </label>
                        
                        {{-- Niveau 3 --}}
                        <label class="cursor-pointer">
                            <input type="radio" name="level[{{ $skill->id }}]" value="TRANSPOSER" class="peer hidden" {{isset($brief) && $skill->pivot->level === 'TRANSPOSER' ? 'checked' : ''}} >
                            <div class="w-8 h-8 flex items-center justify-center rounded-xl text-xs font-black bg-slate-50 text-slate-400 peer-checked:bg-indigo-600 peer-checked:text-white transition-all">3</div>
                        </label>
                    </div>
                </div>
                
                <!-- "level" => [
                "1" => "2", // Compétence ID 1 -> Niveau 2
                "4" => "3", // Compétence ID 4 -> Niveau 3
                // ...
                ] -->
                @endforeach
                @else 
                @foreach($skills as $skill)
                <div class="flex flex-col md:flex-row md:items-center justify-between p-6 bg-slate-50 border-2 border-transparent rounded-3xl hover:bg-white hover:border-indigo-100 transition-all gap-4">
                    <div class="flex items-center gap-5">
                        <div class="relative flex items-center">
                            <input type="checkbox" name="skill_ids[]" value="{{$skill->id}}" class="peer w-6 h-6 border-2 border-slate-200 rounded-lg checked:bg-indigo-600 appearance-none cursor-pointer">
                            <i class="fas fa-check absolute text-[10px] text-white opacity-0 peer-checked:opacity-100 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <div>
                            <span class="block text-xs font-black text-slate-700 uppercase">{{$skill->code}} - {{$skill->title}}</span>
                            <span class="block text-[11px] text-slate-400 font-medium italic">{{$skill->title}}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white p-2 rounded-2xl shadow-sm border border-slate-100 w-fit">
                        <span class="text-[9px] font-black text-slate-400 uppercase px-2">Niveau</span>
                        
                        {{-- Niveau 1 --}}
                        <label class="cursor-pointer">
                            <input type="radio" name="level[{{ $skill->id }}]" value="IMITER" class="peer hidden" checked>
                            <div class="w-8 h-8 flex items-center justify-center rounded-xl text-xs font-black bg-slate-50 text-slate-400 peer-checked:bg-indigo-600 peer-checked:text-white transition-all">1</div>
                        </label>
                        
                        {{-- Niveau 2 --}}
                        <label class="cursor-pointer">
                            <input type="radio" name="level[{{ $skill->id }}]" value="S_ADAPTER" class="peer hidden">
                            <div class="w-8 h-8 flex items-center justify-center rounded-xl text-xs font-black bg-slate-50 text-slate-400 peer-checked:bg-indigo-600 peer-checked:text-white transition-all">2</div>
                        </label>
                        
                        {{-- Niveau 3 --}}
                        <label class="cursor-pointer">
                            <input type="radio" name="level[{{ $skill->id }}]" value="TRANSPOSER" class="peer hidden">
                            <div class="w-8 h-8 flex items-center justify-center rounded-xl text-xs font-black bg-slate-50 text-slate-400 peer-checked:bg-indigo-600 peer-checked:text-white transition-all">3</div>
                        </label>
                    </div>
                </div>
                
                <!-- "level" => [
                "1" => "2", // Compétence ID 1 -> Niveau 2
                "4" => "3", // Compétence ID 4 -> Niveau 3
                // ...
                ] -->
                @endforeach
                @endif
                

                
                @error('skill_ids')
                <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror


                @error('level')
                <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>
        </div>

        <input type="hidden" name="classe_id" value="1">

        {{-- Footer --}}
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-10">
            <p class="text-[10px] text-slate-400 font-bold italic">* Cochez les compétences visées puis choisissez le niveau (1 à 3).</p>
            <div class="flex items-center gap-4">
                <button type="button" class="px-8 py-5 text-[10px] font-black uppercase text-slate-400">Annuler</button>
                <button type="submit" class="px-12 py-5 bg-indigo-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-[0.2em] shadow-2xl shadow-indigo-200 hover:bg-slate-900 transition-all">
                    Enregistrer le Brief
                </button>
            </div>
        </div>
    </form>
</div>
@endsection