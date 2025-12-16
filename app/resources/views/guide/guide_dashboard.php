<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guide - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl">🦁</span>
                    <span class="text-xl font-bold">Zoo ASSAD</span>
                </div>
                <div class="flex space-x-6">
                    <a href="guide_dashboard.php" class="text-blue-600 font-semibold">Dashboard</a>
                    <a href="create_visite.php" class="text-gray-600 hover:text-blue-600">Créer visite</a>
                    <a href="../visitor/visites.php" class="text-gray-600 hover:text-blue-600">Visites publiques</a>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user-circle text-gray-400"></i>
                        <span class="text-gray-700">Guide Ahmed</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-2">Tableau de bord - Guide</h1>
            <p class="text-gray-600">Gérez vos visites et réservations</p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Visites actives</p>
                        <p class="text-3xl font-bold">8</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-map-marked-alt text-blue-600 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Réservations aujourd'hui</p>
                        <p class="text-3xl font-bold">12</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-ticket-alt text-green-600 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Note moyenne</p>
                        <p class="text-3xl font-bold">4.7</p>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-star text-yellow-600 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions rapides -->
        <div class="bg-white rounded-xl shadow p-6 mb-8">
            <h2 class="text-xl font-bold mb-4">Actions rapides</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="create_visite.html" class="bg-blue-600 text-white p-4 rounded-lg hover:bg-blue-700 text-center">
                    <i class="fas fa-plus text-2xl mb-2 block"></i>
                    <span>Nouvelle visite</span>
                </a>
                <a href="etapes_visite.html" class="bg-green-600 text-white p-4 rounded-lg hover:bg-green-700 text-center">
                    <i class="fas fa-list-ol text-2xl mb-2 block"></i>
                    <span>Gérer étapes</span>
                </a>
                <a href="#reservations" class="bg-purple-600 text-white p-4 rounded-lg hover:bg-purple-700 text-center">
                    <i class="fas fa-users text-2xl mb-2 block"></i>
                    <span>Voir réservations</span>
                </a>
            </div>
        </div>

        <!-- Mes visites -->
        <div class="bg-white rounded-xl shadow p-6 mb-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">Mes visites à venir</h2>
                <a href="#" class="text-blue-600 hover:text-blue-800">Voir toutes</a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-4 text-left">Titre</th>
                            <th class="p-4 text-left">Date</th>
                            <th class="p-4 text-left">Capacité</th>
                            <th class="p-4 text-left">Réservations</th>
                            <th class="p-4 text-left">Statut</th>
                            <th class="p-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-4">Safari matinal</td>
                            <td class="p-4">15 Mars - 10:00</td>
                            <td class="p-4">25 personnes</td>
                            <td class="p-4">
                                <span class="font-semibold">12/25</span>
                            </td>
                            <td class="p-4">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    Confirmée
                                </span>
                            </td>
                            <td class="p-4">
                                <a href="etapes_visite.html" class="text-blue-600 hover:text-blue-800 mr-3">
                                    <i class="fas fa-list mr-1"></i>Étapes
                                </a>
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-times mr-1"></i>Annuler
                                </a>
                            </td>
                        </tr>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-4">Découverte félins</td>
                            <td class="p-4">18 Mars - 14:00</td>
                            <td class="p-4">20 personnes</td>
                            <td class="p-4">
                                <span class="font-semibold">8/20</span>
                            </td>
                            <td class="p-4">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    Confirmée
                                </span>
                            </td>
                            <td class="p-4">
                                <a href="etapes_visite.html" class="text-blue-600 hover:text-blue-800 mr-3">
                                    <i class="fas fa-list mr-1"></i>Étapes
                                </a>
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-times mr-1"></i>Annuler
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Mes réservations -->
        <div id="reservations" class="bg-white rounded-xl shadow p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">Dernières réservations</h2>
                <a href="#" class="text-blue-600 hover:text-blue-800">Voir toutes</a>
            </div>
            
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 border rounded-lg">
                    <div>
                        <p class="font-semibold">Karim Alami</p>
                        <p class="text-gray-600 text-sm">Safari matinal - 2 personnes</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Réservé le: 10 Mars</p>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-4 border rounded-lg">
                    <div>
                        <p class="font-semibold">Fatima Zahra</p>
                        <p class="text-gray-600 text-sm">Découverte félins - 4 personnes</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Réservé le: 9 Mars</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>