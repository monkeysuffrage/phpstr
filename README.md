Phpstr
Give php strings easy to remember regex functionality
=========

Do you ever get tired of looking up preg functions because you forgot the order of the arguments? Me too.

```php
require 'phpstr.php';
```

Return a match
```php
str('There are 23 people reading this blog')->match('/\d+/');
```

Substitution
```php
str('all of the es')->gsub('/e/', 'y');
```

Scan will return an array of matches
```php
str('010 202 312 332')->scan('/\d+/');
```

Split will return an array of tokens
```php
str('010 202-312 332')->split('/\s/');
```
