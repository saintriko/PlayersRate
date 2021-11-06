pushd C:\nginx-1.21.4
start nginx.exe
popd
"C:\php8\php-cgi.exe" -b 127.0.0.1:9000 -c "C:\php8\php.ini"