# BookMarket

## 📖 Préambule

Jeune entrepreneur passionné par le développement Web, vous avez récemment lancé votre propre société spécialisée dans le développement de solutions Web et Web Mobile.

**Monsieur Dupont**, un nouveau client, partage également cet esprit entrepreneurial. Monsieur Dupont est un grand amateur de **littérature** et a créé une petite entreprise qui met en relation des particuliers souhaitant vendre des livres d'occasion avec des acheteurs potentiels.

Aujourd'hui, M. Dupont perd beaucoup de temps à rechercher des livres spécifiques pour ses clients en contactant directement ses partenaires. Il passe de nombreux appels, envoie des emails, et tout cela de manière manuelle. Cela nuit à l'efficacité de son activité et il souhaite automatiser et numériser cette partie de son business pour pouvoir se consacrer pleinement à la négociation avec les vendeurs et les acheteurs. 

De plus, en mettant en avant la seconde main des livres d'occasion, ce projet s'inscrit également dans une démarche d'**éco-conception** et de **green IT**, contribuant ainsi à la réduction de l'empreinte carbone liée à la production de nouveaux livres. 🌱📚

M. Dupont vous explique qu'il aimerait une **plateforme en ligne** où ses partenaires professionnels pourraient directement mettre en ligne des annonces de livres. Les clients pourraient alors consulter ces annonces, et si un livre les intéresse, M. Dupont interviendrait pour négocier l'achat au meilleur prix. L'objectif est de libérer du temps pour M. Dupont tout en augmentant la visibilité de ses services sur Internet. 

Séduit par ce challenge et confiant en vos compétences, vous vous engagez à développer cette plateforme qui, vous en êtes sûr, représentera un tournant décisif pour votre jeune entreprise de développement Web.

## 🎯 Objectifs

L'objectif principal du projet est de développer une plateforme fonctionnelle, démontrant les compétences acquises tout au long de la formation, et permettant à M. Dupont de centraliser la gestion de ses annonces de livres. Ce projet sera également un atout pour votre portfolio, démontrant votre capacité à gérer un projet de bout en bout.

Le business case vous permettra de :
* Gérer votre temps et prioriser les tâches à effectuer.
* Maquetter et prototyper un besoin client avec des outils comme Figma.
* Définir et conceptualiser une base de données pour répondre aux besoins spécifiques du client.
* Intégrer une maquette en utilisant des technologies web frontend.
* Créer une API avec une technologie web backend.
* Déployer une solution sur un serveur distant pour la rendre disponible à M. Dupont.

Il vous permettra également de :
* Gérer une authentification pour sécuriser l'accès des professionnels, des clients et de l'administrateur.
* Gérer des rôles utilisateurs avec différents niveaux d'accès.
* Comprendre et traiter un besoin client, en l'interprétant et en le traduisant en un projet numérique.
* Monter en compétences sur un projet concret utilisant les technologies imposées.
* Appréhender la complexité de la gestion d'un projet complet, de l'analyse initiale à la mise en production.

## 📝 Fonctionnalités

La plateforme **BookMarket** sera divisée en deux parties :
* Le `front` office
* Le `back` office

Le **front office** sera accessible publiquement. Tous les visiteurs accéderont à une page principale présentant les annonces de livres disponibles. Cette page comprendra une barre de recherche avec des filtres (genre, auteur, prix, etc.).

Une page d'authentification permettra aux professionnels et clients de se connecter pour gérer leurs annonces ou avoir un récapitulatif de leurs achats. Les visiteurs, quant à eux, pourront consulter les détails des annonces sans avoir besoin de créer un compte. Si un visiteur est intéressé par un livre, il pourra mettre ce livre dans son panier (seulement s’il se connecte). 

Le **back office** sera réservé à M. Dupont et lui permettra de gérer l'ensemble des informations sur la plateforme, y compris la gestion des utilisateurs professionnels, des livres, et des catégories. Il pourra également consulter des statistiques rapides (nombre de professionnels inscrits, nombre de livres en vente, etc.) et gérer les relations entre les entités.

## 📐Maquettage 

Vous devrez fournir les maquettes suivantes à M.Dupont :
* `Vue principale` : Liste des livres avec une barre de recherche permettant de filtrer par genre, auteur, prix, etc.
* `Vue « Mon profil »` : Espace permettant aux professionnels/clients de gérer leurs annonces, avoir un historique d’achat.
* `Vue d'une annonce détaillée` : Page affichant les détails complets d'un livre lorsqu'un utilisateur clique sur une annonce.
* `Vue « Gérer mon compte »` : Interface permettant à un professionnel/client de modifier ses informations personnelles.

Le projet comportera également des pages obligatoires telles que les **CGU**, les **mentions légales**, et la **politique de confidentialité**.

**Détails de la vue principale :**
* Une barre de recherche avec des filtres pour le genre, l'auteur, le prix, etc.
* Une liste d'annonces comprenant une photo de couverture, le titre, un résumé, la personne/entreprise qui propose l'annonce, et le prix du livre.
* Les annonces seront triées par date de mise en ligne, de la plus récente à la plus ancienne, avec une pagination pour alléger la charge sur les requêtes.

**Détails de la vue « Mon profil » :**
* Gérer son compte (modifier les informations personnelles).
* Gérer ses annonces (ajouter, modifier, supprimer des livres).
* Gérer les demandes des clients.
* Se déconnecter.

Il est impératif de concevoir la plateforme **BookMarket** en respectant les bonnes pratiques d'accessibilité numérique. Cela inclut l'utilisation de balises sémantiques, la mise en place d'alternatives textuelles pour les images, une navigation intuitive pour les utilisateurs de lecteurs d'écran, et le respect des contrastes de couleurs. L'objectif est de rendre la plateforme accessible à tous, y compris aux personnes en situation de handicap, conformément aux standards WCAG (Web Content Accessibility Guidelines). Cette attention à l'accessibilité permettra de toucher une audience plus large et d'assurer une meilleure expérience utilisateur pour tous.

💾 Conception de la base de données

M. Dupont a partagé les informations suivantes pour créer la base de données :

* `Professionnels` : Lors de la création de leurs comptes, M.Dupont devrait accepter leurs inscriptions, qui validera la création de leurs comptes depuis le back office. Les informations requises incluent : Nom, Prénom, Adresse e-mail, Mot de passe, N° de téléphone, Nom de l’entreprise (s’il y a), Adresse de l’entreprise (s’il y’a).
* `Livres` : Chaque professionnel pourra proposer un ou plusieurs livres, chacun avec des informations telles que le titre, l'auteur, le genre, le prix, la description, et une photo de couverture.
* `Utilisateur` : Création de compte classique pas besoin de vérification côté de M.Dupont. Les informations requises sont : Nom, Prénom, Adresse e-mail, Mot de passe.
* `Achat` : Pour pouvoir avoir un historique des factures, les informations requises sont : le ou les livre(s) acheté(s), le prix total, la date d’achat, la personne qui a acheté
* `Genres et auteurs` : Ces informations seront proposées sous forme de listes déroulantes pour éviter les erreurs de saisie.
* `Barre de recherche` : La recherche permettra de filtrer par genre, auteur, prix, et autres critères.

## 🔐 Authentification

M. Dupont souhaite que l'authentification soit sécurisée, les mots de passe seront hashés et les emails uniques pour garantir la sécurité des données.

## 🌐 SEO & Analytics

M. Dupont souhaite optimiser le référencement naturel (SEO) de la plateforme pour attirer plus de visiteurs et élargir sa clientèle. Vous devrez également utiliser Google Analytics pour fournir des rapports hebdomadaires sur le trafic du site.

## 🛠️ Back Administration

Le back office permettra à M. Dupont de gérer les utilisateurs, les annonces, et les catégories de livres. Il pourra créer, modifier, et supprimer des annonces, tout en gardant un œil sur les statistiques clés.

Il sera également possible de rechercher une annonce spécifique par son titre ou son id, pour faciliter les recherches lors de la mise en relation avec les clients.

## 🚀 Réalisation du Projet

L'intégralité du projet sera réalisée de manière individuelle :
* **Front office et back office** : réalisés en utilisant HTML & CSS dans un premier temps. Puis React pour l'interface utilisateur et Tailwind pour le design.
* **Backend API** : développé avec PHP PDO puis par la suite Symfony et MySQL pour la gestion des données.

C’est un projet qui vous suivra tout au long de l’année de formation, que vous allez reprendre à chaque nouvelles technologies que vous allez apprendre. Pour l’adapter et l’améliorer par rapport à vos nouvelles connaissances. Si vous voulez aller plus loin, vous pourrez y apporter des nouvelles idées ou fonctionnalités selon vos envies et réflexions. 

Dans la prochaine section, le projet vous sera présenté sous une forme inspirée d'un cahier des charges, comme sur un vrai projet 💪

➡️ [Cahier des charges](./cahier-des-charges.md)
