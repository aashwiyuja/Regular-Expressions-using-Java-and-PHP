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
