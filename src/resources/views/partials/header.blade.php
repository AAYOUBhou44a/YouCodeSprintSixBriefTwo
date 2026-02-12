<nav class="glass-effect border-b border-slate-200 sticky top-0 z-50 bg-white/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <div class="flex items-center gap-8">
                <a href="/" class="flex items-center group">
                    <div class="h-9 w-9 bg-indigo-600 rounded-lg flex items-center justify-center shadow-indigo-200 shadow-lg group-hover:rotate-6 transition-transform">
                        <span class="text-white font-black">E</span>
                    </div>
                    <span class="ml-3 text-lg font-bold tracking-tight text-slate-800 italic">EduConnect</span>
                </a>

                <div class="hidden lg:flex items-center gap-2">
                    @if(Auth::check() && Auth::user()->role === 'student')
                    <a href="/briefs" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition flex items-center gap-2">
                        <i class="fas fa-book-open"></i> Mes Briefs
                    </a>
                    
                    <a href="/evaluations" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition flex items-center gap-2">
                        <i class="fas fa-check-double"></i> Évaluations
                    </a>
                    @elseif(Auth::check() && Auth::user()->role === 'teacher')
                    <div class="h-4 w-[1px] bg-slate-200 mx-2"></div>
                    
                    <a href="/briefs/create" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-emerald-600 bg-emerald-50 rounded-lg border border-emerald-100 flex items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Nouveau Brief
                    </a>
                    <a href="/realisations" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition flex items-center gap-2">
                        <i class="fas fa-tasks"></i> Réalisations
                    </a>

                    @elseif(Auth::check() && Auth::user()->role === 'admin')
                    <div class="h-4 w-[1px] bg-slate-200 mx-2"></div>

                    <a href="/sprints" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition flex items-center gap-2">
                        <i class="fas fa-stopwatch"></i> Sprint
                    </a>
                    <a href="/users" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition flex items-center gap-2">
                        <i class="fas fa-user-plus"></i> Utilisateur
                    </a>
                    <a href="/classes" class="px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 hover:text-indigo-600 transition flex items-center gap-2">
                        <i class="fas fa-graduation-cap"></i> Classe
                    </a>
                    @endif

                </div>
            </div>
            @auth
            <div class="flex items-center gap-4">
                <div class="h-8 w-8 bg-slate-100 rounded-full border border-slate-200 flex items-center justify-center text-slate-500">
                    <i class="fas fa-user text-xs"></i>
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="p-2 text-slate-400 hover:text-rose-500 transition">
                        <i class="fas fa-power-off"></i>
                    </button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</nav>