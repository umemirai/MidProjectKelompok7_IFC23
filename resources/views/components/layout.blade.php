<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Modern Admin Panel' }}</title>
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
        <x-sidebar />

        <main class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <x-header />

            <div class="flex-1 overflow-y-auto p-4 lg:p-8">
                <x-footer />
            </div>
        </main>
    </div>

    <script>
        lucide.createIcons();
        document.addEventListener('alpine:init', () => {
            Alpine.effect(() => {
                setTimeout(() => {
                    lucide.createIcons();
                }, 10);
            });
        });
    </script>
</body>
</html>