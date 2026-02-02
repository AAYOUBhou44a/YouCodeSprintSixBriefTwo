<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Référentiel Compétences - MyBrief Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-800 antialiased h-screen flex flex-col overflow-hidden">

    <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 shrink-0 z-20">
        <div class="flex items-center gap-4">
            <span class="font-bold text-xl tracking-tighter text-indigo-600 uppercase">Configuration</span>
            <span class="text-slate-300">/</span>
            <h1 class="text-sm font-bold text-slate-500 uppercase tracking-widest">Référentiel de Compétences</h1>
        </div>
        <button class="bg-slate-900 hover:bg-slate-800 text-white px-5 py-2 rounded-xl text-sm font-black shadow-lg transition flex items-center gap-2">
            <i class="fas fa-plus-circle"></i> Ajouter une Compétence
        </button>
    </header>

    <div class="flex flex-1 overflow-hidden">
        
        <main class="flex-1 overflow-y-auto p-8 bg-slate-50">
            <div class="max-w-5xl mx-auto">
                
                <div class="grid grid-cols-1 gap-6">
                    
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden group">
                        <div class="p-6 flex flex-col md:flex-row gap-6">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl font-black shadow-lg shadow-indigo-200">
                                    C1
                                </div>
                                <span class="mt-2 text-[10px] font-black text-slate-400 uppercase tracking-widest">Backend</span>
                            </div>

                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="text-xl font-bold text-slate-800 tracking-tight">Maquetter une application</h3>
                                    <div class="flex gap-2">
                                        <button class="p-2 text-slate-400 hover:text-indigo-600 transition"><i class="fas fa-pen text-sm"></i></button>
                                        <button class="p-2 text-slate-400 hover:text-red-500 transition"><i class="fas fa-trash-alt text-sm"></i></button>
                                    </div>
                                </div>
                                <p class="text-slate-500 text-sm mt-1 leading-relaxed">Réaliser des maquettes de présentation pour valider l'interface utilisateur et l'expérience utilisateur (UX/UI).</p>
                                
                                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-3">
                                    <div class="bg-red-50 p-3 rounded-xl border border-red-100">
                                        <span class="block text-[10px] font-black text-red-600 uppercase mb-1">Imiter</span>
                                        <p class="text-xs text-red-800 leading-snug italic">Reproduit une maquette simple à partir d'un template fourni.</p>
                                    </div>
                                    <div class="bg-amber-50 p-3 rounded-xl border border-amber-100">
                                        <span class="block text-[10px] font-black text-amber-600 uppercase mb-1">Adapter</span>
                                        <p class="text-xs text-amber-800 leading-snug italic">Modifie les composants UI pour répondre à un besoin spécifique.</p>
                                    </div>
                                    <div class="bg-green-50 p-3 rounded-xl border border-green-100">
                                        <span class="block text-[10px] font-black text-green-600 uppercase mb-1">Transposer</span>
                                        <p class="text-xs text-green-800 leading-snug italic">Conçoit un système de design complet et innovant de zéro.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden group opacity-80 hover:opacity-100 transition">
                        <div class="p-6 flex flex-col md:flex-row gap-6">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-slate-800 text-white rounded-2xl flex items-center justify-center text-2xl font-black shadow-lg">
                                    C4
                                </div>
                                <span class="mt-2 text-[10px] font-black text-slate-400 uppercase tracking-widest">Base de Données</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="text-xl font-bold text-slate-800 tracking-tight">Créer une base de données</h3>
                                    <div class="flex gap-2">
                                        <button class="p-2 text-slate-400 hover:text-indigo-600 transition"><i class="fas fa-pen text-sm"></i></button>
                                        <button class="p-2 text-slate-400 hover:text-red-500 transition"><i class="fas fa-trash-alt text-sm"></i></button>
                                    </div>
                                </div>
                                <p class="text-slate-500 text-sm mt-1 leading-relaxed">Concevoir et mettre en œuvre une base de données relationnelle répondant aux besoins applicatifs.</p>
                                <div class="mt-6 flex gap-4 overflow-x-auto pb-2">
                                    <div class="text-[10px] font-bold py-1 px-3 bg-slate-100 text-slate-600 rounded-full">Dernière modification : il y a 2 jours</div>
                                    <div class="text-[10px] font-bold py-1 px-3 bg-indigo-50 text-indigo-600 rounded-full">Utilisée dans 4 Briefs</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

</body>
</html>