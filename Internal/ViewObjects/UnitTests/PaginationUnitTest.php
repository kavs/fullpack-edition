<?php namespace ZN\ViewObjects;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

class PaginationUnitTest extends \UnitTestController
{
    const unit =
    [
        'class'   => 'Pagination',
        'methods' => 
        [
            'url'               => ['home/main'],
            'start'             => [0],
            'limit'             => [10],
            'type'              => ['classic'],
            'totalRows'         => [150],
            'countLinks'        => [6],
            'linkNames'         => ['<', '>', '<<', '>>'],
            #'css'               => [['current' => 'color:red']],
            #'style'             => [['links' => ['id' => 'id']]],
            'getURI'            => [NULL],
            'settings'          => [[]],
            'create'            => [NULL, []]
        ]
    ];
}
