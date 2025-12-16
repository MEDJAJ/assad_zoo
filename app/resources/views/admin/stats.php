<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white min-h-screen">
            <div class="p-6">
                <div class="flex items-center space-x-3 mb-8">
                    <span class="text-3xl">🦁</span>
                    <span class="text-xl font-bold">ASSAD Admin</span>
                </div>
                <nav class="space-y-2">
                    <a href="admin_dashboard.php" class="flex items-center space-x-3 p-3 hover:bg-gray-800 rounded-lg">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="users_admin.php" class="flex items-center space-x-3 p-3 hover:bg-gray-800 rounded-lg">
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <a href="animals_admin.php" class="flex items-center space-x-3 p-3 hover:bg-gray-800 rounded-lg">
                        <i class="fas fa-paw"></i>
                        <span>Animaux</span>
                    </a>
                    <a href="habitats_admin.php" class="flex items-center space-x-3 p-3 hover:bg-gray-800 rounded-lg">
                        <i class="fas fa-tree"></i>
                        <span>Habitats</span>
                    </a>
                    <a href="stats.php" class="flex items-center space-x-3 p-3 bg-blue-700 rounded-lg">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistiques</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold mb-2">Statistiques</h1>
                <p class="text-gray-600">Analyse des données du zoo virtuel</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Utilisateurs Total</p>
                            <p class="text-3xl font-bold">1,248</p>
                        </div>
                        <i class="fas fa-users text-3xl text-blue-500"></i>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Animaux Total</p>
                            <p class="text-3xl font-bold">156</p>
                        </div>
                        <i class="fas fa-paw text-3xl text-green-500"></i>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Réservations</p>
                            <p class="text-3xl font-bold">342</p>
                        </div>
                        <i class="fas fa-ticket-alt text-3xl text-purple-500"></i>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500">Revenus Total</p>
                            <p class="text-3xl font-bold">45,800 MAD</p>
                        </div>
                        <i class="fas fa-money-bill-wave text-3xl text-yellow-500"></i>
                    </div>
                </div>
            </div>

            <!-- Graphs -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Chart 1 -->
                <div class="bg-white rounded-xl shadow p-6">
                    <h2 class="text-xl font-bold mb-6">Utilisateurs par rôle</h2>
                    <div class="h-64">
                        <canvas id="roleChart"></canvas>
                    </div>
                </div>

                <!-- Chart 2 -->
                <div class="bg-white rounded-xl shadow p-6">
                    <h2 class="text-xl font-bold mb-6">Réservations par mois</h2>
                    <div class="h-64">
                        <canvas id="reservationsChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Table Top Visites -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold mb-6">Top 5 des visites les plus réservées</h2>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-4 text-left">Visite</th>
                                <th class="p-4 text-left">Guide</th>
                                <th class="p-4 text-left">Réservations</th>
                                <th class="p-4 text-left">Note moyenne</th>
                                <th class="p-4 text-left">Revenus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">Safari matinal</td>
                                <td class="p-4">Ahmed</td>
                                <td class="p-4">85</td>
                                <td class="p-4">
                                    <span class="text-yellow-500">★★★★☆</span> 4.5
                                </td>
                                <td class="p-4">12,750 MAD</td>
                            </tr>
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">Aventure nocturne</td>
                                <td class="p-4">Karim</td>
                                <td class="p-4">72</td>
                                <td class="p-4">
                                    <span class="text-yellow-500">★★★★★</span> 5.0
                                </td>
                                <td class="p-4">12,960 MAD</td>
                            </tr>
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">Découverte félins</td>
                                <td class="p-4">Fatima</td>
                                <td class="p-4">68</td>
                                <td class="p-4">
                                    <span class="text-yellow-500">★★★★☆</span> 4.3
                                </td>
                                <td class="p-4">8,160 MAD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Graphique 1: Utilisateurs par rôle
        const roleCtx = document.getElementById('roleChart').getContext('2d');
        new Chart(roleCtx, {
            type: 'doughnut',
            data: {
                labels: ['Visiteurs', 'Guides', 'Admins'],
                datasets: [{
                    data: [1150, 95, 3],
                    backgroundColor: ['#3b82f6', '#10b981', '#ef4444']
                }]
            }
        });

        // Graphique 2: Réservations par mois
        const resCtx = document.getElementById('reservationsChart').getContext('2d');
        new Chart(resCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Réservations',
                    data: [45, 52, 68, 85, 72, 63],
                    backgroundColor: '#8b5cf6'
                }]
            }
        });
    </script>
</body>
</html>