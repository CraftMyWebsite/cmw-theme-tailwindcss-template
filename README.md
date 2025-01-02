# Qu'est-ce que c'est ? 🧐

Ce projet est un *template*, c'est-à-dire une base sur laquelle vous pouvez travailler, mais certaines modifications sont nécessaires :

Le nom du thème par défaut est **Tailwind**, à vous de choisir et de remplacer ce nom par celui que vous souhaitez.

---

## À savoir ! 📚
Ce projet **doit** être placé dans le répertoire suivant : `/Public/Themes/Xxxxx`.

---

## Avant de commencer 🚀
Il est préférable de `"Fork"` ce projet sur vos repo pour enregistrer vos changements sur GitHub

Assurez-vous d'avoir installé les dépendances nécessaires avec la commande :
```bash
npm install
```

---

## Instructions de configuration ⚙️

### 1. Renommer le thème
Si votre thème s'appelle **Xxxxx**, remplacez toutes les occurrences de **Tailwind** par **Xxxxx** comme suit :

#### Nom du dossier
- Renommez le dossier de votre thème en **Xxxxx**.

#### `Theme.php`
- Dans le fichier `Theme.php` (à la racine du thème) :
    - Remplacez le namespace `Tailwind` par `Xxxxx`.
    - Modifiez le retour de la fonction `name()` pour refléter le nom de votre thème : `Xxxxx`.
    - Facultatif : changez également l'auteur et la version si besoin.

### 2. Configuration de TailwindCSS
Rendez-vous dans le fichier `Resources/tailwind.config.js` :
- Dans le tableau `content`, mettez à jour le chemin pour qu'il corresponde à votre thème :
    - Remplacez `Tailwind` par `Xxxxx`.

### 3. Mise à jour du compilateur
Modifiez le fichier `package.json` comme suit :
- **Ligne 7 :** Remplacez `Tailwind` par `Xxxxx`.  
  Cela vous permettra de compiler TailwindCSS pour ce thème avec la commande :
  ```bash
  npm run Xxxxx
  ```
- **Ligne 7 :** Remplacez les chemins contenant `Tailwind` par `Xxxxx`.  
  Exemple :
  ```text
  ../../../Public/Themes/Tailwind/Resources/input.css
  ```
  devient :
  ```text
  ../../../Public/Themes/Xxxxx/Resources/input.css
  ```
  Répétez cette opération pour les 3 chemins concernés (input, output, config).


### 4. `cssgenerator.html`
Le fichier `cssgenerator.html` est crucial. Il force la création de styles obligatoires, notamment pour les polices de caractères. Veillez à bien l'utiliser pour garantir la cohérence de vos styles.

---

### Bonus 🎁
Nous avons intégré la bibliothèque **Flowbite** pour faciliter le développement de vos thèmes avec **TailwindCSS**.

Nous avons préchargé des webfonts et ajouté une configuration administrateur dans le panel pour changer la police utilisée.

Nous vous expliquons également comment mettre en place des couleurs à personnaliser dans le dashboard (voir head.inc.php : root, input.css, config.php et config.settings.php)

Nous avons pré intégrer un switcher light/dark qui par defaut est inactif (rendez-vous dans `head.inc.php` `header.inc.php` et `footer.inc.php` pour en savoir plus  )

---

### Tips : Ajouter des polices ✏️

Pour ajouter de nouvelles polices d'écriture, suivez ces quelques étapes :

1. **Ajouter le fichier de police**  
   Copiez le fichier `Regular.ttf` de votre police dans le répertoire suivant :  
   `/Assets/Webfonts/*`.

2. **Modifier le fichier `head.inc.php`**  
   Ajoutez un lien vers votre nouvelle police en vous basant sur les exemples précédents.

3. **Configurer Tailwind CSS**  
   Ouvrez le fichier `tailwind.config.js` et, dans `theme > extend > fontFamily`, ajoutez votre police en suivant les exemples précédents.

4. **Forcer la compilation des classes**  
   Dans `cssgenerator.html`, forcez la compilation de la classe liée à votre police pour qu'elle ne soit pas ignorée. Exemple :`class="font-NewFont"`

5. **Ajouter la police dans les choix utilisateur**
    
    Mettez à jour `config.php` pour inclure la nouvelle police dans les options utilisateur

---

### Conclusion 🎉
Vous êtes maintenant prêt à créer votre thème avec **TailwindCSS** et **Flowbite**. Pour vous assurer que tout fonctionne, activez votre thème et vérifiez que le texte "footer" (copyright) apparaît en bas de la page. Si c'est le cas, votre projet est prêt. Sinon, rapprochez-vous du support de CraftMyWebsite sur [Discord](https://craftmywebsite.fr/discord)