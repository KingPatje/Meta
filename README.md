# Meta
Adds a key value table to models in laravel for storage of simple things

Usage:

Add this to your composer file:

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/kingpatje/meta"
        }
    ],
    
Publish the migrations:
    php artisan vendor:publish --tag="metamigrations"
    
Run the migrations:
    php artisan migrate
    
Add the meta trait to your model:

    use Kingpatje\Meta\Traits\HasMeta;

    class User extends Authenticatable
    {
        use HasMeta;
    }
   
 
