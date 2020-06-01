# event-service-library
Библиотека для пуша событий в очередь event service

##Отправка событий

###Http Api
Пример интеграции
```
$message = new AdvPaymentMessage();
$message  
   ->setTransferDate($dt->format('Y-m-d H:i:s'))  
   ->setTransferAmount('500')  
   ->setAdvPlatform('yandex')  
   ->setEmail('test@gmail.com')  
   ->setElamaLogin('elamaLogin@asd.asd');  

$ESApi = new Api(...);
$dispatcher = new \EventServiceLib\HttpApi\EventDispatcher($ESApi);
$dispatcher->dispatchMessage($message);
```

###RabbitMQ (устарел, использовать не рекомендуется)

Отправлять сообщения нужно в exchange без указания конкретной очереди
Пример интеграции
```
$message = new AdvPaymentMessage();
$message  
   ->setTransferDate($dt->format('Y-m-d H:i:s'))  
   ->setTransferAmount('500')  
   ->setAdvPlatform('yandex')  
   ->setEmail('test@gmail.com')  
   ->setElamaLogin('elamaLogin@asd.asd');  

$this->connection = (new ConnectionFactory(...))->createAMQPConnection(...);  
$this->queueManager = new AMQPQueueManager($this->connection);  
$this->eventDispatcher = new \EventServiceLib\EventDispatcher($this->queueManager);  
$this->eventDispatcher->dispatchMessage($message);
```

**Важно:**  
dispatchMessage - Проверяет сообщение на валидность, если не валидно вернет false, если валидно - отправит и вернет true   
   
[Подробнее о сообщениях](https://confluence.elama.zone/pages/viewpage.action?pageId=7275195)  
Хост для отправки: http://event-service.elama.zone/

### dev
Адрес разработки: http://event-service.elama.local/