# Projet de fin de formation

## Objectif

Le projet de fin de formation doit permettre de mettre en pratique le maximum de notions vues au cours de la formation. Il doit également servir à expérimenter de manière concrète la collaboration au sein d'une équipe de développeurs.

## Taille et composition des équipes

* 1 seul développeur : ce n'est pas une équipe.
* 2 développeurs : légèrement déconseillé car la prise de décisions à 2 est parfois plus compliquée et pourrait pénaliser le projet
* 3 développeurs : bonne taille d'équipe
* 4 développeurs : taille d'équipe idéale, limite le nombre de projets différents que le formateur doit suivre, permet de faire de la vraie gestion de projet avec répartition des tâches, répartition des rôles, etc.
* 5 développeurs : grand maximum car à 5 ce sera déjà compliqué de répartir le travail de manière équitable et mettre tout le monde d'accord

Les équipes sont choisies par les étudiants, sauf si le formateur juge utile de les composer lui-même. 

## Types de projets et validation du formateur

Chaque équipe doit réfléchir au projet qu'elle souhaite développer tout en gardant à l'esprit les recommandations suivantes :
* Le projet devrait faire appel à des notions de Back-office et de Front-office
* Une base de données devrait être utilisée
* La partie Front-office devrait être intégrée en utilisant les techniques du Responsive Web Design
* Le code PHP devrait être organisé selon l'architecture MVC en utilisant le framework Symfony 5
* Le code PHP devrait être orienté objet
* Le code JavaScript devrait faire appel à au moins une API externe, ou à défaut, intégrer des fonctionnalités AJAX
* Le code HTML/CSS devrait être valide et accessible
* Le projet devrait permettre de mettre en pratique quelques notions liées à la sécurité, par exemple le hashage des mots de passe ou encore des mesures permettant d'éviter des attaques de type "Injection SQL"

En dehors de ces recommandations, les projets peuvent porter sur n'importe quel sujet qui intéresse l'équipe (cf. "Exemples de projets").

Une fois trouvée l'idée de projet, les étudiants la transmettent au formateur en lui détaillant :
* Le nom du projet s'il a déjà été trouvé
* Le but du site ou de l'application web qu'ils souhaitent réaliser
* Les fonctionnalités principales
* Les recommandations que l'équipe s'engage à mettre en pratique
* Les membres de l'équipe et les grandes lignes de la répartition des rôles

Sur la base de ces informations, le formateur pourra valider le projet, proposer des modifications ou le déconseiller fortement s'il s'écarte de manière trop importante des recommandations et de l'esprit général des projets tel qu'il est décrit dans ce document.


## Périmètre fonctionnel du projet

La liste complète des fonctionnalités que l'équipe souhaite intégrer au projet représente le périmètre fonctionnel. Celui-ci doit être réalisable dans le temps à disposition, généralement une quinzaine de jours.

**Il est fondamental de ne pas surcharger le projet de fonctionnalités que l'équipe n'aura pas le temps de développer.**

Voici une méthode parmi d'autres qui peut aider à déterminer une liste de fonctionnalités réalisable :
* Brainstorming général afin que tous les membres de l'équipe puissent proposer des fonctionnalités
* Pour chaque fonctionnalité on nomme un développeur qui en serait le responsable
* Chaque développeur fait une estimation du temps qu'il mettrait à développer chacune des fonctionnalités dont il est le responsable (cf. "Estimation du temps nécessaire pour chaque fonctionnalité")
* Grâce à l'estimation du temps disponible, l'équipe est en mesure de retenir uniquement les fonctionnalités qui peuvent être développées de manière réaliste

## Estimation du temps disponible

Le temps disponible correspond au nombre d'heures que chaque développeur pourra consacrer au développement du projet. Il se détermine en additionnant :
* les heures en classe en présence du formateur
* les heures que chacun est prêt à mettre dans le projet en soirée (peut être variable d'un jour à l'autre en fonction des contraintes de chacun)
* les heures sur les jours fériés ou weekends (peut être variable d'un jour à l'autre en fonction des contraintes de chacun)

**Conseil important** : tout le temps disponible ne doit pas être consacré au développement des fonctionnalités. D'une manière générale, il faut compter 4/5 du temps disponible pour le développement des fonctionnalités et 1/5 pour :
* imprévus
* debuggage
* petites fonctionnalités non planifiées mais indispensables
* préparation de la présentation du projet

## Estimation du temps nécessaire pour chaque fonctionnalité

Pour estimer le temps nécessaire à la réalisation d'une fonctionnalité, il peut être utile de découper la fonctionnalité en sous-parties. Par exemple, pour une fonctionnalité "Formulaire d'inscription avec création d'un compte utilisateur" :
* Réfléxion sur la liste des champs à faire figurer sur le formulaire
* Intégration HTML/CSS du formulaire
* Validation des champs en JavaScript et gestion des erreurs
* Validation des champs en PHP et gestion des erreurs
* Hashage du mot de passe
* Stockage des informations dans la base de données
* Envoi d'un mail permettant de valider l'adresse mail
* Envoi d'un mail de confirmation
* Tests et évaluation de l'accessibilité du formulaire
* Vérification de la validité du code HTML/CSS
* Tests de fonctionnement par un membre de l'équipe n'ayant pas contribué au développement du formulaire

Chaque sous-partie est estimée individuellement et la somme permet de déterminer le temps de la fonctionnalité.

**Conseil très important** : quand on pense avoir déterminé le temps nécessaire au développement d'une fonctionnalité, **on le multiplie par 2 !** :) Il est largement préférable de se tromper en excès et avoir du temps en plus pour développer de nouvelles fonctionnalités plutôt qu'en défaut et devoir bâcler le projet et faire l'impasse sur des fonctionnalités qui avaient initialement été prévues.

## Exemples de projets

À titre d'exemple, voici des projets réalisés par des étudiants :
* Site d'offres d'emploi permettant la mise en relation entre candidats et entreprises
* Site de mise en relation entre touristes et artisans locaux
* Proposition d'extranet pour la WebForce3
* Plateforme inspirée de Stackoverflow permettant aux étudiants WebForce3 de valoriser l'aide qu'ils pouvaient apporter à d'autres étudiants
* Site d'une bibliothèque en ligne, avec catalogue, livraison en point-relais et gestion de paiements de retard
* Site inspiré d'Allo-Ciné, avec listes utilisateurs de "films à voir"
* Clone de Twitter

## Commercialisation des projets et propriété intellectuelle

Il arrive que certains projets de fin de formation aient une véritable finalité commerciale et que les étudiants souhaitent poursuivre son développement après la formation. Il leur appartient de prendre en considération les aspects relatifs à la protection de leur propriété intellectuelle et à l'éventuelle constitution d'une entité juridique.

Dans tous les cas, **la WebForce3 n'est jamais propriétaire du code source** et des autres éléments des projets développés par ses étudiants.

Le formateur peut conseiller les étudiants sur ces aspects s'il en a les compétences mais son avis ne pourra pas se substituer à celui d'un juriste, d'un expert-comptable ou d'un avocat.

## Versioning

Tous les projets devront utiliser Git pour leur versioning. Chaque équipe est libre de choisir la plateforme qu'elle préfère (GitHub, Bitbucket, etc.). 

À l'intérieur de chaque équipe, chaque développeur est libre d'utiliser le client Git qu'il préfère qu'il soit en ligne de commande ou avec interface graphique (GitHub, SourceTree, etc.).

Chaque équipe doit donner un accès au dépôt (au moins en lecture) au formateur. Si l'équipe souhaite poursuivre le développement du projet après la formation, cet accès pourra être retiré (cf. "Commercialisation des projets et propriété intellectuelle").

## Rôles du formateur

Le formateur a pour rôle d'aider les étudiants à trouver leurs projets et à les conseiller afin que la partie de la formation dédiée au projet soit la plus utile possible d'un point de vue pédagogique. Il jouera davantage un rôle de tuteur bienveillant que celui de formateur. Il n'ira pas jusqu'à interdire un projet car les étudiants eux-mêmes ont la responsabilité du projet qu'ils souhaitent développer, mais il n'hésitera pas à mettre en garde très clairement sur les éventuelles difficultés et inconvénients que de tels projets pourraient contenir.

Durant le développement du projet, le formateur restera disponible pour répondre aux questions et aborder, si nécessaire, des notions utiles à tel ou tel projet qui n'ont pas été abordées pendant les cours.

En cas de difficulté ou bug coriace, le formateur pourra conseiller les équipes sur les meilleures méthodes de résolution des problèmes mais évitera autant que possible de faire le travail de correction à la place des étudiants. Certainement, il ne participera pas au développement des fonctionnalités du projet.

Le formateur se renseignera régulièrement sur l'état d'avancement de chaque projet et pourra alerter en cas de retard ainsi que recommander d'éventuelles simplifications afin que les délais soient tenus. Il pourra demander à tout moment un état de l'avancement de chaque projet, soit à l'oral, soit à l'écrit.

Le formateur veillera à ce que son temps soit réparti de manière équitable entre les différents projets.

## Présentation finale

Lors du dernier jour de la formation, les équipes présenteront leur projet au reste de la classe, au formateur et aux membres de la direction WebForce3 qui seront présents.

Ces présentations se dérouleront de 14h30 à 17h30. La durée de chaque présentation devra permettre à toutes les équipes de disposer du même temps de présentation.

Les présentations devront porter sur les aspects suivants :
* Description du projet (avec ou sans slides)
* Présentation des différents membres de l'équipe et leurs rôles respectifs
* Démonstration
* Difficultés rencontrées au cours du projet
* Éventuelles perspectives d'évolution du projet après la formation
* Questions/réponses avec le public
