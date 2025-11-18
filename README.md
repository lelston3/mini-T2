# mini-T2
mini Application CRUD de gestion de familles d'articles, via l'architecture Laravel.

# 🚀 Mise en Place et Démarrage du Projet Laravel/Livewire

Ce document fournit les instructions nécessaires pour installer les dépendances, configurer la base de données et démarrer l'environnement de développement de l'application.

---

## 1. ⚙️ Prérequis

Assurez-vous d'avoir les outils suivants installés sur votre machine :

* **PHP** (version 8.1 ou supérieure recommandée)
* **Composer**
* **Node.js** et **npm** (ou Yarn)
composer require maatwebsite/excel
Using version ^1.1 for maatwebsite/excel
* **Serveur de base de données** (MySQL, MariaDB, SQLite, etc.)

---

## 2. 📋 Installation du Projet

### A. Configuration de l'Environnement

1.  **Cloner le dépôt** :
    ```bash
    git clone [URL_DE_VOTRE_DEPOT]
    cd [NOM_DU_DOSSIER]
    ```

2.  **Créer le fichier d'environnement** :
    ```bash
    cp .env.example .env
    ```

3.  **Générer la clé d'application** :
    ```bash
    php artisan key:generate
    ```

4.  **Configurer la base de données** :
    Ouvrez le fichier `.env` et mettez à jour les variables de connexion (exemple pour MySQL) :
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=votre_nom_de_base
    DB_USERNAME=votre_utilisateur
    DB_PASSWORD=votre_mot_de_passe
    ```

### B. Installation des Dépendances

1.  **Dépendances PHP (Composer)** :
    ```bash
    composer install
    ```

2.  **Dépendances JavaScript (npm)** :
    ```bash
    npm install
    ```

---

## 3. 🌐 Démarrage de l'Application

### A. Initialisation de la Base de Données

1.  **Exécuter les migrations** (crée les tables) :
    ```bash
    php artisan migrate
    ```

2.  **Exécuter les Seeders** (peuple la base de données avec des données initiales/de test) :
    ```bash
    php artisan db:seed
    ```

### B. Compilation et Lancement

1.  **Compiler les assets (Vite)** :
    Lancer la commande de développement pour compiler et surveiller les assets CSS/JS. **Ceci est essentiel pour Livewire** :
    ```bash
    npm run dev
    ```

2.  **Lancer le serveur de développement Laravel** :
    Ouvrez un **nouveau terminal** et démarrez le serveur :
    ```bash
    php artisan serve
    ```

L'application devrait être accessible à l'adresse **`http://127.0.0.1:8000`** (ou l'URL fournie par Laravel).

---

## 4. ⌨️ Commandes Utiles

| Commande | Description |
| :--- | :--- |
| `php artisan optimize:clear` | Efface le cache (configuration, routes, vues). Utile après de gros changements. |
| `npm run build` | **Compile et minifie les assets** pour la mise en production. |
| `composer dump-autoload` | Met à jour l'autochargement de Composer. |

