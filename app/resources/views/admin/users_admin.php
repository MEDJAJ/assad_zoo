<?php
if (file_exists('../../../includes/config.php')) {
    include '../../../includes/config.php';
} else {
    echo 'Fichier config.php introuvable';
    exit;
}
include '../../../includes/functions.php';

$sql="SELECT * FROM Utilisateur";

$users=mysqli_query($con,$sql);


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs - Zoo ASSAD</title>
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
                    <a href="users_admin.php" class="flex items-center space-x-3 p-3 bg-blue-700 rounded-lg">
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <a href="animals_admin.php" class="flex items-center space-x-3 p-3 hover:bg-gray-800 rounded-lg">
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
                <h1 class="text-3xl font-bold">Gestion des Utilisateurs</h1>
            </div>

     
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <div class="flex space-x-4">
                    <select class="px-4 py-2 border rounded-lg">
                        <option>Tous les rôles</option>
                        <option>Visiteur</option>
                        <option>Guide</option>
                        <option>Admin</option>
                    </select>
                    <select class="px-4 py-2 border rounded-lg">
                        <option>Tous les statuts</option>
                        <option>Actif</option>
                        <option>Inactif</option>
                    </select>
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                        Filtrer
                    </button>
                </div>
            </div>

       
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                            
                                <th class="p-4 text-left">Nom</th>
                                <th class="p-4 text-left">Email</th>
                                <th class="p-4 text-left">Rôle</th>
                                <th class="p-4 text-left">Statut</th>
                                <th class="p-4 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        

                          <?php
                       if(mysqli_num_rows($users)){

                     while($row=mysqli_fetch_assoc($users)){

                     
                          ?>
                            <tr class="border-t hover:bg-gray-50">
                              
                                <td class="p-4"><?= $row["nom"] ?></td>
                                <td class="p-4"><?= $row["email"] ?></td>
                                <td class="p-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                        <?= $row["role"] ?>
                                    </span>
                                </td>
                                <td class="p-4">
                                   
                                        <?php
                                        if($row["status_utilisateure"]=="1"){
                                            ?>
                                             <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                             active
                                               </span>
                                    <?php
                                        }else{
                                            ?>
                                                <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">
                                             désactive
                                               </span>

                                     <?php   }
                                        ?>
                                  
                                </td>
                              
                         <td class="p-4 space-x-2">
    <?php if($row["status_utilisateure"] == "1"): ?>
       
        <a href="toggle_status.php?id=<?= $row['id_utilisateure'] ?>&status=0">
            <button class="flex-1 bg-green-600 text-white py-2 rounded hover:bg-green-700 px-6">
                Active
            </button>
        </a>
    <?php else: ?>
        <a href="toggle_status.php?id=<?= htmlspecialchars($row['id_utilisateure']) ?>&status=1">
            <button class="flex-1 bg-red-600 text-white py-2 rounded hover:bg-red-700 px-4">
                Désactivé
            </button>
        </a>
    <?php endif; ?>
</td>

                            </tr>

                     <?php       }  }  ?>
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>