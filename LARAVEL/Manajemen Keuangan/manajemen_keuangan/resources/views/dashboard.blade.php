<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Keuangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 flex">
    

    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 transition duration-200 ease-in-out lg:relative lg:flex">
        <x-sidenav/>
    </div>

    <!-- Main Content -->
    <div class="p-6 w-full">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center w-full">
                <h2 class="text-2xl font-bold text-gray-800 text-pretty">Dashboard Keuangan</h2>
                <h2 class="font-semibold text-slate-700 text-lg hidden md:block">
                @auth
                    {{ Auth::user()->name }}
                @endauth
                </h2>
                <!-- Mobile menu button -->
                <button id="menuButton" class="lg:hidden p-2 rounded-md text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            
            <!-- Ringkasan Keuangan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div class="p-4 bg-green-100 rounded-lg">
                    <p class="text-sm text-gray-600">Total Pemasukan</p>
                    <p class="text-lg font-bold text-green-700">Rp 10.000.000</p>
                </div>
                <div class="p-4 bg-red-100 rounded-lg">
                    <p class="text-sm text-gray-600">Total Pengeluaran</p>
                    <p class="text-lg font-bold text-red-700">Rp 4.500.000</p>
                </div>
                <div class="p-4 bg-blue-100 rounded-lg">
                    <p class="text-sm text-gray-600">Saldo Saat Ini</p>
                    <p class="text-lg font-bold text-blue-700">Rp 5.500.000</p>
                </div>
            </div>

            <!-- Grafik Keuangan -->
            <div class="mt-6 w-full">
                <canvas id="financeChart"></canvas>
            </div>

            <!-- Daftar Transaksi Terbaru -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-700">Transaksi Terbaru</h3>
                <ul class="mt-3 space-y-2">
                    <li class="p-3 bg-gray-50 rounded-lg flex justify-between">
                        <span>Makan Siang</span>
                        <span class="text-red-600">-Rp 50.000</span>
                    </li>
                    <li class="p-3 bg-gray-50 rounded-lg flex justify-between">
                        <span>Gaji Bulanan</span>
                        <span class="text-green-600">+Rp 5.000.000</span>
                    </li>
                    <li class="p-3 bg-gray-50 rounded-lg flex justify-between">
                        <span>Internet</span>
                        <span class="text-red-600">-Rp 250.000</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Script untuk Chart.js -->
    <script>
        const ctx = document.getElementById('financeChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [
                    {
                        label: 'Pemasukan',
                        data: [3000000, 4500000, 5000000, 6000000, 5500000, 7000000],
                        backgroundColor: 'rgba(34, 197, 94, 0.6)'
                    },
                    {
                        label: 'Pengeluaran',
                        data: [2000000, 2500000, 3000000, 3200000, 3500000, 4000000],
                        backgroundColor: 'rgba(239, 68, 68, 0.6)'
                    }
                ]
            }
        });

        // Toggle mobile menu
        const menuButton = document.getElementById('menuButton');
        const sidebar = document.getElementById('sidebar');
        
        menuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>

