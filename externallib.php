<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External stickynotes API
 *
 * @package    mod_stickynotes
 * @copyright  2021 Sébastien Mehr <sebmehr.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once("$CFG->libdir/externallib.php");

/**
 * Stickynotes functions
 * @copyright 2021 Sébastien Mehr <sebmehr.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_stickynotes_external extends external_api {

    public static function changing_note_column($noteid, $newcolumnid) {
        global $DB;

        $params = self::validate_parameters(self::changing_note_column_parameters(),
                array('noteid' => $noteid, 'newcolumnid' => $newcolumnid));

        $newdata = new stdClass();
        $newdata->id = $noteid;
        $newdata->stickycolid = $newcolumnid;

        if ($DB->record_exists('stickynotes_note', array('id' => $noteid))) {
            $DB->update_record('stickynotes_note', $newdata);
        }

        $sql = 'SELECT id, stickycolid FROM {stickynotes_note} WHERE id = ?';
        $paramsdb = array($noteid);
        $dbresult = $DB->get_records_sql($sql, $paramsdb);

        return $dbresult;

    }

    public static function changing_note_column_parameters() {
        return new external_function_parameters(
            array(
                'noteid' => new external_value(PARAM_INT, VALUE_REQUIRED),
                'newcolumnid' => new external_value(PARAM_INT, VALUE_REQUIRED),
            )
        );
    }

    public static function changing_note_column_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, VALUE_REQUIRED),
                    'stickycolid' => new external_value(PARAM_INT, VALUE_REQUIRED),
                )
            )
        );

    }

}