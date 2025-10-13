<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Bradleys Law')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-inter">

    <!-- Sidebar + Topbar Layout -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-[#0a1a3a] text-white flex flex-col">
            <div class="p-6 text-2xl font-semibold border-b border-gray-700">
                Bradleys Law
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-[#1e3a5f]">Dashboard</a>
                <a href="{{ route('admin.services.index') }}" class="block py-2 px-4 rounded hover:bg-[#1e3a5f]">Services</a>
                <a href="{{ route('admin.insights.index') }}" class="block py-2 px-4 rounded hover:bg-[#1e3a5f]">Insights</a>
                <a href="{{ route('admin.messages.index') }}" class="block py-2 px-4 rounded hover:bg-[#1e3a5f]">Messages</a>
                <a href="{{ route('admin.users.index') }}" class="block py-2 px-4 rounded hover:bg-[#1e3a5f]">Users</a>
            </nav>

            <form method="POST" action="{{ route('logout') }}" class="p-4 border-t border-gray-700">
                @csrf
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded">
                    Logout
                </button>
            </form>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-semibold text-[#0a1a3a]">@yield('page_title', 'Dashboard')</h1>
                <p class="text-gray-600">Welcome, {{ Auth::user()->name ?? 'Admin' }}</p>
            </header>

            <section>
                @yield('content')
            </section>
        </main>
    </div>

</body>
</html>
