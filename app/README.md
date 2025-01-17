# 📚 **EduBlink**

## 📅 **Description du Projet**
Ce projet est une plateforme de gestion de cours en ligne, où les utilisateurs peuvent s'inscrire, consulter des cours, et les enseignants peuvent ajouter, gérer, et analyser leurs cours. Le projet suit **VC** avec une structure claire de contrôleurs et de vues, et est conçu pour respecter les principes de la programmation orientée objet (OOP).

---

## 🚀 **Fonctionnalités**
### **Partie Front Office**

#### Visiteur
- 🔍 Accès au catalogue des cours avec pagination.
- 🔎 Recherche de cours par mots-clés.
- 📝 Création d'un compte avec le choix du rôle (Étudiant ou Enseignant).

#### Étudiant
- 📚 Visualisation du catalogue des cours.
- 🔍 Recherche et consultation des détails des cours (description, contenu, enseignant, etc.).
- ✍️ Inscription à un cours après authentification.
- 👨‍🏫 Accès à une section “Mes cours” regroupant les cours rejoints.

#### Enseignant
- ➕ Ajout de nouveaux cours avec des détails tels que : titre, description, contenu (vidéo ou document), tags, et catégorie.
- ⚙️ Gestion des cours : modification, suppression, et consultation des inscriptions.
- 📊 Accès à une section “Statistiques” sur les cours : nombre d’étudiants inscrits, nombre de cours, etc.

### **Partie Back Office**

#### Administrateur
- ✅ Validation des comptes enseignants.
- 🛠️ Gestion des utilisateurs : activation, suspension ou suppression.
- 🔧 Gestion des contenus : cours, catégories et tags.
- 📈 Insertion en masse de tags pour gagner en efficacité.
- 📊 Accès à des statistiques globales : nombre total de cours, répartition par catégorie, cours avec le plus d'étudiants, Top 3 enseignants.

### **Fonctionnalités Transversales**
- 🏷️ Un cours peut contenir plusieurs tags (relation many-to-many).
- 🔄 Application du concept de polymorphisme dans les méthodes suivantes : Ajouter cours et afficher cours.
- 🔐 Système d’authentification et d’autorisation pour protéger les routes sensibles.
- 🔒 Contrôle d’accès : chaque utilisateur ne peut accéder qu’aux fonctionnalités correspondant à son rôle.

---

## 🛠️ **Technologies Utilisées**
- **Backend** : PHP
- **Base de données** : MySQL
- **Frontend** : HTML, CSS, JavaScript (Bootstrap pour la mise en page responsive)
- **Sécurité** : Sessions PHP, Hashage de mot de passe, Protection contre XSS, prévention des injections SQL, token CSRF

---

## 📂 **Structure des Fichiers**

```plaintext
project/
│
├── config/                 # Fichiers de configuration
│   ├── config.php          # Configuration générale
│   ├── database.php        # Configuration de la base de données
│   └── auth.php            # Authentification et sessions
│
├── controllers/            # Contrôleurs (logique métier)
│   ├── AuthController.php
│   ├── CourseController.php
│   ├── UserController.php
│   ├── AdminController.php
│   └── StatsController.php
│
├── models/                 # Modèle vide selon la structure demandée
│
├── views/                  # Vues (interface utilisateur)
│   ├── auth/
│   ├── courses/
│   ├── teacher/
│   ├── admin/
│   └── layouts/
│
├── public/                 # Dossier public (index.php et assets)
│   ├── index.php           # Point d'entrée
│   └── assets/             # CSS, JS, images
│
└── .htaccess               # Configuration du serveur web
