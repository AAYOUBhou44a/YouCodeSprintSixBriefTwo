@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto w-full pb-12">
    <a href="#" class="inline-flex items-center text-xs font-black text-slate-400 hover:text-indigo-600 uppercase tracking-widest transition mb-8 group">
        <i class="fas fa-arrow-left mr-2 transition-transform group-hover:-translate-x-1"></i> 
        Retour aux promotions
    </a>

    <form action="/classes" method="POST" class="space-y-6">
        @csrf
        
        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-200 overflow-hidden">
            <div class="bg-slate-900 p-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-2xl font-black tracking-tight">Configuration de la Promotion</h1>
                    <p class="text-slate-400 text-sm mt-1">Définissez l'identité et le référent de la classe.</p>
                </div>
                <i class="fa-solid fa-layer-group absolute right-8 top-1/2 -translate-y-1/2 text-7xl text-white/5 rotate-12"></i>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-2 ml-1">Nom de la promotion</label>
                    <input type="text" name="name" required placeholder="ex: DWWM - Promo 2026" 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500/20 focus:bg-white outline-none transition font-bold">
                        @error('name')
                            <span style="color: red; font-size: 12px;">{{$message}}</span>
                        @enderror
                </div>

                <div>
                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-2 ml-1">Formateur Référent</label>
                    <select name="teacher_id" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/5 outline-none transition cursor-pointer font-bold appearance-none">
                        <option value="">Choisir un formateur...</option>
                        @foreach($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                        @endforeach
                    </select>
                    @error('teacher_id')
                        <span style="color: red; font-size: 12px;">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-200 p-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <h2 class="text-lg font-black text-slate-800 tracking-tight">Apprenants disponibles</h2>
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">
                        <span id="selected-count" class="text-indigo-600">0</span> sélectionné(s)
                    </p>
                </div>
                <div class="flex gap-2 w-full md:w-auto">
                    <input type="text" id="search-student" placeholder="Rechercher..." 
                           class="text-xs font-bold px-4 py-2 bg-slate-50 border border-slate-100 rounded-xl outline-none focus:border-indigo-500/20 w-full">
                    <button type="button" onclick="selectAll()" class="whitespace-nowrap px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl font-black text-[10px] uppercase tracking-widest hover:bg-indigo-100 transition">
                        Tout cocher
                    </button>
                </div>
            </div>

            <div id="student-grid" class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-h-[400px] overflow-y-auto p-2 custom-scrollbar">
                
            @foreach($students as $student)
                <label class="student-card relative flex items-center p-4 bg-slate-50 border border-transparent rounded-2xl cursor-pointer hover:bg-white hover:border-indigo-100 transition-all group">
                    <input type="checkbox" name="student_ids[]" value="{{$student->id}}" class="peer hidden">
                    <div class="w-6 h-6 border-2 border-slate-200 rounded-lg flex items-center justify-center peer-checked:bg-indigo-600 peer-checked:border-indigo-600 transition-all mr-4 shrink-0">
                        <i class="fas fa-check text-[10px] text-white opacity-0 peer-checked:opacity-100 transition-opacity"></i>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-sm font-black text-slate-700 truncate group-hover:text-indigo-600 transition student-name">{{$student->name}}</span>
                        <span class="text-[10px] text-slate-400 font-bold truncate">{{$student->email}}</span>
                    </div>
                    <div class="absolute inset-0 rounded-2xl border-2 border-transparent peer-checked:border-indigo-600/20 peer-checked:bg-indigo-50/30 pointer-events-none transition-all"></div>
                </label>
                @endforeach
                @error('student_ids')
                    <span style="color: red; font-size: 12px;">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-end gap-6 pt-4">
            <button type="button" class="text-xs font-black text-slate-400 hover:text-rose-500 uppercase tracking-widest transition">Annuler</button>
            <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-[0.15em] shadow-2xl shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 active:scale-95 transition-all">
                Créer la promotion
            </button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    const checkboxes = document.querySelectorAll('input[name="student_ids[]"]');
    const counter = document.getElementById('selected-count');
    const searchInput = document.getElementById('search-student');
    const studentCards = document.querySelectorAll('.student-card');

    // Mise à jour du compteur
    const updateCounter = () => {
        const count = document.querySelectorAll('input[name="student_ids[]"]:checked').length;
        counter.innerText = count;
    };

    checkboxes.forEach(box => {
        box.addEventListener('change', updateCounter);
    });

    function selectAll() {
        checkboxes.forEach(box => box.checked = true);
        updateCounter();
    }

    // Recherche dynamique
    searchInput.addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        studentCards.forEach(card => {
            const name = card.querySelector('.student-name').innerText.toLowerCase();
            card.style.display = name.includes(term) ? 'flex' : 'none';
        });
    });
</script>
@endpush
@endsection