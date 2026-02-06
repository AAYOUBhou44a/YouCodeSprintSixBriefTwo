@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto w-full px-4 py-8">
    {{-- Fil d'Ariane --}}
    <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-400 mb-8">
        <a href="#" class="hover:text-indigo-600 transition">Utilisateurs</a>
        <i class="fas fa-chevron-right text-[8px]"></i>
        <span class="text-slate-900">Nouvel Utilisateur</span>
    </nav>

    <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-slate-200 overflow-hidden">
        {{-- Header --}}
        <div class="bg-indigo-600 p-10 text-white relative overflow-hidden">
            <div class="relative z-10">
                <h1 class="text-3xl font-black tracking-tight">Création de compte</h1>
                <p class="text-indigo-100 text-sm mt-2 opacity-90">Définissez les accès pour le nouveau membre EduConnect.</p>
            </div>
            <div class="absolute top-0 right-0 -mt-8 -mr-8 w-48 h-48 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        <!-- @if ($errors->any())
            <div class="mb-8 p-5 bg-rose-50 border-l-8 border-rose-500 rounded-2xl shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-rose-500 rounded-full flex items-center justify-center shrink-0 shadow-lg shadow-rose-200">
                        <i class="fas fa-exclamation text-white text-xs"></i>
                    </div>
                    <p class="text-rose-600 text-sm font-bold tracking-tight">
                        {{ $errors->first() }}
                    </p>
                </div>
            </div>
        @endif -->
        <form action="/users" method="POST" class="p-8 md:p-12 space-y-10">
            @csrf
            {{-- Sélection du Rôle --}}
            <div class="space-y-4">
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Type d'utilisateur</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="relative group cursor-pointer">
                        <input type="radio" name="role" value="student" class="peer sr-only" checked>
                        <div class="flex flex-col items-center justify-center p-6 border-2 border-slate-100 rounded-3xl bg-slate-50/50 transition-all peer-checked:border-indigo-600 peer-checked:bg-indigo-50/30 peer-checked:ring-4 peer-checked:ring-indigo-50">
                            <i class="fas fa-user-graduate mb-3 text-2xl text-slate-400 peer-checked:text-indigo-600"></i>
                            <span class="text-sm font-bold text-slate-600 peer-checked:text-indigo-900">Apprenant</span>
                        </div>
                    </label>

                    <label class="relative group cursor-pointer">
                        <input type="radio" name="role" value="teacher" class="peer sr-only">
                        <div class="flex flex-col items-center justify-center p-6 border-2 border-slate-100 rounded-3xl bg-slate-50/50 transition-all peer-checked:border-indigo-600 peer-checked:bg-indigo-50/30 peer-checked:ring-4 peer-checked:ring-indigo-50">
                            <i class="fas fa-chalkboard-teacher mb-3 text-2xl text-slate-400 peer-checked:text-indigo-600"></i>
                            <span class="text-sm font-bold text-slate-600 peer-checked:text-indigo-900">Formateur</span>
                        </div>
                    </label>
                </div>
            </div>
            @error('role')
                <span style="color: red; font-size: 12px;">{{$message}}</span>
            @enderror

            {{-- Informations Personnelles --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">nom complet</label>
                    <input type="text" name="name" placeholder="Jean" required 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                        @error('name')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                </div>

                <!-- <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Nom</label>
                    <input type="text" name="last_name" placeholder="Dupont" required 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                </div> -->

                <div class="md:col-span-2 space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Email Professionnel</label>
                    <input type="email" name="email" placeholder="jean.dupont@ecole.com" required 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                        @error('email')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                </div>

                {{-- Nouveaux Champs : Sécurité --}}
                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Mot de passe</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required 
                            class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                            @error('password')
                                <span style="color: red; font-size: 12px;">{{$message}}</span>
                            @enderror
                        <button type="button" onclick="togglePassword('password')" class="absolute right-5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-indigo-600">
                            <i class="fas fa-eye text-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Confirmer le mot de passe</label>
                    <div class="relative">
                        <input type="password" name="password_confirmation" id="password_confirmation" required 
                            class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Âge</label>
                    <input type="number" name="age" placeholder="22" 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                        @error('age')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                </div>

                <div class="space-y-2">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Téléphone</label>
                    <input type="tel" name="phone" placeholder="06 00 00 00 00" 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold">
                        @error('phone')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                </div>

                <!-- <div class="md:col-span-2 space-y-2" id="class-selection-container">
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Promotion</label>
                    <select name="classe_id" class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 focus:bg-white outline-none transition font-semibold appearance-none">
                        <option value="">Sélectionner une promotion...</option>
                        <option value="1">DWWM - 2026</option>
                        <option value="2">CDA - 2025</option>
                    </select>
                </div> -->
            </div>

            {{-- Actions --}}
            <div class="pt-10 border-t border-slate-100 flex justify-end gap-4">
                <button type="button" class="px-8 py-4 text-sm font-bold text-slate-400 hover:text-red-500 transition">Annuler</button>
                <button type="submit" class="px-12 py-4 bg-indigo-600 text-white rounded-2xl font-black shadow-xl shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                    Créer l'utilisateur
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Toggle visibilité mot de passe
    function togglePassword(id) {
        const input = document.getElementById(id);
        const icon = event.currentTarget.querySelector('i');
        if (input.type === "password") {
            input.type = "text";
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            input.type = "password";
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }

    // Gestion de l'affichage Promotion selon le rôle
    const roles = document.querySelectorAll('input[name="role"]');
    const classContainer = document.getElementById('class-selection-container');

    roles.forEach(role => {
        role.addEventListener('change', (e) => {
            classContainer.style.display = (e.target.value === 'teacher') ? 'none' : 'block';
        });
    });
</script>
@endpush
@endsection