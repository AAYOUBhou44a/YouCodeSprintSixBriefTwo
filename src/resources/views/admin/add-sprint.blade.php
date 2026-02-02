<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Sprint - MyBrief Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased p-6 md:p-12">

    <div class="max-w-3xl mx-auto">
        <a href="admin-sprints.html" class="inline-flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-800 transition mb-8">
            <i class="fas fa-chevron-left mr-2"></i> Retour à la structure
        </a>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-8 border-b border-slate-100 flex items-center gap-4">
                <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-xl">
                    <i class="fas fa-running"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-black text-slate-900 tracking-tight">Planifier un nouveau Sprint</h1>
                    <p class="text-slate-400 text-sm">Définissez une période de formation et ses objectifs.</p>
                </div>
            </div>

            <form action="#" method="POST" class="p-8 space-y-8">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Nom du Sprint</label>
                        <input type="text" placeholder="ex: Sprint 03 - Approfondissement Frameworks" required 
                               class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-bold">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Classe concernée</label>
                        <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                            <option>DWWM 2026</option>
                            <option>CDA 2025</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Ordre dans le cursus</label>
                        <input type="number" value="3" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition font-medium">
                    </div>
                </div>

                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                    <h3 class="text-xs font-black text-slate-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                        <i class="far fa-calendar-alt text-indigo-500"></i> Période du Sprint
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[9px] font-bold text-slate-500 uppercase mb-1">Date de début</label>
                            <input type="date" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg outline-none focus:border-indigo-500">
                        </div>
                        <div>
                            <label class="block text-[9px] font-bold text-slate-500 uppercase mb-1">Date de fin prévue</label>
                            <input type="date" class="w-full px-4 py-2 bg-white border border-slate-200 rounded-lg outline-none focus:border-indigo-500">
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Objectifs du Sprint (Description)</label>
                    <textarea rows="4" placeholder="Quels sont les grands thèmes abordés durant ces semaines ?" 
                              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition text-sm"></textarea>
                </div>

                <div class="pt-4 flex items-center justify-end gap-4 border-t border-slate-50">
                    <button type="button" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition">Annuler</button>
                    <button type="submit" class="bg-slate-900 text-white px-8 py-3 rounded-xl font-black shadow-lg hover:bg-slate-800 transition transform active:scale-95">
                        Enregistrer le Sprint
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>