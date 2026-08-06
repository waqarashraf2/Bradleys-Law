<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin Dashboard - Bradleys Law')</title>
    <link rel="icon" href="{{ asset('images/bradleys-law-site-icon.svg') }}?v=20260807" type="image/svg+xml">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}?v=20260807" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('images/bradleys-law-site-icon.png') }}?v=20260807">

    <!-- Tailwind & Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Smooth animations */
        .transition-all {
            transition: all 0.3s ease-in-out;
        }

        /* Sidebar overlay on mobile */
        .sidebar-overlay {
            background: rgba(0,0,0,0.4);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Wrapper -->
    <div class="flex min-h-screen relative">

        <!-- Mobile Sidebar Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden lg:hidden" onclick="toggleSidebar()"></div>

        <!-- Sidebar -->
        <aside id="sidebar" class="fixed lg:static top-0 left-0 w-64 bg-[#0a1a3a] text-white h-full flex flex-col z-30 transform -translate-x-full lg:translate-x-0 transition-all duration-300 ease-in-out shadow-xl">
            <!-- Brand -->
            <div class="p-6 flex items-center justify-between border-b border-gray-700">
                <h2 class="text-2xl font-semibold">Bradleys Law</h2>
                <button onclick="toggleSidebar()" class="text-white lg:hidden focus:outline-none">
                    ✕
                </button>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded-lg hover:bg-[#1e3a5f] transition">Dashboard</a>
                <a href="{{ route('admin.services.index') }}" class="block py-2.5 px-4 rounded-lg hover:bg-[#1e3a5f] transition">Services</a>
                <a href="{{ route('admin.insights.index') }}" class="block py-2.5 px-4 rounded-lg hover:bg-[#1e3a5f] transition">Insights</a>
                <a href="{{ route('admin.newsletter.index') }}" class="block py-2.5 px-4 rounded-lg hover:bg-[#1e3a5f] transition">Newsletter</a>
                <a href="{{ route('admin.messages.index') }}" class="block py-2.5 px-4 rounded-lg hover:bg-[#1e3a5f] transition">Messages</a>
                <a href="{{ route('admin.users.index') }}" class="block py-2.5 px-4 rounded-lg hover:bg-[#1e3a5f] transition">Users</a>
            </nav>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}" class="p-4 border-t border-gray-700">
                @csrf
                <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white py-2 rounded-lg font-medium transition">
                    Logout
                </button>
            </form>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col lg:ml-0 transition-all duration-300">
            <!-- Topbar -->
            <header class="flex items-center justify-between px-6 py-4 bg-white shadow-md sticky top-0 z-10">
                <div class="flex items-center gap-4">
                    <button onclick="toggleSidebar()" class="text-[#0a1a3a] lg:hidden focus:outline-none text-2xl">
                        ☰
                    </button>
                    <h1 class="text-2xl font-semibold text-[#0a1a3a]">@yield('page_title', 'Dashboard')</h1>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-gray-600 text-sm hidden md:block">Welcome,</span>
                    <span class="font-semibold text-[#0a1a3a]">{{ Auth::user()->name ?? 'Admin' }}</span>
                    <div class="w-9 h-9 flex items-center justify-center rounded-full bg-[#c9a227] text-[#0a1a3a] font-bold">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                </div>
            </header>

            <!-- Content Section -->
            <main class="flex-1 p-6 md:p-8 bg-gradient-to-br from-gray-50 to-gray-100">
                <div class="bg-white shadow-lg rounded-2xl p-6 md:p-8 border border-gray-100">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>
</body>
</html>
