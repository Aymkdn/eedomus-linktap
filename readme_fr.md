# Pré-Requis

## Création d'une clé API

Allez sur [https://www.link-tap.com/#!/api-for-developers](https://www.link-tap.com/#!/api-for-developers) pour créer une clé API. Retenez le `username` que vous utilisez.

## ID des appareils

Ensuite vous devez retrouver le `gatewayId` ainsi que le `taplinkerId`. Pour cela, deux façons de faire : 

1. Soit vous ouvrez l'application LinkTap sur votre mobile, et dans la section "Paramètres" vous trouverez facilement ces informations ;
2. Soit vous regardez sur vos appareils directement car c'est inscrit sur leur autocollant.

Les ID vont être une suite de chiffres et de lettres. Par exemple : `4CAE6F25014B1230`

# Installation

Installer le plugin depuis le store Eedomus.

## Configuration

Lors de l'installation, un nouvel appareil `LinkTap Arrosage` est créé, et on vous demande de remplir plusieurs paramètres :

![Champs de configuration](https://user-images.githubusercontent.com/946315/166961077-b44ab7b3-5774-44e4-8b0d-e73bb0765ff5.png)

`username` et `clé API` sont ceux que vous avez vu dans l'étape `Création d'une clé API`.

La `durée par défaut` représente le temps d'arrosage (en minutes) qui va être utilisé par défaut.

# Utilisation

Une fois l'appareil créé, vous pouvez aller voir dans l'onglet **Valeurs** :

![Liste des valeurs](https://user-images.githubusercontent.com/946315/166962553-966c7664-a392-45dc-a213-9df41e0fb7c9.png)

Deux valeurs sont possibles : `0` pour `Off` (éteindre l'arrosage), et `100` pour `On` (allumer l'arrosage).

L'édition de la celulle "Paramètres" va donner quelque chose comme ça :
> _&username=abcdef&apiKey=85191e59691kjedoz254f4ze3f4ze3f6e18e&gatewayId=4CAE6F25014B1230&taplinkerId=EF4A3E24D04B1230&duration=30&action=[RAW_VALUE]_

## Appel depuis Google et Alexa

Pour enclencher/arrêter l'arrosage à la voix, vous pouvez aller dans `Configurer` de votre box eedomus, puis dans la section de votre assistant vocal, activez les deux cases pour l'appareil : 

![éteint et allume sont cochés sous l'appareil Arrosage](https://user-images.githubusercontent.com/946315/166963314-bd6da628-02c9-42a3-8692-54b69c47cb22.png)

Donnez le même nom aux deux. Ici j'ai mis "Arrosage".

J'ai seulement testé avec Alexa, et cette opération m'a permis d'avoir un objet "Arrosage" que je peux déclencher à la voix avec _« allume l'arrosage »_ et _« arrête l'arrosage »_.
