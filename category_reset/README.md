# Category Course Reset

A Moodle local plugin that allows administrators to efficiently reset all courses within a category and its subcategories with configurable group management.

## Short Description (for Moodle Plugin Directory)

Efficiently reset all courses in a category and subcategories. Removes student enrollments, grades, and submissions while intelligently managing groups - automatically deleting numbered groups (like NT-1-1, NT-2-1) while preserving special groups (like NT-504, NT-IEP, NT-GIFTED). Perfect for schools preparing courses for a new term.

## Long Description (for Moodle Plugin Directory)

The Category Course Reset plugin streamlines the process of preparing courses for a new academic term by allowing administrators to reset entire categories of courses in a single operation.

**Key Features:**
- **Bulk Course Reset**: Reset all courses within a category and its subcategories at once
- **Intelligent Group Management**: Configurable patterns to automatically delete system-generated groups while preserving special purpose groups (IEP, 504, Gifted, etc.)
- **Comprehensive Reset Options**: 
  - Removes all student enrollments
  - Deletes grades and submissions
  - Clears events and notes
  - Resets course completion
  - Removes local role assignments
  - Clears grouping memberships
- **Flexible Configuration**: Set custom patterns for which groups to delete and which to always keep
- **Set New Start Date**: Apply a new start date to all courses during the reset process
- **Safe Operation**: Requires explicit confirmation before executing the reset
- **Easy Access**: Direct links from category management pages and accessible plugin settings
- **Automatically adjust all activity dates** based on the new course start date
  - Maintains the same month and day for each activity
  - Adjusts years according to the course start date
  - Example: If course starts August 2026, activities in Aug-Dec become 2026, Jan-Jul become 2027


**Perfect for:**
- Schools transitioning between academic terms
- Districts managing multiple courses across categories
- Institutions needing to preserve special education or intervention groups
- Administrators who want to automate course preparation workflows

**How It Works:**
1. Navigate to any category in course management
2. Click "Reset all courses" 
3. Review the courses to be reset and configure the start date
4. Confirm the operation
5. The plugin resets all courses, removing student data while keeping your specified groups intact

**Configuration Options:**
- **Group Deletion Pattern**: Define which groups to delete using wildcards (e.g., NT-*-* deletes NT-1-1, NT-2-1, etc.)
- **Groups to Keep**: Specify comma-separated list of groups that should never be deleted (e.g., NT-504, NT-IEP, NT-GIFTED)

This plugin is ideal for educational institutions that need to efficiently prepare courses for new terms while maintaining important organizational structures like intervention groups.

## Requirements

- Moodle 4.0 or higher
- PHP 7.4 or higher

## Installation

1. Download the plugin and extract it to `/path/to/moodle/local/category_reset`
2. Log in as an administrator
3. Navigate to Site administration > Notifications
4. Follow the on-screen instructions to complete the installation

## Configuration

1. Navigate to Site administration > Plugins > Local plugins > Category Course Reset
2. Configure the following settings:
   - **Group deletion pattern**: Pattern for groups to delete (use * as wildcard)
     - Default: `NT-*-*` (deletes groups like NT-1-1, NT-2-1, NT-3-2, etc.)
     - Use just `*` to delete all groups not in the keep list
   - **Groups to keep**: Comma-separated list of group names to preserve
     - Default: `NT-504, NT-IEP, NT-GIFTED`
     - These groups will never be deleted regardless of the deletion pattern

## Usage

### Resetting Courses in a Category

1. Navigate to Site administration > Courses > Manage courses and categories
2. Click on a category
3. Click the "Reset all courses" tab
4. Review the warning message and list of courses to be reset
5. Select the new course start date
6. Click "Reset course" to confirm

### What Gets Reset

When you reset courses, the following actions are performed:

- **Student Enrollments**: All student role enrollments are removed
- **Grades**: All grades and gradebook items are deleted
- **Submissions**: All assignment submissions and activity attempts are removed
- **Groups**: Groups matching the deletion pattern are removed
- **Group Memberships**: All remaining groups have their memberships cleared
- **Events**: Calendar events are removed
- **Notes**: User notes are deleted
- **Completion**: Course completion data is reset
- **Local Roles**: Local role assignments are removed
- **Start Date**: Course start date is updated to the selected date

### What Is Preserved

- Course structure and activities
- Course content and resources
- Teacher enrollments
- Special groups (as configured in settings)
- Course settings and configuration

## Examples

### Example 1: Standard School Setup
**Configuration:**
- Delete pattern: `NT-*-*`
- Keep groups: `NT-504, NT-IEP, NT-GIFTED`

**Result:** Deletes groups like NT-1-1, NT-1-2, NT-2-1, NT-3-2, etc., but keeps NT-504, NT-IEP, and NT-GIFTED groups intact.

### Example 2: Delete All Except Specific Groups
**Configuration:**
- Delete pattern: `*`
- Keep groups: `Special Education, Intervention, Advanced Placement`

**Result:** Deletes all groups except those specifically named in the keep list.

### Example 3: Only Delete Period-Based Groups
**Configuration:**
- Delete pattern: `Period-*`
- Keep groups: `Honors, AP, IEP`

**Result:** Deletes groups like Period-1, Period-2, Period-3, etc., but keeps all other groups including those in the keep list.

## Permissions

The plugin adds the following capability:

- `local/category_reset:reset` - Allows user to reset all courses in a category

By default, this capability is assigned to the Manager and Course Creator roles at the category context.

## Support

For issues, questions, or feature requests, please visit:
- GitHub: [Your Repository URL]
- Moodle Forums: [Link to plugin discussion]

## Credits

**Author:** Brian Pool, National Trail Local Schools
**Copyright:** 2026 Brian Pool
**License:** GNU GPL v3 or later

## Version History

### Version 1.0 (2026012101)
- Initial release
- Bulk course reset for categories and subcategories
- Configurable group deletion patterns
- Configurable group preservation list
- Safe confirmation before reset operation
- Support for Moodle 4.5+


## Privacy

This plugin does not store any personal user data. It performs operations on existing Moodle course data according to administrator instructions.

## License

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.
