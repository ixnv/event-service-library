<?php

namespace EventServiceLib\Infrastructure\FieldType;


class CountryEnum extends \SplEnum
{
    const __default = self::RU;
    const RU = 'ru';
    const KAZ = 'kaz';
}