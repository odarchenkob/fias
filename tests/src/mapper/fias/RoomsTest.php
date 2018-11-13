<?php

declare(strict_types=1);

namespace marvin255\fias\tests\mapper\fias;

use marvin255\fias\mapper\fias\Rooms;
use marvin255\fias\mapper\MapperInterface;
use DateTime;

/**
 * Тест маппера Rooms.
 */
class RoomsTest extends MapperCase
{
    /**
     * Возвращает данные для проверки извлечения из xml.
     */
    protected function getXmlTestData(): array
    {
        $data = [
            'ROOMID' => $this->faker()->uuid,
            'ROOMGUID' => $this->faker()->uuid,
            'HOUSEGUID' => $this->faker()->uuid,
            'REGIONCODE' => $this->faker()->word,
            'FLATNUMBER' => $this->faker()->word,
            'FLATTYPE' => $this->faker()->randomDigitNotNull,
            'POSTALCODE' => $this->faker()->word,
            'STARTDATE' => new DateTime($this->faker()->date),
            'ENDDATE' => new DateTime($this->faker()->date),
            'UPDATEDATE' => new DateTime($this->faker()->date),
            'OPERSTATUS' => $this->faker()->word,
            'LIVESTATUS' => $this->faker()->word,
            'NORMDOC' => $this->faker()->word,
        ];

        $xml = '<Room';
        $xml .= " ROOMID=\"{$data['ROOMID']}\"";
        $xml .= " ROOMGUID=\"{$data['ROOMGUID']}\"";
        $xml .= " HOUSEGUID=\"{$data['HOUSEGUID']}\"";
        $xml .= " REGIONCODE=\"{$data['REGIONCODE']}\"";
        $xml .= " FLATNUMBER=\"{$data['FLATNUMBER']}\"";
        $xml .= " FLATTYPE=\"{$data['FLATTYPE']}\"";
        $xml .= " POSTALCODE=\"{$data['POSTALCODE']}\"";
        $xml .= ' STARTDATE="' . $data['STARTDATE']->format('d.m.Y') . '"';
        $xml .= ' ENDDATE="' . $data['ENDDATE']->format('d.m.Y') . '"';
        $xml .= ' UPDATEDATE="' . $data['UPDATEDATE']->format('d.m.Y') . '"';
        $xml .= " OPERSTATUS=\"{$data['OPERSTATUS']}\"";
        $xml .= " LIVESTATUS=\"{$data['LIVESTATUS']}\"";
        $xml .= " NORMDOC=\"{$data['NORMDOC']}\"";
        $xml .= ' NEVER_GET_ME="NEVER_GET_ME"';
        $xml .= ' />';

        return [$data, $xml];
    }

    /**
     * Возвращает объект маппера.
     */
    protected function getMapper(): MapperInterface
    {
        return new Rooms;
    }
}