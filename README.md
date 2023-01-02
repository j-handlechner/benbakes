# Ben bakes

## Project prompt
### Client
Ben Müller

### Background info
Ben owns the 'Ben bäckt'-cafe & bakery chain with 3 shops in Salzburg.
His CI is based on brown colours with a friendly, organic-related green (HSL 145, 50, 50) accent color.

### What is the website for?
Ben now offers bakery workshops he wants to promote.
Also, his shops now run on 100% sustainable energy which everybody in Salzburg should be aware of.
Finally, Ben is looking for employees.
Top message remains 'Die rundesten Semmerl Salzburgs' (or any other weird slogan you can come up with).

## Useful things for development
### Webdev-Dependencies
`npm install`
 
### Live server / browser syncing
`npx browser-sync dist -w`

### Build
Run `./build` to
* compile sass
* bundle JavaScript
* copy the index-file
* copy the `/images'-folder
* ...

### Clean Build
Run `./clean-build` to build a new dist-folder from scratch.