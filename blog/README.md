First enable module rewrite:

`sudo a2enmod rewrite`


And restart apache


`sudo systemctl restart apache2`


Now edit for directory level


`sudo vim /etc/apache2/sites-enabled/000-default.conf`


add these lines at end


```
<Directory /var/www/html>
    AllowOverride All
 </Directory>
```

and restart apache again.

`sudo service apache2 restart`
