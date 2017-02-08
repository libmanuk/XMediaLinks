<?php
/**
 * XMediaLinks
 * 
 * @copyright Copyright 2017 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * The XMediaLinks plugin.
 * 
 * @package Omeka\Plugins\XMediaLinks
 */
class XMediaLinksPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array(
        'xmedialink' => array('Display', 'Item', 'Item Type Metadata', 'External Digital Object Link'),
    );


    public function xmedialink($text, $args) {
        return $this->_xmediaField($text, $args);
    }

    public function _xmediaField($text, $args) {
        $pieces = explode("^", $text);
        return "<a href=\"" . $pieces[2] . "\" target=\"_blank\"><img src="" . $pieces[0] . "\" /></a><br/><p>. $pieces[1] . </p>";
    }

}
