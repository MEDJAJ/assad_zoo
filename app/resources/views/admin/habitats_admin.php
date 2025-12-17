<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Habitats - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex">
   
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
                    <a href="habitats_admin.php" class="flex items-center space-x-3 p-3 bg-blue-700 rounded-lg">
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

      
        <div class="flex-1 p-8">
       
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Gestion des Habitats</h1>

            </div>

      
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <h2 class="text-xl font-bold mb-4">Ajouter un habitat</h2>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Nom de l'habitat" class="p-3 border rounded-lg">
                    <input type="text" placeholder="Type de climat" class="p-3 border rounded-lg">
                    <textarea placeholder="Description" rows="3" class="p-3 border rounded-lg md:col-span-2"></textarea>
                    <input type="text" placeholder="Zone du zoo" class="p-3 border rounded-lg">
                    <div class="md:col-span-2 space-x-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                            Enregistrer
                        </button>
                        <button type="reset" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>

      
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
             
                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Savane Africaine</h3>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p><strong>Climat:</strong> Tropical sec</p>
                        <p><strong>Zone:</strong> Zone A</p>
                        <p><strong>Animaux:</strong> 12 espèces</p>
                    </div>
                </div>

          
                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Forêt Tropicale</h3>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p><strong>Climat:</strong> Humide</p>
                        <p><strong>Zone:</strong> Zone B</p>
                        <p><strong>Animaux:</strong> 8 espèces</p>
                    </div>
                </div>

           
                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Désert</h3>
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p><strong>Climat:</strong> Aride</p>
                        <p><strong>Zone:</strong> Zone C</p>
                        <p><strong>Animaux:</strong> 5 espèces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>