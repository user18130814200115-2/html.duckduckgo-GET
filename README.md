# html.duckduckgo-GET
Use the GET protocol instead of POST with html.duckduckgo.com/html. Useful for for storing search history urls.

## What it does
1. Set the method to GET
2. Set the action to null
3. remove duckduckgo proxy from the search results

## How to use
This is intended to be run on your own server or as a localhost on your machine.
Requests are still made to duckduckgo's servers.

1. Install a webserver (I use apache)
2. Install and enable php for your server
3. put duckduckgo.php in the proper path (often /var/www/html/ on debian and /srv/http/ on arch)
4. navigate to duckduckgo.php in your browser (for instance, when hosting locally "localhost/duckduckgo.php")

### Try it out first
You can try my hosted version [here](https://wester.digital/html/).

Bandwidth is not cheap though,
so if you want, feel free to [donate](https://wester.digital/ssg/donations.html) to the upkeep of the website.
