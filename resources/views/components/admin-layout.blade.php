<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Admin Panel - Blue Accent</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
        .fade-enter { opacity: 0; transform: translateY(10px); }
        .fade-enter-active { opacity: 1; transform: translateY(0); transition: all 0.3s ease-out; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800" x-data="{ sidebarOpen: true, activeMenu: 'dashboard' }">
    <div class="flex h-screen overflow-hidden">
        ```

---

### 2. Bagian Sidebar (Menu Samping)
Ini adalah kolom tetap di sebelah kiri yang berisi logo dan navigasi utama.

```html
        <aside 
            class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 transition-transform duration-300 ease-in-out lg:static lg:translate-x-0"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            x-cloak
        >
            <div class="flex flex-col h-full">
                <div class="flex items-center justify-between px-6 py-5 border-b border-slate-100"> ... </div>

                <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto"> ... </nav>

                <div class="p-4 border-t border-slate-100 bg-slate-50/50"> ... </div>
            </div>
        </aside>