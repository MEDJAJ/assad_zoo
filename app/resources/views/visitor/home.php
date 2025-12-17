<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .animal-card {
            transition: transform 0.3s ease;
        }
        .animal-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50">
   
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl">🦁</span>
                    <a href="fiche_speciale.php" class="text-xl font-bold text-gray-800">Zoo ASSAD</a>
                </div>
                <div class="flex space-x-6">
                    <a href="home.php" class="text-blue-600 font-semibold">Accueil</a>
                    <a href="animals.php" class="text-gray-600 hover:text-blue-600">Animaux</a>
                    <a href="visites.php" class="text-gray-600 hover:text-blue-600">Visites</a>
                    <a href="login.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

    
    <header class="hero-gradient text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-4">Découvrez le Zoo Virtuel ASSAD</h1>
                <p class="text-xl mb-8">Explorez la faune africaine et les lions de l'Atlas</p>
                
       
                <div class="max-w-2xl mx-auto">
                    <div class="relative">
                        <input 
                            type="text" 
                            placeholder="Rechercher des animaux, visites..."
                            class="w-full px-6 py-4 rounded-lg text-gray-800 focus:outline-none"
                        >
                        <button class="absolute right-3 top-3 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                            <i class="fas fa-search"></i> Rechercher
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

  
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Animaux en vedette</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
               
                <div class="animal-card bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=500" 
                         alt="Lion" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Lion de l'Atlas</h3>
                        <p class="text-gray-600 mb-2">Félin</p>
                        <p class="text-gray-600">Maroc</p>
                        <a href="animal_details.html?id=1" class="mt-4 inline-block text-blue-600 hover:underline">
                            Voir détails →
                        </a>
                    </div>
                </div>

               
                <div class="animal-card bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?auto=format&fit=crop&w=500" 
                         alt="Éléphant" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Éléphant d'Afrique</h3>
                        <p class="text-gray-600 mb-2">Éléphantidé</p>
                        <p class="text-gray-600">Kenya</p>
                        <a href="animal_details.html?id=2" class="mt-4 inline-block text-blue-600 hover:underline">
                            Voir détails →
                        </a>
                    </div>
                </div>

                <div class="animal-card bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559253664-ca249d4608c6?auto=format&fit=crop&w=500" 
                         alt="Girafe" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Girafe</h3>
                        <p class="text-gray-600 mb-2">Giraffidé</p>
                        <p class="text-gray-600">Tanzanie</p>
                        <a href="animal_details.html?id=3" class="mt-4 inline-block text-blue-600 hover:underline">
                            Voir détails →
                        </a>
                    </div>
                </div>

            
                <div class="animal-card bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1567177662142-20646e1b6c69?auto=format&fit=crop&w=500" 
                         alt="Zèbre" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">Zèbre</h3>
                        <p class="text-gray-600 mb-2">Équidé</p>
                        <p class="text-gray-600">Afrique du Sud</p>
                        <a href="animal_details.html?id=4" class="mt-4 inline-block text-blue-600 hover:underline">
                            Voir détails →
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="animals.html" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    Voir tous les animaux
                </a>
            </div>
        </div>
    </section>

 
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Visites guidées disponibles</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-bold text-xl mb-3">Safari virtuel matinal</h3>
                    <div class="space-y-2 mb-4">
                        <p><i class="fas fa-calendar text-blue-500 mr-2"></i> 15 Mars 2024 - 10:00</p>
                        <p><i class="fas fa-clock text-green-500 mr-2"></i> Durée: 2 heures</p>
                        <p><i class="fas fa-tag text-yellow-500 mr-2"></i> 150 MAD</p>
                        <p><i class="fas fa-language text-purple-500 mr-2"></i> Français</p>
                        <p><i class="fas fa-users text-red-500 mr-2"></i> Places: 12/25</p>
                    </div>
                    <a href="reservation.html?id=1" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        Réserver
                    </a>
                </div>

               
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-bold text-xl mb-3">Découverte des félins</h3>
                    <div class="space-y-2 mb-4">
                        <p><i class="fas fa-calendar text-blue-500 mr-2"></i> 18 Mars 2024 - 14:00</p>
                        <p><i class="fas fa-clock text-green-500 mr-2"></i> Durée: 1.5 heures</p>
                        <p><i class="fas fa-tag text-yellow-500 mr-2"></i> 120 MAD</p>
                        <p><i class="fas fa-language text-purple-500 mr-2"></i> Arabe</p>
                        <p><i class="fas fa-users text-red-500 mr-2"></i> Places: 8/20</p>
                    </div>
                    <a href="reservation.html?id=2" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        Réserver
                    </a>
                </div>

            
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-bold text-xl mb-3">Aventure nocturne</h3>
                    <div class="space-y-2 mb-4">
                        <p><i class="fas fa-calendar text-blue-500 mr-2"></i> 20 Mars 2024 - 20:00</p>
                        <p><i class="fas fa-clock text-green-500 mr-2"></i> Durée: 2 heures</p>
                        <p><i class="fas fa-tag text-yellow-500 mr-2"></i> 180 MAD</p>
                        <p><i class="fas fa-language text-purple-500 mr-2"></i> Anglais</p>
                        <p><i class="fas fa-users text-red-500 mr-2"></i> Places: 5/15</p>
                    </div>
                    <a href="reservation.html?id=3" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        Réserver
                    </a>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="visites.html" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                    Voir toutes les visites
                </a>
            </div>
        </div>
    </section>

    
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <p>&copy; 2024 Zoo Virtuel ASSAD. Tous droits réservés.</p>
                <p class="mt-2">Coupe d'Afrique des Nations 2025 - Maroc</p>
            </div>
        </div>
    </footer>
</body>
</html>