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
        'xmedialink2' => array('Display', 'Item', 'Item Type Metadata', 'Library Location(s)'),
    );


    public function xmedialink($text, $args) {
        return $this->_xmediaField($text, $args);
    }

    public function xmedialink2($text, $args) {
        return $this->_xmediaField2($text, $args);
    }

    public function _xmediaField($text, $args) {
        $pieces = explode('^', $text);
        return "<table><tr><td style=\"width:15%;\"><a href=\"" . $pieces[2] . "\" target=\"_blank\"><img style=\"width:65px;padding:10px;\" id=\"medialink\" src=\"/nkaa/plugins/XMediaLinks/" . $pieces[0] . ".jpg\" alt=\"Hyperlink for external related resource\"/></a></td><td><span id=\"mediatext\">" . $pieces[1] . "</span></td></tr></table>";
    }

    public function _xmediaField2($text, $args) {
        $pieces = explode('^', $text);
        return "<table><tr><td style=\"width:15%;\"><a href=\"" . $pieces[1] . "\" target=\"_blank\">" . $pieces[0] . "</a></td></tr></table>";
    }


}
