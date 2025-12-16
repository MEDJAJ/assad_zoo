<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">

    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-3xl">🦁</span>
                    <a href="home.html" class="text-xl font-bold text-gray-800">Zoo ASSAD</a>
                </div>
                <div class="flex space-x-6">
                    <a href="home.php" class="text-gray-600 hover:text-blue-600">Accueil</a>
                    <a href="animals.php" class="text-gray-600 hover:text-blue-600">Animaux</a>
                    <a href="visites.php" class="text-gray-600 hover:text-blue-600">Visites</a>
                    <a href="login.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

  
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
          
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-4">Laisser un commentaire</h1>
                <p class="text-gray-600">Partagez votre expérience sur la visite guidée</p>
            </div>

         
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <h2 class="text-xl font-bold mb-4">Visite concernée</h2>
                <div class="flex items-center">
                    <div class="w-24 font-semibold">Visite:</div>
                    <div class="text-lg">Safari matinal complet</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="w-24 font-semibold">Date:</div>
                    <div>10 Mars 2024 - 10:00</div>
                </div>
                <div class="flex items-center mt-2">
                    <div class="w-24 font-semibold">Guide:</div>
                    <div>Ahmed</div>
                </div>
            </div>

          
            <div class="bg-white rounded-xl shadow-lg p-6">
                <form method="POST" action="process_comment.php">
                    
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-4">
                            Note (1 à 5 étoiles) 
                        </label>
                        <div class="flex space-x-2 justify-center">
                            <input type="radio" name="note" id="star5" value="5" class="hidden">
                            <label for="star5" class="text-4xl cursor-pointer text-gray-300 hover:text-yellow-400">★</label>
                            
                            <input type="radio" name="note" id="star4" value="4" class="hidden">
                            <label for="star4" class="text-4xl cursor-pointer text-gray-300 hover:text-yellow-400">★</label>
                            
                            <input type="radio" name="note" id="star3" value="3" class="hidden">
                            <label for="star3" class="text-4xl cursor-pointer text-gray-300 hover:text-yellow-400">★</label>
                            
                            <input type="radio" name="note" id="star2" value="2" class="hidden">
                            <label for="star2" class="text-4xl cursor-pointer text-gray-300 hover:text-yellow-400">★</label>
                            
                            <input type="radio" name="note" id="star1" value="1" class="hidden" required>
                            <label for="star1" class="text-4xl cursor-pointer text-gray-300 hover:text-yellow-400">★</label>
                        </div>
                        <div class="flex justify-between text-sm text-gray-500 mt-2">
                            <span>Mauvais</span>
                            <span>Excellent</span>
                        </div>
                    </div>

                  
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Titre du commentaire
                        </label>
                        <input 
                            type="text" 
                            name="titre" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                            placeholder="Ex: Super expérience !"
                        >
                    </div>

                  
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Votre commentaire *
                        </label>
                        <textarea 
                            name="commentaire" 
                            rows="6"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                            placeholder="Décrivez votre expérience..."
                            required
                        ></textarea>
                    </div>

                 
                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-4">
                            Recommanderiez-vous cette visite ?
                        </label>
                        <div class="flex space-x-6">
                            <label class="flex items-center">
                                <input type="radio" name="recommandation" value="oui" class="mr-2">
                                <span>Oui</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="recommandation" value="non" class="mr-2">
                                <span>Non</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="recommandation" value="peut_etre" class="mr-2">
                                <span>Peut-être</span>
                            </label>
                        </div>
                    </div>

                  
                    <div class="text-center">
                        <button type="submit" class="bg-blue-600 text-white py-3 px-8 rounded-lg font-semibold hover:bg-blue-700 text-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Publier le commentaire
                        </button>
                    </div>
                </form>
            </div>

        
            <div class="mt-12">
                <h2 class="text-2xl font-bold mb-6">Commentaires des autres visiteurs</h2>
                
                <div class="space-y-6">
           
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="font-bold">Super visite !</h3>
                                <div class="flex items-center text-yellow-500">
                                    ★★★★★
                                    <span class="ml-2 text-sm text-gray-600">10 Mars 2024</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">Par Ahmed</span>
                        </div>
                        <p class="text-gray-700">
                            Guide très compétent, explications claires. J'ai adoré la partie sur les lions de l'Atlas.
                        </p>
                    </div>

                 
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="font-bold">Expérience enrichissante</h3>
                                <div class="flex items-center text-yellow-500">
                                    ★★★★☆
                                    <span class="ml-2 text-sm text-gray-600">8 Mars 2024</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-500">Par Fatima</span>
                        </div>
                        <p class="text-gray-700">
                            Parfait pour les familles. Mes enfants étaient captivés tout au long de la visite.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>Zoo Virtuel ASSAD - Partagez votre expérience</p>
        </div>
    </footer>
</body>
</html>