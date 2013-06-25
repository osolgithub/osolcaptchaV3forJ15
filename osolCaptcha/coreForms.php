<?php
defined('_JEXEC') or die();
if($isEnabledForForms['enableForContactUs'])
			{
				$this->enabledForms['Core Joomla Contact Us']  = array('requestVars' => 'option=com_contact&view=contact|contact.submit',
																		 'formId' => "emailForm",//if there is no name use formName
																		 'tagToPlaceCaptchaBefore' =>'<button class="button validate" type="submit">',
																		 'verifyOnVars' =>'option=com_contact&task=submit',
																		 //'redirectOnfailure' =>JURI::base() ,//JFactory::getURI()->toString(),
																		 'skipAJAXVerification' => false,
																		 'onCaptchaFailSetVars' =>'view=contact&task='
																		);
			}
			//echo "<pre>".print_r($_REQUEST,true)."</pre>";
			if($isEnabledForForms['enableForRegistration'])
			{
				$this->enabledForms['Core Joomla Registration']  = array('requestVars' => array('option=com_user&view=register',
																								'option=com_user&task=register_save'
																								),
																 'formId' => "josForm",//if there is no name use formName 
																 'tagToPlaceCaptchaBefore' =>'<button class="button validate" type="submit">',
																 'verifyOnVars' =>'option=com_user&task=register_save',
																 //'redirectOnfailure' =>JFactory::getURI()->toString(),
																 'skipAJAXVerification' => false,
																// 'onCaptchaFailSetVars' =>'view=register&task=&view=register'
																);
			}
			if($isEnabledForForms['enableForRemind'])
			{
				$this->enabledForms['Core Joomla remind username'] = array('requestVars' => 'option=com_user&view=remind',
																 //'formId' => "user-registration",//if there is no name use formName 
																 'formaction_regExp' => $this->createFormActionRegexp('?option=com_user&task=remindusername'),
																 'tagToPlaceCaptchaBefore' =>'<button type="submit" class="validate">',
																 'verifyOnVars' =>'option=com_user&task=remindusername',
																 //'redirectOnfailure' =>JFactory::getURI()->toString(),
																 'skipAJAXVerification' => false,
																 'onCaptchaFailSetVars' =>'view=remind&task='
																);
			}
			if($isEnabledForForms['enableForReset'])
			{
				//echo  JRoute::_( 'index.php?option=com_user&task=requestreset' )."<br />";
				$this->enabledForms['Core Joomla reset password'] = array('requestVars' => 'option=com_user&view=reset',
																 'formaction_regExp' => $this->createFormActionRegexp( '?option=com_user&task=requestreset' ),//'task=requestreset',
																 'tagToPlaceCaptchaBefore' =>'<button type="submit" class="validate">',
																 'verifyOnVars' =>'option=com_user&task=requestreset',
																 'redirectOnfailure' =>JURI::current().'?option=com_user&view=reset&essp_err=check_failed',//JFactory::getURI()->toString(),
																 'skipAJAXVerification' => false,
																 'onCaptchaFailSetVars' =>'view=reset&task='
																);
			}
			if($isEnabledForForms['enableForComLogin'] && 0)
			{
				$this->enabledForms['Core Joomla login Module'] = array('requestVars' => '*',
																		 'formId' => "form-login",//if there is no name use formName
																		 'ignore_condition' => 'task=logout',
																		 'tagToPlaceCaptchaBefore' =>'<input type="submit"',
																		 'verifyOnVars' =>'option=com_user&task=login',
																		 'redirectOnfailure' =>JURI::base()."?option=com_user&view=login" ,//JFactory::getURI()->toString(),
																		 'skipAJAXVerification' => false,
																		 //'onCaptchaFailSetVars' =>'view=users&task='
																		 'isVertical' =>  true,
																		) ;
				//<input type="submit" value="Login" class="button" name="Submit">
				$this->enabledForms['Core Joomla login Component Form'] = array('requestVars' => 'option=com_user&view=login',
																		 'formId' =>"com-form-login",
																		 //'no-id-form-ref-field' => 'task=user.login',//'task=search',//
																		 'ignore_condition' => 'task=logout',
																		 'tagToPlaceCaptchaBefore' =>'<input type="submit"',
																		 'verifyOnVars' =>'option=com_user&task=login',
																		 'redirectOnfailure' =>JURI::base()."?option=com_user&view=login" ,//JFactory::getURI()->toString(),
																		 'skipAJAXVerification' => false,
																		 //'onCaptchaFailSetVars' =>'view=users&task='
																		 'isVertical' =>  false,
																		) ;
			}
?>