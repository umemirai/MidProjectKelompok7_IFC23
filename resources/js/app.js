import './bootstrap';
import Alpine from 'alpinejs';

/**
 * FILE: app.js
 * LOKASI: resources/js/app.js
 * FUNGSI: Logika utama aplikasi, Alpine.js, dan Ikon Lucide.
 */
import { 
    createIcons, 
    Home, 
    Users, 
    ShoppingBag, 
    PieChart, 
    Settings, 
    LogOut, 
    Menu, 
    Search, 
    Bell, 
    User, 
    LayoutDashboard, 
    TrendingUp, 
    ClipboardList, 
    Activity, 
    Package, 
    X,
    ShieldCheck,
    Zap,
    Image,
    Edit3
} from 'lucide';

window.Alpine = Alpine;

// Fungsi global untuk memunculkan kembali ikon saat ganti menu (Single Page Application feel)
window.refreshIcons = () => {
    createIcons({
        icons: { 
            Home, Users, ShoppingBag, PieChart, Settings, 
            LogOut, Menu, Search, Bell, User, LayoutDashboard,
            TrendingUp, ClipboardList, Activity, Package, X,
            ShieldCheck, Zap, Image, Edit3
        }
    });
};

// Inisialisasi ikon saat pertama kali halaman terbuka
document.addEventListener('DOMContentLoaded', () => {
    window.refreshIcons();
});

// Re-render ikon saat Alpine.js melakukan inisialisasi
document.addEventListener('alpine:init', () => {
    window.refreshIcons();
});

Alpine.start();