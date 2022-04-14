<?php
    session_start();

    /* INITIALISATION DES MOBS A LA PREMIERE CONNEXION */

    include_once('./Connection_BDD.php');
    $conn = getBdd('*****', '*****', '*****');
    include('./mobsInit.php');

    initMobEtape($_SESSION['ID'], 'Souris Grise', 'Cryptes', 1);
    initMobEtape($_SESSION['ID'], 'Moskito', 'Amakna, Astrub, Pandala', 1);
    initMobEtape($_SESSION['ID'], 'Arakne', 'Amakna, Astrub, Pandala', 1);
    initMobEtape($_SESSION['ID'], 'Boufton Blanc', 'Amakna, Astrub, Tainéla', 1);
    initMobEtape($_SESSION['ID'], 'Boufton Noir', 'Amakna, Astrub, Tainéla', 1);
    initMobEtape($_SESSION['ID'], 'Tofu Maléfique', 'Cimetières', 1);
    initMobEtape($_SESSION['ID'], 'Arakne Malade', 'Souterrains d Astrub', 1);
    initMobEtape($_SESSION['ID'], 'Piou Bleu', 'Astrub, Bonta, Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Piou Jaune', 'Astrub, Bonta, Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Piou Rouge', 'Astrub, Bonta, Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Piou Vert', 'Astrub, Bonta, Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Piou Violet', 'Astrub, Bonta, Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Piou Rose', 'Astrub, Bonta, Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Flammèche Air', 'Plaine des Scarafeuilles, Nids des Kwaks', 1);
    initMobEtape($_SESSION['ID'], 'Flammèche Eau', 'Plaine des Scarafeuilles, Nids des Kwaks', 1);
    initMobEtape($_SESSION['ID'], 'Flammèche Feu', 'Plaine des Scarafeuilles, Nids des Kwaks', 1);
    initMobEtape($_SESSION['ID'], 'Flammèche Terre', 'Plaine des Scarafeuilles, Nids des Kwaks', 1);
    initMobEtape($_SESSION['ID'], 'Larve Bleue', 'Un peu partout', 1);
    initMobEtape($_SESSION['ID'], 'Crabe', 'Zone du Port de Madrestam, Rivages de Sufokia', 1);
    initMobEtape($_SESSION['ID'], 'Tofu', 'Amakna, Astrub', 1);


    initMobEtape($_SESSION['ID'], 'Tofu Malade', 'Souterrains d Astrub', 2);
    initMobEtape($_SESSION['ID'], 'Champ Champ', 'Amakna, Astrub, Champs de Cania, Tainéla', 2);
    initMobEtape($_SESSION['ID'], 'Pissenlit Diabolique', 'Amakna, Astrub, Champs de Cania, Tainéla', 2);
    initMobEtape($_SESSION['ID'], 'Arakne Agressive', 'Forêt des Abraknydes, Amakna', 2);
    initMobEtape($_SESSION['ID'], 'Bandit Manchot', 'Astrub, Passage vers Brâkmar', 2);
    initMobEtape($_SESSION['ID'], 'Rose Démoniaque', 'Amakna, Astrub, Champs de Cania, Tainéla', 2);
    initMobEtape($_SESSION['ID'], 'Gelée Bleue', 'Péninsule des Gelées, Gelaxième Dimension', 2);
    initMobEtape($_SESSION['ID'], 'Gelée Menthe', 'Péninsule des Gelées, Gelaxième Dimension', 2);
    initMobEtape($_SESSION['ID'], 'Kwoan', 'Cimetière d Amakna', 2);
    initMobEtape($_SESSION['ID'], 'Larve Verte', 'Un peu partout', 2);
    initMobEtape($_SESSION['ID'], 'Bouftou', 'Amakna, Astrub, Tainéla', 2);
    initMobEtape($_SESSION['ID'], 'Kolérat', 'Lande de Sidimote', 2);
    initMobEtape($_SESSION['ID'], 'Larve Orange', 'Un peu partout', 2);
    initMobEtape($_SESSION['ID'], 'Boulanger Sombre', 'Façade de Brâkmar, Territoire des Bandits', 2);
    initMobEtape($_SESSION['ID'], 'Black Tiwabbit', 'Île des Wabbits', 2);
    initMobEtape($_SESSION['ID'], 'Tiwabbit', 'Île des Wabbits', 2);
    initMobEtape($_SESSION['ID'], 'Tiwabbit Kiafin', 'Île des Wabbits', 2);
    initMobEtape($_SESSION['ID'], 'Tournesol Sauvage', 'Amakna, Astrub, Champs de Cania', 2);
    initMobEtape($_SESSION['ID'], 'Bandit du clan des Roublards', 'Territoire des Bandits', 2);
    initMobEtape($_SESSION['ID'], 'Gobelin', '[4, -12], Campement des Bworks, Village dévasté de Gisgoul', 2);


    initMobEtape($_SESSION['ID'], 'NodKoko', 'île de Moon', 3);
    initMobEtape($_SESSION['ID'], 'Tikokoko', 'île de Moon', 3);
    initMobEtape($_SESSION['ID'], 'Trukikol', 'île de Moon', 3);
    initMobEtape($_SESSION['ID'], 'Sanglier', 'Amakna, Astrub', 3);
    initMobEtape($_SESSION['ID'], 'Champa Vert', 'Clairière de Brouce Boulgoure, Amakna, Forêt des Abraknydes', 3);
    initMobEtape($_SESSION['ID'], 'Citwouille', 'Forêt maléfique', 3);
    initMobEtape($_SESSION['ID'], 'Vampire', 'Cimetières de Bonta et Brakmâr, Cryptes', 3);
    initMobEtape($_SESSION['ID'], 'Biblop Coco', 'Prairie des Blops, Plaine de Cania', 3);
    initMobEtape($_SESSION['ID'], 'Biblop Griotte', 'Prairie des Blops, Plaine de Cania', 3);
    initMobEtape($_SESSION['ID'], 'Biblop Indigo', 'Prairie des Blops, Plaine de Cania', 3);
    initMobEtape($_SESSION['ID'], 'Biblop Reinette', 'Prairie des Blops, Plaine de Cania', 3);
    initMobEtape($_SESSION['ID'], 'Chevaucheur de Karne', 'Campement des Bworks, Amakna', 3);
    initMobEtape($_SESSION['ID'], 'Milirat d Egoutant malade', 'Souterrains d Astrub', 3);
    initMobEtape($_SESSION['ID'], 'Boo', 'Coin des Boos, Marécages', 3);
    initMobEtape($_SESSION['ID'], 'Prespic', 'Amakna, Astrub', 3);
    initMobEtape($_SESSION['ID'], 'Cochon de Lait', 'Presqu île des Porcos', 3);
    initMobEtape($_SESSION['ID'], 'Tortue Jaune', 'île de Moon', 3);
    initMobEtape($_SESSION['ID'], 'Wabbit', 'île des Wabbits', 3);
    initMobEtape($_SESSION['ID'], 'Chef de Guerre Bouftou', 'Amakna, Astrub', 3);
    initMobEtape($_SESSION['ID'], 'Berger Porkass', 'Territoire des Porkass, Plaine de Cania', 3);


    initMobEtape($_SESSION['ID'], 'Croc Gland', 'Landes de Sidimote', 4);
    initMobEtape($_SESSION['ID'], 'Bulbambou', 'Pandala', 4);
    initMobEtape($_SESSION['ID'], 'Tortue Bleue', 'île de Moon', 4);
    initMobEtape($_SESSION['ID'], 'Tortue Rouge', 'île de Moon', 4);
    initMobEtape($_SESSION['ID'], 'Tortue Verte', 'île de Moon', 4);
    initMobEtape($_SESSION['ID'], 'Corbac', 'Pénates des Corbac, Landes de Sidimote, Plaine de Cania', 4);
    initMobEtape($_SESSION['ID'], 'Etoile de la Mer d Asse', 'Donjon Ensablé, Calanques d Astrub', 4);
    initMobEtape($_SESSION['ID'], 'Pichon Blanc', 'Donjon Ensablé, Calanques d Astrub, Plage de Cania', 4);
    initMobEtape($_SESSION['ID'], 'Pichon Bleu', 'Donjon Ensablé, Calanques d Astrub, Plage de Cania', 4);
    initMobEtape($_SESSION['ID'], 'Pichon Orange', 'Donjon Ensablé, Calanques d Astrub, Plage de Cania', 4);
    initMobEtape($_SESSION['ID'], 'Pichon Vert', 'Donjon Ensablé, Calanques d Astrub, Plage de Cania', 4);
    initMobEtape($_SESSION['ID'], 'Bambouto', 'Pandala', 4);
    initMobEtape($_SESSION['ID'], 'Maître Vampire', 'Cimetières de Bonta et Brâkmar, Cryptes', 4);
    initMobEtape($_SESSION['ID'], 'Minoskito', 'Île du Minotoror', 4);
    initMobEtape($_SESSION['ID'], 'Noeul', 'Forêt maléfique', 4);
    initMobEtape($_SESSION['ID'], 'Milimulou', 'Amakna, Bois de Litneg', 4);
    initMobEtape($_SESSION['ID'], 'Fourbasse', 'île de Moon', 4);
    initMobEtape($_SESSION['ID'], 'Bulbiflore', 'Pandala', 4);
    initMobEtape($_SESSION['ID'], 'Bwork Mage', 'Campement des Bworks', 4);
    initMobEtape($_SESSION['ID'], 'Croc Gland Enragé', 'Landes de Sidimote', 4);


    initMobEtape($_SESSION['ID'], 'Rose Obscure', 'Champs des Ingalsses', 5);
    initMobEtape($_SESSION['ID'], 'Black Wabbit', 'Île des Wabbits', 5);
    initMobEtape($_SESSION['ID'], 'Mineur Sombre', 'Façade de Brâkmar, Territoire des Bandits', 5);
    initMobEtape($_SESSION['ID'], 'Bwork Archer', 'Campement des Bworks', 5);
    initMobEtape($_SESSION['ID'], 'Champa Bleu', 'Clairière des Brouce Boulgoure, Forêt des Abraknydes', 5);
    initMobEtape($_SESSION['ID'], 'Champa Marron', 'Clairière des Brouce Boulgoure, Forêt des Abraknydes', 5);
    initMobEtape($_SESSION['ID'], 'Champa Rouge', 'Clairière des Brouce Boulgoure, Forêt des Abraknydes', 5);
    initMobEtape($_SESSION['ID'], 'Craqueboule', 'Astrub, Amakna', 5);
    initMobEtape($_SESSION['ID'], 'Mandrine', 'Île du Minotoror', 5);
    initMobEtape($_SESSION['ID'], 'Kitsou Nakwa', 'Pandala', 5);
    initMobEtape($_SESSION['ID'], 'Gargrouille', 'Le champs du Repos', 5);
    initMobEtape($_SESSION['ID'], 'Dragodinde Amande Sauvage', 'Montagne des koalaks', 5);
    initMobEtape($_SESSION['ID'], 'Gelée Fraise', 'Péninsule des Gelées', 5);
    initMobEtape($_SESSION['ID'], 'Wabbit Squelette', 'celle du nord-ouest', 5);
    initMobEtape($_SESSION['ID'], 'Chafer Invisible', 'Cimetières', 5);
    initMobEtape($_SESSION['ID'], 'Craqueleur', 'Amakna', 5);
    initMobEtape($_SESSION['ID'], 'Bwork', 'Campement des Bworks', 5);
    initMobEtape($_SESSION['ID'], 'Abraknyde', 'Forêt des Abraknydes, Tainéla, Amakna', 5);
    initMobEtape($_SESSION['ID'], 'Kraméléhon', 'Île du Minotoror', 5);


    initMobEtape($_SESSION['ID'], 'Scarafeuille Blanc', 'Plaine des scarafeuilles', 6);
    initMobEtape($_SESSION['ID'], 'Scarafeuille Bleu', 'Plaine des scarafeuilles', 6);
    initMobEtape($_SESSION['ID'], 'Scarafeuille Rouge', 'Plaine des scarafeuilles', 6);
    initMobEtape($_SESSION['ID'], 'Scarafeuille Vert', 'Plaine des scarafeuilles', 6);
    initMobEtape($_SESSION['ID'], 'Rib', 'Cimetière d Amakna', 6);
    initMobEtape($_SESSION['ID'], 'Blop Coco', 'Plairie des Blops, Plaine de Cania', 6);
    initMobEtape($_SESSION['ID'], 'Blop Griotte', 'Plairie des Blops, Plaine de Cania', 6);
    initMobEtape($_SESSION['ID'], 'Blop Indigo', 'Plairie des Blops, Plaine de Cania', 6);
    initMobEtape($_SESSION['ID'], 'Blop Reinette', 'Plairie des Blops, Plaine de Cania', 6);
    initMobEtape($_SESSION['ID'], 'Cochon de Farle', 'Labyrinthe et Donjon du Dragon Cochon', 6);
    initMobEtape($_SESSION['ID'], 'Scaratos', 'Île du Minotoror', 6);
    initMobEtape($_SESSION['ID'], 'Boomba', 'la jungle de Moon', 6);
    initMobEtape($_SESSION['ID'], 'Tronknyde', 'Forêt des Abraknydes/sombres', 6);
    initMobEtape($_SESSION['ID'], 'Chafer Fantassin', 'Cimetière d Amakna', 6);
    initMobEtape($_SESSION['ID'], 'Pichon Kloune', 'Donjon Ensablé, Plage de Cania, Calanques d Astrub', 6);
    initMobEtape($_SESSION['ID'], 'Abrakne', 'Forêt des Abraknydes/sombres', 6);
    initMobEtape($_SESSION['ID'], 'Chafer', 'Cimetières', 6);
    initMobEtape($_SESSION['ID'], 'Crocodaille', 'Marécages', 6);
    initMobEtape($_SESSION['ID'], 'Rat d Egoutant malade', 'Souterrains profonds d Astrub', 6);
    initMobEtape($_SESSION['ID'], 'Scorbute', 'Lande de Sidimote', 6);


    initMobEtape($_SESSION['ID'], 'Dragodinde Rousse Sauvage', 'Territoire des Dragodindes, montagne des Koalaks', 7);
    initMobEtape($_SESSION['ID'], 'Forgeron Sombre', 'Façade de Brâkmar, Territoire des Bandits', 7);
    initMobEtape($_SESSION['ID'], 'Crustorail Kouraçao', 'Plage de Corail', 7);
    initMobEtape($_SESSION['ID'], 'Crustorail Malibout', 'Plage de Corail', 7);
    initMobEtape($_SESSION['ID'], 'Crustorail Morito', 'Plage de Corail', 7);
    initMobEtape($_SESSION['ID'], 'Crustorail Passaoh', 'Plage de Corail', 7);
    initMobEtape($_SESSION['ID'], 'Bulbuisson', 'Pandala', 7);
    initMobEtape($_SESSION['ID'], 'Arakne Majeure', 'Egoûts de Bonta et Brâkmar, Forêt des Abraknydes', 7);
    initMobEtape($_SESSION['ID'], 'Araknawa', 'Pandala', 7);
    initMobEtape($_SESSION['ID'], 'Grand Pa Wabbit', 'île des Wabbits', 7);
    initMobEtape($_SESSION['ID'], 'Wo Wabbit', 'île des Wabbits', 7);
    initMobEtape($_SESSION['ID'], 'Cavalier Porkass', 'Plaine des Porkass', 7);
    initMobEtape($_SESSION['ID'], 'Aboub', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Amlub', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Codem', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Gink', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Kirevam', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Let Emoliug', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Nebgib', 'Territoire des Dopeuls', 7);
    initMobEtape($_SESSION['ID'], 'Nipul', 'Territoire des Dopeuls', 7);


    initMobEtape($_SESSION['ID'], 'Osurc', 'Territoire des Dopeuls', 8);
    initMobEtape($_SESSION['ID'], 'Susej', 'Territoire des Dopeuls', 8);
    initMobEtape($_SESSION['ID'], 'Kokoko', 'Plage de Moon', 8);
    initMobEtape($_SESSION['ID'], 'Chafer Archer', 'Cimetière d Amakna - Cimetière de Bonta et de Brâkmar', 8);
    initMobEtape($_SESSION['ID'], 'Chafer Lancier', 'Cimetière d Amakna - Cimetière de Bonta et de Brâkmar', 8);
    initMobEtape($_SESSION['ID'], 'DoK Alako', 'Canyon Sauvage et Lacs Enchantés', 8);
    initMobEtape($_SESSION['ID'], 'Koalak Immature', 'Forêt de Kaliptus et Lacs enchantés', 8);
    initMobEtape($_SESSION['ID'], 'Gamino', 'Labyrinthe du Minotoror', 8);
    initMobEtape($_SESSION['ID'], 'Chaman d Egoutant', 'Egoûts de Bonta et de Brâkmar, Souterrains d Astrub', 8);
    initMobEtape($_SESSION['ID'], 'Le Ouassingue Entourbé', 'Tourbière d Otomai, Champ du repos', 8);
    initMobEtape($_SESSION['ID'], 'La Ouassingue', 'Tourbière d Otomai, Champ du repos', 8);
    initMobEtape($_SESSION['ID'], 'Le Ouassingue', 'Tourbière d Otomai, Champ du repos', 8);
    initMobEtape($_SESSION['ID'], 'Palmifleur Malibout', 'Plage de Corail', 8);
    initMobEtape($_SESSION['ID'], 'Palmifleur Morito', 'Plage de Corail', 8);
    initMobEtape($_SESSION['ID'], 'Palmifleur Passaoh', 'Plage de Corail', 8);
    initMobEtape($_SESSION['ID'], 'Sanglier Des Plaines', 'Forêt de Cania', 8);
    initMobEtape($_SESSION['ID'], 'Abraknyde Vénérable', 'Forêt des Abraknydes', 8);
    initMobEtape($_SESSION['ID'], 'Craqueleur des plaines', 'Massifs de Cania', 8);
    initMobEtape($_SESSION['ID'], 'Pandit', 'Pandala', 8);
    initMobEtape($_SESSION['ID'], 'Chafer d élite', 'Cimetières de Bonta et Brâkmar', 8);


    initMobEtape($_SESSION['ID'], 'Maître Bolet', 'Champs de Cania', 9);
    initMobEtape($_SESSION['ID'], 'Craqueboule Poli', 'Plaines herbeuses', 9);
    initMobEtape($_SESSION['ID'], 'Pandikaze', 'Pandala', 9);
    initMobEtape($_SESSION['ID'], 'Kanniboul Archer', 'Jungle profonde de Moon', 9);
    initMobEtape($_SESSION['ID'], 'Kanniboul Jav', 'Jungle profonde de Moon', 9);
    initMobEtape($_SESSION['ID'], 'Kanniboul Sarbak', 'Jungle profonde de Moon', 9);
    initMobEtape($_SESSION['ID'], 'Kanniboul Thierry', 'Jungle profonde de Moon', 9);
    initMobEtape($_SESSION['ID'], 'Pandalette Ivre', 'Pandala', 9);
    initMobEtape($_SESSION['ID'], 'Rat d Egoutant', 'Egoûts de Bonta et de Brâkmar, Souterrains d Astrub', 9);
    initMobEtape($_SESSION['ID'], 'Palmifleur Kouraçao', 'Plage de Corail', 9);
    initMobEtape($_SESSION['ID'], 'Ouginak', 'Lande de Sidimote', 9);
    initMobEtape($_SESSION['ID'], 'DragOeuf Blanc immature', 'Presqu île des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'DragOeuf Doré immature', 'Presqu île des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'DragOeuf Noir immature', 'Presqu île des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'DragOeuf de saphir immature', 'Presqu île des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'Dragoss Blanc', 'Sanctuaire des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'Dragoss Doré', 'Sanctuaire des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'Dragoss Noir', 'Sanctuaire des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'Dragoss de Saphir', 'Sanctuaire des Dragoeufs', 9);
    initMobEtape($_SESSION['ID'], 'Léopardo', 'Feudala', 9);


    initMobEtape($_SESSION['ID'], 'Serpiplume', 'Labyrinthe du Minotoror', 10);
    initMobEtape($_SESSION['ID'], 'Corailleur', 'Plage de Corail', 10);
    initMobEtape($_SESSION['ID'], 'Kitsou Nae', 'Pandala', 10);
    initMobEtape($_SESSION['ID'], 'Raul Mops', 'Baie de Cania', 10);
    initMobEtape($_SESSION['ID'], 'Pandawa Ivre', 'Pandala', 10);
    initMobEtape($_SESSION['ID'], 'Cooleuvre', 'Pandala', 10);
    initMobEtape($_SESSION['ID'], 'Coquille Explosive', 'Presqu île des Dragoeufs', 10);
    initMobEtape($_SESSION['ID'], 'Canon Dorf', 'Bâteau du Chouque, donjon de l Arche d Otomai', 10);
    initMobEtape($_SESSION['ID'], 'Nakunbra', 'Bâteau du Chouque, donjon de l Arche d Otomai', 10);
    initMobEtape($_SESSION['ID'], 'Don Duss Ang', 'Labyrinthe du Dragon Cochon', 10);
    initMobEtape($_SESSION['ID'], 'DragOeuf Blanc', 'Presqu île des Dragoeufs', 10);
    initMobEtape($_SESSION['ID'], 'DragOeuf Doré', 'Presqu île des Dragoeufs', 10);
    initMobEtape($_SESSION['ID'], 'DragOeuf Noir', 'Presqu île des Dragoeufs', 10);
    initMobEtape($_SESSION['ID'], 'DragOeuf de Saphir', 'Presqu île des Dragoeufs', 10);
    initMobEtape($_SESSION['ID'], 'Koalak Coco', 'Canyon Sauvage', 10);
    initMobEtape($_SESSION['ID'], 'Koalak Griotte', 'Canyon Sauvage', 10);
    initMobEtape($_SESSION['ID'], 'Koalak Indigo', 'Canyon Sauvage', 10);
    initMobEtape($_SESSION['ID'], 'Koalak Reinette', 'Canyon Sauvage', 10);
    initMobEtape($_SESSION['ID'], 'Rat d Hyoactif', 'Egoûts de Bonta et de Brâkmar', 10);
    initMobEtape($_SESSION['ID'], 'Sparo', 'Arche d Otomai', 10);


    initMobEtape($_SESSION['ID'], 'Chiendent', 'Jungle Obcure', 11);
    initMobEtape($_SESSION['ID'], 'Fantôme Apero', 'Cimetière de Brâkmar', 11);
    initMobEtape($_SESSION['ID'], 'Fantôme Ardent', 'Cimetière de Brâkmar', 11);
    initMobEtape($_SESSION['ID'], 'Fantôme Arepo', 'Cimetière de Brâkmar', 11);
    initMobEtape($_SESSION['ID'], 'Fantôme Brave', 'Cimetière de Brâkmar', 11);
    initMobEtape($_SESSION['ID'], 'Don Dorgan', 'Labyrinthe du Dragon Cochon', 11);
    initMobEtape($_SESSION['ID'], 'Barbroussa', 'Arche d Otomai', 11);
    initMobEtape($_SESSION['ID'], 'Le Flib', 'Arche d Otomai', 11);
    initMobEtape($_SESSION['ID'], 'Nerbe', 'Jungle Obscure', 11);
    initMobEtape($_SESSION['ID'], 'Chef Crocodaille', 'Les marais', 11);
    initMobEtape($_SESSION['ID'], 'Serpentin', 'Plaines de Cania', 11);
    initMobEtape($_SESSION['ID'], 'Kanigrou', 'Plaines de Cania', 11);
    initMobEtape($_SESSION['ID'], 'Bitouf des Plaines', 'Plaines herbeuses', 11);
    initMobEtape($_SESSION['ID'], 'Craqueleur Poli', 'Plaines herbeuses', 11);
    initMobEtape($_SESSION['ID'], 'Mufafah', 'Plaines herbeuses', 11);
    initMobEtape($_SESSION['ID'], 'Mulou', 'Bois de Litneg', 11);
    initMobEtape($_SESSION['ID'], 'Pandule', 'Pandala', 11);
    initMobEtape($_SESSION['ID'], 'Kido', 'Plaines herbeuses', 11);
    initMobEtape($_SESSION['ID'], 'Kilibriss', 'Plaines herbeuses', 11);
    initMobEtape($_SESSION['ID'], 'Dragoeuf Blanc Eveillé', 'Presqu île des Dragoeufs', 11);


    initMobEtape($_SESSION['ID'], 'Dragoeuf Doré Eveillé', 'Presqu île des Dragoeufs', 12);
    initMobEtape($_SESSION['ID'], 'Dragoeuf Noir Eveillé', 'Presqu île des Dragoeufs', 12);
    initMobEtape($_SESSION['ID'], 'Dragoeuf de Saphir Eveillé', 'Presqu île des Dragoeufs', 12);
    initMobEtape($_SESSION['ID'], 'Dragueuse', 'Sanctuaire des Dragoeufs', 12);
    initMobEtape($_SESSION['ID'], 'Guerrier Koalak', 'Vallée de la Morh Kitu', 12);
    initMobEtape($_SESSION['ID'], 'Braconnier', 'Pandala', 12);
    initMobEtape($_SESSION['ID'], 'Oni', 'Forêt maléfique', 12);
    initMobEtape($_SESSION['ID'], 'Warko Marron', 'Forêt de Kaliptus, Canyon Sauvage', 12);
    initMobEtape($_SESSION['ID'], 'Kitsou Nere', 'Pandala', 12);
    initMobEtape($_SESSION['ID'], 'Abraknyde Sombre', 'Forêt des Abraknydes sombres', 12);
    initMobEtape($_SESSION['ID'], 'Bulbig', 'Pandala', 12);
    initMobEtape($_SESSION['ID'], 'Fossoyeur Koalak', 'Cimetière primitif', 12);
    initMobEtape($_SESSION['ID'], 'Koalak Forestier', 'Forêt de Kaliptus', 12);
    initMobEtape($_SESSION['ID'], 'Piralak', 'Lacs enchantés', 12);
    initMobEtape($_SESSION['ID'], 'Pékeualak', 'Lacs enchantés', 12);
    initMobEtape($_SESSION['ID'], 'Gloutovore', 'Jungle profonde de Moon', 12);
    initMobEtape($_SESSION['ID'], 'Abrakne Sombre', 'Forêt des Abraknydes sombres', 12);
    initMobEtape($_SESSION['ID'], 'Dragodinde Dorée Sauvage', 'Territoire des Dragodindes', 12);
    initMobEtape($_SESSION['ID'], 'Chevaucheur Koalak', 'Cimetière primitif', 12);
    initMobEtape($_SESSION['ID'], 'Meupette', 'Arbre Hakam', 12);


    initMobEtape($_SESSION['ID'], 'Bambouto Sacré', 'Pandala', 13);
    initMobEtape($_SESSION['ID'], 'Dragoeuf Guerrier', 'Sanctuaire des Dragoeufs', 13);
    initMobEtape($_SESSION['ID'], 'Dragoeuf Volant', 'Sanctuaire des Dragoeufs', 13);
    initMobEtape($_SESSION['ID'], 'Aerohouctor le Guerrier', 'Souterrains de la presqu île des Dragoeufs', 13);
    initMobEtape($_SESSION['ID'], 'Aquabralak le Guerrier', 'Souterrains de la presqu île des Dragoeufs', 13);
    initMobEtape($_SESSION['ID'], 'Ignelicrobur le Guerrier', 'Souterrains de la presqu île des Dragoeufs', 13);
    initMobEtape($_SESSION['ID'], 'Terrakoubiak le Guerrier', 'Souterrains de la presqu île des Dragoeufs', 13);
    initMobEtape($_SESSION['ID'], 'Disciple Zoth', 'Village des Zoths', 13);
    initMobEtape($_SESSION['ID'], 'Brouture', 'Jungle obscure d Otomai', 13);
    initMobEtape($_SESSION['ID'], 'Koalak Sanguin', 'Vallée de la Morh Kitu', 13);
    initMobEtape($_SESSION['ID'], 'Bitouf Sombre', 'Jungle obscure d Otomai', 13);
    initMobEtape($_SESSION['ID'], 'Floribonde', 'Jungle obscure d Otomai', 13);
    initMobEtape($_SESSION['ID'], 'Fécorce', 'Jungle obscure d Otomai', 13);
    initMobEtape($_SESSION['ID'], 'Koalak Farouche', 'Vallée de la Morh Kitu', 13);
    initMobEtape($_SESSION['ID'], 'Mama Koalak', 'Canyon Sauvage', 13);
    initMobEtape($_SESSION['ID'], 'Momie Koalak', 'Cimetière primitif', 13);
    initMobEtape($_SESSION['ID'], 'Bourbassingue', 'Tourbière d Otomai', 13);
    initMobEtape($_SESSION['ID'], 'Warko Violet', 'Vallée de la Morh Kitu', 13);
    initMobEtape($_SESSION['ID'], 'Gamine Zoth', 'Village des Zoths', 13);
    initMobEtape($_SESSION['ID'], 'Guerrier Zoth', 'Village des Zoths', 13);


    initMobEtape($_SESSION['ID'], 'Tourbassingue', 'Tourbière d Otomai', 14);
    initMobEtape($_SESSION['ID'], 'Abrakleur Sombre', 'Jungle Obscure d Otomai', 14);
    initMobEtape($_SESSION['ID'], 'Dragoss Blanc Eveillé', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Dragoss Doré Eveillé', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Dragoss Noir Eveillé', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Dragoss de Saphir Eveillé', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Soryo Firefoux', 'Feudala', 14);
    initMobEtape($_SESSION['ID'], 'Kitsou Nufeu', 'Pandala', 14);
    initMobEtape($_SESSION['ID'], 'Maho Firefoux', 'Feudala', 14);
    initMobEtape($_SESSION['ID'], 'Drakoalak', 'Canyon Sauvage', 14);
    initMobEtape($_SESSION['ID'], 'Fauchalak', 'Vallée de la Morh Kitu', 14);
    initMobEtape($_SESSION['ID'], 'Maître Koalak', 'Cimetière Primitif', 14);
    initMobEtape($_SESSION['ID'], 'Poolay', 'Arbre Hakam', 14);
    initMobEtape($_SESSION['ID'], 'Ignerkocropos l affamé', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Terraburkal le perfide', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Aqualikros l impitoyable', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Aerotrugobur le malveillant', 'Sanctuaire des Dragoeufs', 14);
    initMobEtape($_SESSION['ID'], 'Trooll', 'Bois de Litneg', 14);


    initMobEtape($_SESSION['ID'], 'Sergent Zoth', 'Village des Zoths', 15);
    initMobEtape($_SESSION['ID'], 'Maître Zoth', 'Village des Zoths', 15);
    initMobEtape($_SESSION['ID'], 'Kaskargo', 'Arbre Hakam', 15);
    initMobEtape($_SESSION['ID'], 'Bitouf Aérien', 'Arbre Hakam', 15);
    initMobEtape($_SESSION['ID'], 'Abrakleur Clair', 'Arbre Hakam', 15);
    initMobEtape($_SESSION['ID'], 'Yokai Firefoux', 'Pandala Feu', 15);
    initMobEtape($_SESSION['ID'], 'Champaknyde', 'Cave des Fungus', 15);
    initMobEtape($_SESSION['ID'], 'Tromperelle', 'Cave des Fungus', 15);
    initMobEtape($_SESSION['ID'], 'Champodonte', 'Cave des Fungus', 15);
    initMobEtape($_SESSION['ID'], 'Champbis', 'Cave des Fungus', 15);
    initMobEtape($_SESSION['ID'], 'Champ à Gnon', 'Cave des Fungus', 15);
    initMobEtape($_SESSION['ID'], 'Champmane', 'Cave des Fungus', 15);
    initMobEtape($_SESSION['ID'], 'Fantôme Léopardo', 'île de Grobe', 15);
    initMobEtape($_SESSION['ID'], 'Fantôme Pandikaze', 'île de Grobe', 15);
    initMobEtape($_SESSION['ID'], 'Fantôme Pandule', 'île de Grobe', 15);
    initMobEtape($_SESSION['ID'], 'Fantôme Soryo', 'île de Grobe', 15);
    initMobEtape($_SESSION['ID'], 'Pandore', 'Pandala', 15);
    initMobEtape($_SESSION['ID'], 'Roissingue', 'Tourbière', 15);
    initMobEtape($_SESSION['ID'], 'Fantôme Maho', 'île de Grobe', 15);
    initMobEtape($_SESSION['ID'], 'Fantôme Yokai', 'île de Grobe', 15);


    initMobEtape($_SESSION['ID'], 'Fantôme Pandore', 'île de Grobe', 16);
    initMobEtape($_SESSION['ID'], 'Fantôme Tanukouï San', 'île de Grobe', 16);



    initMobEtape($_SESSION['ID'], 'Mob l Eponge', 'Donjon Ensablé', 17);
    initMobEtape($_SESSION['ID'], 'Bouftou Royal', 'Donjon des Bouftous', 17);
    initMobEtape($_SESSION['ID'], 'Tournesol Affamé', 'Donjon des Champs', 17);
    initMobEtape($_SESSION['ID'], 'Gelée Royale Bleue', 'Gelaxième Dimension', 17);
    initMobEtape($_SESSION['ID'], 'Gelée Royale Menthe', 'Gelaxième Dimension', 17);
    initMobEtape($_SESSION['ID'], 'Shin Larve', 'Donjon des Larves', 17);
    initMobEtape($_SESSION['ID'], 'Wabbit GM', 'Sous-terrains des Wabbits [25, -8]', 17);
    initMobEtape($_SESSION['ID'], 'Scarabosse Doré', 'Donjon des Scarafeuilles', 17);
    initMobEtape($_SESSION['ID'], 'Bworkette', 'Donjon des Bworks', 17);
    initMobEtape($_SESSION['ID'], 'Dragon Cochon', 'Antre du Dragon Cochon', 17);
    initMobEtape($_SESSION['ID'], 'Mominotor', 'Labyrinthe du Minotoror et du Minotot', 17);
    initMobEtape($_SESSION['ID'], 'Déminoboule', 'Labyrinthe du Minotoror et du Minotot', 17);
    initMobEtape($_SESSION['ID'], 'Tofu Royal', 'Tofulailler Royal', 17);
    initMobEtape($_SESSION['ID'], 'Blop Coco Royal', 'Donjon des Blops', 17);
    initMobEtape($_SESSION['ID'], 'Blop Griotte Royal', 'Donjon des Blops', 17);
    initMobEtape($_SESSION['ID'], 'Blop Indigo Royal', 'Donjon des BLops', 17);
    initMobEtape($_SESSION['ID'], 'Blop Reinette Royal', 'Donjon des Blops', 17);
    initMobEtape($_SESSION['ID'], 'Rat Noir', 'Donjon des Rats de Brâkmar', 17);
    initMobEtape($_SESSION['ID'], 'Rat Blanc', 'Donjon des Rats de Bonta', 17);
    initMobEtape($_SESSION['ID'], 'Minotoror', 'Labyrinthe du Minotoror et du Minotot', 17);


    initMobEtape($_SESSION['ID'], 'Dark Vlad', 'La Forêt Maléfique', 18);
    initMobEtape($_SESSION['ID'], 'Tanukouï San', 'Donjon des Kitsounes', 18);
    initMobEtape($_SESSION['ID'], 'Craqueleur Légendaire', 'Donjon des Craqueleurs', 18);
    initMobEtape($_SESSION['ID'], 'Gardienne des Egoûts', 'Egoût de Bonta, Egoût de Brâkmar', 18);
    initMobEtape($_SESSION['ID'], 'Gelée Royale Fraise', 'Gelaxième Dimension', 18);
    initMobEtape($_SESSION['ID'], 'Maître Corbac', 'Donjon du Maître Corbac', 18);
    initMobEtape($_SESSION['ID'], 'Blop Multicolore Royal', 'Antre du Blop Multicolore Royal', 18);
    initMobEtape($_SESSION['ID'], 'Corailleur Magistral', 'Grotte Hesque', 18);
    initMobEtape($_SESSION['ID'], 'Gourlo le Terrible', 'Arche d Otomai', 18);
    initMobEtape($_SESSION['ID'], 'Meulou', 'Donjon des Canidés', 18);
    initMobEtape($_SESSION['ID'], 'Wa Wabbit', 'Château Wa', 18);
    initMobEtape($_SESSION['ID'], 'Moon', 'Jungle Profonde de Moon', 18);
    initMobEtape($_SESSION['ID'], 'Koulosse', 'Donjon du Koulosse', 18);
    initMobEtape($_SESSION['ID'], 'Skeunk', 'Repère de Skeunk', 18);
    initMobEtape($_SESSION['ID'], 'Abraknyde Ancestral', 'Donjon des Abraknydes', 18);
    initMobEtape($_SESSION['ID'], 'Maître Pandore', 'Donjon des Pandikazes', 18);
    initMobEtape($_SESSION['ID'], 'Tynril Ahuri - Tynril Consterné - Tynril Déconcerté - Tynril Perfide', 'Laboratoire du Tynril', 18);


    initMobEtape($_SESSION['ID'], 'Gelée Royale Citron', 'Gelaxième Dimension', 19);
    initMobEtape($_SESSION['ID'], 'Touchparak', 'Donjon des Firefoux', 19);
    initMobEtape($_SESSION['ID'], 'Bworker', 'Donjon du Bworker', 19);
    initMobEtape($_SESSION['ID'], 'Sphincter Cell', 'Donjon des Rats du Château d Amakna', 19);
    initMobEtape($_SESSION['ID'], 'Minotot', 'Labyrinthe du Minotoror et du Minotot', 19);
    initMobEtape($_SESSION['ID'], 'Silf le Rasboul Majeur', 'Goulet du Rasboul', 19);
    initMobEtape($_SESSION['ID'], 'Crocabulia', 'Donjon des Dragoeufs', 19);
    initMobEtape($_SESSION['ID'], 'Peki Peki', 'Donjon des Firefoux', 19);
    initMobEtape($_SESSION['ID'], 'Chêne Mou', 'Donjon du Chêne Mou', 19);
    initMobEtape($_SESSION['ID'], 'Ougah', 'Donjon Fungus', 19);
    initMobEtape($_SESSION['ID'], 'Kimbo', 'Donjon du Kimbo', 19);


    initMobEtape($_SESSION['ID'], 'Sourizoto le Collant', 'Souris Grise', 20);
    initMobEtape($_SESSION['ID'], 'Mosketère le Dévoué', 'Moskito', 20);
    initMobEtape($_SESSION['ID'], 'Arakule la Revancharde', 'Arakne', 20);
    initMobEtape($_SESSION['ID'], 'Boudalf le Blanc', 'Boufton Blanc', 20);
    initMobEtape($_SESSION['ID'], 'Boulgouvril le Lointain', 'Boufton Noir', 20);
    initMobEtape($_SESSION['ID'], 'Tofumanchou l Empereur', 'Tofu Maléfique', 20);
    initMobEtape($_SESSION['ID'], 'Arachitik la Souffreteuse', 'Arakne Malade', 20);
    initMobEtape($_SESSION['ID'], 'Pioustone le Problème', 'Piou Bleu', 20);
    initMobEtape($_SESSION['ID'], 'Pioulbrineur le Mercenaire', 'Piou Jaune', 20);
    initMobEtape($_SESSION['ID'], 'Pioulette la Coquine', 'Piou Rouge', 20);
    initMobEtape($_SESSION['ID'], 'Pioukas la Plante', 'Piou Vert', 20);
    initMobEtape($_SESSION['ID'], 'Pioussokrim le Délétère', 'Piou Violet', 20);
    initMobEtape($_SESSION['ID'], 'Craraboss le Féérique', 'Crabe', 20);
    initMobEtape($_SESSION['ID'], 'Larvonika l Instrument', 'Larve Bleue', 20);
    initMobEtape($_SESSION['ID'], 'Pioufe la Maquillée', 'Piou Rose', 20);
    initMobEtape($_SESSION['ID'], 'Tofuldebeu l Explosif', 'Tofu', 20);
    initMobEtape($_SESSION['ID'], 'Tofurapin le Pétri', 'Tofu Malade', 20);
    initMobEtape($_SESSION['ID'], 'Chamchie le Difficile', 'Champ Champ', 20);
    initMobEtape($_SESSION['ID'], 'Pissdane l Insipide', 'Pissenlit Diabolique', 20);
    initMobEtape($_SESSION['ID'], 'Araknay la Galopante', 'Arakne Agressive', 20);


    initMobEtape($_SESSION['ID'], 'Bandapar l Exclus', 'Bandit Manchot', 21);
    initMobEtape($_SESSION['ID'], 'Roz la Magicienne', 'Rose Démoniaque', 21);
    initMobEtape($_SESSION['ID'], 'Gelanal le Huileux', 'Gelée Bleue', 21);
    initMobEtape($_SESSION['ID'], 'Kwoanneur le Frimeur', 'Kwoan', 21);
    initMobEtape($_SESSION['ID'], 'Larchimaide la Poussée', 'Larve Verte', 21);
    initMobEtape($_SESSION['ID'], 'Boufdégou le Refoulant', 'Bouftou', 21);
    initMobEtape($_SESSION['ID'], 'Kolforthe l Indécollable', 'Kolérat', 21);
    initMobEtape($_SESSION['ID'], 'Geloliaine l Aérien', 'Gelée Menthe', 21);
    initMobEtape($_SESSION['ID'], 'Larvastrès le Subjectif', 'Larve Orange', 21);
    initMobEtape($_SESSION['ID'], 'Serpistol l Illustre', 'Serpentin', 21);
    initMobEtape($_SESSION['ID'], 'Tiwa Missou le Gateux', 'Black Tiwabbit', 21);
    initMobEtape($_SESSION['ID'], 'Boudur le Raide', 'Boulanger Sombre', 21);
    initMobEtape($_SESSION['ID'], 'Tiwalpé le Dévêtu', 'Tiwabbit', 21);
    initMobEtape($_SESSION['ID'], 'Tiwoflan le Lâche', 'Tiwabbit Kiafin', 21);
    initMobEtape($_SESSION['ID'], 'Tour le Vice', 'Tournesol Sauvage', 21);
    initMobEtape($_SESSION['ID'], 'Bandson le Tonitruant', 'Bandit du clan des Roublards', 21);
    initMobEtape($_SESSION['ID'], 'Gobstrinais le Têtu', 'Gobelin', 21);
    initMobEtape($_SESSION['ID'], 'Nodkoku le Trahi', 'Nodkoko', 21);
    initMobEtape($_SESSION['ID'], 'Tikosto le Mousse', 'Tikokoko', 21);
    initMobEtape($_SESSION['ID'], 'Trukul le Lent', 'Trukikol', 21);


    initMobEtape($_SESSION['ID'], 'Sangria le Fruité', 'Sanglier', 22);
    initMobEtape($_SESSION['ID'], 'Champayr le Disjoncté', 'Champa Vert', 22);
    initMobEtape($_SESSION['ID'], 'Citassaté le Service', 'Citwouille', 22);
    initMobEtape($_SESSION['ID'], 'Vampunor le Glacial', 'Vampire', 22);
    initMobEtape($_SESSION['ID'], 'Bilvoezé le Bonimenteur', 'Biblop Coco', 22);
    initMobEtape($_SESSION['ID'], 'Bi le Partageur', 'Biblop Griotte', 22);
    initMobEtape($_SESSION['ID'], 'Bitsou le Quêteur', 'Biblop Indigo', 22);
    initMobEtape($_SESSION['ID'], 'Bitsou le Rieur', 'Biblop Reinette', 22);
    initMobEtape($_SESSION['ID'], 'Chevaustine le Reconstruit', 'Chevaucheur de Karne', 22);
    initMobEtape($_SESSION['ID'], 'Milipussien le Géant', 'Milirat d Egoutant Malade', 22);
    initMobEtape($_SESSION['ID'], 'Boostif l Affamé', 'Boo', 22);
    initMobEtape($_SESSION['ID'], 'Preskapwal le Tendancieux', 'Prespic', 22);
    initMobEtape($_SESSION['ID'], 'Chonstip la Passagère', 'Cochon de Lait', 22);
    initMobEtape($_SESSION['ID'], 'Torthur la Lutte', 'Tortue Jaune', 22);
    initMobEtape($_SESSION['ID'], 'Wabbitud le Constant', 'Wabbit', 22);
    initMobEtape($_SESSION['ID'], 'Porfavor le Quémendeur', 'Berger Porkass', 22);
    initMobEtape($_SESSION['ID'], 'Bulleur le Dormeur', 'Bulbambou', 22);
    initMobEtape($_SESSION['ID'], 'Bouflet le Puéril', 'Chef de Guerre Bouftou', 22);
    initMobEtape($_SESSION['ID'], 'Cromikay le Néophyte', 'Croc Gland', 22);
    initMobEtape($_SESSION['ID'], 'Tortenssia la Fleurie', 'Tortue Bleue', 22);


    initMobEtape($_SESSION['ID'], 'Bambouské le Camouflé', 'Bambouto', 23);
    initMobEtape($_SESSION['ID'], 'Corpat le Vampire', 'Corbac', 23);
    initMobEtape($_SESSION['ID'], 'Pichduite le Totem', 'Pichon Blanc', 23);
    initMobEtape($_SESSION['ID'], 'Pichdourse le Puissant', 'Pichon Bleu', 23);
    initMobEtape($_SESSION['ID'], 'Pichtoire l Erudit', 'Pichon Orange', 23);
    initMobEtape($_SESSION['ID'], 'Pichakoté le Dégoûtant', 'Pichon Vert', 23);
    initMobEtape($_SESSION['ID'], 'Tortorak le Cornu', 'Tortue Rouge', 23);
    initMobEtape($_SESSION['ID'], 'Maître Amboat le Moqueur', 'Maître Vampire', 23);
    initMobEtape($_SESSION['ID'], 'Buldeflore le Pénétrant', 'Bulbiflore', 23);
    initMobEtape($_SESSION['ID'], 'Fourapin le Chaud', 'Fourbasse', 23);
    initMobEtape($_SESSION['ID'], 'Milipatte la Griffe', 'Milimulou', 23);
    initMobEtape($_SESSION['ID'], 'Minoscour le Sauveur', 'Minoskito', 23);
    initMobEtape($_SESSION['ID'], 'Neufedur le Flottant', 'Noeul', 23);
    initMobEtape($_SESSION['ID'], 'Tortilleur le Coulé', 'Tortue Verte', 23);
    initMobEtape($_SESSION['ID'], 'Bworkmage le Respectueux', 'Bwork Mage', 23);
    initMobEtape($_SESSION['ID'], 'Wagnagnah le Sanglant', 'Black Wabbit', 23);
    initMobEtape($_SESSION['ID'], 'Crognan le Barbare', 'Croc Gland Enragé', 23);
    initMobEtape($_SESSION['ID'], 'Rosenstyl la Cuisinière', 'Rose Obscure', 23);
    initMobEtape($_SESSION['ID'], 'Minsinistre l Elu', 'Mineur Sombre', 23);
    initMobEtape($_SESSION['ID'], 'Barchwork le Multicolore', 'Bwork Archer', 23);


    initMobEtape($_SESSION['ID'], 'Champayt l Odorant', 'Champa Bleu', 24);
    initMobEtape($_SESSION['ID'], 'Chamflay le Balloné', 'Champa Marron', 24);
    initMobEtape($_SESSION['ID'], 'Chamdblé le Cultivé', 'Champa Rouge', 24);
    initMobEtape($_SESSION['ID'], 'Craquetuss le Piquant', 'Craqueboule', 24);
    initMobEtape($_SESSION['ID'], 'Mandalo l Aqueuse', 'Mandrine', 24);
    initMobEtape($_SESSION['ID'], 'Kitsoupierre le Récipient', 'Kitsou Nere', 24);
    initMobEtape($_SESSION['ID'], 'Garsim le Mort', 'Gargrouille', 24);
    initMobEtape($_SESSION['ID'], 'Draglida la Disparue', 'Dragodinde Amande', 24);
    initMobEtape($_SESSION['ID'], 'Gelaviv le Glaçon', 'Gelée Fraise', 24);
    initMobEtape($_SESSION['ID'], 'Watdogue le Bien Nommé', 'Wabbit Squelette', 24);
    initMobEtape($_SESSION['ID'], 'Chafalfer l Optimiste', 'Chafer Invisible', 24);
    initMobEtape($_SESSION['ID'], 'Crakmitaine le Faucheur', 'Craqueleur', 24);
    initMobEtape($_SESSION['ID'], 'Bworkasse le Dégoûtant', 'Bwork', 24);
    initMobEtape($_SESSION['ID'], 'Abrakroc l Edenté', 'Abraknyde', 24);
    initMobEtape($_SESSION['ID'], 'Krapahut le Randonneur', 'Kraméléhon', 24);
    initMobEtape($_SESSION['ID'], 'Scapé l Epée', 'Scarafeuille Blanc', 24);
    initMobEtape($_SESSION['ID'], 'Scarfaysse le Balafré', 'Scarafeuille Bleu', 24);
    initMobEtape($_SESSION['ID'], 'Scarouarze l Epopsée', 'Scarafeuille Rouge', 24);
    initMobEtape($_SESSION['ID'], 'Scaramel le Fondant', 'Scarafeuille Vert', 24);
    initMobEtape($_SESSION['ID'], 'Ribibi le Cher', 'Rib', 24);


    initMobEtape($_SESSION['ID'], 'Blorie l Assourdissante', 'Blop Coco', 25);
    initMobEtape($_SESSION['ID'], 'Blordur l Infect', 'Blop Griotte', 25);
    initMobEtape($_SESSION['ID'], 'Bloporte le Veule', 'Blop Indigo', 25);
    initMobEtape($_SESSION['ID'], 'Blof l Apathique', 'Blop Reinette', 25);
    initMobEtape($_SESSION['ID'], 'Boombata le Garde', 'Boomba', 25);
    initMobEtape($_SESSION['ID'], 'Farlon l Enfant', 'Cochon de Farle', 25);
    initMobEtape($_SESSION['ID'], 'Scaratyne l huître', 'Scaratos', 25);
    initMobEtape($_SESSION['ID'], 'Chaffoin le Sournois', 'Chafer Fantassin', 25);
    initMobEtape($_SESSION['ID'], 'Picht le Brioché', 'Pichon Kloune', 25);
    initMobEtape($_SESSION['ID'], 'Tronkoneuze la Tranchante', 'Tronknyde', 25);
    initMobEtape($_SESSION['ID'], 'Abrakadnuzar', 'Abrakne', 25);
    initMobEtape($_SESSION['ID'], 'Chafemal le Bagarreur', 'Chafer', 25);
    initMobEtape($_SESSION['ID'], 'Crolnareff l Exilé', 'Crocodaille', 25);
    initMobEtape($_SESSION['ID'], 'Radoutable le Craint', 'Rat d Egoutant Malade', 25);
    initMobEtape($_SESSION['ID'], 'Scropitène l Enflammé', 'Scorbute', 25);
    initMobEtape($_SESSION['ID'], 'Dragnoute l Irascible', 'Dragodinde Rousse', 25);
    initMobEtape($_SESSION['ID'], 'Bulsavon le Gonflé', 'Bulbuisson', 25);
    initMobEtape($_SESSION['ID'], 'Crustterus l Organique', 'Crustorail Kouraçao', 25);
    initMobEtape($_SESSION['ID'], 'Crustensyl le Pragmatique', 'Crustorail Malibout', 25);
    initMobEtape($_SESSION['ID'], 'Cruskof le Rustre', 'Crustorail Morito', 25);


    initMobEtape($_SESSION['ID'], 'Crusmeyer le Pervers ', 'Crustorail Passaoh', 26);
    initMobEtape($_SESSION['ID'], 'Forboyar l Enigmatique', 'Forgeron Sombre', 26);
    initMobEtape($_SESSION['ID'], 'Arakozette l Intrépide', 'Araknawa', 26);
    initMobEtape($_SESSION['ID'], 'Arabord la Cruche', 'Arakne Majeure', 26);
    initMobEtape($_SESSION['ID'], 'Grandilok le Clameur', 'Grand Pa Wabbit', 26);
    initMobEtape($_SESSION['ID'], 'Wokenrol le Danseur', 'Wo Wabbit', 26);
    initMobEtape($_SESSION['ID'], 'Cavordemal le Sorcier', 'Cavalier Porkass', 26);
    initMobEtape($_SESSION['ID'], 'Aboudbra le Porteur', 'Dopeul Osamodas', 26);
    initMobEtape($_SESSION['ID'], 'Ameur la Laide', 'Dopeul Féca', 26);
    initMobEtape($_SESSION['ID'], 'Codenlgaz le Problème', 'Dopeul Eniripsa', 26);
    initMobEtape($_SESSION['ID'], 'Ginsenk le Stimulant', 'Dopeul Sadida', 26);
    initMobEtape($_SESSION['ID'], 'Kiroyal le Sirupeux', 'Dopeul Ecaflip', 26);
    initMobEtape($_SESSION['ID'], 'Let le Rond', 'Dopeul Cra', 26);
    initMobEtape($_SESSION['ID'], 'Nelvin le Boulet', 'Dopeul Xélor', 26);
    initMobEtape($_SESSION['ID'], 'Nipulnislip l Exibitionniste', 'Dopeul Sram', 26);
    initMobEtape($_SESSION['ID'], 'Osuxion le Vampirique', 'Dopeul Enutrof', 26);
    initMobEtape($_SESSION['ID'], 'Susbewl l Hypocrite', 'Dopeul Iop', 26);
    initMobEtape($_SESSION['ID'], 'Koktèle le Secoué', 'Kokoko', 26);
    initMobEtape($_SESSION['ID'], 'Chafmarcel le Fêtard', 'Chafer Archer', 26);
    initMobEtape($_SESSION['ID'], 'Chalan le Commerçant', 'Chafer Lancier', 26);


    initMobEtape($_SESSION['ID'], 'Chamitant le Dillettante', 'Chaman d Egoutant', 27);
    initMobEtape($_SESSION['ID'], 'Doktopuss le Maléfique', 'Dok Alako', 27);
    initMobEtape($_SESSION['ID'], 'Germinol l Indigent', 'Gamino', 27);
    initMobEtape($_SESSION['ID'], 'Koalastrof la Naturelle', 'Koalak Immature', 27);
    initMobEtape($_SESSION['ID'], 'Ouature la Mobile', 'La Ouassingue', 27);
    initMobEtape($_SESSION['ID'], 'Ouassébo l Esthète', 'Le Ouassingue', 27);
    initMobEtape($_SESSION['ID'], 'Ouashouah l Exubérant', 'Le Ouassingue Entourbé', 27);
    initMobEtape($_SESSION['ID'], 'Palmito le Menteur', 'Palmifleur Malibout', 27);
    initMobEtape($_SESSION['ID'], 'Palmiche le Serein', 'Palmifleur Morito', 27);
    initMobEtape($_SESSION['ID'], 'Palmiflette le Convivial', 'Palmifleur Passaoh', 27);
    initMobEtape($_SESSION['ID'], 'Sampi l Eternel', 'Sanglier des Plaines', 27);
    initMobEtape($_SESSION['ID'], 'Abrakildas le Vénérable', 'Abraknyde Vénérable', 27);
    initMobEtape($_SESSION['ID'], 'Cramikaz le Suicidaire', 'Craqueleur des plaines', 27);
    initMobEtape($_SESSION['ID'], 'Pandimaensh l Animateur', 'Pandit', 27);
    initMobEtape($_SESSION['ID'], 'Chafrit le Barbare', 'Chafer d élite', 27);
    initMobEtape($_SESSION['ID'], 'Craquetout le Fissuré', 'Craqueboule Poli', 27);
    initMobEtape($_SESSION['ID'], 'Maître Onom le Régulier', 'Maître Bolet', 27);
    initMobEtape($_SESSION['ID'], 'Pandimy le Contagieux', 'Pandikaze', 27);
    initMobEtape($_SESSION['ID'], 'Kannibal le Lecteur', 'Kanniboul Archer', 27);
    initMobEtape($_SESSION['ID'], 'Kapota la Fraise', 'Kanniboul Jav', 27);


    initMobEtape($_SESSION['ID'], 'Kannémik le Maigre', 'Kanniboul Sarbak', 28);
    initMobEtape($_SESSION['ID'], 'Kannisterik le Forcené', 'Kanniboul Thierry', 28);
    initMobEtape($_SESSION['ID'], 'Pandanlagl la Saoule', 'Pandalette Ivre', 28);
    initMobEtape($_SESSION['ID'], 'Palmbytch la Bronzée', 'Palmifleur Kouraçao', 28);
    initMobEtape($_SESSION['ID'], 'Ratlbol l Aigri', 'Rat d Egoutant', 28);
    initMobEtape($_SESSION['ID'], 'Ougaould le Parasite', 'Ouginak', 28);
    initMobEtape($_SESSION['ID'], 'Corboyard l Enigmatique', 'Corailleur', 28);
    initMobEtape($_SESSION['ID'], 'Dragstik le Frustre', 'Dragoeuf Blanc Immature', 28);
    initMobEtape($_SESSION['ID'], 'Dragtula l Ancien', 'Dragoeuf de saphir Immature', 28);
    initMobEtape($_SESSION['ID'], 'Dragsta le Détendu', 'Dragoeuf Noir Immature', 28);
    initMobEtape($_SESSION['ID'], 'Dragstore le Généraliste', 'Dragoeuf Doré Immature', 28);
    initMobEtape($_SESSION['ID'], 'Dragtopaile l Excavateur', 'Dragoss Blanc', 28);
    initMobEtape($_SESSION['ID'], 'Dragioli le Succulent', 'Dragoss de Saphir', 28);
    initMobEtape($_SESSION['ID'], 'Dragalgan l Effervescent', 'Dragoss Doré', 28);
    initMobEtape($_SESSION['ID'], 'Dragybuss le Sucré', 'Dragoss Noir', 28);
    initMobEtape($_SESSION['ID'], 'Léopolnor le Barde', 'Léopardo', 28);
    initMobEtape($_SESSION['ID'], 'Serpistule le Purulent', 'Serpiplume', 28);
    initMobEtape($_SESSION['ID'], 'Kitsoudbra le Malodorant', 'Kitsou Nae', 28);
    initMobEtape($_SESSION['ID'], 'Pandouille le Titubant', 'Pandawa Ivre', 28);
    initMobEtape($_SESSION['ID'], 'Rauligo le Sale', 'Raul Mops', 28);


    initMobEtape($_SESSION['ID'], 'Cooligane le Nevrosé', 'Cooleuvre', 29);
    initMobEtape($_SESSION['ID'], 'Caboume l Artilleur', 'Canon Dorf', 29);
    initMobEtape($_SESSION['ID'], 'Nakuneye le Borgne', 'Nakunbra', 29);
    initMobEtape($_SESSION['ID'], 'Dragstayr le Fonceur', 'Dragoeuf Blanc', 29);
    initMobEtape($_SESSION['ID'], 'Dragmoclaiss le Fataliste', 'Dragoeuf de Saphir', 29);
    initMobEtape($_SESSION['ID'], 'Dragkouine la Déguisée', 'Dragoeuf Doré', 29);
    initMobEtape($_SESSION['ID'], 'Dragnostik le Sceptique', 'Dragoeuf Noir', 29);
    initMobEtape($_SESSION['ID'], 'Koamaembair le Coulant', 'Koalak Coco', 29);
    initMobEtape($_SESSION['ID'], 'Koakofrui le Confit', 'Koalak Griotte', 29);
    initMobEtape($_SESSION['ID'], 'Koaskette la Chapelière', 'Koalak Indigo', 29);
    initMobEtape($_SESSION['ID'], 'Koarmit la Batracienne', 'Koalak Reinette', 29);
    initMobEtape($_SESSION['ID'], 'Ratéhaifaim le Professeur', 'Rat d Hyoactif', 29);
    initMobEtape($_SESSION['ID'], 'Sparoket le Lanceur', 'Sparo', 29);
    initMobEtape($_SESSION['ID'], 'Chiendanslémain l Illusionniste', 'Chiendent', 29);
    initMobEtape($_SESSION['ID'], 'Fanlabiz le Véloce', 'Fantôme Apero', 29);
    initMobEtape($_SESSION['ID'], 'Fandanleuil le Précis', 'Fantôme Ardent', 29);
    initMobEtape($_SESSION['ID'], 'Fantoch le Pantin', 'Fantôme Arepo', 29);
    initMobEtape($_SESSION['ID'], 'Fantrask le Rêveur', 'Fantôme Brave', 29);
    initMobEtape($_SESSION['ID'], 'Barebourd le Comte', 'Barbroussa', 29);
    initMobEtape($_SESSION['ID'], 'Nerdeubeu le Flagellant', 'Nerbe', 29);


    initMobEtape($_SESSION['ID'], 'Crathdogue le Cruel', 'Craqueleur Poli', 30);
    initMobEtape($_SESSION['ID'], 'Toufou le Benêt', 'Bitouf des Plaines', 30);
    initMobEtape($_SESSION['ID'], 'Crok le Beau', 'Chef Crocodaille', 30);
    initMobEtape($_SESSION['ID'], 'Fanfancisco le Cosmopolite', 'Fantôme Tanuki Chan air', 30);
    initMobEtape($_SESSION['ID'], 'Fanjipann le Sucré', 'Fantôme Tanuki Chan eau', 30);
    initMobEtape($_SESSION['ID'], 'Fanhatur le Simple', 'Fantôme Tanuki Chan terre', 30);
    initMobEtape($_SESSION['ID'], 'Fanjo le Pilote', 'Fantôme Tanuki Chan feu', 30);
    initMobEtape($_SESSION['ID'], 'Fanimyl l Acuité', 'Fantôme Tanuki Chan neutre', 30);
    initMobEtape($_SESSION['ID'], 'Kanasukr le Mielleux', 'Kanigrou', 30);
    initMobEtape($_SESSION['ID'], 'Mufguedin le Suprême', 'Mufafah', 30);
    initMobEtape($_SESSION['ID'], 'Muloufok l Hilarant', 'Mulou', 30);
    initMobEtape($_SESSION['ID'], 'Pangraive le Militant', 'Pandule', 30);
    initMobEtape($_SESSION['ID'], 'Kido l âtre', 'Kido', 30);
    initMobEtape($_SESSION['ID'], 'Kilimanj haro le Grimpeur', 'Kilibriss', 30);
    initMobEtape($_SESSION['ID'], 'Dragoo le Cramoisi', 'Dragoeuf Blanc Eveillé', 30);
    initMobEtape($_SESSION['ID'], 'Dragtonien le Malvoyant', 'Dragoeuf de Saphir Eveillé', 30);
    initMobEtape($_SESSION['ID'], 'Dragma le Bouillant', 'Dragoeuf Doré Eveillé', 30);
    initMobEtape($_SESSION['ID'], 'Dragoeth le Penseur', 'Dragoeuf Noir Eveillé', 30);
    initMobEtape($_SESSION['ID'], 'Dragonienne l Econome', 'Dragueuse', 30);
    initMobEtape($_SESSION['ID'], 'Guerrite le Veilleur', 'Guerrier Koalak', 30);


    initMobEtape($_SESSION['ID'], 'Bramin le Bicéphale', 'Braconnier', 31);
    initMobEtape($_SESSION['ID'], 'Onihylis le Destructeur', 'Oni', 31);
    initMobEtape($_SESSION['ID'], 'Warkolad l Etreinte', 'Warko Marron', 31);
    initMobEtape($_SESSION['ID'], 'Kitsoupopulère le Généreux', 'Kitsou Nere', 31);
    initMobEtape($_SESSION['ID'], 'Abrakanette l Encapsulé', 'Abraknyde Sombre', 31);
    initMobEtape($_SESSION['ID'], 'Bulgig le Danseur', 'Bulbig', 31);
    initMobEtape($_SESSION['ID'], 'Fossamoel le Juteux ', 'Fossoyeur Koalak', 31);
    initMobEtape($_SESSION['ID'], 'Gloubibou le Gars', 'Gloutovore', 31);
    initMobEtape($_SESSION['ID'], 'Koasossyal le Psychopathe', 'Koalak Forestier', 31);
    initMobEtape($_SESSION['ID'], 'Pékeutar le Tireur', 'Pékeualak', 31);
    initMobEtape($_SESSION['ID'], 'Piradain le Pingre', 'Piralak', 31);
    initMobEtape($_SESSION['ID'], 'Abraklette le Fondant', 'Abrakne Sombre', 31);
    initMobEtape($_SESSION['ID'], 'Koamag oel le Défiguré', 'Chevaucheur Koalak', 31);
    initMobEtape($_SESSION['ID'], 'Meuroup le Prêtre', 'Meupette', 31);
    initMobEtape($_SESSION['ID'], 'Bambono le Divin', 'Bambouto Sacré', 31);
    initMobEtape($_SESSION['ID'], 'Dragdikal le Décisif', 'Dragoeuf Guerrier', 31);
    initMobEtape($_SESSION['ID'], 'Dragobert le Monarque', 'Dragoeuf Volant', 31);
    initMobEtape($_SESSION['ID'], 'Diskord le Belliqueux', 'Disciple Zoth', 31);
    initMobEtape($_SESSION['ID'], 'Brouste l Humiliant', 'Brouture', 31);
    initMobEtape($_SESSION['ID'], 'Bitoven le Musicien', 'Bitouf Sombre', 31);


    initMobEtape($_SESSION['ID'], 'Ecorfé la Vive', 'Fécorce', 32);
    initMobEtape($_SESSION['ID'], 'Floanna la Blonde', 'Floribonde', 32);
    initMobEtape($_SESSION['ID'], 'Koalvissie le Chauve', 'Koalak Sanguin', 32);
    initMobEtape($_SESSION['ID'], 'Koalabois le Calorifère', 'Koalak Farouche', 32);
    initMobEtape($_SESSION['ID'], 'Mamakomou l âge', 'Mama Koalak', 32);
    initMobEtape($_SESSION['ID'], 'Momikonos la Bandelette', 'Momie Koalak', 32);
    initMobEtape($_SESSION['ID'], 'Boulivert le Géant', 'Bourbassingue', 32);
    initMobEtape($_SESSION['ID'], 'Wara l Amer', 'Warko Violet', 32);
    initMobEtape($_SESSION['ID'], 'Gastroth la Contagieuse', 'Gamine Zoth', 32);
    initMobEtape($_SESSION['ID'], 'Guerumoth le Collant', 'Guerrier Zoth', 32);
    initMobEtape($_SESSION['ID'], 'Tourbiket le Virevoletant', 'Tourbassingue', 32);
    initMobEtape($_SESSION['ID'], 'Abrakine le Sombre', 'Abrakleur Sombre', 32);
    initMobEtape($_SESSION['ID'], 'Dragminster le Magicien', 'Dragoss Blanc Eveillé', 32);
    initMobEtape($_SESSION['ID'], 'Dragtarus le Bellâtre', 'Dragoss Doré Eveillé', 32);
    initMobEtape($_SESSION['ID'], 'Draquetteur le Voleur', 'Dragoss Noir Eveillé', 32);
    initMobEtape($_SESSION['ID'], 'Drageaufol la Joyeuse', 'Dragoss de Saphir Eveillé', 32);
    initMobEtape($_SESSION['ID'], 'Soryonara le Poli', 'Soryo Firefoux', 32);
    initMobEtape($_SESSION['ID'], 'Kitsoufre l Explosif', 'Kitsou Nufeu', 32);
    initMobEtape($_SESSION['ID'], 'Mahoku le Botté', 'Maho Firefoux', 32);
    initMobEtape($_SESSION['ID'], 'Drakolage le Tentateur', 'Drakoalak', 32);


    initMobEtape($_SESSION['ID'], 'Faufoll la Joyeuse', 'Fauchalak', 33);
    initMobEtape($_SESSION['ID'], 'Maître Koantik le Théoricien', 'Maître Koalak', 33);
    initMobEtape($_SESSION['ID'], 'Poolopo la Traditionnelle', 'Poolay', 33);
    initMobEtape($_SESSION['ID'], 'Trooyé l Oxydé', 'Trooll', 33);
    initMobEtape($_SESSION['ID'], 'Seripoth l Ennemi', 'Sergent Zoth', 33);
    initMobEtape($_SESSION['ID'], 'Kaskapointhe la Couverte', 'Kaskargo', 33);
    initMobEtape($_SESSION['ID'], 'Toutouf le Velu', 'Bitouf Aérien', 33);
    initMobEtape($_SESSION['ID'], 'Abrinos le Clair', 'Abrakleur Clair', 33);
    initMobEtape($_SESSION['ID'], 'Don Kizoth l Obstiné ', 'Maître Zoth', 33);
    initMobEtape($_SESSION['ID'], 'Chamiléro le Malchanceux', 'Champaknyde', 33);
    initMobEtape($_SESSION['ID'], 'YokaiKoral le Duel', 'Yokai Firefoux', 33);
    initMobEtape($_SESSION['ID'], 'Tromplamor le Survivant', 'Tromperelle', 33);
    initMobEtape($_SESSION['ID'], 'Chamoute le Duveteux', 'Champodonte', 33);
    initMobEtape($_SESSION['ID'], 'Fansissla l âne', 'Fantôme Léopardo', 33);
    initMobEtape($_SESSION['ID'], 'Fanstatik l Etonnant', 'Fantôme Pandikaze', 33);
    initMobEtape($_SESSION['ID'], 'Champoul l Illuminé', 'Champbis', 33);
    initMobEtape($_SESSION['ID'], 'Champolyon le Polyglotte', 'Champ à Gnon', 33);
    initMobEtape($_SESSION['ID'], 'Champmé le Méchant', 'Champmane', 33);
    initMobEtape($_SESSION['ID'], 'Fandouich l Hautain', 'Fantôme Pandule', 33);
    initMobEtape($_SESSION['ID'], 'Fanhopruno le Gourmet', 'Fantôme Soryo', 33);


    initMobEtape($_SESSION['ID'], 'Pandive le végétarien', 'Pandore', 34);
    initMobEtape($_SESSION['ID'], 'Roy le Merlin', 'Roissingue', 34);
    initMobEtape($_SESSION['ID'], 'Fanlagoel le Comique', 'Fantôme Maho', 34);
    initMobEtape($_SESSION['ID'], 'Fantassein le Soldat', 'Fantôme Yokai', 34);
    initMobEtape($_SESSION['ID'], 'Fanburn le Viril', 'Fantôme Tanukouï San', 34);
    initMobEtape($_SESSION['ID'], 'Fanssiss la Brêle', 'Fantôme Pandore', 34);


    initMobEtape($_SESSION['ID'], 'Le Kralamoure Géant', 'Antre du Kralamoure Géant', 35);



header('Location: profil.php');
?>