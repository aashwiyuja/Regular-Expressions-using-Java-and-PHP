#
# REGULAR EXPRESSION USING JAVASCRIPT &amp; PHP

CSC-521 PROGRAMMING PROJECT

PHP and JavaScript based program to remove valid comments from input c file and print out all invalid comments using regular expressions.


# Getting Started


## JavaScript

###

### _Prerequisite_

- Browser, preferably latest version of Chrome.

### Installation

- Extract the source code &quot;.zip&quot; file.
- Open folder named &quot;Js comment checker&quot;.
- Open the &quot;index.html&quot; file in the browser.

### Usage

- Select the input program file by clicking the button &quot;Choose File&quot;.
- After which the selected file name will be displayed right next to the button.
- To remove the valid comments and find the invalid ones, click the button &quot;Click To Remove Comments&quot;.
- Now a list of &quot;INVALID COMMENTS&quot; will be displayed, if any.
- Below that &quot;RESULT AFTER REMOVING COMMENTS&quot; will be displayed, below which you will find the code without any valid comments.

## PHP

###

### _Prerequisite_

- Browser, preferably latest version of Chrome.
- [XAMPP](https://www.apachefriends.org/download.html), latest version (To run PHP)

### Installation

- XAMPP
  1. Setup XAMPP and open it.
  2. From the list of modules(servers) we will using &quot;Apache&quot;.
  3. Before selecting &quot;start&quot;, configure it by selecting &quot;config&quot; button in the same row as Apache.
  4. From the dropdown Select &quot;Apache (httpd.conf)&quot;, A text file will be opened.
  5. In the config file
    - Change the port under &quot;Listen&quot; and &quot;ServerName&quot; (by default it should be 80).
    - Set the project root folder path under &quot;DocumentRoot&quot; and &quot;\&lt;Directory&quot; tag.
    - Save and close.
  6. Click &quot;Start&quot; button that is in the same row as Apache, to start the &quot;Apache&quot; server.
  7. If successful, you will see the text &quot;Status change detected: running&quot; in the bottom console.
  8. To view your XAMPP home page, go to the browser hit &quot;localhost:[PORT]&quot;, replace [PORT] with the port number that was configured while setting up config file.
- Extract the source code &quot;.zip&quot; file.
- Male sure to configure the root folder &quot;php comment checker&quot; path in config (refer step 5 of XAMPP setup).
- Go to browser and hit &quot;localhost:[PORT]/php%20comment%20checker/index.php&quot; , replace [PORT] with the port number that was configured while setting up XAMPP config file.

### Usage

- Select the input program file by clicking the button &quot;Choose File&quot;.
- After which the selected file name will be displayed right next to the button.
- To remove the valid comments and find the invalid ones, click the button &quot;Click To Remove Comments&quot; you will be redirected to a new page.
- Now a list of &quot;INVALID COMMENTS&quot; will be displayed, if any.
- Below that &quot;RESULT AFTER REMOVING COMMENTS&quot; text will be displayed, below which you will find the code without any valid comments.




# JAVASCRIPT vs PHP

It&#39;s unfair to compare PHP with JavaScript because they&#39;re used for distinct purposes in web development. JavaScript is a client-side scripting language, whereas PHP is a server-side scripting language, and they have their own pro and cons.

PHP, which stands for &quot;Hypertext Pre-processor,&quot; is a programming language embedded in HTML that can be used to create custom web content, transmit and receive cookies, and assess form input supplied from a browser, among other things. It needs a Web server such Apache to work, and it also works with a variety of databases, including PostgreSQL, Oracle, Sybase, SQL, and MySQL. IMAP, POP3, and LDAP are among the key protocols supported by PHP.

JavaScript, on the other hand, is intended for use in network-centric applications. Web sites will no longer be static HTML thanks to JavaScript, which allows a computer to interact with the user, control the browser, and dynamically create HTML content. JavaScript offers the advantage of requiring less server interaction, allowing you to evaluate user input before sending the page out, resulting in less server load and traffic. JavaScript allows visitors to receive rapid feedback. Although, JavaScript doesn&#39;t support databases directly but using JavaScript based runtime environments such as NodeJS it&#39;s still possible.

The key difference which we noticed while developing in JS and PHP are:

1. Setting up a development environment for JS was simple and easy, just a browser and text editor. Whereas for PHP we had to setup a local server to test the code.
2. With JS we were able directly interact with HTML ex: changing the text, whereas in PHP it was not possible we were only able to redirect to different page to display the text.
3. Although we don&#39;t need to specify the data type while declaring variables in both JS and PHP, in JS to specify scope we still use VAR, LET and CONST whereas in PHP we only have global keyword.
4. In JS while assigning regular expression to a variable we had to wrap it in an escape sequence ex: /---/g. whereas in PHP along with escape sequence we had to assign it as a single quoted string.
5. Few other minor differences that we noticed are, we had to change the extension of HTML file from .html to .php to support php. To add more in PHP while declaring variables we use Sigil ($ symbol) to indicate that it&#39;s a variable.

To summarise, both PHP and JavaScript are built for different purpose, and they have their own advantages and disadvantages. While JavaScript has acquired more popularity in recent years because of the wide verity of framework built around it, developers still use PHP or combination of PHP and JavaScript for back-end development.
