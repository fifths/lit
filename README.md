# lit

#### ngingx
```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```