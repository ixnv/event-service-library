<?php

namespace EventServiceLib;

class EventServiceValues
{
    #global
    const QUEUE_NAME = 'elama-event-system';
    const ANALYTICS_QUEUE_NAME = 'elama-analytics';
    const EXCHANGE_NAME = 'event-service-fanout';

    const VERSION = '0.3';

    #event types
    const EVENT_TYPE_BILLING = 'billing';

    const LEGAL_TYPE_PERSON = 'private_person';
    const LEGAL_TYPE_ENTITY = 'legal_entity';
}
