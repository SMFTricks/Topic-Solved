<?php

/**
 * @package Topic Solved
 * @version 1.2
 * @author Diego Andrés <diegoandres_cortes@outlook.com>
 * @copyright Copyright (c) 2022, SMF Tricks
 */

// Main
$txt['TopicSolved_settings'] = 'Topic Solved Settings';
$txt['TopicSolved_mark_solved'] = 'Mark Solved';
$txt['TopicSolved_mark_unsolved'] = 'Mark Unsolved';

// Boards
$txt['TopicSolved_board_solve'] = 'Can mark topics as solved';
$txt['TopicSolved_boards_select'] = 'Select boards where you can mark topics as solved';

// Error
$txt['TopicSolved_error_no_topic'] = 'No topic specified';
$txt['TopicSolved_error_no_board'] = 'This board is not configured to allow solving topics';
$txt['cannot_solve_topics_own'] = 'You cannot solve your own topics';
$txt['cannot_solve_topics_any'] = 'You cannot solve topics in this board';

// Permissions
$txt['permissionname_solve_topics'] = 'Mark topics as solved';
$txt['permissionname_solve_topics_own'] = 'Mark their own topics as solved';
$txt['permissionname_solve_topics_any'] = 'Mark any topic as solved';
$txt['permissionhelp_solve_topics'] = 'This permission allows a user to mark a topic as solved';

// Settings
$txt['TopicSolved_automove_enable'] = 'Enable auto moving solved topics to specfic boards';
$txt['TopicSolved_automove_enable_desc'] = 'You can select the boards for each board when editing or adding boards within the forum admin.';
$txt['TopicSolved_automove_where'] = 'Select destination board for auto moving solved topics';
$txt['TopicSolved_automove_where_desc'] = 'When no board is selected, the topics will remain in the same board after being marked as solved.';
$txt['TopicSolved_indicatorclass_disable'] = 'Disable color and icon indicators for solved topics';