@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto w-full p-6 lg:p-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight uppercase">Annuaire Utilisateurs</h1>
            <p class="text-slate-500 font-medium mt-1">Gestion globale des étudiants, formateurs et administrateurs.</p>
        </div>
        <a href="/users/create" class="inline-flex items-center px-8 py-4 bg-indigo-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-slate-900 transition-all shadow-xl shadow-indigo-100">
            <i class="fas fa-user-plus mr-3"></i> Ajouter un membre
        </a>
    </div>

    <div class="flex flex-wrap gap-3 mb-8">
        <button class="px-6 py-2 bg-slate-900 text-white rounded-xl text-[10px] font-black uppercase tracking-widest">Tous ({{$membersCount}})</button>
        <button class="px-6 py-2 bg-white text-slate-400 border border-slate-200 rounded-xl text-[10px] font-black uppercase tracking-widest hover:text-indigo-600 transition">Étudiants ({{$students->count()}})</button>
        <button class="px-6 py-2 bg-white text-slate-400 border border-slate-200 rounded-xl text-[10px] font-black uppercase tracking-widest hover:text-indigo-600 transition">Formateurs ({{$teachers->count()}})</button>
        <button class="px-6 py-2 bg-white text-slate-400 border border-slate-200 rounded-xl text-[10px] font-black uppercase tracking-widest hover:text-indigo-600 transition">Admins (1)</button>
    </div>

    <div class="bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden shadow-sm">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/50 border-b border-slate-100">
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Utilisateur</th>
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Rôle / Statut</th>
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Affectation</th>
                    <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                
                <tr class="hover:bg-slate-50/30 transition-colors group">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-rose-100 text-rose-600 rounded-xl flex items-center justify-center font-black text-xs border border-rose-200">KA</div>
                            <div>
                                <p class="text-sm font-black text-slate-900">{{$admin->name}}</p>
                                <p class="text-[11px] text-slate-400 font-medium">{{$admin->email}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="px-3 py-1 bg-rose-50 text-rose-600 rounded-lg text-[9px] font-black uppercase border border-rose-100">Administrateur</span>
                    </td>
                    <td class="px-8 py-5">
                        <span class="text-xs font-bold text-slate-400 italic tracking-tight">Direction Générale</span>
                    </td>
                    <td class="px-8 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <!-- <button class="p-2.5 bg-slate-50 text-slate-400 hover:text-indigo-600 rounded-xl transition-all"><i class="fas fa-pen text-xs"></i></button>
                            <button class="p-2.5 bg-slate-50 text-slate-400 hover:text-rose-500 rounded-xl transition-all"><i class="fas fa-trash text-xs"></i></button> -->
                        </div>
                    </td>
                </tr>

                @foreach($teachers as $teacher)
                <tr class="hover:bg-slate-50/30 transition-colors group">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center font-black text-xs border border-amber-200">SR</div>
                            <div>
                                <p class="text-sm font-black text-slate-900">{{$teacher->name}}</p>
                                <p class="text-[11px] text-slate-400 font-medium">{{$teacher->email}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="px-3 py-1 bg-amber-50 text-amber-600 rounded-lg text-[9px] font-black uppercase border border-amber-100">Formateur</span>
                    </td>
                    <td class="px-8 py-5">
                        <span class="text-sm font-bold text-slate-600 tracking-tight">{{$teacher->classe->name ?? 'Aucune classe'}}</span>
                    </td>
                    <td class="px-8 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2.5 bg-slate-50 text-slate-400 hover:text-indigo-600 rounded-xl transition-all"><i class="fas fa-pen text-xs"></i></button>
                            <button class="p-2.5 bg-slate-50 text-slate-400 hover:text-rose-500 rounded-xl transition-all"><i class="fas fa-trash text-xs"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach

                @foreach($students as $student)
                <tr class="hover:bg-slate-50/30 transition-colors group">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center font-black text-xs border border-indigo-200">YM</div>
                            <div>
                                <p class="text-sm font-black text-slate-900">{{$student->name}}</p>
                                <p class="text-[11px] text-slate-400 font-medium">{{$student->email}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-lg text-[9px] font-black uppercase border border-indigo-100">Étudiant</span>
                    </td>
                    <td class="px-8 py-5">
                        <span class="text-sm font-bold text-slate-600 tracking-tight">{{$student->classe->name ?? 'Aucune classe'}}</span>
                    </td>
                    <td class="px-8 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <!-- __ Update button __  -->
                            <a href="/users/edit/{{$student->id}}" class="p-2.5 bg-slate-50 text-slate-400 hover:text-indigo-600 rounded-xl transition-all">
                                <i class="fas fa-pen text-xs"></i>
                            </a>
                            <!-- __ Delete button __  -->
                             <!--  route('users.destroy', $teacher->id)  ici on envoie un nombre donc pas besoin de mettre compact-->
                             <form action="{{route('users.destroy', $student->id)}}" method="POST" 
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce formateur ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2.5 bg-slate-50 text-slate-400 hover:text-rose-500 rounded-xl transition-all"><i class="fas fa-trash text-xs"></i></button>
                             </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection