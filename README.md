# lit

### diy framework

```
    "noahbuscher/macaw": "dev-master",
    "illuminate/database": "*",
    "filp/whoops": "*",
    "nette/mail": "*",
    "predis/predis": "*"
```


#### ngingx
```
location / {
    try_files $uri $uri/ /index.php?/$uri;
}
```

### apache .htaccess
```
RewriteEngine On
RewriteBase /macaw

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php?/$1 [L]
```