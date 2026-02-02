<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Utilisateur - MyBrief Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased p-6 md:p-12">

    <div class="max-w-2xl mx-auto">
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-400 mb-6">
            <a href="admin-users.html" class="hover:text-indigo-600 transition">Utilisateurs</a>
            <i class="fas fa-chevron-right text-[8px]"></i>
            <span class="text-slate-900">Nouvel Utilisateur</span>
        </nav>

        <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-200 overflow-hidden">
            <div class="bg-indigo-600 p-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-2xl font-black">Création de compte</h1>
                    <p class="text-indigo-100 text-sm mt-1">Enregistrez un nouveau membre sur la plateforme.</p>
                </div>
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-white opacity-10 rounded-full"></div>
            </div>

            <form action="#" method="POST" class="p-8 space-y-6">
                
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3">Type d'utilisateur</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="relative flex items-center justify-center p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:bg-slate-50 transition-all peer-checked:border-indigo-600">
                            <input type="radio" name="role" value="student" class="peer sr-only" checked>
                            <div class="text-center peer-checked:text-indigo-600">
                                <i class="fas fa-user-graduate mb-1 block text-xl"></i>
                                <span class="text-sm font-bold">Apprenant</span>
                            </div>
                            <div class="absolute top-2 right-2 opacity-0 peer-checked:opacity-100 text-indigo-600">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </label>

                        <label class="relative flex items-center justify-center p-4 border-2 border-slate-100 rounded-2xl cursor-pointer hover:bg-slate-50 transition-all">
                            <input type="radio" name="role" value="teacher" class="peer sr-only">
                            <div class="text-center peer-checked:text-indigo-600">
                                <i class="fas fa-chalkboard-teacher mb-1 block text-xl"></i>
                                <span class="text-sm font-bold">Formateur</span>
                            </div>
                            <div class="absolute top-2 right-2 opacity-0 peer-checked:opacity-100 text-indigo-600">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Prénom</label>
                        <input type="text" placeholder="ex: Jean" required 
                               class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Nom</label>
                        <input type="text" placeholder="ex: Dupont" required 
                               class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Adresse Email</label>
                        <div class="relative">
                            <i class="far fa-envelope absolute left-4 top-4 text-slate-400"></i>
                            <input type="email" placeholder="nom@ecole.com" required 
                                   class="w-full pl-12 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                        </div>
                    </div>

                    <div class="md:col-span-2" id="class-selection">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Assigner à une classe (Optionnel)</label>
                        <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                            <option value="">Aucune classe pour le moment</option>
                            <option value="1">DWWM - Promotion 2026</option>
                            <option value="2">CDA - Promotion 2025</option>
                        </select>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <p class="text-[10px] text-slate-400 max-w-[200px]">Un email d'invitation sera envoyé pour définir le mot de passe.</p>
                    <div class="flex gap-3">
                        <button type="button" class="px-6 py-3 text-slate-500 font-bold hover:text-slate-800 transition text-sm">Annuler</button>
                        <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-black shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition transform active:scale-95">
                            Créer l'utilisateur
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const roles = document.querySelectorAll('input[name="role"]');
        const classDiv = document.getElementById('class-selection');

        roles.forEach(role => {
            role.addEventListener('change', (e) => {
                if(e.target.value === 'teacher') {
                    classDiv.style.opacity = '0.5';
                } else {
                    classDiv.style.opacity = '1';
                }
            });
        });
    </script>

</body>
</html>