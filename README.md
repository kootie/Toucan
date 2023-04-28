
## About Laravel

C:/windows/system32/drivers/etc/hosts file
run notepad as administrator
add 127.0.0.1       toucan-tech.tezt to end of file

assuming running xampp
C:/xampp/apache/conf/extra/

insert the below at end of file


<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/sitez/Toucan/public"
    ServerName toucan-tech.tezt
</VirtualHost>

laravel (v10.1.1)


## Database Setup

This app uses MySQL. 

##  Migrations
To create all the necessary tables and columns, run the following

php artisan migrate
Seeding The Database
To add the dummy listings with a single user, run the following
php artisan migrate:refresh --seed
#File Uploading
No files uploaded

Schools list - used as a hard coded array

## License
