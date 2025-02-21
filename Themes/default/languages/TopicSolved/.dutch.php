<?php

/**
 * @package Topic Solved
 * @version 1.2
 * @author Diego Andrés <diegoandres_cortes@outlook.com>
 * @copyright Copyright (c) 2022, SMF Tricks
 */

// Hoofdinstellingen
$txt['TopicSolved_settings'] = 'Instellingen voor Opgeloste Topics';
$txt['TopicSolved_mark_solved'] = 'Markeer als Opgelost';
$txt['TopicSolved_mark_unsolved'] = 'Markeer als Niet Opgelost';

// Forums
$txt['TopicSolved_board_solve'] = 'Kan topics als opgelost markeren';
$txt['TopicSolved_boards_select'] = 'Selecteer boards waarin je topics als opgelost kunt markeren';

// Foutmeldingen
$txt['TopicSolved_error_no_topic'] = 'Geen topic gespecificeerd';
$txt['TopicSolved_error_no_board'] = 'Dit board is niet geconfigureerd om topics als opgelost te markeren';
$txt['cannot_solve_topics_own'] = 'Je kunt je eigen topics niet oplossen';
$txt['cannot_solve_topics_any'] = 'Je kunt topics in dit board niet oplossen';

// Rechten
$txt['permissionname_solve_topics'] = 'Topics als opgelost markeren';
$txt['permissionname_solve_topics_own'] = 'Eigen topics als opgelost markeren';
$txt['permissionname_solve_topics_any'] = 'Elk topic als opgelost markeren';
$txt['permissionhelp_solve_topics'] = 'Deze toestemming staat een gebruiker toe om een topic als opgelost te markeren';

// Instellingen
$txt['TopicSolved_automove_enable'] = 'Automatisch verplaatsen van opgeloste of niet-opgeloste topics inschakelen';
$txt['TopicSolved_automove_enable_desc'] = 'Je kunt de boards selecteren voor elke sectie bij het bewerken of toevoegen van boards binnen de boardbeheerder. Het topic wordt alleen verplaatst als de oplossingsstatus verandert.';
$txt['TopicSolved_solve_automove'] = 'Status om automatisch opgeloste topics te verplaatsen?';
$txt['TopicSolved_solved_destination'] = 'Selecteer bestemmingsboard voor automatisch verplaatsen van opgeloste topics';
$txt['TopicSolved_notsolved_destination'] = 'Niet opgeloste bestemming';
$txt['TopicSolved_indicatorclass_disable'] = 'Kleur- en pictogramindicatoren voor opgeloste topics uitschakelen';
$txt['TopicSolved_single_status'] = 'Enkele status voor automatisch verplaatsen gebruiken';
$txt['TopicSolved_single_status_desc'] = 'Wanneer een board automatische verplaatsing heeft ingeschakeld, schakel deze instelling in om alleen de status weer te geven die topics verplaatst. Bijvoorbeeld: "Niet Opgelost" wordt niet weergegeven als het board topics verplaatst met de status "Opgelost"';
$txt['TopicSolved_auto_solved'] = 'Opgelost';
$txt['TopicSolved_auto_notsolved'] = 'Niet Opgelost';
$txt['TopicSolved_maint_board_solve'] = 'Topics in een board oplossen';
$txt['TopicSolved_maint_board_solve_desc'] = 'Deze actie wordt niet beïnvloed door de automatische verplaatsingsinstelling, geen topics worden verplaatst bij het uitvoeren van deze actie.';
$txt['TopicSolved_maint_solve_status'] = 'Status instellen voor de topics';
$txt['TopicSolved_maint_board_solve_save'] = 'Nu bijwerken';
$txt['TopicSolved_maint_board_solve_sure'] = 'Weet je zeker dat je de status voor alle topics in het opgegeven board wilt wijzigen?';

// Logboek
$txt['TopicSolved_log'] = 'Logboek opgeloste topics';
$txt['TopicSolved_log_desc'] = 'Gebruik dit gebied om de als opgelost gemarkeerde topics te bekijken.';
$txt['TopicSolved_no_logs'] = 'Er zijn geen topics opgelost.';
$txt['TopicSolved_log_marked_solved'] = '<a href="%1$s">%2$s</a> gemarkeerd als opgelost.';
$txt['TopicSolved_log_marked_not_solved'] = '<a href="%1$s">%2$s</a> gemarkeerd als niet opgelost.';
$txt['TopicSolved_moved_log'] = 'Bestemmingsboard';
$txt['modlog_ac_clearlog_solved'] = 'Het logboek van opgeloste topics gewist';
