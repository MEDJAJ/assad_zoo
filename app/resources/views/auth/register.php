<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .card-shadow {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="fixed inset-0 gradient-bg z-0"></div>
    
    <div class="relative z-10 w-full max-w-4xl flex">
       
        <div class="hidden md:flex md:w-1/2 bg-white rounded-l-2xl p-8 flex-col justify-center items-center">
            <div class="mb-8">
                <h1 class="text-5xl mb-2">🦁</h1>
                <h2 class="text-3xl font-bold text-gray-800">Zoo Virtuel ASSAD</h2>
                <p class="text-gray-600 mt-2">Découvrez les lions de l'Atlas</p>
            </div>
            
            <div class="space-y-4">
                <div class="flex items-center bg-blue-50 p-4 rounded-xl">
                    <div class="bg-blue-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">Rejoignez la communauté</h3>
                        <p class="text-sm text-gray-600">Des milliers de visiteurs</p>
                    </div>
                </div>
                
                <div class="flex items-center bg-green-50 p-4 rounded-xl">
                    <div class="bg-green-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-video text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">Visites guidées virtuelles</h3>
                        <p class="text-sm text-gray-600">Explorez depuis chez vous</p>
                    </div>
                </div>
                
                <div class="flex items-center bg-purple-50 p-4 rounded-xl">
                    <div class="bg-purple-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-lock text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">Sécurité maximale</h3>
                        <p class="text-sm text-gray-600">Vos données protégées</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <p class="text-gray-600">Déjà un compte ?</p>
                <a href="login.php" class="inline-block mt-2 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Se connecter
                </a>
            </div>
        </div>
        
  
        <div class="w-full md:w-1/2 bg-white card-shadow rounded-2xl md:rounded-r-2xl md:rounded-l-none p-8">
          
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Créer un compte</h1>
                <p class="text-gray-600 mt-2">Rejoignez le zoo virtuel ASSAD</p>
            </div>
            
          
            <form method="POST" action="process_register.php" class="space-y-6">
             
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-user mr-2"></i>Nom complet *
                    </label>
                    <div class="relative">
                        <input 
                            type="text" 
                            name="nom" 
                            required
                            pattern="[A-Za-zÀ-ÿ\s\-']{2,50}"
                            title="2 à 50 caractères, lettres, espaces, tirets et apostrophes seulement"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500 pl-12"
                            placeholder="Votre nom et prénom"
                        >
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Ex: Ahmed Benali</p>
                </div>
                
        
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-envelope mr-2"></i>Adresse email *
                    </label>
                    <div class="relative">
                        <input 
                            type="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500 pl-12"
                            placeholder="votre@email.com"
                        >
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>
                
          
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2"></i>Mot de passe *
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            name="password" 
                            required
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="8 caractères minimum, avec au moins 1 majuscule, 1 minuscule et 1 chiffre"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500 pl-12"
                            placeholder="Créez un mot de passe sécurisé"
                        >
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">
                        Minimum 8 caractères avec majuscule, minuscule et chiffre
                    </p>
                </div>
                
               
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2"></i>Confirmer le mot de passe *
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            name="confirm_password" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500 pl-12"
                            placeholder="Répétez votre mot de passe"
                        >
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                </div>
                
             
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-user-tag mr-2"></i>Choisissez votre rôle *
                    </label>
                    
                    <div class="relative">
                        <select 
                            name="role" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500 pl-12 appearance-none bg-white"
                        >
                            <option value="">Sélectionnez un rôle...</option>
                            <option value="visiteur">👤 Visiteur</option>
                            <option value="guide">🧭 Guide</option>
                        </select>
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <i class="fas fa-user-tag"></i>
                        </div>
                        <div class="absolute right-4 top-3.5 text-gray-400 pointer-events-none">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    
                  
                    <div class="mt-3 space-y-2 text-sm text-gray-600">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-blue-500 mt-0.5 mr-2"></i>
                            <span><strong>Visiteur :</strong> Explorez les animaux, réservez des visites, laissez des commentaires</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-green-500 mt-0.5 mr-2"></i>
                            <span><strong>Guide :</strong> Créez et animez des visites guidées virtuelles (approbation admin requise)</span>
                        </div>
                    </div>
                </div>
                
      
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input 
                            id="terms" 
                            name="terms" 
                            type="checkbox" 
                            required
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="text-gray-700">
                            J'accepte les 
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">conditions d'utilisation</a> 
                            et la 
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">politique de confidentialité</a>
                        </label>
                    </div>
                </div>
                
             
                <button type="submit" class="w-full gradient-bg text-white py-3 px-4 rounded-lg font-semibold hover:opacity-90 transition duration-300 flex items-center justify-center">
                    <i class="fas fa-user-plus mr-2"></i>
                    Créer mon compte
                </button>
                
              
                <div class="text-center mt-6 md:hidden">
                    <p class="text-gray-600">Déjà un compte ?</p>
                    <a href="login.php" class="text-blue-600 hover:text-blue-800 font-medium">
                        Connectez-vous ici
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>