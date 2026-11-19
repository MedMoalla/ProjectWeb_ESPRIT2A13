Présentation du module:
Le module **M4 – Location d’équipements** d’AgriNoVa permet aux agriculteurs de louer des équipements agricoles auprès de vendeurs ou de propriétaires. Il facilite la recherche de matériel, la consultation des tarifs et la gestion des réservations.

Objectifs:
- Faciliter l'accès aux équipements agricoles.
- Mettre en relation les agriculteurs et les propriétaires d'équipements.
- Simplifier la réservation et la gestion des locations.
- Éviter les conflits de réservation grâce à la vérification des disponibilités.
- Assurer le suivi des demandes de location.

 Fonctionnalités principales:
Gestion des équipements:

- Ajouter un équipement.
- Consulter la liste des équipements disponibles.
- Modifier les informations d'un équipement.
- Supprimer un équipement.
- Gérer les tarifs journaliers et les cautions.

Gestion des réservations:
- Consulter les équipements disponibles.
- Réserver un équipement pour une période donnée.
- Vérifier la disponibilité selon les dates choisies.
- Éviter les chevauchements de réservations.
- Calculer automatiquement le prix total de la location.

Gestion des demandes:
- Accepter ou refuser une demande de réservation par le vendeur.
- Permettre à l'agriculteur d'annuler sa réservation.
- Consulter le statut des réservations.
- Assurer le suivi des locations.

Administration
- Superviser les équipements et les réservations.
- Consulter les demandes de location.
- Contrôler le bon fonctionnement du module.

Technologies utilisées
- Backend : PHP.
- Frontend : HTML, CSS et JavaScript.
- Base de données : MySQL.
- Architecture : MVC (Modèle – Vue – Contrôleur).
- Environnement : Visual Studio Code, XAMPP et phpMyAdmin.
- Gestion de versions : Git et GitHub.

Architecture MVC:
Le module suit le modèle MVC :
- **Model :** représente les données des équipements et des réservations.
- **View :** affiche les équipements, les disponibilités et les formulaires de réservation.
- **Controller :** gère les opérations, les règles métier et les interactions avec la base de données.

 Sécurité et validation:
Le module prévoit :
- La validation des formulaires côté client et côté serveur.
- La vérification des dates de réservation.
- Le contrôle des disponibilités avant toute réservation.
- La protection contre les injections SQL avec des requêtes préparées.
- Le contrôle des accès selon les rôles des utilisateurs.

 Installation et exécution:
1. Prérequis:
- XAMPP (Apache et MySQL).
- PHP.
- MySQL.
- Visual Studio Code (recommandé).
- Git.

2. Récupération du projet:
git clone https://github.com/MedMoalla/ProjectWeb_ESPRIT2A13.git

 3. Configuration:
- Placer le projet dans le dossier htdocs de XAMPP.
- Démarrer Apache et MySQL.
- Créer et configurer la base de données.
- Importer le fichier SQL du projet depuis phpMyAdmin.
- Vérifier les paramètres de connexion à la base de données.

4. Lancement:
Accéder au projet depuis le navigateur :
http://localhost/ProjectWeb_ESPRIT2A13/

État du module:
Module M4 – Location d’équipements, développé dans le cadre du projet académique AgriNoVa à ESPRIT.

AgriNoVa – L'intelligence au service de la terre.

Membre: Mohamed Mahdi Dhaouadi
