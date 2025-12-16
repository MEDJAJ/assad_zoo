<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Zoo ASSAD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-shadow {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.3);
        }
        .floating-lion {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="fixed inset-0 gradient-bg z-0"></div>
    

    <div class="fixed inset-0 z-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
    </div>
    
    <div class="relative z-10 w-full max-w-4xl flex flex-col md:flex-row items-center">
    
        <div class="w-full md:w-1/2 mb-10 md:mb-0 md:pr-10">
            <div class="text-white text-center md:text-left">
                <div class="floating-lion inline-block mb-6">
                    <div class="text-8xl">🦁</div>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Zoo Virtuel<br>ASSAD
                </h1>
                <p class="text-xl opacity-90 mb-8">
                    Découvrez les lions de l'Atlas et la faune africaine
                </p>
      
                <div class="space-y-4 hidden md:block">
                    <div class="flex items-center bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg mr-4">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Authentification sécurisée</h3>
                            <p class="text-sm opacity-80">Vos données sont protégées</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg mr-4">
                            <i class="fas fa-globe-africa text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Découverte africaine</h3>
                            <p class="text-sm opacity-80">Explorez la faune du continent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
     
        <div class="w-full md:w-1/2">
            <div class="bg-white card-shadow rounded-2xl p-8">
              
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">Connexion</h2>
                    <p class="text-gray-600 mt-2">Accédez à votre compte</p>
                </div>
                
                
                <div id="error-message" class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6 hidden">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-red-400"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800" id="error-title"></h3>
                            <div class="mt-2 text-sm text-red-700">
                                <p id="error-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <form id="loginForm" method="POST" action="process_login.php" class="space-y-6">
                
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2"></i>Adresse email
                        </label>
                        <div class="relative">
                            <input 
                                type="email" 
                                name="email" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500 pl-12"
                                placeholder="votre@email.com"
                                autocomplete="email"
                            >
                            <div class="absolute left-4 top-3.5 text-gray-400">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    
                  
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label class="block text-sm font-medium text-gray-700">
                                <i class="fas fa-lock mr-2"></i>Mot de passe
                            </label>
                            <a href="forgot_password.php" class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                Mot de passe oublié ?
                            </a>
                        </div>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="login_password"
                                name="password" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500 pl-12 pr-12"
                                placeholder="Votre mot de passe"
                                autocomplete="current-password"
                            >
                            <div class="absolute left-4 top-3.5 text-gray-400">
                                <i class="fas fa-lock"></i>
                            </div>
                            <button type="button" onclick="toggleLoginPassword()" class="absolute right-4 top-3.5 text-gray-400 hover:text-gray-600">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                   
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember_me" 
                                name="remember_me" 
                                type="checkbox" 
                                class="h-4 w-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500"
                            >
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>
                    
                    
                    <button type="submit" class="w-full gradient-bg text-white py-3 px-4 rounded-lg font-semibold hover:opacity-90 transition duration-300 flex items-center justify-center shadow-lg">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Se connecter
                    </button>
                    
                  
                    <div class="mt-8 text-center">
                        <p class="text-gray-600">Vous n'avez pas encore de compte ?</p>
                        <a href="register.php" class="inline-block mt-2 px-6 py-2 border-2 border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition font-medium">
                            <i class="fas fa-user-plus mr-2"></i>S'inscrire maintenant
                        </a>
                    </div>
                </form>
            </div>
            
         
        </div>
    </div>

    <script>
       
        function toggleLoginPassword() {
            const passwordField = document.getElementById('login_password');
            const icon = event.currentTarget.querySelector('i');
            
            if(passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>