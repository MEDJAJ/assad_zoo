<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Animaux - Zoo ASSAD</title>
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
                    <a href="animals_admin.php" class="flex items-center space-x-3 p-3 bg-blue-700 rounded-lg">
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

   
        <div class="flex-1 p-8">
         
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Gestion des Animaux</h1>
                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    <i class="fas fa-plus mr-2"></i>Ajouter Animal
                </button>
            </div>

    
            <div class="bg-white rounded-xl shadow p-6 mb-6 hidden" id="addForm">
                <h2 class="text-xl font-bold mb-4">Ajouter un animal</h2>
                <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Nom" class="p-3 border rounded-lg">
                    <input type="text" placeholder="Espèce" class="p-3 border rounded-lg">
                    <select class="p-3 border rounded-lg">
                        <option>Alimentation</option>
                        <option>Carnivore</option>
                        <option>Herbivore</option>
                        <option>Omnivore</option>
                    </select>
                    <input type="text" placeholder="Pays d'origine" class="p-3 border rounded-lg">
                    <textarea placeholder="Description" rows="3" class="p-3 border rounded-lg md:col-span-2"></textarea>
                    <select class="p-3 border rounded-lg">
                        <option>Sélectionner habitat</option>
                        <option>Savane</option>
                        <option>Forêt</option>
                        <option>Désert</option>
                    </select>
                    <input type="file" class="p-3 border rounded-lg">
                    <div class="md:col-span-2 space-x-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                            Enregistrer
                        </button>
                        <button type="button" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400">
                            Annuler
                        </button>
                    </div>
                </form>
            </div>

    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=400" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Lion de l'Atlas</h3>
                        <p class="text-gray-600 mb-2">Félin - Carnivore</p>
                        <p class="text-gray-600 mb-4">Maroc</p>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                                <i class="fas fa-edit mr-1"></i>Modifier
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700">
                                <i class="fas fa-trash mr-1"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>

           
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?auto=format&fit=crop&w=400" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Éléphant d'Afrique</h3>
                        <p class="text-gray-600 mb-2">Éléphantidé - Herbivore</p>
                        <p class="text-gray-600 mb-4">Kenya</p>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                                <i class="fas fa-edit mr-1"></i>Modifier
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700">
                                <i class="fas fa-trash mr-1"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>

           
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559253664-ca249d4608c6?auto=format&fit=crop&w=400" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Girafe</h3>
                        <p class="text-gray-600 mb-2">Giraffidé - Herbivore</p>
                        <p class="text-gray-600 mb-4">Tanzanie</p>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                                <i class="fas fa-edit mr-1"></i>Modifier
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700">
                                <i class="fas fa-trash mr-1"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('button:contains("Ajouter Animal")').addEventListener('click', function() {
            document.getElementById('addForm').classList.toggle('hidden');
        });
    </script>
</body>
</html>