# php_practice
<b>Practice in php development.<b>
<br>Nginx server with php-cgi
<br>PHP 8.1.1
  
  <h1>How to run project on Nginx: <h1>
  <ul>
    <li>Pull project to "C:\nginx-1.21.5\"
    <li>Dowload <a href="https://www.php.net/downloads.php">PHP8.1.1</a> to "C:\php8\"
    <li>Config php.ini, set short_open_tag=On
    <li>Start php-cgi: "C:\php8\php-cgi.exe" -b 127.0.0.1:9000 -c "C:\php8\php.ini"
    <li>start nginx: 
      <br>cd "C:\nginx-1.21.5"
      <br>Start nginx.exe
    <li>Or run "start.bat"
    <br>
	<li>LOCAL NGINX IP: 127.0.0.1:8000	
    <br>
    <br>
    <li>nginx dir: "C:\nginx-1.21.5"
    <li>PHP dir: "C:\php8\"
  </ul>
