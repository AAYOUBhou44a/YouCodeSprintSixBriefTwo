<div class="flex min-h-screen bg-slate-50">
    <aside class="w-64 bg-slate-900 text-slate-300 flex-shrink-0 hidden md:flex flex-col shadow-xl">
        <div class="p-6 flex items-center space-x-3 border-b border-slate-800">
            <div class="h-8 w-8 bg-indigo-500 rounded-lg flex items-center justify-center shadow-lg">
                <i class="fa-solid fa-layer-group text-white text-sm"></i>
            </div>
            <span class="text-white font-bold text-lg tracking-tight">MyBrief Panel</span>
        </div>

        <nav class="flex-1 overflow-y-auto py-4 space-y-8">
            
            <div>
                <p class="px-6 text-xs font-semibold text-slate-500 uppercase tracking-widest mb-4">Gestion Globale</p>
                <ul class="space-y-1">
                    <li>
                        <a href="/admin/dashboard" class="flex items-center px-6 py-3 text-sm font-medium hover:bg-slate-800 hover:text-white transition-colors group">
                            <i class="fa-solid fa-chart-line w-5 text-slate-500 group-hover:text-indigo-400"></i>
                            <span class="ml-3">Vue d'ensemble</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/users" class="flex items-center px-6 py-3 text-sm font-medium hover:bg-slate-800 hover:text-white transition-colors group border-l-4 border-transparent hover:border-indigo-500">
                            <i class="fa-solid fa-users w-5 text-slate-500 group-hover:text-indigo-400"></i>
                            <span class="ml-3">Utilisateurs</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="px-6 text-xs font-semibold text-slate-500 uppercase tracking-widest mb-4">Espace Formateur</p>
                <ul class="space-y-1">
                    <li>
                        <a href="/teacher/briefs" class="flex items-center px-6 py-3 text-sm font-medium hover:bg-slate-800 hover:text-white transition-colors group border-l-4 border-transparent hover:border-emerald-500">
                            <i class="fa-solid fa-file-invoice w-5 text-slate-500 group-hover:text-emerald-400"></i>
                            <span class="ml-3">Mes Briefs</span>
                        </a>
                    </li>
                    <li>
                        <a href="/teacher/evaluations" class="flex items-center px-6 py-3 text-sm font-medium hover:bg-slate-800 hover:text-white transition-colors group">
                            <i class="fa-solid fa-check-double w-5 text-slate-500 group-hover:text-emerald-400"></i>
                            <span class="ml-3">Corrections</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="px-6 text-xs font-semibold text-slate-500 uppercase tracking-widest mb-4">Espace Apprenant</p>
                <ul class="space-y-1">
                    <li>
                        <a href="/student/briefs" class="flex items-center px-6 py-3 text-sm font-medium hover:bg-slate-800 hover:text-white transition-colors group border-l-4 border-transparent hover:border-blue-500">
                            <i class="fa-solid fa-laptop-code w-5 text-slate-500 group-hover:text-blue-400"></i>
                            <span class="ml-3">Briefs Assignés</span>
                        </a>
                    </li>
                    <li>
                        <a href="/student/skills" class="flex items-center px-6 py-3 text-sm font-medium hover:bg-slate-800 hover:text-white transition-colors group">
                            <i class="fa-solid fa-award w-5 text-slate-500 group-hover:text-blue-400"></i>
                            <span class="ml-3">Mes Skills</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="p-4 bg-slate-800/50 border-t border-slate-800">
            <div class="flex items-center p-2 rounded-lg hover:bg-slate-800 transition-colors">
                <div class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-xs font-bold text-white">JD</div>
                <div class="ml-3 overflow-hidden">
                    <p class="text-sm font-medium text-white truncate">John Doe</p>
                    <p class="text-xs text-slate-500 truncate">john@admin.com</p>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
        <header class="bg-white border-b border-slate-200 h-16 flex items-center px-8 justify-between">
            <h2 class="text-lg font-semibold text-slate-800 italic">Tableau de Bord</h2>
            <div class="flex items-center space-x-4">
                 <button class="p-2 text-slate-400 hover:text-slate-600"><i class="fa-solid fa-bell"></i></button>
                 <a href="/logout" class="text-sm text-red-500 font-bold hover:underline">Quitter</a>
            </div>
        </header>

        <div class="p-8 overflow-y-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 h-32">Statistiques...</div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 h-32">Activités...</div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 h-32">Notifications...</div>
            </div>
        </div>
    </main>
</div>