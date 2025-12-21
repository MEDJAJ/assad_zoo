ASSAD – Zoo Virtuel
📖 Contexte du projet

À l’occasion de la Coupe d’Afrique des Nations 2025 organisée au Maroc, un Zoo virtuel nommé "ASSAD" a été développé pour promouvoir le lion de l’Atlas et d’autres animaux auprès des supporters et visiteurs du continent africain.

Le site web propose une exploration interactive des animaux, de leurs habitats, de leur statut de conservation, et offre des parcours éducatifs et ludiques adaptés aux familles et aux passionnés de football.

🎯 Objectifs

Créer un site web dynamique interactif et sécurisé.

Permettre aux utilisateurs de s’inscrire et se connecter avec différents rôles (Visiteur, Guide, Admin).

Fournir aux guides et administrateurs des outils pour gérer les visites et les animaux.

Offrir aux visiteurs des parcours éducatifs et la possibilité de réserver des visites et laisser des commentaires et notes.

👥 User Stories – Fonctionnelles
🔐 Utilisateur

S’inscrire et se connecter avec un rôle choisi (Visiteur ou Guide).

Authentification sécurisée avec hash et cryptage des mots de passe.

Note : Le compte Admin est unique et hard codé directement dans la base de données.

🧑‍💻 Administrateur

Gérer les utilisateurs :

Activer/désactiver un compte.

Approuver un guide après inscription.

Afficher une page informative pour les guides non approuvés.

Gérer en CRUD :

Animaux (ajout, modification, suppression avec image et habitat lié).

Habitats (ajout, modification, suppression).

Visualiser des statistiques :

Nombre total de visiteurs et par pays.

Nombre exact d’animaux.

Animaux les plus consultés.

Visites guidées les plus réservées.

🧭 Guide

Créer, modifier et annuler des visites guidées virtuelles : titre, description, date, heure, durée, prix, langue et capacité maximale.

Ajouter en masse les étapes d’une visite guidée (parcours) et organiser leur ordre.

Exemple de parcours : zone mammifères asiatiques → zone oiseaux exotiques → zone singes → zone crocodiles et hippopotames.

Consulter la liste des réservations pour leurs visites (nom des visiteurs, nombre de personnes, date).

🦁 Visiteur

Consulter la fiche spéciale “Asaad – Lion des Atlas”, avec présentation et images.

Afficher la liste de tous les animaux avec image, nom, espèce, pays d’origine.

Filtrer les animaux par habitat ou pays africain.

Consulter les visites guidées disponibles (titre, date, heure, durée, prix, langue, capacité restante, parcours) et réserver en indiquant le nombre de personnes.

Laisser un commentaire et une note sur une visite déjà réalisée.

Rechercher une visite guidée par titre ou mot-clé.

🛠️ Fonctionnalités techniques

Base de données relationnelle (MySQL / MariaDB) avec tables :

Utilisateur, animaux, habitats, visite_guidee, etapevisite, reservation, commentaires.

Requêtes SQL sécurisées avec jointures pour :

Afficher les animaux avec leur habitat.

Lister les réservations avec le visiteur et la visite.

Validation côté serveur pour emails, mots de passe, noms.

Gestion des rôles et permissions pour sécuriser l’accès aux fonctionnalités.

Possibilité d’ajouter animations interactives avec JavaScript (optionnel).

💾 Structure de la base de données

Utilisateur : id, nom, email, rôle, mot de passe, statut, pays

Animaux : id, nom, espèce, alimentation, image, pays d’origine, description, id_habitat

Habitats : id, nom, type de climat, description, zone

Visite_guidée : id, titre, description, date, langue, capacité max, durée, prix, statut, id_guide

EtapeVisite : id, titre, description, ordre, id_visite

Reservation : id, nb_personnes, id_utilisateur, id_visite

Commentaires : id, id_visite, id_utilisateur, note, texte, date
