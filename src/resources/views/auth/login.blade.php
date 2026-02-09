
        @extends('layouts.app')
        @section('content')
        
        <div class="max-w-4xl w-full bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row border border-slate-100">
                
                <div class="hidden lg:flex w-1/2 bg-indigo-700 relative p-12 flex-col justify-between overflow-hidden">
                    <div class="absolute inset-0 opacity-40 bg-[url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/80 to-slate-900/90"></div>
                    
                    <div class="relative z-10">
                        <h1 class="text-4xl font-bold text-white tracking-tight">Propulsez vos compétences.</h1>
                        <p class="mt-4 text-indigo-100 text-lg leading-relaxed">
                            Gérez vos briefs, suivez vos évaluations et validez vos acquis en un seul endroit.
                        </p>
                    </div>

                    <div class="relative z-10 flex items-center space-x-4 text-white/80 text-sm">
                        <div class="flex -space-x-2">
                            <div class="h-8 w-8 rounded-full border-2 border-indigo-500 bg-slate-300"></div>
                            <div class="h-8 w-8 rounded-full border-2 border-indigo-500 bg-slate-400"></div>
                            <div class="h-8 w-8 rounded-full border-2 border-indigo-500 bg-slate-500"></div>
                        </div>
                        <span>Rejoint par +500 formateurs</span>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 p-8 sm:p-12">
                    <div class="text-center md:text-left mb-8">
                        <h2 class="text-2xl font-bold text-slate-900">Heureux de vous revoir</h2>
                        <p class="text-slate-500 mt-2">Accédez à votre tableau de bord personnalisé.</p>
                    </div>

                    <form action="/login" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Email professionnel</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" name="email" required 
                                    class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none"
                                    placeholder="nom@exemple.com">
                                    @error('email')
                                        <span style="color: red; font-size: 12px;">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between mb-1">
                                <label class="block text-sm font-semibold text-slate-700">Mot de passe</label>
                                <a href="#" class="text-xs text-indigo-600 hover:underline font-bold">Oublié ?</a>
                            </div>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input type="password" name="password" required 
                                    class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none"
                                    placeholder="••••••••" autocomplete="off">
                                    @error('password')
                                        <span style="color: red; font-size: 12px;">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input autocomplete="off" type="checkbox" id="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-slate-600">Se souvenir de moi</label>
                        </div>

                        <button type="submit" 
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-indigo-200 transition-all active:scale-[0.98]">
                            Se connecter
                        </button>
                    </form>

                    <div class="mt-8 pt-8 border-t border-slate-100 flex justify-center space-x-4">
                        <button class="flex items-center justify-center w-full px-4 py-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition text-sm font-medium text-slate-600">
                            <img src="https://www.svgrepo.com/show/355037/google.svg" class="h-4 w-4 mr-2" alt=""> Google
                        </button>
                        <button class="flex items-center justify-center w-full px-4 py-2 border border-slate-200 rounded-lg hover:bg-slate-50 transition text-sm font-medium text-slate-600">
                            <i class="fa-brands fa-microsoft text-blue-500 mr-2"></i> Office 365
                        </button>
                    </div>
                </div>
            </div>
        @endsection