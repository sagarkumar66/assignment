1. Download and setup xampp
2. Download the project and keep inside htdocs folder
3. Folder name should be "assignment"
4. Start apache (in xampp control panel)
5. Go to http://localhost/assignment/

Problem faced - 
When i was trying to fetch json data using ajax it was giving this error:
assignment/:1 Access to XMLHttpRequest at 'https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json' from origin 'http://localhost' has been blocked by CORS policy: No 'Access-Control-Allow-Origin' header is present on the requested resource.
To check the error uncomment line 49 to 66 in views/index.php
I did some research but was unable to fix, it needs to be handled on timesofindia server

So i fetched the data in php and sent the data on fronetnd using ajax

I have used jquery datatable, bootstrap, ajax, codeigniter, font awesome