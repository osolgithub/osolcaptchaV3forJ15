<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.form.formfield');
class JElementfontslist extends JElement 
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	
	var $_name = 'fontFile';
	
	 function  fetchElement($name, $value, &$node, $control_name)
	{
			
			
			
		
		//$enabled = JPluginHelper::isEnabled('system', 'osolcaptcha');
		//echo ($enabled?"ENABLED":"DISABLED")."<br />";
		//JURI::base()."../index.php?showCaptcha=True&instanceNo=0
		
		$ttfPath = realpath(dirname(__FILE__)."/../ttfs")."/";
		$ttfsAvailable = "";
		if ($handle = opendir($ttfPath)) {
			
		
			
			while (false !== ($entry = readdir($handle))) {
				if(preg_match("@.*\.(ttf|otf)@i",$entry))
				{
					$selected = "";
					if($this->value == $entry)
					{
						$selected = " selected=\"selected\"";
					}
					$ttfsAvailable .="<option value=\"".$entry."\" $selected>".$entry."</option>\n";	
				}
			}
		
			
		
			closedir($handle);
		}
		//jform_params_fontFile
		$elementData = "
		<select name=\"".$this->_name."\" id=\"params".$this->_name."\">
		$ttfsAvailable	
		</select>"
					
					;
		
		return $elementData;
	}
}