<?php

declare(strict_types=1);

namespace marvin255\fias\mapper\fias;

use marvin255\fias\mapper\AbstractMapper;

/**
 * Типы квартир.
 */
class FlatTypes extends AbstractMapper
{
    /**
     * @var mixed[]
     */
    protected $fields = [
        'FLTYPEID' => 'uuid',
        'NAME' => 'string',
        'SHORTNAME' => 'string',
    ];
    /**
     * @var string
     */
    protected $xmlPath = '/FlatTypes/FlatType';
    /**
     * @var string
     */
    protected $insertFileMask = 'AS_FLATTYPE_*.XML';
    /**
     * @var string
     */
    protected $deleteFileMask = 'AS_DEL_FLATTYPE_*.XML';

    /**
     * @inheritdoc
     */
    public function getSqlPrimary(): array
    {
        return ['FLTYPEID'];
    }
}
