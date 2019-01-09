<?php

declare(strict_types=1);

namespace marvin255\fias\mapper\fias;

use marvin255\fias\mapper\AbstractMapper;

/**
 * Дома.
 */
class Houses extends AbstractMapper
{
    /**
     * @var mixed[]
     */
    protected $fields = [
        'HOUSEID' => 'uuid',
        'HOUSEGUID' => 'uuid',
        'AOGUID' => 'uuid',
        'HOUSENUM' => ['string', 20],
        'STRSTATUS' => 'int',
        'ESTSTATUS' => 'int',
        'STATSTATUS' => 'int',
        'IFNSFL' => ['string', 4],
        'IFNSUL' => ['string', 4],
        'OKATO' => ['string', 11],
        'OKTMO' => ['string', 11],
        'POSTALCODE' => ['string', 6],
        'STARTDATE' => 'date',
        'ENDDATE' => 'date',
        'UPDATEDATE' => 'date',
        'COUNTER' => 'int',
        'DIVTYPE' => 'int',
    ];
    /**
     * @var string[]|string
     */
    protected $sqlPrimary = 'HOUSEID';
    /**
     * @var int
     */
    protected $sqlPartitionsCount = 4;
    /**
     * @var string
     */
    protected $sqlPartitionField = 'HOUSEID';
    /**
     * @var string
     */
    protected $xmlPath = '/Houses/House';
    /**
     * @var string
     */
    protected $insertFileMask = 'AS_HOUSE_*.XML';
    /**
     * @var string
     */
    protected $deleteFileMask = 'AS_DEL_HOUSE_*.XML';
}
