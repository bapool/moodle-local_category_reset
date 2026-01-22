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
 * English language strings for local_category_reset plugin.
 *
 * @package    local_category_reset
 * @copyright  2026 Brian Pool, National Trail Local Schools
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Category Course Reset';
$string['privacy:metadata'] = 'The Category Course Reset plugin does not store any personal data. It only provides administrative functions to reset course data.';
$string['category_reset:reset'] = 'Reset all courses in category';
$string['resetallcourses'] = 'Reset all courses';
$string['resetcategoryconfirm'] = 'Are you sure you want to reset ALL courses in "{$a}" and its subcategories?';
$string['resetwarning'] = 'This will:';
$string['resetwarning_students'] = 'Remove all student enrollments';
$string['resetwarning_grades'] = 'Delete all grades and submissions';
$string['resetwarning_groups'] = 'Delete selected groups (NT-#-#)';
$string['resetwarning_groups_pattern'] = 'Delete selected groups ({$a})';
$string['resetwarning_keep'] = 'Keep special groups (NT-504, NT-IEP, NT-GIFTED)';
$string['resetwarning_keep_groups'] = 'Keep special groups ({$a})';
$string['resetwarning_date'] = 'Set new course start date';
$string['selectstartdate'] = 'Select new course start date';
$string['coursestobereset'] = 'Courses to be reset';
$string['resetsuccess'] = 'Successfully reset {$a} courses';
$string['reseterror'] = 'Error resetting courses';
$string['nocourses'] = 'No courses found in this category';
$string['coursesfound'] = 'Found {$a} courses';
$string['deletepattern'] = 'Group deletion pattern';
$string['deletepattern_desc'] = 'Pattern for groups to delete. Use * as wildcard. The default will delete NT-2-1, NT-3-2, etc. Use just * to delete all groups not in the keep list below.';
$string['keepgroups'] = 'Groups to keep';
$string['keepgroups_desc'] = 'Comma-separated list of group names to always keep, regardless of deletion pattern. Example: NT-504, NT-IEP, NT-GIFTED';
