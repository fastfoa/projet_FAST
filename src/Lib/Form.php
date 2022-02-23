<?php

function filtreForm($form, $contact )
{
    $new_email = $form->get('email')->getData();
    $new_email = strip_tags($new_email);
    $contact->setEmail($new_email);

    //enregistrer la nouvelle adresse
    $new_adresse = $form->get('adresse')->getData();
    $new_adresse = strip_tags($new_adresse);
    $contact->setAdresse($new_adresse);

    //enregistrer le nouveaux telephone
    $new_telephone = $form->get('telephone')->getData();
    $new_telephone = strip_tags($new_telephone);
    $contact->setTelephone($new_telephone);

    //enregistrer le nouveaux new_RepresentantLegal1
    $new_RepresentantLegal1 = $form->get('RepresentantLegal1')->getData();
    $new_RepresentantLegal1 = strip_tags($new_RepresentantLegal1);
    $contact->setRepresentantLegal1($new_RepresentantLegal1);

    //enregistrer le nouveaux new_RepresentantLegal2
    $new_RepresentantLegal2 = $form->get('RepresentantLegal2')->getData();
    $new_RepresentantLegal2 = strip_tags($new_RepresentantLegal2);
    $contact->setRepresentantLegal2($new_RepresentantLegal2);

    //enregistrer le nouveaux tavailleurhadicapé
    $new_TravailleurHandicape = $form->get('TravailleurHandicape')->getData();
    $new_TravailleurHandicape = strip_tags($new_TravailleurHandicape);
    $contact->setTravailleurHandicape($new_TravailleurHandicape);

    //enregistrer le nouveaux SportifHautNiveau
    $new_SportifHautNiveau = $form->get('SportifHautNiveau')->getData();
    $new_SportifHautNiveau = strip_tags($new_SportifHautNiveau);
    $contact->setSportifHautNiveau($new_SportifHautNiveau);


    //enregistrer le nouveaux Effectif
    $new_Effectif = $form->get('Effectif')->getData();
    $new_Effectif = strip_tags($new_Effectif);
    $contact->setEffectif($new_Effectif);

    //enregistrer le nouveaux Public|| Public
    $new_EmployeurPublic = $form->get('EmployeurPublic')->getData();
    $new_EmployeurPublic = strip_tags($new_EmployeurPublic);
    $contact->setEmployeurPublic($new_EmployeurPublic);

    //enregistrer le nom nouveaux prenom
    $new_prenom = $form->get('prenom')->getData();
    $new_prenom = strip_tags($new_prenom);
    $contact->setPrenom($new_prenom);

    //enregistrer le nouveaux telephone
    $new_telephone = $form->get('telephone')->getData();
    $new_telephone = strip_tags($new_telephone);
    $contact->setTelephone($new_telephone);

    //enregistrer le nom nouveaux nom
    $new_nom = $form->get('nom')->getData();
    $new_nom = strip_tags($new_nom);
    $contact->setNom($new_nom);

    return $contact;
}
