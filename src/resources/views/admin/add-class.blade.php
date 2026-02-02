<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Classe - MyBrief Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased p-4 md:p-12">

    <div class="max-w-4xl mx-auto">
        <a href="admin-classes.html" class="inline-flex items-center text-sm font-bold text-slate-400 hover:text-indigo-600 transition mb-6">
            <i class="fas fa-arrow-left mr-2"></i> Retour à la liste
        </a>

        <form action="#" method="POST" class="space-y-8">
            <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="bg-slate-900 p-8 text-white">
                    <h1 class="text-2xl font-black tracking-tight">Nouvelle Promotion</h1>
                    <p class="text-slate-400 text-sm mt-1">Configurez les paramètres de base de la classe.</p>
                </div>

                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Nom de la classe / Promotion</label>
                        <input type="text" placeholder="ex: DWWM - Promotion 2026" 
                               class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-bold">
                    </div>

                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Année Scolaire</label>
                        <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                            <option>2025 - 2026</option>
                            <option>2026 - 2027</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-black text-slate-500 uppercase tracking-widest mb-2">Formateur Référent</label>
                        <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition">
                            <option>Sélectionner un formateur...</option>
                            <option>Jean Dupont</option>
                            <option>Marc Lefebvre</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-lg font-black text-slate-800 uppercase tracking-tight">Apprenants</h2>
                        <p class="text-slate-400 text-xs">Ajoutez les membres de cette promotion.</p>
                    </div>
                    <button type="button" class="text-indigo-600 font-bold text-xs hover:underline">
                        <i class="fas fa-file-import mr-1"></i> Importer via CSV
                    </button>
                </div>

                <div class="flex gap-2 mb-6">
                    <input type="email" id="student-email" placeholder="Email de l'apprenant..." 
                           class="flex-1 px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-indigo-500">
                    <button type="button" onclick="addStudent()" class="bg-slate-800 text-white px-6 py-3 rounded-xl font-bold hover:bg-slate-700 transition">
                        Ajouter
                    </button>
                </div>

                <div class="border border-slate-100 rounded-2xl overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50 border-b border-slate-100">
                            <tr>
                                <th class="px-6 py-3 font-black text-slate-400 uppercase text-[10px]">Email</th>
                                <th class="px-6 py-3 font-black text-slate-400 uppercase text-[10px] text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody id="student-list" class="divide-y divide-slate-50">
                            <tr class="empty-state">
                                <td colspan="2" class="px-6 py-8 text-center text-slate-400 italic">Aucun apprenant ajouté pour le moment.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex items-center justify-end gap-4">
                <button type="button" class="px-8 py-4 text-slate-400 font-bold hover:text-slate-600 transition">Annuler</button>
                <button type="submit" class="bg-indigo-600 text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all">
                    Créer la promotion
                </button>
            </div>
        </form>
    </div>

    <script>
        function addStudent() {
            const emailInput = document.getElementById('student-email');
            const studentList = document.getElementById('student-list');
            const emptyState = document.querySelector('.empty-state');

            if (emailInput.value.trim() !== "") {
                if (emptyState) emptyState.remove();

                const row = document.createElement('tr');
                row.className = "hover:bg-slate-50 transition animate-fade-in";
                row.innerHTML = `
                    <td class="px-6 py-4 font-medium text-slate-700">${emailInput.value}</td>
                    <td class="px-6 py-4 text-right">
                        <button type="button" onclick="this.closest('tr').remove()" class="text-red-400 hover:text-red-600 transition">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                `;
                studentList.appendChild(row);
                emailInput.value = "";
            }
        }
    </script>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fadeIn 0.3s ease-out forwards; }
    </style>

</body>
</html>