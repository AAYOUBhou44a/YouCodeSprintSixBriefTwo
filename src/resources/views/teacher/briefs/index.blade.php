@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#f8fafc] p-6 lg:p-12">
    
    <div class="max-w-7xl mx-auto mb-12 flex flex-col md:flex-row md:items-end justify-between gap-8">
        <div>
            <div class="flex items-center gap-3 mb-4">
                <span class="px-4 py-1.5 bg-indigo-600 text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-full shadow-lg shadow-indigo-200">
                    Archive
                </span>
            </div>
            <h1 class="text-5xl font-black text-slate-900 tracking-tighter">Bibliothèque<span class="text-indigo-600">.</span></h1>
            <p class="text-slate-400 font-bold text-sm mt-3 uppercase tracking-widest">Explorez et gérez les projets passés</p>
        </div>

        <div class="flex gap-4">
            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex items-center gap-6">
                <div>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Taux de réussite</p>
                    <p class="text-2xl font-black text-slate-900 mt-1">88%</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-500 flex items-center justify-center">
                    <i class="fas fa-chart-line"></i>
                </div>
            </div>
            <div class="bg-indigo-600 p-6 rounded-[2rem] shadow-xl shadow-indigo-100 flex items-center gap-6 text-white">
                <div>
                    <p class="text-[10px] font-black text-indigo-200 uppercase tracking-widest">Briefs Actifs</p>
                    <p class="text-2xl font-black mt-1">12</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center">
                    <i class="fas fa-folder-open"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="group relative bg-white rounded-[3rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-slate-200/50 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
            <div class="absolute top-0 right-0 p-8">
                <span class="text-4xl font-black text-slate-50 group-hover:text-indigo-50 transition-colors">01</span>
            </div>
            
            <div class="relative z-10">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500 mb-8">
                    <i class="fas fa-drafting-compass text-xl"></i>
                </div>
                
                <p class="text-[10px] font-black text-indigo-500 uppercase tracking-[0.2em] mb-2">Sprint 01 • Design</p>
                <h3 class="text-xl font-black text-slate-900 leading-tight mb-4 group-hover:text-indigo-600 transition-colors">
                    Maquetter une application SaaS
                </h3>
                
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-slate-100 rounded-lg text-[9px] font-bold text-slate-500 uppercase">Figma</span>
                    <span class="px-3 py-1 bg-slate-100 rounded-lg text-[9px] font-bold text-slate-500 uppercase">UX Research</span>
                </div>

                <div class="pt-6 border-t border-slate-50 flex items-center justify-between">
                    <div class="flex -space-x-3">
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-200"></div>
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-300"></div>
                        <div class="w-8 h-8 rounded-full border-2 border-white bg-indigo-100 flex items-center justify-center text-[8px] font-bold">+18</div>
                    </div>
                    <a href="#" class="w-12 h-12 rounded-full bg-slate-900 text-white flex items-center justify-center hover:scale-110 transition-transform">
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="group relative bg-white rounded-[3rem] p-8 border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-slate-200/50 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
            <div class="absolute top-0 right-0 p-8">
                <span class="text-4xl font-black text-slate-50 group-hover:text-indigo-50 transition-colors">02</span>
            </div>
            
            <div class="relative z-10">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500 mb-8">
                    <i class="fas fa-code text-xl"></i>
                </div>
                
                <p class="text-[10px] font-black text-indigo-500 uppercase tracking-[0.2em] mb-2">Sprint 02 • Backend</p>
                <h3 class="text-xl font-black text-slate-900 leading-tight mb-4 group-hover:text-indigo-600 transition-colors">
                    Architecture API Laravel
                </h3>
                
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-slate-100 rounded-lg text-[9px] font-bold text-slate-500 uppercase">PHP 8.2</span>
                    <span class="px-3 py-1 bg-slate-100 rounded-lg text-[9px] font-bold text-slate-500 uppercase">MySQL</span>
                </div>

                <div class="pt-6 border-t border-slate-50 flex items-center justify-between">
                    <div class="flex flex-col gap-1">
                        <span class="text-[10px] font-black text-slate-400 uppercase italic">Clôturé le</span>
                        <span class="text-[11px] font-bold text-slate-700">15 Janv. 2026</span>
                    </div>
                    <a href="#" class="w-12 h-12 rounded-full bg-slate-900 text-white flex items-center justify-center hover:scale-110 transition-transform">
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection