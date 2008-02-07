<?php

/**
* $Id$
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

function b_partners_list_show($options)
{
	include_once (XOOPS_ROOT_PATH."/modules/smartpartner/include/common.php");

	// Creating the partner handler object
	$smartpartner_partner_handler =& smartpartner_gethandler('partner');
	$smartpartner_category_handler =& smartpartner_gethandler('category');

// Randomise using mysql
//mysql> SELECT * FROM table1, table2 WHERE a=b AND c<d
 //  -> ORDER BY RAND() LIMIT 1000;

	$partnersObj = $smartpartner_partner_handler->getPartners($options[2], 0, _SPARTNER_STATUS_ACTIVE, $options[4], $options[5]);

	$cat_id = array();
	$partnersObj2 = array();
	foreach($partnersObj as $partnerObj){
		$p_cats = $partnerObj->categoryid();
		$p_cat_rand = array_rand(explode('|', $p_cats));

		if(!in_array($p_cats[$p_cat_rand],$cat_id)){
			$cat_id[] = $p_cats[$p_cat_rand];
		}
		//partner belong to only one category in the block
		$partnerObj->setVar('categoryid', $p_cats[$p_cat_rand]);
		$partnersObj2[] = $partnerObj;
	}
	if(!empty($cat_id)){
		$criteria = new CriteriaCompo();
		$criteria->add(new Criteria('categoryid', '('.implode(', ', $cat_id).')', 'IN'));
		$catObjs = $smartpartner_category_handler->getObjects($criteria);
	}
	if(in_array(0, $cat_id)){
		$cat_zero = $smartpartner_category_handler->create();
		$cat_zero->setVar('categoryid', 0);
		$catObjs[] = $cat_zero;
	}
	$block = array();

	foreach($catObjs as $catObj){
		$block['categories'][$catObj->getVar('categoryid')]['link']= $catObj->getVar('categoryid') != 0 ? $catObj->getCategoryLink() : _MB_SPARTNER_OTHER_PARTNERS;
		foreach($partnersObj2 as $partnerObj){
			if($partnerObj->getVar('categoryid') == $catObj->getVar('categoryid')){
				$partner['id'] = $partnerObj->id();
				$partner['urllink'] = $partnerObj->getUrlLink('block');
				if (($partnerObj->image()) && (($options[3] == 1) || ($options[3] == 3))) {
					$partner['image'] = $partnerObj->getImageUrl();
				}
				if (($partnerObj->image()) && (($options[3] == 2) || ($options[3] == 3))) {
					$partner['title'] = $partnerObj->title();
				} else {
					$partner['title'] = '';
				}
				$smartConfig =& smartpartner_getModuleConfig();
				$image_info = smartpartner_imageResize($partnerObj->getImagePath(), $smartConfig['img_max_width'], $smartConfig['img_max_height']);
				$partner['img_attr'] = $image_info[3];
				$partner['extendedInfo'] = $partnerObj->extentedInfo();
				$block['categories'][$catObj->getVar('categoryid')]['partners'][] = $partner;

			}
		}
	}

	if ($options[0] == 1) {
		$block['insertBr'] = true;
	}
	if( $options[1] == 1 ){
		$block['fadeImage'] = 'style="filter:alpha(opacity=20);" onmouseover="nereidFade(this,100,30,5)" onmouseout="nereidFade(this,50,30,5)"';
	}

	$block['see_all'] = $options[6];
	$block['lang_see_all'] = _MB_SPARTNER_LANG_SEE_ALL;
	$block['smartpartner_url'] = SMARTPARTNER_URL;

	return $block;
}

function b_partners_list_edit($options)
{
	// option 0
	$form  = "<table border='0'>";
	$form .= "<tr><td>"._MB_SPARTNER_PARTNERS_PSPACE."</td><td>";
	$chk   = "";
	if ($options[0] == 0) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[0]' value='0'".$chk." />"._NO."";
	$chk   = "";
	if ($options[0] == 1) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[0]' value='1'".$chk." />"._YES."</td></tr>";
	$form .= "<tr><td>"._MB_SPARTNER_FADE."</td><td>";

	// option 1
	$chk   = "";
	if ( $options[1] == 0 ) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[1]' value='0'".$chk." />"._NO."";
	$chk   = "";
	if ( $options[1] == 1 ) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[1]' value='1'".$chk." />"._YES."</td></tr>";




	// option 2
	$form .= "<tr><td>"._MB_SPARTNER_BLIMIT."</td><td>";
	$form .= "<input type='text' name='options[2]' size='16' value='".$options[2]."' /></td></tr>";
	$form .= "<tr><td>"._MB_SPARTNER_BSHOW."</td><td>";

	// option 3
	$form .= "<select size='1' name='options[3]'>";
	$sel = "";

	if ( $options[3] == 1 ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='1' ".$sel.">"._MB_SPARTNER_IMAGES."</option>";
	$sel = "";
	if ( $options[3] == 2 ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='2' ".$sel.">"._MB_SPARTNER_TEXT."</option>";
	$sel = "";
	if ( $options[3] == 3 ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='3' ".$sel.">"._MB_SPARTNER_BOTH."</option>";

	$form .= "</select></td></tr>";

	// option 4
	$form .= "<tr><td>"._MB_SPARTNER_BORDER."</td><td>";
	$form .= "<select size='1' name='options[4]'>";
	$sel = "";
	if ( $options[4] == "id" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='id' ".$sel.">"._MB_SPARTNER_ID."</option>";
	$sel = "";
	if ( $options[4] == "hits" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='hits' ".$sel.">"._MB_SPARTNER_HITS."</option>";
	$sel = "";
	if ( $options[4] == "title" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='title' ".$sel.">"._MB_SPARTNER_TITLE."</option>";
	if ( $options[4] == "weight" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='weight' ".$sel.">"._MB_SPARTNER_WEIGHT."</option>";
	if ( $options[4] == "rand()" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='rand()' ".$sel.">"._MB_SPARTNER_RANDOM."</option>";
	$form .= "</select> ";

	// option 5
	$form .= "<select size='1' name='options[5]'>";
	$sel = "";

	if ( $options[5] == "ASC" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='ASC' ".$sel.">"._MB_SPARTNER_ASC."</option>";
	$sel = "";
	if ( $options[5] == "DESC" ) {
		$sel = " selected='selected'";
	}
	$form .= "<option value='DESC' ".$sel.">"._MB_SPARTNER_DESC."</option>";
	$form .= "</select></td></tr>";

	// option 6
	$form .= "<tr><td>"._MB_SPARTNER_SEE_ALL."</td><td>";
	$chk   = "";
	if ($options[6] == 0) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[6]' value='0'".$chk." />"._NO."";
	$chk   = "";
	if ($options[6] == 1) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[6]' value='1'".$chk." />"._YES."</td></tr>";


	$form .= "</table>";
	return $form;
}
?>