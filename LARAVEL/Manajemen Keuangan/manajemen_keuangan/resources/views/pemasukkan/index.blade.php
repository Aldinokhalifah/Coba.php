<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pemasukkan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 transition duration-200 ease-in-out lg:relative lg:flex">
        <x-sidenav/>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center w-full">
                <h2 class="text-2xl font-bold text-gray-800 text-pretty">Dashboard Pemasukkan</h2>
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
            
            <!-- Chart Pemasukkan -->
            <div class="mt-6">
                <canvas id="incomeChart"></canvas>
            </div>

            <!-- Riwayat Pemasukkan -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-700">Riwayat Pemasukkan</h3>
                <ul class="mt-3 space-y-2">
                    <li class="p-3 bg-gray-50 rounded-lg flex justify-between">
                        <div class="flex flex-col">
                            <span>Gaji Bulanan</span>
                            <span class="text-sm text-slate-600">2024-02-19</span>
                            <div class="flex gap-1 justify-center items-center">
                                <span class="font-semibold">Ket:</span>
                                <span class="text-sm text-slate-700 font-semibold">Gaji bulan ini</span>
                            </div>
                        </div>
                        <span class="text-green-600">+Rp 5.000.000</span>
                    </li>
                    <li class="p-3 bg-gray-50 rounded-lg flex justify-between">
                        <div class="flex flex-col">
                            <span>Bonus</span>
                            <span class="text-sm text-slate-600">2024-04-29</span>
                            <div class="flex gap-1 justify-center items-center">
                                <span class="font-semibold">Ket:</span>
                                <span class="text-sm text-slate-700 font-semibold">Bonus Gajian</span>
                            </div>
                        </div>
                        <span class="text-green-600">+Rp 1.500.000</span>
                    </li>
                </ul>
            </div>

            <!-- Button Tambah Pemasukkan -->
            <div class="mt-6 text-right">
                <button onclick="openModal()" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Tambah Pemasukkan</button>
            </div>
        </div>
    </div>

    <!-- Modal Form Tambah Pemasukkan -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h3 class="text-xl font-semibold">Tambah Pemasukkan</h3>
            <form action="#" method="POST" class="mt-4">
                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="jumlah" class="block text-gray-700">Jumlah (Rp)</label>
                    <input type="number" id="jumlah" name="jumlah" class="w-full p-2 border rounded-lg" placeholder="Masukkan jumlah pemasukkan">
                </div>
                <div class="mb-4">
                    <label for="kategori" class="block text-gray-700">Kategori</label>
                    <input type="text" id="kategori" name="kategori" class="w-full p-2 border rounded-lg" placeholder="Masukkan kategori pemasukkan">
                </div>
                <div class="mb-4">
                    <label for="keterangan" class="block text-gray-700">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" rows="3" class="w-full p-2 border rounded-lg" placeholder="Tambahkan keterangan (opsional)"></textarea>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600">Batal</button>
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script untuk Chart.js dan Modal -->
    <script>
        const ctx = document.getElementById('incomeChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Pemasukkan',
                    data: [5000000, 4500000, 6000000, 7000000, 6500000, 8000000],
                    backgroundColor: 'rgba(34, 197, 94, 0.6)'
                }]
            }
        });

        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

         // Toggle mobile menu
        const menuButton = document.getElementById('menuButton');
        const sidebar = document.getElementById('sidebar');
        
        menuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
