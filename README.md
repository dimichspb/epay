# EPAY test task

### Installation

1. Clone the repository or download the package

in the app folder (must be empty), run:
```
git clone https://github.com/dimichspb/epay .
```

*NB: if you download the package from the cloud, do not forget to unzip it to the preferred folder then.* 

2. Install dependencies, using composer

in the app folder run:
```
composer update
``` 

### Configuration

1. Setup Apache virtual host like the following example:

```
<VirtualHost *:80>
    DocumentRoot "C:/epay/web"
    ServerName test2.localhost
    <Directory "C:/epay/web">
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all Granted
    </Directory>
</VirtualHost>
```

*NB: webroot should refer to "web" folder of the application*

2. Configure database connection:

```
config\db.php
```

3. Migrate database:

```
php yii migrate
```


### Running

1. Frontend

Frontend main page is available under root route. Let's say you have configured apache to access to the application via "http://epay.localhost", in this case frontend page should be available at:

```
http://epay.localhost
```

2. Backend

Backend part is configured as module and available under route "/service/api/transactions":

```
http://epay.localhost/service/api/transactions
```


### Testing

1. Configure testing database

```
config\test_db.php
```

2. Migrate testing database

```
php test\bin\yii migrate
```

3. To run tests please use the following command:

```
codecept run
```

### Extra words

Additional features to implement:
- Authentication
- Filter results by the shown area
- More tests (unit and functional)
- Automated deployment
- Rebuild Transaction model to avoid using ActiveRecord pattern


