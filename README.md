# mini-T2: Système de Gestion d'Inventaire (Laravel/Livewire)
mini Application CRUD de gestion de familles d'articles, via l'architecture Laravel.

# 🚀 Mise en Place et Démarrage du Projet

Ce document fournit les instructions nécessaires pour installer les dépendances, configurer la base de données et démarrer l'environnement de développement de l'application.

---

## 1. ⚙️ Prérequis

Assurez-vous d'avoir les outils suivants installés sur votre machine :

* **PHP** (version 8.3.26 )
* **Composer** (version 2.8.4)
* **Node.js** et **npm** (ou Yarn)
* ** maatwebsite/excel** (version 3.1)
* **Data Base SQL** (MySQL 8.4.3)

---

## 2. 📋 Installation du Projet

### A. Configuration de l'Environnement

1.  **Cloner le dépôt** :
    ```bash
    git clone [URL_DE_VOTRE_DEPOT]
    cd [NOM_DU_DOSSIER]
    ```

2.  **Générer la clé d'application** :
    ```bash
    php artisan key:generate
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

2.  **Exécuter les Seeders** (peuple la base de données avec des données aléatoire/de test) :
    ```bash
    php artisan db:seed
    ```

### B. Compilation et Lancement

1.  **Compiler les assets (Vite)** :
    Lancer la commande de développement pour compiler et surveiller les assets CSS/JS. **Ceci est essentiel pour Livewire** :
    ```bash
    npm run dev
    ```
    ->.  **Compiler mode production** :
        Le processus de build est l'étape où vos fichiers sources (souvent nombreux, non optimisés, et destinés au développement) sont transformés en un petit ensemble de fichiers          finaux, prêts pour la mise en ligne. :
        ```bash
        npm run build
        ```

2.  **Lancer le serveur de développement Laravel** :
    Ouvrez un **nouveau terminal** et démarrez le serveur :
    ```bash
    php artisan serve
    ```

(recommandation) : https://laragon.org

L'application devrait être accessible à l'adresse **`http://t2.test`** (ou l'URL fournie par Laravel).

---

## 4. ⌨️ Commandes Utiles

| Commande | Description |
| :--- | :--- |
| `php artisan optimize:clear` | Efface le cache (configuration, routes, vues). Utile après de gros changements. |
| `npm run build` | **Compile et minifie les assets** pour la mise en production. |
| `composer dump-autoload` | Met à jour l'autochargement de Composer. |

