# WebSite_Fast_food
#  NueveFood — Documentation Technique

> Site web de restauration rapide · Commande en ligne · Livraison à domicile  


---

## Table des matières

1. [Présentation générale](#1-présentation-générale)
2. [Architecture et structure des fichiers](#2-architecture-et-structure-des-fichiers)
3. [Sections de la page d'accueil](#3-sections-de-la-page-daccueil-indexhtml)
4. [Navigation et pages liées](#4-navigation-et-pages-liées)
5. [Catalogue des produits](#5-catalogue-des-produits)
6. [L'équipe NueveFood](#6-léquipe-nuevefood)
7. [Blog](#7-blog)
8. [Formulaire de commande](#8-formulaire-de-commande-livraison-à-domicile)
9. [Pied de page (Footer)](#9-pied-de-page-footer)
10. [Ressources externes](#10-ressources-externes)
11. [Points à améliorer](#11-points-à-améliorer)
12. [Résumé exécutif](#12-résumé-exécutif)

---

## 1. Présentation générale

**NueveFood** est un site web de restauration rapide (fast food) offrant une présence en ligne complète avec présentation de l'enseigne, affichage du menu, galerie de plats, blog, et un système de commande en ligne avec livraison à domicile.

### 1.1 Objectifs du site

- Présenter l'enseigne NueveFood et son histoire
- Mettre en avant le menu avec prix et promotions
- Permettre la commande directe en ligne
- Afficher une galerie des plats les plus populaires
- Informer via un blog sur les actualités et spécialités
- Fournir les informations de contact et de localisation

### 1.2 Technologies utilisées

| Technologie | Version | Utilisation |
|---|---|---|
| HTML5 | Standard W3C | Structure sémantique de toutes les pages |
| CSS3 | Standard W3C | Mise en page, animations, responsive design |
| JavaScript | Vanilla JS | Interactions, animations, comportement DOM |
| Font Awesome | v6.2.0 | Icônes vectorielles (burger, camion, étoiles…) |
| Google Fonts | CDN | Typographie web personnalisée |

---

## 2. Architecture et structure des fichiers

### 2.1 Arborescence du projet

```
nueve-food/
├── index.html          ← Page d'accueil principale
├── about.html          ← Page À propos
├── menu.html           ← Page Menu complet
├── gallery.html        ← Galerie de photos
├── blog.html           ← Blog de l'enseigne
├── login.html          ← Page de connexion
├── paiement.html       ← Page de paiement
├── style.css           ← Feuille de styles globale
└── image/              ← Dossier des images
    ├── logo_nueve2.png
    ├── main_img.png
    ├── about.png
    ├── menu_1.jpg
    ├── menu_2.jpg
    ├── menu_3.png
    ├── Makemba.jpg
    ├── Fumbwa.jpg
    ├── Riz.jpg
    ├── offer_1.jpg
    ├── offer_2.png
    ├── blog_1.jpeg
    ├── blog_2.jpg
    ├── blog_3.jpg
    ├── Nueve_2.jpeg
    ├── Kayzer.jpeg
    ├── team_3.jpg
    ├── team_4.jpg
    └── oder.png
```

### 2.2 Description des fichiers principaux

| Fichier | Type | Description |
|---|---|---|
| `index.html` | HTML | Page d'accueil — contient toutes les sections principales |
| `about.html` | HTML | Page dédiée à la présentation de l'enseigne |
| `menu.html` | HTML | Catalogue complet des plats avec prix |
| `gallery.html` | HTML | Galerie photo des plats et du restaurant |
| `blog.html` | HTML | Articles de blog avec vues, commentaires, likes |
| `login.html` | HTML | Formulaire d'authentification client |
| `paiement.html` | HTML | Interface de paiement et validation commande |
| `style.css` | CSS | Styles globaux partagés par toutes les pages |
| `image/` | Dossier | Toutes les ressources visuelles du site |

---

## 3. Sections de la page d'accueil (index.html)

La page d'accueil est la plus complète du site. Elle regroupe **10 sections distinctes** présentant l'ensemble des fonctionnalités de l'enseigne.

| Section HTML | Classe CSS | Contenu |
|---|---|---|
| `#Home / nav` | `.logo, ul, .login` | Barre de navigation avec logo, liens et bouton connexion |
| `.main .anim` | `.main_text, .main_image` | Hero section : accroche commerciale + image principale + CTA Commander |
| `.about` | `.about_main` | Présentation de l'enseigne : histoire, équipe, valeurs, 3 services icônes |
| `.menu` | `.menu_box, .menu_card` | Aperçu de 3 produits phares : Burger, Boissons, Pizza avec prix et étoiles |
| `.banner` | `.banner_center` | Bandeau promotionnel — mise en avant de la réduction de 50% |
| `.gallery` | `.gallery_box` | Galerie des 3 plats les plus vendus (Makemba, Fumbwa, Riz) |
| `.offer` | `.offer_card_1/2` | 2 offres spéciales : Menu triple -40% et promotion 2 pizzas + boisson |
| `.team` | `.team_box, .team_card` | Présentation des 4 membres de l'équipe culinaire |
| `.blog` | `.blog_box, .blog_card` | 3 articles de blog avec date, statistiques de vues et likes |
| `.oder` | `.oder_form` | Formulaire de commande en ligne avec livraison à domicile |
| `footer` | `.footer_main` | Pied de page : localisation, liens rapides, contact, services, réseaux |

---

## 4. Navigation et pages liées

### 4.1 Menu de navigation

La barre de navigation est présente sur toutes les pages. Elle contient :

- Le **logo** cliquable renvoyant vers `index.html`
- 5 liens de navigation principaux
- Un **bouton de connexion** vers `login.html`

### 4.2 Pages du site

| Page | Description |
|---|---|
| `index.html` | Page d'accueil — Point d'entrée principal du site avec toutes les sections |
| `about.html` | À propos — Histoire complète de l'enseigne, équipe élargie, vision |
| `menu.html` | Menu — Catalogue exhaustif des plats avec catégories, prix et options |
| `gallery.html` | Notre Galerie — Photos professionnelles des plats et du restaurant |
| `blog.html` | Notre Blog — Articles, actualités, nouveautés et conseils culinaires |
| `login.html` | Connexion — Formulaire d'authentification pour les clients enregistrés |
| `paiement.html` | Paiement — Récapitulatif de commande et interface de paiement sécurisé |

### 4.3 Liens d'action (Call-to-Action)

Plusieurs boutons CTA sont présents sur la page et pointent vers `paiement.html` :

- Bouton **« Commander »** dans la section hero (`.btn`)
- Bouton **« Commander »** dans la section About (`.about_btn`)
- Boutons **« Commander »** sur chaque carte menu (`.menu_btn`)
- Bouton **« Commander »** sur la bannière promotionnelle (`.banner_btn`)
- Boutons **« Commander »** sur les offres spéciales (`.offer_btn`)
- Bouton **« Commander »** dans le formulaire de commande (`.oder_btn`)

---

## 5. Catalogue des produits

### 5.1 Menu affiché sur la page d'accueil

| Produit | Image source | Prix actuel | Prix barré | Note |
|---|---|---|---|---|
| Burger | `image/menu_1.jpg` | $7.00 | ~~$12.00~~ | ⭐ 4.5/5 |
| Boissons | `image/menu_2.jpg` | $10.00 | ~~$20.00~~ | ⭐ 4.5/5 |
| Pizza | `image/menu_3.png` | $30.00 | ~~$50.00~~ | ⭐ 4.5/5 |

### 5.2 Plats vedettes (Galerie)

La section « Nos plats les plus vendus » met en avant 3 spécialités locales :

- **Makemba** (`image/Makemba.jpg`)
- **Fumbwa** (`image/Fumbwa.jpg`)
- **Riz** (`image/Riz.jpg`)

### 5.3 Offres promotionnelles

| Offre | Réduction | Détail | Image |
|---|---|---|---|
| Menu triple | **-40%** | Réduction sur le menu triple | `offer_1.jpg` |
| Formule pizza | Boisson offerte | Achetez 2 pizzas, obtenez 1 boisson gratuite | `offer_2.png` |
| Bannière générale | **-50%** | Offre spéciale mise en avant centrale | — |

---

## 6. L'équipe NueveFood

| Nom | Poste | Description | Image |
|---|---|---|---|
| **Nueve** | Cuisinier | Fondateur et ambassadeur de l'enseigne, passionné de saveurs | `Nueve_2.jpeg` |
| **Kayzer** | Grand Cuisinier | Expérience dans des cuisines prestigieuses, niveau d'excellence | `Kayzer.jpeg` |
| **Stella** | Cuisinière | Saveurs audacieuses, apporte élégance et raffinement | `team_3.jpg` |
| **Isaac** | Cuisinier | Chef exécutif avec expérience internationale | `team_4.jpg` |

---

## 7. Blog

La section blog présente 3 articles avec les métadonnées suivantes :

| Date | Titre | Vues | Commentaires | Likes |
|---|---|---|---|---|
| 17 Sept 2022 | Ne passez pas à côté de ça, venez y goûter ! | 1k | 300 | 600 |
| 18 Mai 2022 | Ne partez pas sans y goûter | 150k | 706 | 70k |
| 18 Août 2022 | Ne partez pas sans goûter à nos Tacos | 15.3k | 500 | 10k |

---

## 8. Formulaire de commande (Livraison à domicile)

Le formulaire `.oder` permet aux clients de passer une commande en ligne. Il est divisé en deux colonnes.

### 8.1 Colonne gauche (`.oder_left`)

| Champ | Type | Placeholder |
|---|---|---|
| Votre nom entier | `input[text]` | nueve |
| Numéro de téléphone | `input[number]` | +243978678837 |
| Suppléments | `input[text]` | avec coca |
| Votre adresse | `textarea` | Entrez votre adresse |

### 8.2 Colonne droite (`.oder_right`)

| Champ | Type | Placeholder |
|---|---|---|
| Email | `input[email]` | Nueve@gmail.com |
| Nom du plat | `input[text]` | Pizza |
| Prix | `input[number]` | 3 |
| Votre message | `textarea` | Entrez votre message |

>  **Note :** Le formulaire ne possède pas encore de logique back-end. Le bouton « Commander » est un `<a href="#">` qui ne traite pas les données. Une intégration PHP ou Node.js est recommandée pour le rendre fonctionnel.

---

## 9. Pied de page (Footer)

| Colonne | Contenu |
|---|---|
| **Localisation** | Lubumbashi, Likasi, Kolwezi, Kinshasa, Bas Congo |
| **Accès rapide** | Accueil · À propos · Menu · Galerie · Commande |
| **Contact** | +243 377424444 · +243 902793877 · Emails |
| **Nos Services** | Livraisons · Paiements faciles · Service 24h/7j |
| **Réseaux sociaux** | Facebook · Twitter · Instagram (icônes Font Awesome) |

---

## 10. Ressources externes

| Ressource | Source | Utilisation |
|---|---|---|
| Font Awesome 6.2 | `cdnjs.cloudflare.com` | Icônes (burger, camion, étoile, cœur…) |
| Logo / favicon | `image/logo_nueve2.png` | Icône onglet navigateur |
| Images menu | `menu_1.jpg`, `menu_2.jpg`, `menu_3.png` | Photos des plats du menu |
| Images équipe | `Nueve_2.jpeg`, `Kayzer.jpeg`, `team_3/4.jpg` | Portraits de l'équipe |
| Images blog | `blog_1.jpeg`, `blog_2.jpg`, `blog_3.jpg` | Visuels des articles |
| Images galerie | `Makemba.jpg`, `Fumbwa.jpg`, `Riz.jpg` | Galerie des plats vedettes |

---

## 11. Points à améliorer

### 11.1 Fautes orthographiques relevées

| Erreur trouvée | Correction |
|---|---|
| `Acceuil` | Accueil |
| `Apropos` | À propos |
| `savourrer` | savourer |
| `plkus` | plus |
| `gallerie` | galerie |
| `dispositon` | disposition |
| `raffraichir` | rafraîchir |
| `Oder` | Commande *(anglicisme à éviter)* |

### 11.2 Améliorations recommandées

1. **Back-end formulaire** — Connecter le formulaire de commande à un serveur PHP ou Node.js
2. **Validation JS** — Ajouter une validation côté client sur tous les champs du formulaire
3. **Responsive design** — Implémenter un menu hamburger et un layout mobile
4. **Orthographe** — Corriger toutes les fautes listées ci-dessus
5. **SEO** — Ajouter des balises `<meta>` description, `og:title`, `og:image`
6. **Langue HTML** — Remplacer `lang="en"` par `lang="fr"` sur toutes les pages
7. **Optimisation images** — Convertir en format WebP et ajouter le `loading="lazy"`
8. **Sécurité** — Activer HTTPS pour la protection des données des formulaires

---

## 12. Résumé exécutif

###  Points forts

- Structure HTML bien organisée par sections sémantiques
- Utilisation cohérente de Font Awesome pour les icônes
- Menu de navigation clair et présent sur toutes les pages
- Formulaire de commande détaillé avec de nombreux champs
- Présentation complète de l'équipe avec photos et biographies
- Blog avec métriques d'engagement (vues, commentaires, likes)
- Offres promotionnelles visibles et bien mises en avant

###  Points à corriger

- Formulaire de commande sans back-end (non fonctionnel)
- Fautes orthographiques présentes dans plusieurs sections
- `lang="en"` alors que le contenu est entièrement en français
- Absence de responsive/mobile détectée
- Pas de balises SEO méta
- Images non optimisées (format WebP, lazy loading)
- Liens blog et galerie pointent vers `#` (pages non finalisées)

---

*Documentation générée automatiquement pour le projet NueveFood · 2026*
