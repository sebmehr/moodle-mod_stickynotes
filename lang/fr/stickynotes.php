<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     mod_stickynotes
 * @category    string
 * @copyright   2021 Olivier VALENTIN
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Sticky Notes';
$string['modulename'] = 'Sticky Notes';
$string['pluginadministration'] = 'Sticky Notes Admin';
$string['modulenameplural'] = 'Sticky Notes';
$string['missingidandcmid'] = 'Paramètres manquants';
$string['new_column_title'] = 'Titre 1';

// Access strings.
$string['stickynotes:addinstance'] = 'Ajouter une activité Sticky Notes';
$string['stickynotes:view'] = 'Voir les contenus de l\'activité Sticky Notes';
$string['stickynotes:createnote'] = 'Créer une note';
$string['stickynotes:updateanynote'] = 'Mettre à jour n\'importe quelle note';
$string['stickynotes:updateownnote'] = 'Mettre à jour sa propre note';
$string['stickynotes:deleteanynote'] = 'Supprimer n\'importe quelle note';
$string['stickynotes:deleteownnote'] = 'Supprimer sa propre note';
$string['stickynotes:managecolumn'] = 'Gérer les colonnes';
$string['stickynotes:vote'] = 'Voter pour une note';
$string['stickynotes:viewauthor'] = 'Voir l\'auteur d\'une note';

// Settings strings.
$string['stickynotesname'] = 'Nom de l\'activité';
$string['vote'] = 'Votes';
$string['votetype'] = 'Type de vote';
$string['votetype_help'] = 'Définit le type de vote des notes';
$string['votenone'] = 'Pas de vote';
$string['votelike'] = 'Vote par Like';
$string['limitstickynotes'] = 'Limiter le nombre de notes par personne ?';
$string['limitstickynotes_help'] = 'Si activé, permet de limiter le nombre de notes qu\'un utilisateur peut créer.';
$string['maxstickynotes'] = 'Nombre maximum de notes';
$string['maxstickynoteserror'] = 'Erreur : le chiffre doit être un entier positif.';
$string['limitvotes'] = 'Limiter le nombre de votes ?';
$string['limitvotes_help'] = 'Si activé, limite le nombre de notes pour lesquels l\'utilisateur peut voter. Nécessite de définir le nombre maximum de votes.';
$string['maxlimitvotes'] = 'Nombre de votes maximum';
$string['maxlimitvotes_help'] = 'Définit le nombre de votes par utilisateur';
$string['viewauthor'] = 'Afficher les auteurs';
$string['viewauthor_help'] = 'Si activé, les gestionnaires et enseignants peuvent voir les auteurs de chaque note.';
$string['colors'] = 'Permettre à l\'utilisateur de choisir la couleur de fond des notes';
$string['colors_help'] = 'Si activé, l\'utilisateur pourra choisir une couleur de fond parmi celles sélectionnées par l\'enseignant.';
$string['rotate'] = 'Rotation des notes';
$string['rotate_help'] = 'Si activé, les notes seront présentées avec un effet de rotation aléatoire.';
$string['choosecolors'] = 'Choisissez les couleurs qui seront disponibles pour le fond des notes.';
$string['color1_meaning'] = 'Signification de la couleur 1';
$string['color2_meaning'] = 'Signification de la couleur 2';
$string['color3_meaning'] = 'Signification de la couleur 3';
$string['color4_meaning'] = 'Signification de la couleur 4';
$string['color5_meaning'] = 'Signification de la couleur 5';
$string['color6_meaning'] = 'Signification de la couleur 6';
$string['settings_colors'] = 'Gestion des couleurs';
$string['settings_votes'] = 'Gestion des votes';

// Colors settings.
$string['color1'] = '#EECC66';
$string['color1_descr'] = 'Code couleur pour Couleur 1. Cette couleur est également la couleur par défaut si le choix des couleurs n\'est pas activé dans une activité.';
$string['color1_title'] = 'Couleur 1';
$string['color2'] = '#AACC24';
$string['color2_descr'] = 'Code couleur pour Couleur 2.';
$string['color2_title'] = 'Couleur 2';
$string['color3'] = '#99DDFF';
$string['color3_descr'] = 'Code couleur pour Couleur 3.';
$string['color3_title'] = 'Couleur 3';
$string['color4'] = '#6699CC';
$string['color4_descr'] = 'Code couleur pour Couleur 4.';
$string['color4_title'] = 'Couleur 4';
$string['color5'] = '#EE8866';
$string['color5_descr'] = 'Code couleur pour Couleur 5.';
$string['color5_title'] = 'Couleur 5';
$string['color6'] = '#BBBBBB';
$string['color6_descr'] = 'Code couleur pour Couleur 6.';
$string['color6_title'] = 'Couleur 6';

// Forms strings.
$string['message'] = 'Texte de votre note';
$string['validate'] = 'Enregistrer';
$string['maximumchars'] = 'La longueur maximal d\'un message est limitée à 100 caractères.';
$string['title'] = 'Titre de la colonne';
$string['changecolumn'] = 'Déplacer cette note vers ';
$string['choosecolor'] = 'Couleur de fond ';
$string['deletenote'] = 'Supprimer une note';
$string['deletenotesure']  = 'Etes-vous sûr de vouloir supprimer cette note ? ';
$string['deletecolumn'] = 'Supprimer une colonne';
$string['deletecolumnsure']  = 'Êtes-vous sûr de vouloir supprimer cette colonne et son contenu ? Les notes supprimées ne seront pas récupérables.';
$string['cannotgetnote']  = 'Cette note n\'existe pas dans la base de données.';
$string['cannotgetcolumn']  = 'Cette colonne n\'existe pas dans la base de données.';
$string['cannotcreatenote']  = 'Vous n\'êtes pas autorisé à créer une note.';
$string['cannotupdatenote']  = 'Vous n\'êtes pas autorisé à modifier cette note.';
$string['cannotdeletenote']  = 'Vous n\'êtes pas autorisé à supprimer cette note.';
$string['cannotmanagecolumn']  = 'Vous n\'êtes pas autorisé à gérer les colonnes.';
$string['cannotvote']  = 'Vous n\'êtes pas autorisé à participer au vote.';
$string['cannotvotelimitreached']  = 'Vous ne pouvez ajouter de vote car votre limite est atteinte.';
$string['erroremptymessage'] = 'Vous devez rédiger un texte pour votre note.';
$string['erroremptytitle'] = 'Vous devez donner un titre à votre colonne.';
$string['createnote_title'] = 'Ajout d\'une note dans la colonne ';
$string['updatenote_title'] = 'Modification d\'une note';
$string['choosecolorbuttons'] = 'Couleur de fond';

// Mustache template strings.
$string['createnote'] = 'Ajouter une Sticky Note';
$string['editnote'] = 'Modifier cette note';
$string['createcolumn'] = 'Ajouter une colonne';

// Pix in mustache template.
$string['heart_empty_pix'] = 'Ajouter un J\'aime';
$string['heart_full_pix'] = 'Retirer votre J\'aime';
$string['heart_limited_pix'] = 'Limite des votes atteinte';
$string['max_notes_reached_pix'] = 'Limite des notes atteinte : supprimez une note avant d\'en créer une autre';
$string['create_note_pix'] = 'Ajouter une note dans cette colonne';
$string['create_column_pix'] = 'Ajouter une colonne';
$string['edit_column_pix'] = 'Modifier cette colonne';
$string['delete_column_pix'] = 'Supprimer cette colonne';
$string['edit_note_pix'] = 'Modifier cette note';
$string['delete_note_pix'] = 'Supprimer cette note';
$string['move_cross_pix'] = "Glisser-déposer cette note";

// Events.
$string['eventnotecreated'] = 'Sticky note créée';
$string['eventnoteupdated'] = 'Sticky note modifiée';
$string['eventnotedeleted'] = 'Sticky note supprimée';