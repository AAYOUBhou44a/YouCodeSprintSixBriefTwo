@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto w-full">
    <a href="#" class="inline-flex items-center text-sm font-bold text-slate-400 hover:text-indigo-600 transition mb-6 group">
        <i class="fas fa-arrow-left mr-2 transition-transform group-hover:-translate-x-1"></i> 
        Retour à la liste des promotions
    </a>

    <form action="#" method="POST" class="space-y-8">
        @csrf
        
        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="bg-slate-900 p-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-2xl font-black tracking-tight">Nouvelle Promotion</h1>
                    <p class="text-slate-400 text-sm mt-1">Configurez les paramètres de base de la classe.</p>
                </div>
                <i class="fa-solid fa-graduation-cap absolute right-8 top-1/2 -translate-y-1/2 text-6xl text-white/5 rotate-12"></i>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="md:col-span-2">
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Nom de la promotion</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                            <i class="fa-solid fa-signature"></i>
                        </span>
                        <input type="text" name="name" required placeholder="ex: Developpeur Web - Promo 2026" 
                               class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition font-semibold">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Année Scolaire</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                            <i class="fa-solid fa-calendar-days"></i>
                        </span>
                        <select class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition appearance-none cursor-pointer font-semibold">
                            <option>2025 - 2026</option>
                            <option>2026 - 2027</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Formateur Référent</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 pointer-events-none">
                            <i class="fa-solid fa-user-tie"></i>
                        </span>
                        <select class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition appearance-none cursor-pointer font-semibold">
                            <option value="">Sélectionner un formateur...</option>
                            <option>Jean Dupont</option>
                            <option>Marc Lefebvre</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-lg font-black text-slate-800 uppercase tracking-tight">Apprenants</h2>
                    <p class="text-slate-400 text-xs">Ajoutez les membres manuellement ou par import.</p>
                </div>
                <button type="button" class="flex items-center px-4 py-2 bg-emerald-50 text-emerald-700 rounded-xl font-bold text-xs hover:bg-emerald-100 transition">
                    <i class="fas fa-file-import mr-2"></i> Importer CSV
                </button>
            </div>

            <div class="flex flex-col sm:flex-row gap-3 mb-8">
                <div class="relative flex-1">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                        <i class="fa-solid fa-at"></i>
                    </span>
                    <input type="email" id="student-email" placeholder="email@apprenant.com" 
                           class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm outline-none focus:border-indigo-500 focus:bg-white transition">
                </div>
                <button type="button" onclick="addStudent()" class="bg-slate-900 text-white px-8 py-3.5 rounded-2xl font-bold hover:bg-indigo-600 transition shadow-lg shadow-slate-200">
                    Ajouter au groupe
                </button>
            </div>

            <div class="border border-slate-100 rounded-2xl overflow-hidden bg-slate-50/30">
                <table class="w-full text-left text-sm">
                    <thead class="bg-slate-100/50 border-b border-slate-200">
                        <tr>
                            <th class="px-6 py-4 font-black text-slate-500 uppercase text-[10px] tracking-widest">Email de l'apprenant</th>
                            <th class="px-6 py-4 font-black text-slate-500 uppercase text-[10px] tracking-widest text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody id="student-list" class="divide-y divide-slate-100">
                        <tr class="empty-state">
                            <td colspan="2" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="fa-solid fa-users-slash text-slate-300 text-3xl mb-3"></i>
                                    <span class="text-slate-400 italic">Aucun apprenant dans la liste.</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-end gap-6 pt-4">
            <button type="button" class="text-sm font-bold text-slate-400 hover:text-red-500 transition">Ignorer les modifications</button>
            <button type="submit" class="bg-indigo-600 text-white px-12 py-4 rounded-2xl font-black shadow-xl shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 active:scale-95 transition-all">
                Finaliser la création
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    function addStudent() {
        const emailInput = document.getElementById('student-email');
        const studentList = document.getElementById('student-list');
        const emptyState = document.querySelector('.empty-state');

        if (emailInput.value.trim() !== "" && emailInput.checkValidity()) {
            if (emptyState) emptyState.remove();

            const row = document.createElement('tr');
            row.className = "hover:bg-white transition animate-fade-in group";
            row.innerHTML = `
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center mr-3 font-bold text-xs uppercase">
                            ${emailInput.value.charAt(0)}
                        </div>
                        <span class="font-semibold text-slate-700">${emailInput.value}</span>
                    </div>
                </td>
                <td class="px-6 py-4 text-right">
                    <button type="button" onclick="this.closest('tr').remove()" class="h-8 w-8 rounded-lg text-slate-400 hover:bg-red-50 hover:text-red-500 transition flex items-center justify-center ml-auto">
                        <i class="fas fa-trash-alt text-xs"></i>
                    </button>
                </td>
            `;
            studentList.appendChild(row);
            emailInput.value = "";
            emailInput.classList.remove('border-red-500');
        } else {
            emailInput.classList.add('border-red-500');
        }
    }
</script>
@endpush

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateX(-10px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .animate-fade-in { animation: fadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
</style>
@endsection