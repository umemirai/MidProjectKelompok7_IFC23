<header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-4 lg:px-8 shrink-0">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = true" class="lg:hidden text-slate-500 hover:bg-slate-100 p-2 rounded-lg">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
        <div class="relative hidden sm:block">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i data-lucide="search" class="w-4 h-4 text-slate-400"></i>
            </span>
            <input type="text" class="block w-64 pl-10 pr-3 py-2 border border-slate-200 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 sm:text-sm transition-all" placeholder="Cari data...">
        </div>
    </div>

    <div class="flex items-center gap-2 md:gap-4">
        <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all relative">
            <i data-lucide="bell" class="w-5 h-5"></i>
            <span class="absolute top-2 right-2 w-2 h-2 bg-blue-500 rounded-full border-2 border-white"></span>
        </button>
        <div class="h-6 w-px bg-slate-200 mx-1 hidden sm:block"></div>
        <div class="flex items-center gap-3 ml-2 cursor-pointer group">
            <span class="hidden md:block text-sm font-medium text-slate-600 group-hover:text-blue-600 transition-colors" x-text="'Halo, ' + activeMenu.charAt(0).toUpperCase() + activeMenu.slice(1)"></span>
            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600">
                <i data-lucide="user" class="w-5 h-5"></i>
            </div>
        </div>
    </div>