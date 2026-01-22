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
 * Library functions for local_category_reset plugin.
 *
 * @package    local_category_reset
 * @copyright  2026 Brian Pool, National Trail Local Schools
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Extends the category navigation to add a link to reset all courses.
 *
 * @param navigation_node $navigation The navigation node to extend
 * @param context $context The context of the category
 */
function local_category_reset_extend_navigation_category_settings($navigation, $context) {
    if (has_capability('local/category_reset:reset', $context)) {
        $categoryid = $context->instanceid;
        $url = new moodle_url('/local/category_reset/reset.php', ['id' => $categoryid]);
        
        $node = navigation_node::create(
            get_string('resetallcourses', 'local_category_reset'),
            $url,
            navigation_node::TYPE_SETTING,
            null,
            'category_reset',
            new pix_icon('i/reload', '')
        );
        
        $navigation->add_node($node);
    }
}
