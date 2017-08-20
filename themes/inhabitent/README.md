# Inhabitent

A WordPress starter theme for the Inhabitent site.

### Tech

Inhabitent theme uses the following:
* PHP
* HTML
* CSS
* SASS/SCSS
* Javascript
* jQuery
* Gulp 

## Installation

Inhabitent site requires [Node.js](https://nodejs.org/) v4+ to run.

Install the dependencies and devDependencies and start the server.

```sh
$ npm install -d
$ gulp
```

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `Inhabitent` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `inhabitent.dev` to the appropriate localhost URL).
