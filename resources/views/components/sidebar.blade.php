<aside 
    class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 transition-transform duration-300 ease-in-out lg:static lg:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    x-cloak
>
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-between px-6 py-5 border-b border-slate-100">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                </div>
                <span class="text-xl font-bold tracking-tight text-blue-900">UTS<span class="font-normal text-slate-400">Admin</span></span>
            </div>
            <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-slate-600">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
            <p class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Main Menu</p>
            
            <button @click="activeMenu = 'dashboard'" :class="activeMenu === 'dashboard' ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600'" class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200">
                <i data-lucide="home" class="w-5 h-5 mr-3"></i> Dashboard
            </button>

            <button @click="activeMenu = 'pengguna'" :class="activeMenu === 'pengguna' ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600'" class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200">
                <i data-lucide="users" class="w-5 h-5 mr-3"></i> Pengguna
            </button>

            <button @click="activeMenu = 'produk'" :class="activeMenu === 'produk' ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600'" class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200">
                <i data-lucide="shopping-bag" class="w-5 h-5 mr-3"></i> Produk
            </button>

            <button @click="activeMenu = 'statistik'" :class="activeMenu === 'statistik' ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600'" class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200">
                <i data-lucide="pie-chart" class="w-5 h-5 mr-3"></i> Statistik
            </button>

            <p class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider mt-8 mb-2">Settings</p>
            
            <button @click="activeMenu = 'pengaturan'" :class="activeMenu === 'pengaturan' ? 'bg-blue-50 text-blue-600' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600'" class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-xl transition-all duration-200">
                <i data-lucide="settings" class="w-5 h-5 mr-3"></i> Pengaturan
            </button>

            <button class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:bg-slate-50 hover:text-red-600 transition-all duration-200">
                <i data-lucide="log-out" class="w-5 h-5 mr-3"></i> Keluar
            </button>
        </nav>

        <div class="p-4 border-t border-slate-100 bg-slate-50/50">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0D8ABC&color=fff" class="w-10 h-10 rounded-full border border-white shadow-sm">
                <div class="flex flex-col">
                    <span class="text-sm font-semibold text-slate-700">Admin User</span>
                    <span class="text-xs text-slate-400 font-medium">Super Admin</span>
                </div>
            </div>
        </div>
    </div>
</aside>