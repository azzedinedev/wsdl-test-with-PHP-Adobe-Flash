<p align="center">
  <a href="" rel="noopener">
 <img src="https://i.imgur.com/AZ2iWek.png" alt="Project logo"></a>
</p>
<h3 align="center">Project Title</h3>

---

<p align="center"> Few lines describing your project.
    <br> 
</p>

## 📝 Table of Contents

- [📝 Table of Contents](#-table-of-contents)
- [Problem Statement](#problem-statement)
- [Fils on the project](#fils-on-the-project)
- [Note about Flash (End of life)](#note-about-flash-end-of-life)
- [What is Action Script](#what-is-action-script)
- [How to activate WSDL on PHP](#how-to-activate-wsdl-on-php)
  - [Ressource](#ressource)
  - [Diagnose](#diagnose)
  - [Fix](#fix)
- [Built With](#built-with)
- [Author](#author)

## Problem Statement

In this example we test the WSDL with ActinScript for Adobe Flash using PHP.
We provide some examples located in the (wsdl-example) folder.

- IDEAL: This section is used to describe the desired or “to be” state of the process or product. At large, this section
  should illustrate what the expected environment would look like once the solution is implemented.
-
## Fils on the project

In this project we have two PHP fils :
- serveur.php
- client.php

this fils consist to run the WSDL as server and client.

We have also an Adobe flash file :
- webserver.swf
This file contain button to run the call to the WSDL server file and it return the day.
The source code for this file is the webserice.fla

We have a folder contains the examples of WSDL :
- arrayWSDL.wsdl
- complexeWSDL.wsdl
- otherWSDL.wsdl

## Note about Flash (End of life)

Adobe stopped supporting Flash Player beginning December 31, 2020 (“EOL Date”), as previously announced in July 2017. In addition, to help secure users’ systems, Adobe blocked Flash content from running in Flash Player beginning January 12, 2021. Adobe strongly recommends all users immediately uninstall Flash Player to help protect their systems.


## What is Action Script

ActionScript is an object-oriented programming language originally developed by Macromedia Inc. (later acquired by Adobe Systems). It is influenced by HyperTalk, the scripting language for HyperCard. It is now an implementation of ECMAScript (meaning it is a superset of the syntax and semantics of the language more widely known as JavaScript), though it originally arose as a sibling, both being influenced by HyperTalk.

ActionScript is used primarily for the development of websites and software targeting the Adobe Flash Player platform, used on Web pages in the form of embedded SWF files.

ActionScript 3 is also used with Adobe AIR system for the development of desktop and mobile applications. The language itself is open-source in that its specification is offered free of chargeand both an open source compiler (as part of Apache Flex) and open source virtual machine (Mozilla Tamarin) are available.

ActionScript was initially designed for controlling simple 2D vector animations made in Adobe Flash (formerly Macromedia Flash). Initially focused on animation, early versions of Flash content offered few interactivity features and thus had very limited scripting capability. Later versions added functionality allowing for the creation of web-based games and rich web applications with streaming media (such as video and audio). Today, ActionScript is suitable for desktop and mobile development through Adobe AIR, use in some database applications, and in basic robotics, as with the Make Controller Kit.

Flash MX 2004 introduced ActionScript 2.0, a scripting language more suited to the development of Flash applications. It is often possible to save time by scripting something rather than animating it, which usually also enables a higher level of flexibility when editing.

Since the arrival of the Flash Player 9 alpha (in 2006) a newer version of ActionScript has been released, ActionScript 3.0. This version of the language is intended to be compiled and run on a version of the ActionScript Virtual Machine that has been itself completely re-written from the ground up (dubbed AVM2).Because of this, code written in ActionScript 3.0 is generally targeted for Flash Player 9 and higher and will not work in previous versions. At the same time, ActionScript 3.0 executes up to 10 times faster than legacy ActionScript code due to the Just-In-Time compiler enhancements.

Flash libraries can be used with the XML capabilities of the browser to render rich content in the browser. This technology is known as Asynchronous Flash and XML, much like AJAX. Adobe offers its Flex product line to meet the demand for rich web applications built on the Flash runtime, with behaviors and programming done in ActionScript. ActionScript 3.0 forms the foundation of the Flex 2 API.

## How to activate WSDL on PHP

If you have an error : 
Fatal error: Class 'SoapServer' not found in ...\serveur.php on line 39
You must enabel the soap extension on php.in

![This is an image](https://raw.githubusercontent.com/azzedinedev/wsdl-test-with-PHP-Adobe-Flash/master/screenshots/soap-error.png)

### Ressource

Look up the following inside your script file
> phpinfo();
If you can't find Soap Client set to enabled like so:

> image soap-error.png

Source : [Click here to see the full article](https://stackoverflow.com/questions/11391442/fatal-error-class-soapclient-not-found)

### Diagnose

Look up the following inside your script file

> phpinfo();
**If you can't find Soap Client set to enabled like so: the way soap should appear in phpinfo()**

### Fix

**Do the following:**

Locate php.ini in your apache bin folder, I.e Apache/bin/php.ini
Remove the ; from the beginning of extension=php_soap.dll
Restart your Apache server
Look up your phpinfo(); again and check if you see a similar picture to the one above
If you do, problem solved!

## Built With

- Apashe - Web server
- PHP - Script
- Action Script
- WSDL - Web service

## Author

- @azzedinedev : Azzedine Sarirete on 01/2012

Thanks fo reading.