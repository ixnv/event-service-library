# event-service-library
Библиотека для пуша событий в очередь event service

Название очереди:
***elama-event-system***

Формат сообщения, принимаемый event servic'ом:
```
{
  "type": "registration"/"billing",
  "fields": {
    "name": <name>,
    "email": <email>,
    "registration_date"/"purchase_date": <DATE_ISO8601>
  }
}
```
