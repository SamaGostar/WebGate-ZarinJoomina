<?php
/**
 * @version    $$andspvhjr
 * @package    zarinjoomina
 * @subpackage Base
 * @author     EasyJoomla {@link http://barnamenevisan.ir}
 * @author     vahid hajipour {@vahidhajipour}
 * @author     Created on 24-Apr-2011
 * @license    GNU/GPL
 */
 // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );
class plgButtonzarinjoomina extends JPlugin {
    /**
    
     * @param     object $subject The object to observe
     * @param     array  $config  An array that holds the plugin configuration
     * @since 1.5
     */
    function plgButtonzarinjoomina(& $subject, $config)
    {
        parent::__construct($subject, $config);
    }
    function onDisplay($name)
    {
        $js =  "                      
         function buttonzarinjoominaClick(editor) {
                             txt = prompt('شماره کالا را وارد کنید ','1');
                             if(!txt) return;
                               jInsertEditorText('{zarinjoomina-'+txt+'}', editor);
        }";
        $css = ".button2-left .zarinjoominaButton {
                    background: transparent url(/plugins/editors-xtd/zarinjoomina.png) no-repeat 100% 0px;
                }";
        $doc = & JFactory::getDocument();
        $doc->addScriptDeclaration($js);
        $doc->addStyleDeclaration($css);
        $button = new JObject();
        $button->set('modal', false);
        $button->set('onclick', 'buttonzarinjoominaClick(\''.$name.'\');return false;');
        $button->set('text', JText::_('zarinjoomina'));
        $button->set('name', 'zarinjoominaButton');
        $button->set('link', '#');
        return $button;
    }
}
?>