<x-layout title="NexusAdmin - Dashboard">
    
    <div x-show="activeMenu === 'dashboard'" x-transition:enter="fade-enter-active">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
            <p class="text-slate-500 text-sm mt-1">Ringkasan performa sistem hari ini.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <template x-for="i in 4">
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-blue-50 text-blue-600 rounded-xl">
                            <i data-lucide="trending-up" class="w-6 h-6"></i>
                        </div>
                        <span class="text-emerald-500 text-xs font-bold bg-emerald-50 px-2 py-1 rounded-lg">+12%</span>
                    </div>
                    <h3 class="text-slate-400 text-sm font-medium">Metrik Data</h3>
                    <p class="text-2xl font-bold text-slate-800 mt-1">1,234</p>
                </div>
            </template>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h2 class="font-bold text-slate-800">Aktivitas Terkini</h2>
            </div>
            <div class="p-8 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-slate-50 rounded-full text-slate-300 mb-4">
                    <i data-lucide="clipboard-list" class="w-8 h-8"></i>
                </div>
                <p class="text-slate-500">Memuat data aktivitas...</p>
            </div>
        </div>
    </div>

    <div x-show="activeMenu === 'pengguna'" x-cloak x-transition:enter="fade-enter-active">
        <div class="mb-8 flex justify-between items-end">
            <div>
                <h1 class="text-2xl font-bold text-slate-800">Manajemen Pengguna</h1>
                <p class="text-slate-500 text-sm mt-1">Kelola hak akses dan informasi pengguna.</p>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-blue-700 transition-colors shadow-sm shadow-blue-200">
                Tambah Pengguna
            </button>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm">
            <div class="p-12 text-center">
                <i data-lucide="users" class="w-12 h-12 text-blue-200 mx-auto mb-4"></i>
                <h3 class="text-lg font-bold text-slate-700">Daftar Pengguna Kosong</h3>
                <p class="text-slate-400 max-w-xs mx-auto mt-2">Anda belum menambahkan pengguna ke dalam sistem ini.</p>
            </div>
        </div>
    </div>

    <div x-show="activeMenu === 'produk'" x-cloak x-transition:enter="fade-enter-active">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Katalog Produk</h1>
            <p class="text-slate-500 text-sm mt-1">Daftar inventaris barang yang tersedia.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <template x-for="i in 3">
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden group">
                    <div class="h-40 bg-slate-100 flex items-center justify-center">
                        <i data-lucide="image" class="w-10 h-10 text-slate-300"></i>
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-slate-800 group-hover:text-blue-600 transition-colors">Produk Unggulan #<span x-text="i"></span></h4>
                        <p class="text-sm text-slate-500 mt-1">Deskripsi singkat produk untuk manajemen stok.</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-blue-600 font-bold">Rp 150.000</span>
                            <button class="p-2 text-slate-400 hover:text-blue-600"><i data-lucide="edit-3" class="w-4 h-4"></i></button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <div x-show="activeMenu === 'statistik'" x-cloak x-transition:enter="fade-enter-active">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Laporan Statistik</h1>
            <p class="text-slate-500 text-sm mt-1">Analisis mendalam data perusahaan.</p>
        </div>
        <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm min-h-[400px] flex flex-col items-center justify-center">
            <div class="w-full max-w-md space-y-4">
                <div class="h-4 bg-blue-50 rounded-full overflow-hidden">
                    <div class="h-full bg-blue-500 w-[70%]"></div>
                </div>
                <div class="h-4 bg-purple-50 rounded-full overflow-hidden">
                    <div class="h-full bg-purple-500 w-[45%]"></div>
                </div>
                <div class="h-4 bg-amber-50 rounded-full overflow-hidden">
                    <div class="h-full bg-amber-500 w-[90%]"></div>
                </div>
            </div>
            <p class="mt-8 text-slate-400 italic">Visualisasi grafik akan muncul di sini.</p>
        </div>
    </div>

    <div x-show="activeMenu === 'pengaturan'" x-cloak x-transition:enter="fade-enter-active">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Pengaturan</h1>
            <p class="text-slate-500 text-sm mt-1">Konfigurasi preferensi akun dan sistem.</p>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm max-w-2xl overflow-hidden">
            <div class="p-6 space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Instansi</label>
                    <input type="text" value="NexusAdmin Corp" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl outline-none">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Notifikasi</label>
                    <input type="email" value="admin@nexus.com" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl outline-none">
                </div>
            </div>
            <div class="p-6 bg-slate-50 border-t border-slate-100 flex justify-end">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-xl text-sm font-bold hover:bg-blue-700">Simpan Perubahan</button>
            </div>
        </div>
    </div>

</x-layout>