<?php namespace JeyKeu\Notify\View;
use JeyKeu\Notify\View\ViewInterface;
/**
 * Description of NativeView
 *
 * @author Junaid Qadir Baloch <shekhanzai.baloch@gmail.com>
 */
class NativeView implements ViewInterface
{

    public function load($view, $vars = array(), $return = false)
    {
        foreach ($vars as $key => $value) {
            $$key = $value;
        }
        ob_start();

        include $view . ".php";

        $contents = ob_get_contents();
        ob_end_clean();

        return $contents;
    }
//put your code here
}
