# 🗂️ Sprint 1 – Cahier de Texte (Projet Formateur & Responsable)

## 🎯 Objectif du Sprint 1

Mettre en place le système d’authentification, les rôles utilisateurs (`Formateur`, `Responsable`) et permettre aux formateurs de **saisir des séances** de formation.

---

## 📊 Indicateurs de performance (KPI) – Sprint 1

| Indicateur                          | Description                                                               |
|-------------------------------------|---------------------------------------------------------------------------|
| 🆔 Nombre total de formateurs       | Total des comptes formateurs créés dans le système.                       |
| 📝 Nombre total de séances saisies  | Nombre de séances pédagogiques enregistrées par les formateurs.          |
| 📅 Séances planifiées aujourd'hui   | Nombre de séances prévues pour la journée en cours.                      |
| 🔄 Séances modifiées                | Nombre de séances mises à jour après saisie initiale.                    |
| ⏱️ Délai moyen de saisie            | Temps moyen entre l’ouverture du formulaire et la validation.            |
| 📚 Modules les plus saisis          | Modules/formations qui ont le plus de séances enregistrées.             |
| 👤 Formateurs les plus actifs       | Formateurs ayant enregistré le plus de séances.                         |

---

## 📋 Tableau de bord – Sprint 1 (Vue Formateur)

| Zone                    | Contenu                                                                 |
|-------------------------|-------------------------------------------------------------------------|
| **Header**              | Titre : *Tableau de bord – Cahier de texte* + bouton "Nouvelle séance" |
| **Statistiques clés**   |                                                                         |
| - Total formateurs      | `15` actifs                                                             |
| - Séances totales       | `38` saisies                                                            |
| - Séances du jour       | `4` prévues aujourd’hui                                                 |
| - Délai moyen de saisie | `2,4 min`                                                               |
| **Graphique en barres** | Répartition des séances par module (ex : Dev Mobile, Réseau, Dev Web, etc.)  |
| **Liste des séances**   | Tableau des dernières séances : module, date, durée, formateur, action |
| **Top 3 formateurs**    | Classement selon le nombre de séances saisies                          |

---

## ⚙️ Fonctionnalités livrables – Sprint 1

| Fonction                          | Description                                                   | Rôle concerné     |
|----------------------------------|---------------------------------------------------------------|-------------------|
| Authentification Laravel Breeze  | Login sécurisé avec redirection par rôle                      | Tous              |
| Création des rôles               | `Formateur`, `Responsable` via Spatie Permission              | Admin             |
| Formulaire de saisie de séance   | Formateur entre : module, date, heure, durée, description     | Formateur         |
| Affichage tableau de séances     | Liste filtrée des séances avec pagination                     | Formateur         |
| Tableau de bord de suivi         | Visualisation des KPIs de base                               | Responsable       |

---

## 🧪 Technologies utilisées

- Laravel 12 + Breeze
- Spatie Laravel Permission
- Blade / TailwindCSS (ou Vue.js si demandé)

---

Souhaites-tu que je te donne le **Sprint 2** ou un **exemple de code d'implémentation** ?
