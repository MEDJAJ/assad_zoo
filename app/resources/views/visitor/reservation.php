<?php

if (file_exists('../../../includes/config.php')) {
    include '../../../includes/config.php';
} else {
    echo 'Fichier config.php introuvable';
    exit;
}

if(!isset($_GET['id'])){
    die("cette id not existe");
}
$id_visite=intval($_GET['id']);

$guide_visites="SELECT * FROM Utilisateur u INNER JOIN visite_guidee v ON v.id_guide=u.id_utilisateure AND v.id_visiteguide='$id_visite'";
$result=mysqli_query($con,$guide_visites);
$row = mysqli_fetch_assoc($result);
print_r($row);


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Zoo ASSAD</title>
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
                    <a href="visites.php" class="text-gray-600 hover:text-blue-600">Visites</a>
                    <a href="../auth/login.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

  
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
          
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-4">Réservation de visite guidée</h1>
                <p class="text-gray-600">Complétez les informations ci-dessous pour réserver votre place</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                        <h2 class="text-2xl font-bold mb-4">Détails de la visite</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-32 font-semibold">Visite:</div>
                                <div class="text-lg font-bold">Safari matinal complet</div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-32 font-semibold">Date:</div>
                                <div>15 Mars 2024 - 10:00</div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-32 font-semibold">Durée:</div>
                                <div>2 heures</div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-32 font-semibold">Guide:</div>
                                <div>Ahmed</div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-32 font-semibold">Langue:</div>
                                <div>Français</div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-32 font-semibold">Places disponibles:</div>
                                <div class="text-green-600 font-semibold">12 places</div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-2xl font-bold mb-6">Informations de réservation</h2>
                        
                       <form method="POST" action="">
                            
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-3">
                                    Nombre de personnes *
                                </label>
                                <div class="flex items-center space-x-4">
                                    <button type="button" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input 
                                        type="number" 
                                        name="nb_personnes" 
                                        min="1" 
                                        max="12" 
                                        value="1"
                                        class="w-20 text-center px-3 py-2 border border-gray-300 rounded-lg"
                                        required
                                    >
                                    <button type="button" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <span class="text-gray-600">(Maximum: 12 personnes)</span>
                                </div>
                            </div>

                          

                       
                            <div class="mt-8">
                                <button type="submit" class="w-full bg-green-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-green-700 text-lg">
                                    <i class="fas fa-check-circle mr-2"></i>Confirmer la réservation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

              
                <div class="lg:col-span-1">
                    <div class="bg-blue-50 rounded-xl shadow-lg p-6 sticky top-6">
                        <h2 class="text-2xl font-bold mb-6">Récapitulatif</h2>
                        
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between">
                                <span>Visite:</span>
                                <span class="font-semibold">Safari matinal</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Prix unitaire:</span>
                                <span class="font-semibold">150 MAD</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Nombre de personnes:</span>
                                <span class="font-semibold">1</span>
                            </div>
                            <div class="border-t pt-4">
                                <div class="flex justify-between text-lg font-bold">
                                    <span>Total:</span>
                                    <span>150 MAD</span>
                                </div>
                            </div>
                        </div>

                 
                     
                    </div>
                </div>
            </div>
        </div>


        
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-500">Étapes de la visite guidée</h1>
<?php 
$etapes="SELECT * FROM etapevisite WHERE id_visite=$id_visite";
$result_etapes=mysqli_query($con,$etapes);
if(mysqli_num_rows($result_etapes)>0){


?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
       <?php while($row=mysqli_fetch_assoc($result_etapes)){

       ?>
        <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-2xl transition-shadow duration-300">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-gray-800"><?= $row['titre_etape']?></h2>titre_etape
               
            </div>
            <p class="text-gray-600">
                <?= $row['description_etape']?>
            </p>
             <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-2 py-1 rounded-full">
                    Ordre <?= $row['ordre_etape']?>
                </span>
        </div>
<?php }  ?>
</div>
<?php }  ?>
</div>
    </main>


    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>Zoo Virtuel ASSAD - Réservation sécurisée</p>
        </div>
    </footer>
</body>
</html>