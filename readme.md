# Basejump WordPress theme

## Introduction

Some people swear by frameworks, some of us work best with grids and yet others prefer to build child themes off the WordPress default theme(s).

Having worked with all of the above, they have one thing in common: there's always something.

* A framework tends to try to cover all its bases and is therefore by default adding way too much "fluff" to the equation.
* When developing based on a grid - whether it's 12 columns, 16 columns, the golden ratio or whatever - there comes a point that a design is just that bit different and you will need to introduce all kinds of div's and/or classes to make the design fit the grid.
* Child themes are nice most of the times, but you need to rewrite a lot of functions or you're stuck with code that never gets used; in other words you'll end up with unnecessary overhead. 

That has been the main reason for me to develop this Basejump WordPress theme.

With the name I have tried to already suggest what it is. Take this theme and "jump off a cliff" (not literally of course) to make it into the site you want it to become.

## Features

Although the Basejump WordPress theme is a base theme for you to build upon, it still comes packed with quite a few features and I have coded it for WordPress 3.4 and above.

* Six different Page Templates, neatly organized in their own Page Templates directory (WordPress 3.4 feature)
* Upto six columns (best used on the Full Width Page Template)
* Superfish navigation dropdown menu
* Fully internationalized
* WPML ready and when activated it shows the language menu right in the menu bar navigation
* Custom background with default background when no custom background has been uploaded by the user; coded with add_theme_support (WordPress 3.4 feature)
* Seven "sidebars" including 4 in the footer that can be used for widgets
* 4 Social Media share buttons in post footer on single post template
* Responsive

## Installation

The name of the downloaded zip file from Github looks something like senlin-basejump-####.zip and the extracted directory will have the same name. I'd suggest to rename the directory to "basejump" or give it any other name you wish. If you do the latter, make sure to have your stylesheet reflect that name too.

Upload the entire basejump directory to the wp-content/themes folder and activate it through the WordPress Dashboard.

After activation the first thing to do is to add a navigation menu and appoint that menu to be the Primary. Second I suggest to go to the widgets and delete all the widgets that WordPress automatically adds to the first available widget on a fresh install.

Only if you do these two things first, will all the features of the theme work out of the box and will the theme immediately look good.

## FAQ
### Why is the Basejump WordPress Theme not downloadable via the WordPress Theme Repository?

Good question!
Not because I am lazy. The main reason is that I have built the Basejump WordPress Theme with future development (for clients) in mind. Not sure about you, but none of my clients ever has wanted to be able to change the header of the theme. My clients actually want to show their company-logo in the header. One of the requirements of listing a theme in the official WordPress Theme Repository is that you need to have the `add_theme_support('custom-header')` functionality included. As I don't do custom headers the Basejump WordPress Theme therefore cannot be included in the Repository.

### Why does Basejump look so much like the default Genesis child theme?

Fans of Genesis will indeed quickly see that Basejump looks very much like the default Child theme of that premium framework. I actually have tried to work with Genesis, but gave up because to me it is just not a natural way of putting together a website. The reason that my Basejump theme looks so much alike is because I very much like the structure of how the Genesis default child theme has been set up. So I decided to rip it apart and use the structure to base my theme on.

### How to code the columns as can be seen on the Page "up to 6 columns"?

On the Page [up to 6 columns](http://wpbaseju.mp/page-templates/full-width/upto-6-columns/) you can see that you can add up to 6 columns. Adding these columns is done with classes as can be seen in the source code of that page. For your convenience I have made a [Gist](https://gist.github.com/3011643), so you can also easily copy it from there. Probably overkill, but nevertheless: although it works on all page templates, more than 4 columns is best used on the full width page template.

## TODO LIST

<del>To make a default .pot and .po file</del>

## Comments / Questions

You can leave any comments and/or ask any questions in the forum on the [Basejump website](http://wpbaseju.mp/forums/)

## Demo

Since the end of June 2012 The Basejump WordPress Theme has it's own demo domain at [http://wpbaseju.mp](http://wpbaseju.mp). You can see another live site where I have used the theme [here](http://senlinhostingclub.com).

## Download (or Fork)
The Basejump WordPress Theme can be downloaded (or forked) from [GitHub](https://github.com/senlin/basejump).

## Disclaimer

The Basejump WordPress theme runs on WordPress version 3.4 and above and I offer no backward compatibility.