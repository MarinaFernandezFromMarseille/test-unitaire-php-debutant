# Test Unitaire PHP pour Débutants

Ce projet est conçu pour apprendre et pratiquer les tests unitaires en PHP.

## Installation

Le projet utilise [Composer](https://getcomposer.org/) pour la gestion des dépendances.

1. Clonez le dépôt :
```bash
git clone https://github.com/votre-username/test-unitaire-php-debutant.git
cd test-unitaire-php-debutant
```

2. Installez les dépendances :
```bash
composer install
```

## Structure du Projet

- `src/` : Contient le code source de l'application
- `tests/` : Contient les tests unitaires
- `vendor/` : Contient les dépendances (généré par Composer)
- `composer.json` : Configuration du projet et ses dépendances
- `composer.lock` : Verrouille les versions exactes des dépendances

## Configuration

Le projet est configuré avec :
- PHP 7.4 ou supérieur
- PHPUnit 9.5 pour les tests unitaires
- Autoloading PSR-4 pour les namespaces :
  - `App\` pour le code source
  - `Tests\` pour les tests

## Exécution des Tests

Pour exécuter les tests :
```bash
./vendor/bin/phpunit tests
```