<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer visite - Zoo ASSAD</title>
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
                    <a href="guide_dashboard.php" class="text-gray-600 hover:text-blue-600">Dashboard</a>
                    <a href="create_visite.php" class="text-blue-600 font-semibold">Créer visite</a>
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
            <h1 class="text-3xl font-bold mb-2">Créer une nouvelle visite guidée</h1>
            <p class="text-gray-600">Remplissez les informations ci-dessous</p>
        </div>

        <!-- Formulaire -->
        <div class="bg-white rounded-xl shadow p-8">
            <form method="POST" action="process_create_visite.php" class="space-y-6">
                <!-- Titre -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-heading mr-2"></i>Titre de la visite *
                    </label>
                    <input 
                        type="text" 
                        name="titre" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="Ex: Safari matinal dans la savane"
                    >
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-align-left mr-2"></i>Description
                    </label>
                    <textarea 
                        name="description" 
                        rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        placeholder="Décrivez votre visite..."
                    ></textarea>
                </div>

                <!-- Date et durée -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-calendar mr-2"></i>Date et heure *
                        </label>
                        <input 
                            type="datetime-local" 
                            name="date_visite" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-clock mr-2"></i>Durée (minutes) *
                        </label>
                        <input 
                            type="number" 
                            name="duree" 
                            min="15" 
                            max="240" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Ex: 120"
                        >
                    </div>
                </div>

                <!-- Prix et capacité -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-tag mr-2"></i>Prix (MAD) *
                        </label>
                        <input 
                            type="number" 
                            name="prix" 
                            min="0" 
                            step="0.01" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Ex: 150.00"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-users mr-2"></i>Capacité maximale *
                        </label>
                        <input 
                            type="number" 
                            name="capacite_max" 
                            min="1" 
                            max="50" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                            placeholder="Ex: 25"
                        >
                    </div>
                </div>

                <!-- Langue -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-language mr-2"></i>Langue de la visite *
                    </label>
                    <select 
                        name="langue" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    >
                        <option value="">Sélectionnez une langue</option>
                        <option value="fr">Français</option>
                        <option value="ar">Arabe</option>
                        <option value="en">Anglais</option>
                    </select>
                </div>

                <!-- Boutons -->
                <div class="flex space-x-4 pt-6">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 font-semibold">
                        <i class="fas fa-save mr-2"></i>Créer la visite
                    </button>
                    <a href="guide_dashboard.php" class="bg-gray-300 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-400 font-semibold">
                        <i class="fas fa-times mr-2"></i>Annuler
                    </a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>