==================
INSTALLATION GUIDE
==================

-- If you wish to run the app locally:

(1) Set up and launch a WAMP or MAMP server

(2) Execute the contents of 'spm.sql' located in the sql folder in phpMyAdmin, i.e. at:

       http://localhost/phpmyadmin  OR
	   http://localhost/phpMyAdmin

(3) Find your web server's root directory (e.g. C:\wamp\www) and create a
    folder called 'spm-g8t4'. Copy all the contents of this folder into the new folder.

(4) In db.py, change mysql+mysqlconnector://g8t4:g8t4rocks!!!!@g8t4-database.c49gshsb4die.us-east-2.rds.amazonaws.com:3306/spm to mysql+mysqlconnector://root@localhost:3306/spm'. 

(5) Change all the flask retrieval links in the UI pages from 3.139.154.29 to localhost

(6) Run "python lms.py" in a terminal.

(7) Go to http://localhost/spm-g8t4 where the application should be working!

-- If you wish to run the app through our deployed website instead:

(1) If you want to see the admin functionalities, access http://3.139.154.29/IS212_G8T4_LMS/ui/course_mgmt.php
(2) If you want to see the learner functionalities, access http://3.139.154.29/IS212_G8T4_LMS/ui/learner_index.php 

=============
RUNNING TESTS
=============

To run the integration tests, go to your command line and do:

  python integration_tests.py

If you get an error message, it may be due to missing packages. Resolve
this by doing:

  python -m pip install flask_testing

For each missing package (in this case, 'flask_testing').
