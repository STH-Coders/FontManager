# FontManager

v2.0.0

## Table of Contents

- [Getting Started](#getting_started)
- [Installing](#install)
- [Usage](#usage)
- [Contributing](../CONTRIBUTING.md)

## About

A Simple, Site-Specific WordPress Plugin to Host Google Fonts Locally and Reduce Page Load Speed.

### Getting Started []()

These instructions will help you recreate a version of the project on your local machine for development and testing. See [usage](#usage) for deploying the project on a live system.

### Prerequisites

What things you need to install the software and how to install them.

- Determine what Google Fonts you need on your website and download the appropriate `.zip` files using [Google Webfonts Helper](https://google-webfonts-helper.herokuapp.com/).

- Use the FILEPATH prefix below to create your CSS, then copy the output to a temporary file; you will need it again soon.

> **Customize folder prefix (optional):** `../fonts/%FontName%/`

### Installing []()

- Clone this repo to your local environment.

- Run `composer update` and `composer install` in the '/tools/php-csfixer' folder.

- Delete the fonts in '/assets/fonts/[Dosis, Exo2, Iceberg, Lato]' and create new folders to represent your font-families.

- Unzip the `.zip` files from Google Webfonts Helper into their respective directories.

- Delete the CSS in '/assets/css/FontManager.css' and replace it with the applicable CSS you copied earlier.

### Formatting

- php-cs-fixer

## Usage []()

- Once you have added the fonts you need and the CSS, compress the files in the assets folder along with the FontManager.php file into a `.zip` and FontManager is ready for installation.

- Consider testing functionality in a WP dev enviroment before installing the plugin on a live website if at all possible.

- Good luck! If you encounter any major malfunctions be sure to open a PR or send a quick email so we can investigate.
