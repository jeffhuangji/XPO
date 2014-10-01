# Mobile XPO
-------

## Description

This is a custom theme of a Drupal site.  
The path to it is `sites/all/themes/xpo`.

## Files ignored

- node_modules/
- css/
- other system files

## How to run it

First time:

1. Check if nodejs is on your system. Go to *Terminal*, type `node -v`, if the version show up, than skip step 2.
2. Install nodejs, download the [installer](http://nodejs.org/), and install and check node in terminal.
3. In terminal, go to repo folder, run `npm i`.
4. Then run `./node_modules/gulp/bin/gulp.js` for one time compile.

When you are working on the theme, you can open terminal and run `./node_modules/gulp/bin/gulp.js watch` to compile css automatically.