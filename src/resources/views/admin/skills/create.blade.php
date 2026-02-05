<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Designer - MyBrief</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#FBFBFE] text-slate-900 antialiased">

    <div class="max-w-7xl mx-auto px-8 py-12">
        
        <header class="flex flex-col md:flex-row justify-between items-end gap-8 mb-16">
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-indigo-600/60">Configuration Système</span>
                </div>
                <h1 class="text-6xl font-black tracking-tighter leading-none">Référentiel<br/>des <span class="text-indigo-600 underline decoration-indigo-100 underline-offset-8">Skills</span>.</h1>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="bg-white px-6 py-4 rounded-[2rem] border border-slate-100 shadow-sm">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Total Skills</p>
                    <p class="text-2xl font-black">24</p>
                </div>
                <button class="bg-slate-900 text-white h-[72px] px-10 rounded-[2rem] font-black text-[11px] uppercase tracking-[0.2em] hover:bg-indigo-600 hover:scale-105 transition-all shadow-2xl shadow-slate-200">
                    Nouveau Skill +
                </button>
            </div>
        </header>

        <div class="grid grid-cols-12 gap-8">
            
            <div class="col-span-12 lg:col-span-4">
                <div class="bg-white rounded-[3rem] p-10 border border-slate-100 shadow-xl shadow-slate-100/50 sticky top-12">
                    <h2 class="text-2xl font-black mb-8 tracking-tight">Éditeur de<br/>compétence</h2>
                    
                    <form action="/skills" method="POST" class="space-y-6">
                        @csrf
                        <div class="group">
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">Code Unique</label>
                            <input type="text" name="code" placeholder="ex: C1" class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:bg-white focus:border-indigo-500/20 focus:ring-4 focus:ring-indigo-500/5 outline-none font-bold transition-all">
                            @error('code')
                                <span style="color: red; font-size: 12px;">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="group">
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">Nom de la compétence</label>
                            <input type="text" name="title" placeholder="ex: Maquetter une application" class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:bg-white focus:border-indigo-500/20 focus:ring-4 focus:ring-indigo-500/5 outline-none font-bold transition-all">
                            @error('title')
                                <span style="color: red; font-size: 12px;">{{$message}}</span>
                            @enderror
                        </div>

                        <!-- <div class="group">
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">Description</label>
                            <textarea rows="4" placeholder="Objectifs pédagogiques..." class="w-full px-6 py-4 bg-slate-50 border border-transparent rounded-2xl focus:bg-white focus:border-indigo-500/20 focus:ring-4 focus:ring-indigo-500/5 outline-none font-medium text-sm transition-all"></textarea>
                        </div> -->

                        <div class="pt-4">
                            <button class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-[11px] uppercase tracking-[0.2em] shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all">
                                Enregistrer les modifications
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-8 space-y-6">
                
                <div class="group bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-indigo-500/5 transition-all flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">
                    <div class="w-20 h-20 bg-indigo-50 rounded-3xl flex items-center justify-center text-indigo-600 font-black text-2xl group-hover:bg-indigo-600 group-hover:text-white transition-all shrink-0">
                        C1
                    </div>
                    
                    <div class="flex-1 space-y-2">
                        <div class="flex items-center gap-3">
                            <h3 class="text-xl font-black tracking-tight">Maquetter une application</h3>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-[8px] font-black uppercase rounded-full">Actif</span>
                        </div>
                        <p class="text-sm text-slate-400 font-medium leading-relaxed max-w-lg italic">"Concevoir des interfaces centrées utilisateur en utilisant les principes d'ergonomie et d'accessibilité."</p>
                    </div>

                    <div class="flex gap-2">
                        <button class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-slate-900 hover:text-white transition-all flex items-center justify-center">
                            <i class="fas fa-pen-nib text-xs"></i>
                        </button>
                        <button class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-rose-500 hover:text-white transition-all flex items-center justify-center">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                    </div>
                </div>

                <div class="group bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-indigo-500/5 transition-all flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">
                    <div class="w-20 h-20 bg-purple-50 rounded-3xl flex items-center justify-center text-purple-600 font-black text-2xl group-hover:bg-purple-600 group-hover:text-white transition-all shrink-0">
                        C4
                    </div>
                    
                    <div class="flex-1 space-y-2">
                        <div class="flex items-center gap-3">
                            <h3 class="text-xl font-black tracking-tight">Développer une base de données</h3>
                            <span class="px-3 py-1 bg-slate-100 text-slate-400 text-[8px] font-black uppercase rounded-full">Technique</span>
                        </div>
                        <p class="text-sm text-slate-400 font-medium leading-relaxed max-w-lg italic">"Modéliser et manipuler des données relationnelles avec optimisation des requêtes SQL."</p>
                    </div>

                    <div class="flex gap-2">
                        <button class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-slate-900 hover:text-white transition-all flex items-center justify-center">
                            <i class="fas fa-pen-nib text-xs"></i>
                        </button>
                        <button class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-rose-500 hover:text-white transition-all flex items-center justify-center">
                            <i class="fas fa-trash-alt text-xs"></i>
                        </button>
                    </div>
                </div>

                <div class="pt-8 flex justify-center">
                    <button class="px-8 py-4 text-[10px] font-black text-slate-400 uppercase tracking-widest hover:text-indigo-600 transition-colors">
                        Charger plus de compétences
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>