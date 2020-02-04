# slim-rest-api-with-jwt-auth
PHP Slim framework with json web token starter pack

### How To Use?

First run this code to install dependencies

```composer install```

Create ```.env``` document in root directory and set these values according to your project
```
SECRET_KEY="your_very_secret_key"
DB_HOST="localhost"
DB_USER="root"
DB_PASS=""
DB_NAME="db_name"
```

You can get token by sending ```POST``` request to ```/auth``` endpoint.

To use this token, set your request's ```Authorization``` header as ```Bearer your_token```

The middleware in app does the control automatically.



