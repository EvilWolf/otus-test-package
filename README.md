### Установка
Поскольку пакет не опубликован на packagist.org, необходимо прописать репозиторий в `composer.json`
  
Создаём или редактируем файл composer.json :    
```
{
  "repositories": [
     {
       "type": "vcs",
       "url": "https://github.com/EvilWolf/otus-test-package"
     }
  ],
}
```

Подключаем командой:  
`composer require EvilWolf/otus-test-package`

### Использование
Создаём файл index.php с содержимым
```php
<?php

require 'vendor/autoload.php';
use EvilWolf\ExampleNamespace\ExampleClass;

echo (new ExampleClass)->getName() . PHP_EOL;
```

Запускаем:  
`php index.php`

В терминал должна вывести фраза:  
`Hi! I'm "EvilWolf\ExampleNamespace\ExampleClass"`