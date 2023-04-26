<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//
// Class: Communication
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Communication' => 'Communication',
	'Class:Communication+' => '',
	'Class:Communication/Attribute:ref' => 'Ref',
	'Class:Communication/Attribute:ref+' => '',
	'Class:Communication/Attribute:start_date' => 'Date de début',
	'Class:Communication/Attribute:start_date+' => '',
	'Class:Communication/Attribute:end_date' => 'Date de fin',
	'Class:Communication/Attribute:end_date+' => '',
	'Class:Communication/Attribute:status' => 'Statut',
	'Class:Communication/Attribute:status+' => '',
	'Class:Communication/Attribute:status/Value:ongoing' => 'En cours',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'Terminé',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Annonceur',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Nom de l\'annonceur',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:icon' => 'Type',
	'Class:Communication/Attribute:icon+' => 'Ce choix pilote la couleur de fond du message en console et l\'affichage d\'une icône éventuelle',
	'Class:Communication/Attribute:icon/Value:none' => 'Neutre',
	'Class:Communication/Attribute:icon/Value:none+' => '',
	'Class:Communication/Attribute:icon/Value:information' => 'Information',
	'Class:Communication/Attribute:icon/Value:information+' => '',
	'Class:Communication/Attribute:icon/Value:warning' => 'Avertissement',
	'Class:Communication/Attribute:icon/Value:warning+' => '',
	'Class:Communication/Attribute:icon/Value:tip' => 'Le saviez-vous ?',
	'Class:Communication/Attribute:icon/Value:tip+' => '',
	'Class:Communication/Attribute:icon/Value:scoop' => 'Infos de dernière minute',
	'Class:Communication/Attribute:icon/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Titre',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Message',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Clore cette communication',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Stimulus:ev_reopen' => 'Réouvrir cette communication',
	'Class:Communication/Stimulus:ev_reopen+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Organisations choisies',
	'Class:Communication/Attribute:organizations_list+' => 'Inutile, si les organisations sont définies par requête OQL',
	'Class:Communication/Attribute:org_match_type' => 'Membres des organisations...',
	'Class:Communication/Attribute:org_match_type+' => 'Il a 3 façons de définir les organisations cibles de la communication :
- Uniquement les organisations de l\'onglet "Organisations choisies",
- Les organisations choisies et toutes leurs descendantes,
- Les organisations définies dynamiquement par l\'OQL',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'choisies uniquement',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => 'Uniquement les organisations choisies, celles explicitement attachées à la communication',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'choisies et leurs filles',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => 'Les organisations choisies et toutes leurs descendantes',
    'Class:Communication/Attribute:org_match_type/Value:oql' => 'définies par requête OQL',
    'Class:Communication/Attribute:org_match_type/Value:oql+' => 'Les organisations définies dynamiquement par la requête OQL',
    'Class:Communication/Attribute:org_oql' => 'Requête OQL',
    'Class:Communication/Attribute:org_oql+' => 'Cette OQL doit retourner uniquement des Organisations.
A ne spécifier que si vous mettez "définies par OQL" dans le champ "Membres des organisations..."',
    'Class:Communication/Attribute:allowed_portals' => 'Afficher sur...',
    'Class:Communication/Attribute:allowed_portals+' => 'Liste des endroits où cette communication sera diffusé',
    'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'La date de fin doit être supérieure à la date de début',
    'Class:Communication/Error:OQLMustBeProvided' => 'Un OQL doit être spécifié, puisque vous avez demandé à cibler les organisations... définies par requête OQL',
    'Class:Communication/Error:OQLMustReturnOrganization' => 'L\'OQL doit retourner des Organisations uniquement, ce n\'est pas ce qu\'il fait',
    'Class:Communication/Error:OQLNotValid' => 'La requête OQL n\'est pas valide : %1$s',
    'Class:Communication/Warning:OQLProvidedButUnused' => 'Vous avez fourni un OQL qui ne sera pas utilisé, car vous n\'avez pas positionné "Cibler les organisations..." à la valeur "définies par requête OQL"',
    'Class:Communication/Warning:NoOrgSoAll' => 'Aucune organisation choisie, la communication sera visible par toutes',
    'Class:Communication/Tab:Preview' => 'Organisations résultantes',
    'Class:Communication/Tab:Preview+' => 'Les organisations concernées par cette communication',
    'Class:Communication/Tab:PreviewAll' => 'Toutes les organisations existantes',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkCommunicationToOrganization' => 'Lien Communication / Organization',
	'Class:lnkCommunicationToOrganization+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_id' => 'Organisation',
	'Class:lnkCommunicationToOrganization/Attribute:org_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_name' => 'Nom organisation',
	'Class:lnkCommunicationToOrganization/Attribute:org_name+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id' => 'Communication',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref' => 'Ref Communication',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref+' => '',
));


Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:Communication' => 'Communications',
	'Menu:Communication+' => 'Communications en cours',
	'Portal:Communications' => 'Communications',
	'Portal:Communication:Previous' => 'Précédent',
	'Portal:Communication:Next' => 'Suivant',
	'itop-communications:Communications:Section:Title'=> 'Communications',
    'Communication:when' => 'Quand',
    'Communication:to_whom' => 'Pour qui et où',
    'Communication:what' => 'Quel message',
));
