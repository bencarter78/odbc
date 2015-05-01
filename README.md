# Laravel ODBC Connector

This is a simple ODBC connector for Laravel 4/5.

### Installation
Add this to the require section in your composer.json file
```
"tck/odbc": "dev-master"
```

In your config/app.php file add the Service Provider to the service providers array like so...
```
'TCK\Odbc\OdbcServiceProvider',
```

Now in your config/database.php you will need to add your connection details, it'll look something like this...
```
'odbc'   => [
		'driver'   => 'odbc',
		'dsn'      => 'odbc:DB_CONNECTION_STRING', //
		'host'     => 'DB_HOST',
		'database' => 'DB_NAME,
		'username' => 'DB_USERNAME',
		'password' => 'DB_PASSWORD',
	],
```

### Usage
Now in your app you can do something like...

```
$data = DB::connection('odbc')->get('tableName')->all();
```

Alternatively, in an Eloquent model you could something like this
```
class Users extends Eloquent {

	protected $connection = 'odbc';
}
```

### DB_CONNECTION_STRING - Something to note
Dependant upon your database configuration, I personally had some difficulty in working out what the DB_CONNECTION_STRING needed to be.

This was some trial and error (with a hell of a lot of Googling!) but you could either use a path, something like...
```
'dsn'      => 'odbc:\\\\path\to\my\database',
```

Or a connection name
```
'dsn'      => 'odbc:\\\\my-connection-name',
```

Hopefully, this will help you!