# php_practice
<b>Practice in php development.<b>
<br>Nginx server with php-cgi
<br>PHP 8.1.1
<br>Doctrine 2
  
<h2>How to run project on Nginx: </h1>
  
* Pull project to `C:\nginx-1.21.5\`
* Dowload <a href="https://www.php.net/downloads.php">PHP8.1.1</a> to `C:\php8\`
* Config php.ini, set short_open_tag=On
* To start:
  * Start php-cgi: 
      ``` console
      "C:\php8\php-cgi.exe" -b 127.0.0.1:9000 -c "C:\php8\php.ini"
      ```
  * start nginx:
     ``` console
     cd C:\nginx-1.21.5

     Start nginx.exe
     ```
  * Or just run "start.bat"

nginx dir: `C:\nginx-1.21.5`
PHP dir: `C:\php8\`
  
    
LOCAL NGINX IP: `127.0.0.1:8000`
  
* cd nginx-1.21.5\html\
* composer i
