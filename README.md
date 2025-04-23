# Thaiconomics Theme

A custom WordPress child theme built on the Moiraine block theme for Thaiconomics.com. This theme provides specialized features for economic content about Thailand, with custom styles and functionality.

## Features

### Custom Header with Hamburger Menu
The theme implements a specialized header with a hamburger menu for improved mobile navigation and a cleaner interface.

### Custom Typography
- **Bodoni** - Used for post titles and dates for an elegant, classic serif appearance
- **Open Sans** - Used for body text and excerpts for improved readability

### Enhanced Block Features
- **Custom Post Excerpt Block** - Adds a "Link to Post" option to the standard excerpt block, allowing excerpts to link to their parent posts
- **Custom Post Templates** - Specialized templates for featured posts and grid layouts

## File Structure

- `/assets/` - Theme assets
  - `/js/` - JavaScript files including custom block enhancements
- `/parts/` - Template parts that override the parent theme
  - `header.html` - Custom header with hamburger menu
- `/patterns/` - Block patterns
  - `post-loop-grid-tc.php` - Grid layout for post loops
  - `post-single-featured.php` - Enhanced featured post display
- `/styles/` - Custom CSS styles
- `/templates/` - Block templates for various page types

## Custom Block Functionality

### Post Excerpt with Link Option
The theme includes JavaScript that extends WordPress's core post excerpt block with a "Link to Post" toggle in the block editor. When enabled, the entire excerpt becomes a link to the full post.

## Installation

1. Make sure the parent Moiraine theme is installed
2. Upload the Thaiconomics theme folder to `/wp-content/themes/` or `/app/themes/` in a Bedrock installation
3. Activate the theme through the WordPress admin panel

## Development

This theme is built as a child theme of Moiraine. When making changes:

- Custom patterns should be added to the `/patterns/` directory
- JavaScript files should be placed in `/assets/js/`
- Custom template parts should go in `/parts/`

## Requirements

- WordPress 6.0 or higher
- Moiraine parent theme
- PHP 7.4 or higher

## Credits

- Developed by Imagewize
- Built on the Moiraine block theme
- Uses Google Fonts: Bodoni and Open Sans