Magasinvegen Borettslag
=======================

End project for IT2805. The website can be seen in action at magasinvegen.andersborud.com.

###To run the project:

  php -S localhost:8000 -t .

##Technologies:

1. HTML5 - for basic structuring of our web site.
2. CCS3 - to style our web site.
3. JavaScript - to manipulate HTML, e.g. the drop-down list in the navigation bar.
4. PHP - to view our HTML code when running on a server.
5. XML - to structure/describe some of the data for our web site.
6. jQuery - a JavaScript library that makes it easier to use JavaScript.
7. Font Awesome - for awesome scalable vector icons.
8. Google Fonts - a huge collection of open source web fonts.
9. Modernizr.js - A feature detection library

###1. HTML5

HTML5 is used to structure our web site. 

We use several HTML5 specific tags, such as "nav", "section" and "aside" as they are semantically better than just using divs.

###2. CSS3

CSS3 is used to style the HTML code so that our site looks more appealing as
well as it make it more user friendly.

Examples of use:
- Site structure (by making a grid system)
- Basic sitewide styling
- Style form elements in /contact/
- Style and CSS animation on "flip cards" in /about/board.php and 

The styling of the "cards" used in /about/board.php was split into a separate file due to file length.

###3. JavaScript

JavaScript is used to manipulate the HTML code in our project. E.g. to make the
drop-down lists in the navigation bar interactive. 

Examples of use:
- The dropdown lists in the navigation menu expands when clicked
- In /about/board.php there are portraits of the board members. By clicking the "info" button, the image will flip around, and the members contact info will be shown.
- The current year is displayed in the footer

We have used the [module pattern](http://www.adequatelygood.com/JavaScript-Module-Pattern-In-Depth.html) to organize our javascript. If we were to expand the codebase in the future, this will help keep the code readable.

###4. PHP

PHP is a server side scripting language for hosting web pages.
The way PHP works is that it renders the HTML files so that they are viewed
just as if you would open them normally.

The main reason we use PHP in this project is so that we are able to include snippets of code, such as the header and footer instead of writing redundant code for each sub page.

###5. XML

We have used XML to structure/describe the list of inhabitants in the housing association. This makes it easy to store and change the data in a proper way compared to using HTML.

###6. jQuery

We use a moderate amount of jQuery in this project. This is done out of convenience, as some operations in vanilla javascript is unnecessarily difficult to do.

###7. Font Awesome

Font Awesome is a CSS toolkit that allows us to use scalable vector icons in
our web site. E.g. the house icon in the navigation bar. The icons are very easy to style with CSS and does not require the use of JavaScript. It also has lot of other features like compatibility with screen readers, infinite scalability (because the icons are vectors) and it now has a total of 479 icons.

###8. Google Fonts

Google Font is a huge collection of open source web fonts. We have imported
the Open Sans-family in to our project from Google Fonts.

###9. Modernizr.js
Modernizr is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser. 

We use this on the "flip cards" in the board member section. Ideally, we want to use CSS to animate the card flip, but not all browsers support this CSS functionality.

To ensure that as many browsers as possible are supported, we detect if a users browser supports " CSS 3D transforms". If yes, we use CSS to animate card flip. If not supported, we use a javascript fallback.


##References

1. http://www.w3schools.com/html/html5_intro.asp
2. http://www.w3schools.com/css/css3_intro.asp
3. http://www.w3schools.com/js/default.asp
4. http://php.net
5. http://www.w3schools.com/xml/default.asp
6. http://jquery.com
7. http://fontawesome.io
8. http://www.google.com/fonts
