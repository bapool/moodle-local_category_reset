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
 * Settings for local_category_reset plugin.
 *
 * @package    local_category_reset
 * @copyright  2026 Brian Pool, National Trail Local Schools
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_category_reset', 
        get_string('pluginname', 'local_category_reset'));
    
    // Group deletion pattern.
    $settings->add(new admin_setting_configtext(
        'local_category_reset/deletepattern',
        get_string('deletepattern', 'local_category_reset'),
        get_string('deletepattern_desc', 'local_category_reset'),
        'NT-*-*',
        PARAM_TEXT
    ));
    
    // Groups to keep (comma-separated).
    $settings->add(new admin_setting_configtext(
        'local_category_reset/keepgroups',
        get_string('keepgroups', 'local_category_reset'),
        get_string('keepgroups_desc', 'local_category_reset'),
        'NT-504, NT-IEP, NT-GIFTED',
        PARAM_TEXT
    ));
    
    $ADMIN->add('localplugins', $settings);
}
