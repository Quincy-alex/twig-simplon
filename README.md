# Twig

## Installer Composer

### Sur Windows

Télécharger et installer le [.exe](https://getcomposer.org/Composer-Setup.exe)

### Sur macOS

Dans le terminal :

```bash
brew install composer
```

## Installer le projet

1. Faire un fork du projet.
2. Cloner le projet dans le terminal, dans le dossier de développement

```bash
git clone https://github.com/{username}/twig-simplon
```

3. Installer les dépendances
   Dans le terminal, dans le dossier _twig-simplon_

```bash
composer install
```

4. Dans Visual Studio Code, installer le [plugin Twig](https://marketplace.visualstudio.com/items?itemName=bajdzis.vscode-twig-pack)

## Découverte de Twig

1. Déplacer la `<nav />` dans un template à part et l'**importer** dans _index.html.twig_
2. Utiliser un **layout** pour y mettre la partie du code qui revient systématiquement (`<html/>`, `<head/>`, `<body/>`, `<nav/>`…) et l'implémenter avec _index.html.twig_
3. Afficher la liste des **planètes** contenues dans la variable `planets`
4. En utilisant la variable `isDarkSide`, afficher si le personnage contenu dans la variable `name` est du côté obscur
5. Fouiller un peu la doc
