@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto w-full">
    <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-400 mb-8">
        <a href="#" class="hover:text-indigo-600 transition">Utilisateurs</a>
        <i class="fas fa-chevron-right text-[8px]"></i>
        <span class="text-slate-900">Nouvel Utilisateur</span>
    </nav>

    <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-200/60 border border-slate-200 overflow-hidden">
        <div class="bg-indigo-600 p-10 text-white relative overflow-hidden">
            <div class="relative z-10">
                <h1 class="text-3xl font-black tracking-tight">Création de compte</h1>
                <p class="text-indigo-100 text-sm mt-2 opacity-90">Enregistrez un nouveau membre sur la plateforme EduConnect.</p>
            </div>
            <div class="absolute top-0 right-0 -mt-8 -mr-8 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-10 w-24 h-24 bg-indigo-400/20 rounded-full blur-2xl"></div>
        </div>

        <form action="#" method="POST" class="p-8 md:p-10 space-y-8">
            @csrf
            
            <div>
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Type d'utilisateur</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative group cursor-pointer">
                        <input type="radio" name="role" value="student" class="peer sr-only" checked>
                        <div class="flex flex-col items-center justify-center p-5 border-2 border-slate-100 rounded-2xl bg-slate-50/50 transition-all group-hover:bg-slate-50 peer-checked:border-indigo-600 peer-checked:bg-indigo-50/30 peer-checked:ring-4 peer-checked:ring-indigo-50">
                            <i class="fas fa-user-graduate mb-2 text-2xl text-slate-400 group-hover:scale-110 transition-transform peer-checked:text-indigo-600"></i>
                            <span class="text-sm font-bold text-slate-600 peer-checked:text-indigo-900">Apprenant</span>
                        </div>
                        <div class="absolute -top-2 -right-2 hidden peer-checked:flex h-6 w-6 bg-indigo-600 rounded-full items-center justify-center text-white text-[10px] shadow-lg">
                            <i class="fas fa-check"></i>
                        </div>
                    </label>

                    <label class="relative group cursor-pointer">
                        <input type="radio" name="role" value="teacher" class="peer sr-only">
                        <div class="flex flex-col items-center justify-center p-5 border-2 border-slate-100 rounded-2xl bg-slate-50/50 transition-all group-hover:bg-slate-50 peer-checked:border-indigo-600 peer-checked:bg-indigo-50/30 peer-checked:ring-4 peer-checked:ring-indigo-50">
                            <i class="fas fa-chalkboard-teacher mb-2 text-2xl text-slate-400 group-hover:scale-110 transition-transform peer-checked:text-indigo-600"></i>
                            <span class="text-sm font-bold text-slate-600 peer-checked:text-indigo-900">Formateur</span>
                        </div>
                        <div class="absolute -top-2 -right-2 hidden peer-checked:flex h-6 w-6 bg-indigo-600 rounded-full items-center justify-center text-white text-[10px] shadow-lg">
                            <i class="fas fa-check"></i>
                        </div>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Prénom</label>
                    <input type="text" placeholder="Jean" required 
                           class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-semibold text-slate-700">
                </div>
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Nom</label>
                    <input type="text" placeholder="Dupont" required 
                           class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-semibold text-slate-700">
                </div>
                
                <div class="md:col-span-2 space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Adresse Email Professionnelle</label>
                    <div class="relative">
                        <i class="far fa-envelope absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="email" placeholder="jean.dupont@ecole.com" required 
                               class="w-full pl-12 pr-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-semibold text-slate-700">
                    </div>
                </div>

                <div class="md:col-span-2 space-y-2 transition-all duration-300" id="class-selection-container">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Assignation Promotion</label>
                    <div class="relative">
                        <i class="fas fa-users-rectangle absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <select id="class-select" class="w-full pl-12 pr-5 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-semibold text-slate-600 appearance-none">
                            <option value="">Sélectionner une promotion...</option>
                            <option value="1">DWWM - Promotion 2026</option>
                            <option value="2">CDA - Promotion 2025</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-3 text-slate-400 group">
                    <i class="fas fa-info-circle text-indigo-500 transition-transform group-hover:scale-110"></i>
                    <p class="text-[10px] leading-tight font-medium">Un email sera envoyé automatiquement pour la création du mot de passe.</p>
                </div>
                <div class="flex items-center gap-4 w-full md:w-auto">
                    <button type="button" class="flex-1 md:flex-none px-6 py-3.5 text-sm font-bold text-slate-400 hover:text-red-500 transition">Annuler</button>
                    <button type="submit" class="flex-1 md:flex-none px-10 py-3.5 bg-indigo-600 text-white rounded-2xl font-black shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                        Créer le compte
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    const roles = document.querySelectorAll('input[name="role"]');
    const classContainer = document.getElementById('class-selection-container');
    const classSelect = document.getElementById('class-select');

    roles.forEach(role => {
        role.addEventListener('change', (e) => {
            if(e.target.value === 'teacher') {
                classContainer.classList.add('opacity-40', 'pointer-events-none', 'grayscale-[0.5]');
                classSelect.required = false;
            } else {
                classContainer.classList.remove('opacity-40', 'pointer-events-none', 'grayscale-[0.5]');
            }
        });
    });
</script>
@endpush
@endsection