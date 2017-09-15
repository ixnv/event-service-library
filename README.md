# event-service-library
Библиотека для пуша событий в очередь event service

Название очереди:
***elama-event-system***

Некоторые сообщения, принимаемые event servic'ом:

 ELAMA:
 - RegistrationMessage - Сообщение при регистрации нового пользователя
 - BillingMessage - Сообщение пополнение счета в elama
 - AdvPaymentMessage - Сообщение перевода средств на рк
 - UpdateAmoCrmContactMessage - Обновление контактых данных в AmoCRM
  
 Тендерная площадка:
 - AgencyAddMessage - Добавление нового агенства
 - AgencyUpdateMessage - Служит для обновления кастомных полей в GetResponse, при подтверждение клиента
 - StatusChangeMessage - Сообщение при изменение статуса агенства
 - ClientAddMessage - Добавление клиента

например:
```
$message = new AdvPaymentMessage();
$message  
   ->setTransferDate($dt->format('Y-m-d H:i:s'))  
   ->setTransferAmount('500')  
   ->setAdvPlatform('yandex')  
   ->setEmail('test@gmail.com')  
   ->setElamaLogin('elamaLogin@asd.asd')  
;  

$this->connection = (new ConnectionFactory(...))->createAMQPConnection(...);  
$this->queueManager = new AMQPQueueManager($this->connection);  
$this->eventDispatcher = new EventDispatcher($this->queueManager);  
$this->eventDispatcher->dispatchMessage($message)
```
**Важно:**  
dispatchMessage - Проверяет сообщение на валидность, если не валидно вернет false, если валидно - отправит и вернет true
