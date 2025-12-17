<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visites guidées - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <a href="home.php" class="text-gray-600 hover:text-blue-600">Accueil</a>
                    <a href="animals.php" class="text-gray-600 hover:text-blue-600">Animaux</a>
                    <a href="visites.php" class="text-blue-600 font-semibold">Visites</a>
                    <a href="../auth/login.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

   
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Visites guidées virtuelles</h1>
            <p class="text-xl">Explorez notre zoo depuis chez vous avec nos guides experts</p>
        </div>
    </header>

    <div class="bg-white py-6 shadow">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Rechercher une visite par titre, guide ou date..."
                        class="w-full px-6 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    >
                    <button class="absolute right-3 top-3 bg-blue-600 text-white px-6 py-1 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Safari matinal complet</h3>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-blue-500 w-6"></i>
                            <span class="ml-2">15 Mars 2024 - 10:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-500 w-6"></i>
                            <span class="ml-2">Durée: 2 heures</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tag text-yellow-500 w-6"></i>
                            <span class="ml-2">Prix: 150 MAD</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-language text-purple-500 w-6"></i>
                            <span class="ml-2">Langue: Français</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-red-500 w-6"></i>
                            <span class="ml-2">Places: 12/25 disponibles</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user text-gray-500 w-6"></i>
                            <span class="ml-2">Guide: Ahmed</span>
                        </div>
                    </div>
                    
                    <a href="reservation.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-ticket-alt mr-2"></i>Réserver
                    </a>
                </div>
            </div>

  
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Découverte des félins</h3>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-blue-500 w-6"></i>
                            <span class="ml-2">18 Mars 2024 - 14:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-500 w-6"></i>
                            <span class="ml-2">Durée: 1.5 heures</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tag text-yellow-500 w-6"></i>
                            <span class="ml-2">Prix: 120 MAD</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-language text-purple-500 w-6"></i>
                            <span class="ml-2">Langue: Arabe</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-red-500 w-6"></i>
                            <span class="ml-2">Places: 8/20 disponibles</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user text-gray-500 w-6"></i>
                            <span class="ml-2">Guide: Fatima</span>
                        </div>
                    </div>
                    
                    <a href="reservation.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-ticket-alt mr-2"></i>Réserver
                    </a>
                </div>
            </div>

      
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Aventure nocturne</h3>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Presque complet</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-blue-500 w-6"></i>
                            <span class="ml-2">20 Mars 2024 - 20:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-500 w-6"></i>
                            <span class="ml-2">Durée: 2 heures</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tag text-yellow-500 w-6"></i>
                            <span class="ml-2">Prix: 180 MAD</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-language text-purple-500 w-6"></i>
                            <span class="ml-2">Langue: Anglais</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-red-500 w-6"></i>
                            <span class="ml-2">Places: 5/15 disponibles</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user text-gray-500 w-6"></i>
                            <span class="ml-2">Guide: Karim</span>
                        </div>
                    </div>
                    
                    <a href="reservation.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-ticket-alt mr-2"></i>Réserver
                    </a>
                </div>
            </div>

          
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Les oiseaux d'Afrique</h3>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-blue-500 w-6"></i>
                            <span class="ml-2">22 Mars 2024 - 11:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-500 w-6"></i>
                            <span class="ml-2">Durée: 1 heure</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tag text-yellow-500 w-6"></i>
                            <span class="ml-2">Prix: 100 MAD</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-language text-purple-500 w-6"></i>
                            <span class="ml-2">Langue: Français</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-red-500 w-6"></i>
                            <span class="ml-2">Places: 18/25 disponibles</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user text-gray-500 w-6"></i>
                            <span class="ml-2">Guide: Leila</span>
                        </div>
                    </div>
                    
                    <a href="reservation.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-ticket-alt mr-2"></i>Réserver
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Monde aquatique</h3>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Disponible</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-blue-500 w-6"></i>
                            <span class="ml-2">25 Mars 2024 - 15:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-500 w-6"></i>
                            <span class="ml-2">Durée: 1.5 heures</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tag text-yellow-500 w-6"></i>
                            <span class="ml-2">Prix: 130 MAD</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-language text-purple-500 w-6"></i>
                            <span class="ml-2">Langue: Arabe</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-red-500 w-6"></i>
                            <span class="ml-2">Places: 10/20 disponibles</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user text-gray-500 w-6"></i>
                            <span class="ml-2">Guide: Youssef</span>
                        </div>
                    </div>
                    
                    <a href="reservation.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-ticket-alt mr-2"></i>Réserver
                    </a>
                </div>
            </div>

          
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold">Les grands mammifères</h3>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">Limité</span>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-blue-500 w-6"></i>
                            <span class="ml-2">28 Mars 2024 - 09:00</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-green-500 w-6"></i>
                            <span class="ml-2">Durée: 2.5 heures</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tag text-yellow-500 w-6"></i>
                            <span class="ml-2">Prix: 200 MAD</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-language text-purple-500 w-6"></i>
                            <span class="ml-2">Langue: Anglais</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-red-500 w-6"></i>
                            <span class="ml-2">Places: 3/15 disponibles</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user text-gray-500 w-6"></i>
                            <span class="ml-2">Guide: Hassan</span>
                        </div>
                    </div>
                    
                    <a href="reservation.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-ticket-alt mr-2"></i>Réserver
                    </a>
                </div>
            </div>
        </div>
    </main>

 
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>Zoo Virtuel ASSAD - Réservez votre visite guidée virtuelle</p>
        </div>
    </footer>
</body>
</html>