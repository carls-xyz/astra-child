# Astra Child — thème enfant WordPress

Thème enfant pour le thème WordPress [Astra](https://wpastra.com/), créé pour un site portfolio. Il remplace entièrement le header et le footer d'Astra par un markup personnalisé, sans toucher au thème parent.

## Ce que fait le thème

- **`functions.php`**
  - Charge la feuille de style du thème enfant après celle d'Astra
  - Supprime toutes les actions du hook `astra_header` et injecte un header maison (titre + navigation Accueil, À propos, Projets, Contact)
  - Fait de même sur `astra_footer` avec un footer en grille (liens, réseaux, copyright dynamique)
- **`style.css`** : en-tête du thème enfant (`Template: Astra`) et styles du header et du footer

Le fichier `astra-child.zip` est l'archive prête à installer.

## Installation

1. Installer et activer le thème **Astra** dans WordPress.
2. Dans *Apparence > Thèmes > Ajouter*, téléverser `astra-child.zip`, ou copier le dossier dans `wp-content/themes/astra-child/`.
3. Activer **Astra Child**.

Les liens du menu pointent vers des pages nommées Accueil, À propos, Projets et Contact : à créer ou à adapter dans `functions.php`.
