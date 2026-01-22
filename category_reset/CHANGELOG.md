# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0] - 2026-01-21

### Added
- Initial release of Category Course Reset plugin
- Bulk reset functionality for all courses in a category and subcategories
- Configurable group deletion pattern using wildcards
- Configurable list of groups to always preserve
- Remove student enrollments during reset
- Delete grades and submissions during reset
- Clear group memberships while preserving special groups
- Reset course completion data
- Set new course start date during reset
- Confirmation dialog before executing reset
- Direct access from category management interface
- Plugin settings page accessible from plugin list
- Privacy API implementation (null provider)
- Comprehensive documentation and README

### Features
- Pattern matching for group deletion (e.g., NT-*-* matches NT-1-1, NT-2-1, etc.)
- Whitelist of groups that should never be deleted
- Wildcard support (* matches any characters)
- Support for Moodle 4.5 and higher
- Full language string support for internationalization
- Proper capability checking (local/category_reset:reset)

### Security
- Proper input sanitization using required_param()
- Session key verification for form submissions
- Capability checking before allowing reset operations
- Context-based permission system

## [Unreleased]

### Planned Features
- Schedule automated resets for future dates
- Email notifications upon completion
- Detailed reset logs and reports
- Preview mode to see what would be reset without executing
- Custom reset profiles for different scenarios
- Option to create backup before reset
- Support for additional Moodle versions
