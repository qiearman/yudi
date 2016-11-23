# Yudi tugas

## Kebutuhan Tools
1. xampp (PHP 5.3+)
2. git
3. composer

Install ketiga tools di atas.

## Langkah-langkah instalasi
1. buat folder yudi di xampp/htdocs
2. masuk ke gitbash atau klik kanan folder yudi, kemudian pilih "Git Bash Here"
3. ketik `git clone https://github.com/qiearman/yudi` 
4. setelah semua file ter-clone, ketik `composer install` untuk menginstall kebutuhan framework
5. buat virtual host
   
   - masuk ke `xampp\apache\conf\extra`, buka file `httpd-vhosts.conf`
   - tambahkan virtual host baru
   
   ```
    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/yudi/public"
        ServerName yudi.coet
        ServerAlias yudi.co.et
        
        <Directory "C:/xampp/htdocs/yudi">
          Options FollowSymLinks
          AllowOverride All
          Require all granted
        </Directory>
    </VirtualHost>
   ```
   - tambahkan host pada window, buka file `C:\Windows\System32\drivers\etc\host`
   
   ```
    127.0.0.1       yudi.coet yudi.co.et
   ```
   
6. restart apache
7. buka browser, kemudian masuk ke url `yudi.coet`
   
   