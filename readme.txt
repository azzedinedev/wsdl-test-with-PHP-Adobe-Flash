If you have an error : 
Fatal error: Class 'SoapServer' not found in W:\var\www\togithub\wsdl\serveur.php on line 39
You must enabel the soap extension on php.in

Ressource : https://stackoverflow.com/questions/11391442/fatal-error-class-soapclient-not-found

Look up the following inside your script file
phpinfo();
If you can't find Soap Client set to enabled like so:

//image soap-error.png

Diagnose

Look up the following inside your script file

phpinfo();
If you can't find Soap Client set to enabled like so: the way soap should appear in phpinfo()

Fix

Do the following:

Locate php.ini in your apache bin folder, I.e Apache/bin/php.ini
Remove the ; from the beginning of extension=php_soap.dll
Restart your Apache server
Look up your phpinfo(); again and check if you see a similar picture to the one above
If you do, problem solved!