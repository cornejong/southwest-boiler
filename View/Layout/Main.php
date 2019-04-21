<?php

namespace App\View\Layout;

use SouthCoast\SouthWest\Base\View\Layout;

class Main extends Layout
{

    const TITLE_SEPARATOR = ' | ';

    private $page;

    public function __contruct($page, $view)
    {
        # code...
    }

    public function head()
    {
        # code...
    }

    public function content()
    {
        # code...
    }

    public function body()
    {
        # code...
    }

    /* Common Elements */

    public function navigation()
    {
        # code...
    }

    public function render()
    {
        print '<!DOCTYPE html>';
        print '<html lang="en">';

        $this->head();
        $this->body($this->content());

        print '</html>';
    }

    public function buildHTMLHead()
    {
        print '<head>';

        foreach ($this->headerElements() as $type => $data) {
            switch ($type) {
                case 'css_link':
                    print CssHelper::link($data);
                    break;

                case 'css_inline':
                    print CssHelper::inline($data);
                    break;

                case 'js_link':
                    print JsHelper::link($data);
                    break;

                case 'js_inline':
                    print JsHelper::inline($data);
                    break;

                case 'meta':
                    print MetaHelper::print($data);
                    break;
            }
        }

        print '</head>';
    }

    public function headerElements(string $type = null)
    {

        $data = [
            'js_link' => [],
            'js_inline' => [],
            'css_link' => [],
            'css_inline' => [],
            'meta' => [
                'viewport' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no',
            ],
        ];

        if (!is_null($type)) {
            return isset($data[$type]) ? $data[$type] : null;
        }

        return $data;
    }
}
