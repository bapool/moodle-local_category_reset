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
 * Form for category reset confirmation.
 *
 * @package    local_category_reset
 * @copyright  2026 Brian Pool, National Trail Local Schools
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

/**
 * Category reset confirmation form.
 */
class category_reset_form extends moodleform {

    /**
     * Form definition.
     */
    public function definition() {
        $mform = $this->_form;
        
        $categoryname = $this->_customdata['categoryname'];
        $categoryid = $this->_customdata['categoryid'];
        $coursecount = $this->_customdata['coursecount'];
        $courses = $this->_customdata['courses'];
        
        // Get current settings.
        $deletepattern = get_config('local_category_reset', 'deletepattern');
        $keepgroups = get_config('local_category_reset', 'keepgroups');
        
        // Set defaults if not configured.
        if (empty($deletepattern)) {
            $deletepattern = 'NT-*-*';
        }
        if (empty($keepgroups)) {
            $keepgroups = 'NT-504, NT-IEP, NT-GIFTED';
        }
        
        // Hidden field for category ID.
        $mform->addElement('hidden', 'id', $categoryid);
        $mform->setType('id', PARAM_INT);
        
        // Warning message.
        $warninghtml = html_writer::start_div('alert alert-warning');
        $warninghtml .= html_writer::tag('h4', get_string('resetcategoryconfirm', 'local_category_reset', $categoryname));
        $warninghtml .= html_writer::tag('p', get_string('resetwarning', 'local_category_reset'));
        $warninghtml .= html_writer::start_tag('ul');
        $warninghtml .= html_writer::tag('li', get_string('resetwarning_students', 'local_category_reset'));
        $warninghtml .= html_writer::tag('li', get_string('resetwarning_grades', 'local_category_reset'));
        $warninghtml .= html_writer::tag('li', get_string('resetwarning_groups_pattern', 'local_category_reset', $deletepattern));
        $warninghtml .= html_writer::tag('li', get_string('resetwarning_keep_groups', 'local_category_reset', $keepgroups));
        $warninghtml .= html_writer::end_tag('ul');
        $warninghtml .= html_writer::tag('p', get_string('coursesfound', 'local_category_reset', $coursecount));
        $warninghtml .= html_writer::end_div();
        
        $mform->addElement('html', $warninghtml);
        
        // Course list.
        $courseshtml = html_writer::start_div('card mb-3');
        $courseshtml .= html_writer::div(get_string('coursestobereset', 'local_category_reset'), 'card-header');
        $courseshtml .= html_writer::start_div('card-body');
        $courseshtml .= html_writer::start_tag('ul');
        foreach ($courses as $course) {
            $courseshtml .= html_writer::tag('li', format_string($course->fullname) . ' (' . s($course->shortname) . ')');
        }
        $courseshtml .= html_writer::end_tag('ul');
        $courseshtml .= html_writer::end_div();
        $courseshtml .= html_writer::end_div();
        
        $mform->addElement('html', $courseshtml);
        
        // Date picker.
        $mform->addElement('date_selector', 'startdate', get_string('selectstartdate', 'local_category_reset'));
        $mform->setDefault('startdate', strtotime('+1 month'));
        
        // Buttons.
        $this->add_action_buttons(true, get_string('resetcourse'));
    }
}
