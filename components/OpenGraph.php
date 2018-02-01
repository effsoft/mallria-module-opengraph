<?php

namespace app\components;

use Yii;
use yii\base\Component;

class OpenGraph extends Component
{
    /**
     * Metadata basic
     *
     * @var array
    */
    private $_metadata = [
        'title',
        'type',
        'image',
        'url',
        'description',
        'audio',
        'locale',
        'site_name',
        'video',
    ];

    public function __construct(array $config = [])
    {

        parent::__construct($config);
    }

    public function __call($name, $params)
    {
        var_dump(__METHOD__);
        die();
        return parent::__call($name, $params); // TODO: Change the autogenerated stub
    }
}