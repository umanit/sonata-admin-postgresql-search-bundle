# Umanit Sonata Admin PostgreSQL Search Bundle

This bundle overrides Sonata Admin search behaviour when using PostgreSQL.
It makes all search **case insensitive** and **unaccented**.

## Install

Register the bundle to your `app/AppKernel.php`

```php
    // ...
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Umanit\SonataAdminPostgreSQLSearchBundle\UmanitSonataAdminPostgreSQLSearchBundle(),
        ];
        // ...
    }
```

Create UNACCENT extension in your database.
```sql
CREATE EXTENSION IF NOT EXISTS UNACCENT;
```

That was it!
