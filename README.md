

++++++++++++++++++++++++++
+ QuarrySYS 2020		++
+						++
+                       ++
+ Developed By Vicjoy   ++
+     @Pronec           ++
+                       ++
++++++++++++++++++++++++++

Requirements:

WAMP/XAMPP/LARAGON Local Server with PHP > 5.2
Supported MYSQL DATABASE and phpMyAdmin for Database import and Edit
TEXT-EDITOR like Visual Code, C++, etc

The APP was built with the collation of multiple files other than Jquery and Vue development work. So, You're to be careful not to delete any file mistakenly or misplace any file inside the folder.

Where to edit stuff? I attached the screenshots of the tested app with the Zip files of this application.... Find the ZIP file and extract or clone this repository

NB; IF YOU'RE USING A LOCAL SERVER THAT GENERATES A RANDOM PASSWORD... YOU MIGHT SAVE YOURSELF STRESS BY SIMPLY RESETTING YOUR DEFAULT PASSWORD to: "lenovo111" AND YOUR USERNAME AS "root" while your SERVE IP might be same as "127.0.0.1" or "192.168.101.1" Depending on your taste... It will deploy the app at a go.

So, what files are you touching?

"configure.php" edit it to your server/database setting 
CREATE DATABASE "questapp"
"databases folder"... copy the .sql extension found inside and run on SQL prompt of the selected or created "questapp" DATABASE using phpMyAdmin or Adminer (localhost/adminer or localhost/phpMyAdmin) on your browser

After successive creation of the database and importation.

Change the database or (simply leave the password blank if you are not using pass key for your local host) and configure the following file sequences to your new envn:

"admin/enterQbp.php";
"admin/enterQep.php";
"admin/enterQes.php";
"admin/enterQit.php";
"admin/enterQms.php";
"admin/enterQoh.php";
"admin/enterQts.php";
"admin/enterQws.php";

AND ALSO;

"output/result_handler.php" (line 42,43,44)
"output2/result_handler.php"
"output3/result_handler.php"
"output4/result_handler.php"
"output5/result_handler.php"
"output6/result_handler.php"
"output7/result_handler.php"
"output8/result_handler.php"


All set?



GOOD LUCK!!!