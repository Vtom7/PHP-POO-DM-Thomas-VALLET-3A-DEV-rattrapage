# DM PHP OOP rattrapage

## 📌 Description
Ce projet est une réécriture orientée objet (POO) d’un script PHP initialement écrit de manière impérative.

L’objectif principal est de conserver exactement le même comportement fonctionnel tout en améliorant la structure du code grâce à la programmation orientée objet.

## 🧠 Fonctionnement
- Lecture du fichier `input.csv`
- Séparation des valeurs en deux listes (gauche / droite)
- Export des listes triées dans `sortedInput.json`
- Calcul du score de similarité
- Affichage du résultat dans le terminal

## 📂 Arborescence sur la branche php-oop-2
```
├── 📂 src/
│   ├── Application.php                   # Orchestre l’exécution globale
│   ├── 📂 Csv/
│   │    └── CsvReader.php                # Lecture du fichier CSV
│   ├── 📂 Domain/
│   │    ├── CsvInput.php                 # Contenu des données du CSV
│   │    └── SimilarityCalculator.php     # Calcul du score de similarité
│   ├── 📂 Service/
│   │    ├── InputProcessor.php           # Transformation et tri des données
│   │    ├── InputSorter.php              # Transformation et tri des données
│   │    └── JsonExporter.php             # Export des données triées en JSON
├── input.csv                             # Fourniture des données
├── sortedInput.json                      # Conservation des données triées
└── index.php                             # Point d’entrée de la classe **Application**
```

## ▶️ Exécution
Depuis le terminal, lancer la commande : `php index.php`

Le résultat du calcul s’affiche directement dans le terminal.
