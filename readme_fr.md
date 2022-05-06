# Pr�-Requis

## Cr�ation d'une cl� API

Allez sur [https://www.link-tap.com/#!/api-for-developers](https://www.link-tap.com/#!/api-for-developers) pour cr�er une cl� API. Retenez le `username` que vous utilisez.

## ID des appareils

Ensuite vous devez retrouver le `gatewayId` ainsi que le `taplinkerId`. Pour cela, deux fa�ons de faire : 

1. Soit vous ouvrez l'application LinkTap sur votre mobile, et dans la section "Param�tres" vous trouverez facilement ces informations ;
2. Soit vous regardez sur vos appareils directement car c'est inscrit sur leur autocollant.

Les ID vont �tre une suite de chiffres et de lettres. Par exemple : `4CAE6F25014B1230`

# Installation

Installer le plugin depuis le store Eedomus.

## Configuration

Lors de l'installation, un nouvel appareil `LinkTap Arrosage` est cr��, et on vous demande de remplir plusieurs param�tres :

![Champs de configuration](https://user-images.githubusercontent.com/946315/166961077-b44ab7b3-5774-44e4-8b0d-e73bb0765ff5.png)

`username` et `cl� API` sont ceux que vous avez vu dans l'�tape `Cr�ation d'une cl� API`.

La `dur�e par d�faut` repr�sente le temps d'arrosage (en minutes) qui va �tre utilis� par d�faut.

# Utilisation

Une fois l'appareil cr��, vous pouvez aller voir dans l'onglet **Valeurs** :

![Liste des valeurs](https://user-images.githubusercontent.com/946315/166962553-966c7664-a392-45dc-a213-9df41e0fb7c9.png)

Deux valeurs sont possibles : `0` pour `Off` (�teindre l'arrosage), et `100` pour `On` (allumer l'arrosage).

L'�dition de la celulle "Param�tres" va donner quelque chose comme �a :
> _&username=abcdef&apiKey=85191e59691kjedoz254f4ze3f4ze3f6e18e&gatewayId=4CAE6F25014B1230&taplinkerId=EF4A3E24D04B1230&duration=30&action=[RAW_VALUE]_

## Appel depuis Google et Alexa

Pour enclencher/arr�ter l'arrosage � la voix, vous pouvez aller dans `Configurer` de votre box eedomus, puis dans la section de votre assistant vocal, activez les deux cases pour l'appareil : 

![�teint et allume sont coch�s sous l'appareil Arrosage](https://user-images.githubusercontent.com/946315/166963314-bd6da628-02c9-42a3-8692-54b69c47cb22.png)

Donnez le m�me nom aux deux. Ici j'ai mis "Arrosage".

J'ai seulement test� avec Alexa, et cette op�ration m'a permis d'avoir un objet "Arrosage" que je peux d�clencher � la voix avec _� allume l'arrosage �_ et _� arr�te l'arrosage �_.
