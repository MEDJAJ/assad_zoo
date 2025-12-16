<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les animaux - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg ">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl">🦁</span>
                    <a href="home.html" class="text-xl font-bold text-gray-800">Zoo ASSAD</a>
                </div>
                <div class="flex space-x-6">
                    <a href="home.html" class="text-gray-600 hover:text-blue-600">Accueil</a>
                    <a href="animals.html" class="text-blue-600 font-semibold">Animaux</a>
                    <a href="visites.html" class="text-gray-600 hover:text-blue-600">Visites</a>
                    <a href="login.html" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- En-tête avec filtres -->
    <header class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-6">Tous les animaux</h1>
            
            <!-- Filtres -->
            <div class="flex flex-col md:flex-row gap-4 mb-8">
                <!-- Filtre Habitat -->
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Habitat</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        <option value="">Tous les habitats</option>
                        <option value="savane">Savane</option>
                        <option value="foret">Forêt tropicale</option>
                        <option value="desert">Désert</option>
                        <option value="montagne">Montagne</option>
                    </select>
                </div>
                
                <!-- Filtre Pays -->
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pays d'origine</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                        <option value="">Tous les pays</option>
                        <option value="maroc">Maroc</option>
                        <option value="kenya">Kenya</option>
                        <option value="tanzanie">Tanzanie</option>
                        <option value="afrique_du_sud">Afrique du Sud</option>
                    </select>
                </div>
                
                <!-- Bouton Filtrer -->
                <div class="flex items-end">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 h-[42px]">
                        <i class="fas fa-filter mr-2"></i>Filtrer
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Grille d'animaux -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <!-- Animal 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=400" 
                     alt="Lion" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Lion de l'Atlas</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Félin</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Maroc</span>
                    </div>
                    <a href="animal_details.html?id=1" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?auto=format&fit=crop&w=400" 
                     alt="Éléphant" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Éléphant d'Afrique</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Éléphantidé</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Kenya</span>
                    </div>
                    <a href="animal_details.html?id=2" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1559253664-ca249d4608c6?auto=format&fit=crop&w=400" 
                     alt="Girafe" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Girafe</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Giraffidé</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Tanzanie</span>
                    </div>
                    <a href="animal_details.html?id=3" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1567177662142-20646e1b6c69?auto=format&fit=crop&w=400" 
                     alt="Zèbre" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Zèbre</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Équidé</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Afrique du Sud</span>
                    </div>
                    <a href="animal_details.html?id=4" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?auto=format&fit=crop&w=400" 
                     alt="Rhinocéros" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Rhinocéros</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Rhinocérotidé</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Namibie</span>
                    </div>
                    <a href="animal_details.html?id=5" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1519066629447-267fffa62d4b?auto=format&fit=crop&w=400" 
                     alt="Hippopotame" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Hippopotame</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Hippopotamidé</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Zambie</span>
                    </div>
                    <a href="animal_details.html?id=6" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1551085254-e96b210db58a?auto=format&fit=crop&w=400" 
                     alt="Guépard" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Guépard</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Félin</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Botswana</span>
                    </div>
                    <a href="animal_details.html?id=7" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>

            <!-- Animal 8 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1550358864-518f202c02ba?auto=format&fit=crop&w=400" 
                     alt="Crocodile" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Crocodile</h3>
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-paw mr-2"></i>
                        <span>Crocodilien</span>
                    </div>
                    <div class="flex items-center text-gray-600 mb-4">
                        <i class="fas fa-globe-africa mr-2"></i>
                        <span>Égypte</span>
                    </div>
                    <a href="animal_details.html?id=8" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Voir détails
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Zoo Virtuel ASSAD</p>
        </div>
    </footer>
</body>
</html>