URL-Shortner :- This project takes a url from user and generates a short url, which can be used to redirect to the original URL.

Please follow the following points to install the project on your local .

#1. Create database name "url_shortner".
#2. Import file store_urls.sql.
#3. Clone the project from the following link "https://github.com/Milli-Biswas/URL-Shortner.git".
#4. Rename the clone folder as "URL-Shortner".
#5. Copy the folder inside htdocs.
#6. Open .htaccess file and edit the following :-
	RewriteRule ^([\w\d]{4})$ /[ENTER FOLDER NAME]/url_extract.php?decode=$1 [L]
#7. Run localhost\[ENTER FOLDER NAME]\	
#8. Once you get the shortned url , please copy paste the link on address bar then you will be redirected to the original link.

