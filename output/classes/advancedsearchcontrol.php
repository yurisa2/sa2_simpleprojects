<?php

/**
 * Search control builder class for advanced search
 *
 */
class AdvancedSearchControl extends SearchControl 
{
	function __construct($id, $tName, &$searchClauseObj, &$pageObj) {
		parent::__construct($id, $tName, $searchClauseObj, $pageObj);
		$this->getSrchPanelAttrs['ctrlTypeComboStatus'] = true;
	}
	
	function getCtrlSearchTypeOptions($fName, $selOpt, $not, $flexible = false, $both = false) 
	{
		$withNot = $both ? $not : false;
		return parent::getCtrlSearchTypeOptions($fName, $selOpt, $withNot, false, $both);
	}
}


?>