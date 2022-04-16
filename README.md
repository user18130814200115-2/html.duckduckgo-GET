# html.duckduckgo-GET
Use the GET protocol instead of POST with html.duckduckgo.com/html. Useful for for storing search history urls.

## What it does
1. Change the submit method from POST to GET
2. Remove duckduckgo proxy from the search results

Optionally, the `branding.php` filter also:
1. Changes out the logo to `logo.svg` (stored on server)
2. Changes the name from DuckDuckGo to whatever you please (Changes made in sourcecode)

## How to use
This is intended to be run on your own server or as a localhost on your machine.
Requests are still made to duckduckgo's servers.

1. Install a webserver (I use apache)
2. Install and enable php for your server
3. Rename duckduckgo.php (or branding.php if you prefer) to index.php and put it in the proper path (often /var/www/html/ on debian and /srv/http/ on arch)
4. index.php has to be in a folder named `/html/`. Thus if your root folder is `/var/www/`, duckduckgo.php needs to be in `/var/www/html/`, the url will be `http://localhost/html/`

### Try it out first
You can try my hosted version [here](https://search.wester.digital/).

Bandwidth is not cheap though,
so cosider either self-hosting or [donating](https://blog.wester.digital/donations).
