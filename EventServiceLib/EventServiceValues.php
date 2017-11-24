<?php


namespace EventServiceLib;


class EventServiceValues
{
    #global
    const QUEUE_NAME = 'elama-event-system';

    const VERSION = '0.2';

    # TODO: Move to event-service?
    #compains

    #elama
    const ELAMA_WEBINAR_ID = 'H';
    const ELAMA_TRIAL_ID = 'z';
    const ELAMA_ID = 'U';

    #elama-test
//    const ELAMA_WEBINAR_ID = 'K';
//    const ELAMA_TRIAL_ID = 'p';
//    const ELAMA_ID = '3';

    #tender
    const TENDER_ELAMA_AGENCY_COMPANY = 'g';
    const TENDER_ELAMA_CLIENT_COMPANY = 'O';

    #ppc
    const PPC_REGISTRATION = 'a';
    const PPC_SUBSCRIPTION = 'W';
    const PPC_COURSE_SUBSCRIPTION = 'p'; # TODO: real campaign id

    const PPC_NEWS = 'bU';
    const PPC_EVENTS = 'b3';
    const PPC_PARTNERS = 'bN';

    #custom fields
    const CUSTOM_FIELD_VALUE_REGISTRATION_DATE_ID = 'u'; #used for elama registration event
    const CUSTOM_FIELD_VALUE_LAST_PURCHASE_DATE_ID = 'B'; #used for elama billing event
    const CUSTOM_FIELD_VALUE_NUMBER_OF_PURCHASES_ID = 'q'; #used for elama billing event

    const CUSTOM_FIELD_VALUE_STATUS = 'C'; #used for tender change agency status
    const CUSTOM_FIELD_VALUE_STATUS_COMMENT = 'R'; #used for tender change agency status
    const CUSTOM_FIELD_VALUE_CLIENT_ID = 'Q'; #used for tender appropriate agency
    const CUSTOM_FIELD_VALUE_CLIENT_HASH = '2'; #used for tender appropriate agency

    #event types
    const EVENT_TYPE_BILLING = 'billing';
}