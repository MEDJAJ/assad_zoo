<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar (identique au dashboard) -->
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
                    <a href="users_admin.php" class="flex items-center space-x-3 p-3 bg-blue-700 rounded-lg">
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
                    <a href="stats.php" class="flex items-center space-x-3 p-3 hover:bg-gray-800 rounded-lg">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistiques</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Gestion des Utilisateurs</h1>
            </div>

            <!-- Filtres -->
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <div class="flex space-x-4">
                    <select class="px-4 py-2 border rounded-lg">
                        <option>Tous les rôles</option>
                        <option>Visiteur</option>
                        <option>Guide</option>
                        <option>Admin</option>
                    </select>
                    <select class="px-4 py-2 border rounded-lg">
                        <option>Tous les statuts</option>
                        <option>Actif</option>
                        <option>Inactif</option>
                    </select>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                        Filtrer
                    </button>
                </div>
            </div>

            <!-- Tableau des utilisateurs -->
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-4 text-left">ID</th>
                                <th class="p-4 text-left">Nom</th>
                                <th class="p-4 text-left">Email</th>
                                <th class="p-4 text-left">Rôle</th>
                                <th class="p-4 text-left">Statut</th>
                                <th class="p-4 text-left">Guide Approuvé</th>
                                <th class="p-4 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ligne 1 -->
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">1</td>
                                <td class="p-4">Admin</td>
                                <td class="p-4">admin@zoo.ma</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">
                                        Admin
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span  class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                        Actif
                                    </span>
                                </td>
                                <td class="p-4">-</td>
                                <td class="p-4">
                                    <button class="text-gray-400 hover:text-red-600">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Ligne 2 -->
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">2</td>
                                <td class="p-4">Ahmed Benali</td>
                                <td class="p-4">ahmed@email.com</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                        Guide
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                        Actif
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                         Oui
                                    </span>
                                </td>
                                <td class="p-4 space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Ligne 3 -->
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">3</td>
                                <td class="p-4">Fatima Zahra</td>
                                <td class="p-4">fatima@email.com</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                        Guide
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">
                                        En attente
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">
                                         Non
                                    </span>
                                </td>
                                <td class="p-4 space-x-2">
                                    <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                                        Approuver
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Ligne 4 -->
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-4">4</td>
                                <td class="p-4">Karim Alami</td>
                                <td class="p-4">karim@email.com</td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm">
                                        Visiteur
                                    </span>
                                </td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                        Actif
                                    </span>
                                </td>
                                <td class="p-4">-</td>
                                <td class="p-4 space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>