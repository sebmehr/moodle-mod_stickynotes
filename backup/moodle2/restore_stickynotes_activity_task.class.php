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
 * Class for restore
 *
 * @package     mod_stickynotes
 * @copyright   2021 Olivier VALENTIN
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/stickynotes/backup/moodle2/restore_stickynotes_stepslib.php');

/**
 * stickynotes restore task that provides all the settings and steps to perform one complete restore of the activity.
 */
class restore_stickynotes_activity_task extends restore_activity_task {

    /**
     * Define (add) particular settings this activity can have.
     */
    protected function define_my_settings() {
        // No particular settings for this activity.
    }

    /**
     * Define (add) particular steps this activity can have.
     */
    protected function define_my_steps() {
        $this->add_step(new restore_stickynotes_activity_structure_step('stickynotes_structure', 'stickynotes.xml'));
    }

    /**
     * Define the contents in the activity that must be
     * processed by the link decoder.
     */
    static public function define_decode_contents() {
        $contents = array();

        $contents[] = new restore_decode_content('stickynotes', array('intro'), null);

        return $contents;
    }

    /**
     * Define the decoding rules for links belonging
     * to the activity to be executed by the link decoder.
     */
    static public function define_decode_rules() {
        $rules = array();

        $rules[] = new restore_decode_rule('STICKYNOTESVIEWBYID', '/mod/stickynotes/view.php?id=$1', 'course_module');
        $rules[] = new restore_decode_rule('STICKYNOTESINDEX', '/mod/stickynotes/index.php?id=$1', 'course');

        return $rules;
    }

    /**
     * Define the restore log rules that will be applied.
     */
    static public function define_restore_log_rules() {
        $rules = array();
        $rules[] = new restore_log_rule('stickynotes', 'view', 'view.php?id={course_module}', '{stickynotes}');
        return $rules;
    }

    /**
     * Define the restore log rules that will be applied.
     */
    static public function define_restore_log_rules_for_course() {
        $rules = array();
        $rules[] = new restore_log_rule('stickynotes', 'view all', 'index.php?id={course}', null);
        return $rules;
    }
}
