<?php

namespace App\Controller;

use SouthCoast\SouthWest\Base\Controller;
use SouthCoast\SouthWest\Base\Response\ApiResponse;
use SouthCoast\SouthWest\Helpers\Url;

class TestController extends Controller
{
    public function _init()
    {
        # code...
    }

    public static function _behaviour()
    {
        return [];
    }

    public static function _rules()
    {
        return [
            'testMethod' => [
                'pre_execution' => 'testSetup',
            ],
        ];
    }

    public static function _access()
    {
        // Authentication::useBasic([__class__, 'testMethod']);

        return [
            'testMethod' => true,
        ];
    }

    public function testSetup()
    {
        $this->data = [
            'key' => 'value',
            'location' => Url::link(['test/test', 'id' => 232]),
        ];
    }

    /**
     * @param $arg
     */
    public function testMethod(...$arg)
    {
        // $comp = new TestComponent();

        return new ApiResponse(array_merge($this->data, $arg), 200, ApiResponse::RESPOND_JSON);

    }
}

class Http404 extends \Error
{
}
