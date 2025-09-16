# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with the Thaiconomics WordPress theme.

## Theme Overview

Thaiconomics is a child theme based on the Moiraine Full Site Editing (FSE) block theme. It's designed for spa & retreat websites and is synced to a separate repository.

### Theme Details
- **Name**: Thaiconomics
- **Version**: 1.3.0
- **Parent Theme**: Moiraine (imagewize/moiraine)
- **Type**: WordPress child theme (FSE/Block theme)
- **Text Domain**: thaiconomics

## Development Commands

Run all commands from the theme directory (`/site/web/app/themes/thaiconomics/`):

```bash
# Install theme dependencies
composer install

# Lint PHP files
composer lint

# WordPress Coding Standards scan
composer wpcs:scan

# Fix WPCS violations
composer wpcs:fix

# Sync theme to separate repository
./rsync.sh
```

## Theme Architecture

As a child theme of Moiraine, this theme inherits the Full Site Editing capabilities:

```
/
├── assets/             # Theme assets (CSS, JS, images)
├── inc/               # PHP includes and functionality
├── parts/             # Template parts (header, footer, etc.)
├── patterns/          # Block patterns
├── styles/            # Block styles and variations
├── templates/         # Page templates
├── functions.php      # Theme functions and hooks
├── style.css          # Theme stylesheet with header info
├── theme.json         # Global styles and settings
└── rsync.sh          # Repository sync script
```

## Block Theme Features

- **Template Parts** (`/parts/`) - Reusable components like headers and footers
- **Block Patterns** (`/patterns/`) - Pre-designed content layouts
- **Block Styles** (`/styles/`) - Visual variations for core WordPress blocks
- **Templates** (`/templates/`) - Full page and post templates
- **theme.json** - Global styles, typography, and color settings

## Development Notes

- This is a child theme - core functionality comes from parent Moiraine theme
- Uses WordPress FSE/block editor - no traditional PHP template files
- Follows WordPress Coding Standards (WPCS)
- Code is linted with PHP Parallel Lint
- Theme is synced to external repository via rsync.sh script

## Code Standards

- PHP: WordPress Coding Standards (enforced via PHPCS)
- Minimum PHP version: 7.3+
- Excludes: vendor/, patterns/ from linting
- Follow WordPress naming conventions and hooks