<?php
/**
 * Created by PhpStorm.
 * User: elama
 * Date: 21.07.16
 * Time: 18:01
 */

namespace EventServiceLib;


class EventServiceValues
{
    const CUSTOM_FIELD_VALUE_REGISTRATION_DATE_ID = 'u';
    const CUSTOM_FIELD_VALUE_LAST_PURCHASE_DATE_ID = 'B';
    const CUSTOM_FIELD_VALUE_NUMBER_OF_PURCHASES_ID = 'q';
    const QUEUE_NAME = 'elama-event-system';
    const EVENT_TYPE_BILLING = 'billing';
    const EVENT_TYPE_REGISTRATION = 'registration';
    const ELAMA_WEBINAR_ID = 'K';
    const ELAMA_TRIAL_ID = 'p';
    const ELAMA_ID = '3';
    const GETRESPONSE_API_URL = 'https://api3.getresponse360.pl/v3';
    const RABBITMQ_NETWORK = 'rabbit-es';
    const RABBITMQ_PORT = 5672;
    const RABBITMQ_USER = 'admin';
    const RABBITMQ_PASSWORD = 'admin';
    const RABBITMQ_VHOST = 'elama-es';
}