@extends('layouts.app')

@section('content')
<div class="flex h-[calc(100vh-64px)] overflow-hidden bg-slate-50/50">
    
    <aside class="w-80 bg-white border-r border-slate-200 flex flex-col shrink-0 shadow-sm">
        <div class="p-6 border-b border-slate-50 bg-slate-50/30">
            <div class="relative group">
                <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-300 text-xs group-focus-within:text-indigo-500 transition-colors"></i>
                <input type="text" placeholder="Filtrer les rendus..." 
                       class="w-full pl-11 pr-4 py-3 bg-white border border-slate-200 rounded-2xl text-[11px] font-bold focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all">
            </div>
        </div>
        
        <div class="flex-1 overflow-y-auto space-y-1 p-2">
            @foreach(['Sophie Martin' => 'active', 'Lucas Bernard' => 'done', 'Emma Durand' => 'empty'] as $name => $status)
            <div class="relative group px-4 py-4 rounded-[1.5rem] cursor-pointer transition-all 
                {{ $status == 'active' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100' : 'hover:bg-slate-50' }}">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($name) }}&background={{ $status == 'active' ? 'fff' : 'e2e8f0' }}&color={{ $status == 'active' ? '6366f1' : '64748b' }}" 
                             class="w-10 h-10 rounded-xl shadow-sm">
                        @if($status == 'active')
                            <div class="absolute -top-1 -right-1 w-3 h-3 bg-emerald-400 border-2 border-indigo-600 rounded-full animate-pulse"></div>
                        @endif
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <h4 class="font-black text-xs truncate uppercase tracking-tight">{{ $name }}</h4>
                        @if($status == 'active')
                            <p class="text-[9px] font-black text-indigo-200 uppercase mt-0.5 italic">Correction en cours</p>
                        @elseif($status == 'done')
                            <p class="text-[9px] font-black text-emerald-500 uppercase mt-0.5">Évalué • 18/20</p>
                        @else
                            <p class="text-[9px] font-black text-slate-300 uppercase mt-0.5">En attente</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-10">
        <div class="max-w-4xl mx-auto space-y-8">
            
            <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-xl shadow-slate-200/40 flex flex-col md:flex-row justify-between items-center gap-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-full -mr-16 -mt-16 opacity-50"></div>
                
                <div class="flex items-center gap-8 relative z-10">
                    <div class="w-24 h-24 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-[2rem] flex items-center justify-center text-3xl font-black text-white shadow-xl shadow-indigo-200">
                        SM
                    </div>
                    <div>
                        <h2 class="text-3xl font-black text-slate-900 tracking-tighter">Sophie Martin</h2>
                        <div class="flex gap-3 mt-3">
                            <a href="#" class="px-4 py-2 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase tracking-widest hover:bg-indigo-600 transition-colors flex items-center gap-2">
                                <i class="fab fa-github"></i> Code Source
                            </a>
                            <a href="#" class="px-4 py-2 bg-white border border-slate-200 text-slate-400 rounded-xl text-[10px] font-black uppercase tracking-widest hover:border-indigo-500 hover:text-indigo-600 transition-all flex items-center gap-2">
                                <i class="fas fa-external-link-alt"></i> Demo
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center md:text-right border-t md:border-t-0 md:border-l border-slate-100 pt-6 md:pt-0 md:pl-8 relative z-10">
                    <p class="text-[10px] font-black text-slate-300 uppercase tracking-[0.2em] mb-1">Date du rendu</p>
                    <p class="text-lg font-black text-slate-800 tracking-tight">23 Janvier 2026</p>
                    <span class="inline-block mt-2 px-3 py-1 bg-emerald-50 text-emerald-600 text-[9px] font-black rounded-full uppercase">Ponctuel</span>
                </div>
            </div>

            <form action="#" method="POST" class="space-y-8">
                @csrf
                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
                    <div class="px-10 py-6 bg-slate-900 text-white flex justify-between items-center">
                        <h3 class="font-black uppercase text-[10px] tracking-[0.3em] flex items-center gap-3">
                            <span class="w-2 h-2 bg-indigo-400 rounded-full animate-pulse"></span>
                            Critères d'évaluation
                        </h3>
                    </div>

                    <div class="p-10 space-y-12">
                        @php
                            $skills = [
                                'C1' => ['titre' => 'Maquetter une application', 'color' => 'indigo'],
                                'C4' => ['titre' => 'Développer le Backend', 'color' => 'purple']
                            ];
                        @endphp

                        @foreach($skills as $code => $data)
                        <div class="skill-section">
                            <div class="flex items-center gap-4 mb-8">
                                <span class="w-10 h-10 flex items-center justify-center bg-{{ $data['color'] }}-600 text-white text-xs font-black rounded-2xl shadow-lg shadow-{{ $data['color'] }}-100">
                                    {{ $code }}
                                </span>
                                <h4 class="text-xl font-black text-slate-800 tracking-tight">{{ $data['titre'] }}</h4>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                @foreach(['Imiter' => 'red', 'Adapter' => 'amber', 'Transposer' => 'emerald'] as $level => $color)
                                <label class="group relative cursor-pointer">
                                    <input type="radio" name="skill_{{ $code }}" value="{{ $level }}" class="peer sr-only">
                                    <div class="p-6 rounded-[2rem] border-2 border-slate-50 bg-slate-50/50 group-hover:bg-white group-hover:border-slate-200 peer-checked:border-{{ $color }}-500 peer-checked:bg-{{ $color }}-50/30 transition-all duration-300 h-full relative overflow-hidden">
                                        <div class="flex justify-between items-center mb-3">
                                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-400 peer-checked:text-{{ $color }}-600">{{ $level }}</span>
                                            <div class="w-5 h-5 rounded-full border-2 border-slate-200 peer-checked:border-{{ $color }}-500 peer-checked:bg-{{ $color }}-500 flex items-center justify-center transition-all">
                                                <i class="fas fa-check text-[8px] text-white opacity-0 peer-checked:opacity-100"></i>
                                            </div>
                                        </div>
                                        <p class="text-[11px] leading-relaxed text-slate-500 font-medium">Description précise du niveau attendu pour cet item.</p>
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-10">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-6">Commentaires Pédagogiques</label>
                    <textarea rows="4" class="w-full p-8 bg-slate-50 border border-slate-100 rounded-[2rem] focus:bg-white focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 outline-none transition-all text-sm font-medium italic text-slate-600 leading-relaxed" 
                              placeholder="Écrivez vos observations ici..."></textarea>
                </div>

                <div class="flex items-center justify-between pt-4">
                    <button type="button" class="text-[10px] font-black text-rose-500 uppercase tracking-widest hover:underline">
                        Invalider le rendu
                    </button>
                    <div class="flex gap-4">
                        <button type="submit" class="bg-white border border-slate-200 text-slate-900 px-8 py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] hover:bg-slate-50 transition-all">
                            Sauvegarder Brouillon
                        </button>
                        <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                            Valider l'évaluation
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection