<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["projects"]["projects_stakeholders.project_id"]["edit"] = array("table" => "projects_stakeholders", "field" => "project_id", "page" => "edit");
	$lookupTableLinks["stakerholders"]["projects_stakeholders.stakeholder_id"]["edit"] = array("table" => "projects_stakeholders", "field" => "stakeholder_id", "page" => "edit");
	$lookupTableLinks["projects"]["tasks.task_project"]["edit"] = array("table" => "tasks", "field" => "task_project", "page" => "edit");
	$lookupTableLinks["tasks"]["tasks_stakeholders.task_id"]["edit"] = array("table" => "tasks_stakeholders", "field" => "task_id", "page" => "edit");
	$lookupTableLinks["stakerholders"]["tasks_stakeholders.stakeholder_id"]["edit"] = array("table" => "tasks_stakeholders", "field" => "stakeholder_id", "page" => "edit");
	$lookupTableLinks["projects"]["events.event_project"]["edit"] = array("table" => "events", "field" => "event_project", "page" => "edit");
	$lookupTableLinks["tasks"]["events.event_task"]["edit"] = array("table" => "events", "field" => "event_task", "page" => "edit");
	$lookupTableLinks["events"]["events_stakeholders.event_id"]["edit"] = array("table" => "events_stakeholders", "field" => "event_id", "page" => "edit");
	$lookupTableLinks["stakerholders"]["events_stakeholders.stakeholder_id"]["edit"] = array("table" => "events_stakeholders", "field" => "stakeholder_id", "page" => "edit");
}

?>