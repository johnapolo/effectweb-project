<?php
/***********************************************************/
/* Cetemaster Services, Limited                            */
/* Copyright (c) 2010-2013. All Rights Reserved,           */
/* www.cetemaster.com.br / www.cetemaster.com              */
/***********************************************************/
/* File generated by Cetemaster PHP Template Engine        */
/* Cache file:                                             */
/* Cache generated in 14/09/2013 - 17:40h                  */
/***********************************************************/
/* This is a cache file generated by Effect Web 2.10.15    */
/* DO NOT EDIT DIRECTLY                                    */
/* The changes are not saved to the database automatically */
/***********************************************************/

class skin_informations extends CTM_Command
{
	//============================================
	// Begin: include_masterResetTable
	//============================================
	public function include_masterResetTable() 
	{
		global $informations;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"7\" class=\"tableBackColumn\" style=\"text-align:center;\">
            <thead>
                <tr width=\"100%\">
                    <th>#</th>
                    <th>{$this->lang->words['Words']['Free']}</th>
                    <th>".(VIP_NAME_1)."</th>
                    ".(VIP_NUMBER >= 2 ? "<th>".(VIP_NAME_2)."</th>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<th>".(VIP_NAME_3)."</th>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<th>".(VIP_NAME_4)."</th>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<th>".(VIP_NAME_5)."</th>" : NULL)."
                </tr>
            </thead>
            <tbody>
            	".($this->settings['USERPANEL']['CHARACTER']['MASTER_RESET'][0xFF]['MODE'] < 3 ? "<tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['ResetsRequire']}</td>
                    <td>{$informations['masterResetTable']['resets_require'][0]}</td>
                    <td>{$informations['masterResetTable']['resets_require'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['resets_require'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['resets_require'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['resets_require'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['resets_require'][5]}</td>" : NULL)."
                </tr>" : NULL)."
            	<tr>
                	<td>{$this->lang->words['Infos']['MResetTable']['LevelReset']}</td>
                    <td>{$informations['masterResetTable']['level_reset'][0]}</td>
                    <td>{$informations['masterResetTable']['level_reset'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['level_reset'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['level_reset'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['level_reset'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['level_reset'][5]}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['StrengthRequire']}</td>
                    <td>{$informations['masterResetTable']['strength_require']}</td>
                    <td>{$informations['masterResetTable']['strength_require']}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['strength_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['strength_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['strength_require']}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['strength_require']}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['DexterityRequire']}</td>
                    <td>{$informations['masterResetTable']['dexterity_require']}</td>
                    <td>{$informations['masterResetTable']['dexterity_require']}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['dexterity_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['dexterity_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['dexterity_require']}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['dexterity_require']}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['VitalityRequire']}</td>
                    <td>{$informations['masterResetTable']['vitality_require']}</td>
                    <td>{$informations['masterResetTable']['vitality_require']}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['vitality_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['vitality_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['vitality_require']}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['vitality_require']}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['EnergyRequire']}</td>
                    <td>{$informations['masterResetTable']['energy_require']}</td>
                    <td>{$informations['masterResetTable']['energy_require']}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['energy_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['energy_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['energy_require']}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['energy_require']}</td>" : NULL)."
                </tr>
                ".(MUSERVER_VERSION >= 1 ? "<tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['CommandRequire']}</td>
                    <td>{$informations['masterResetTable']['command_require']}</td>
                    <td>{$informations['masterResetTable']['command_require']}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['command_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['command_require']}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['command_require']}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['command_require']}</td>" : NULL)."
                </tr>" : NULL)."
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['MoneyReset']}</td>
                    <td>{$informations['masterResetTable']['money_require'][0]}</td>
                    <td>{$informations['masterResetTable']['money_require'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['money_require'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['money_require'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['money_require'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['money_require'][5]}</td>" : NULL)."
                </tr>
                ".($this->settings['USERPANEL']['CHARACTER']['MASTER_RESET'][0xFF]['MODE'] == 1 ? "<tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['ResetsRemove']}</td>
                    <td>{$informations['masterResetTable']['resets_remove'][0]}</td>
                    <td>{$informations['masterResetTable']['resets_remove'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['resets_remove'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['resets_remove'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['resets_remove'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['resets_remove'][5]}</td>" : NULL)."
                </tr>" : NULL)."
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['ResetPoints']}</td>
                    <td>{$informations['masterResetTable']['reset_points'][0]}</td>
                    <td>{$informations['masterResetTable']['reset_points'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['reset_points'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['reset_points'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['reset_points'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['reset_points'][5]}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['ClearInvent']}</td>
                    <td>{$informations['masterResetTable']['clear_invent'][0]}</td>
                    <td>{$informations['masterResetTable']['clear_invent'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['clear_invent'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['clear_invent'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['clear_invent'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['clear_invent'][5]}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['ClearSkill']}</td>
                    <td>{$informations['masterResetTable']['clear_skill'][0]}</td>
                    <td>{$informations['masterResetTable']['clear_skill'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['clear_skill'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['clear_skill'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['clear_skill'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['clear_skill'][5]}</td>" : NULL)."
                </tr>
                <tr>
                    <td>{$this->lang->words['Infos']['MResetTable']['ClearQuest']}</td>
                    <td>{$informations['masterResetTable']['clear_quest'][0]}</td>
                    <td>{$informations['masterResetTable']['clear_quest'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['clear_quest'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['clear_quest'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['clear_quest'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['clear_quest'][5]}</td>" : NULL)."
                </tr>
                <tr>
                    <td style=\"color:#FF0000\">{$this->lang->words['Infos']['MResetTable']['CoinAward']}</td>
                    <td>{$informations['masterResetTable']['coin_award'][0]}</td>
                    <td>{$informations['masterResetTable']['coin_award'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['masterResetTable']['coin_award'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['masterResetTable']['coin_award'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['masterResetTable']['coin_award'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['masterResetTable']['coin_award'][5]}</td>" : NULL)."
                </tr>
            </tbody>
        </table>";
		return $CTM_HTML;
	}
	//============================================
	// End: include_masterResetTable
	//============================================
	//============================================
	// Begin: include_resetTable
	//============================================
	public function include_resetTable() 
	{
		global $informations;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "".($this->settings['USERPANEL']['CHARACTER']['RESET_SYSTEM'][0xFF]['MODE'] < 4 ? "<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"7\" class=\"tableBackColumn\" style=\"text-align:center;\">
        	<thead>
            	<tr width=\"100%\">
                	<th>#</th>
                    <th>{$this->lang->words['Words']['Free']}</th>
                    <th>".(VIP_NAME_1)."</th>
                    ".(VIP_NUMBER >= 2 ? "<th>".(VIP_NAME_2)."</th>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<th>".(VIP_NAME_3)."</th>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<th>".(VIP_NAME_4)."</th>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<th>".(VIP_NAME_5)."</th>" : NULL)."
				</tr>
			</thead>
            <tbody>
            	<tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['LevelReset']}</td>
                    <td>{$informations['resetTable']['level_reset'][0]}</td>
                    <td>{$informations['resetTable']['level_reset'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['level_reset'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['level_reset'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['level_reset'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['level_reset'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['MoneyReset']}</td>
                    <td>{$informations['resetTable']['money_require'][0]}</td>
                    <td>{$informations['resetTable']['money_require'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['money_require'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['money_require'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['money_require'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['money_require'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['LevelAfter']}</td>
                    <td>{$informations['resetTable']['level_after'][0]}</td>
                    <td>{$informations['resetTable']['level_after'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['level_after'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['level_after'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['level_after'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['level_after'][5]}</td>" : NULL)."
                </tr>
                ".($this->settings['USERPANEL']['CHARACTER']['RESET_SYSTEM'][0xFF]['MODE'] > 0 ? "<tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['SetPoints']}</td>
                    <td>{$informations['resetTable']['set_points'][0]}</td>
                    <td>{$informations['resetTable']['set_points'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['set_points'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['set_points'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['set_points'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['set_points'][5]}</td>" : NULL)."
                </tr>" : NULL)."
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['ClearInvent']}</td>
                    <td>{$informations['resetTable']['clear_invent'][0]}</td>
                    <td>{$informations['resetTable']['clear_invent'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['clear_invent'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['clear_invent'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['clear_invent'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['clear_invent'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['ClearSkill']}</td>
                    <td>{$informations['resetTable']['clear_skill'][0]}</td>
                    <td>{$informations['resetTable']['clear_skill'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['clear_skill'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['clear_skill'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['clear_skill'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['clear_skill'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['ClearQuest']}</td>
                    <td>{$informations['resetTable']['clear_quest'][0]}</td>
                    <td>{$informations['resetTable']['clear_quest'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$informations['resetTable']['clear_quest'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$informations['resetTable']['clear_quest'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$informations['resetTable']['clear_quest'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$informations['resetTable']['clear_quest'][5]}</td>" : NULL)."
                </tr>
			</tbody>
		</table>" : "".$this->loop__include_resetTable__0x00()."")."";
		return $CTM_HTML;
	}
	//============================================
	// End: include_resetTable
	//============================================
	//============================================
	// Begin: serverInfos
	//============================================
	public function serverInfos() 
	{
		global $informations, $global_serverlist;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "	<div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Infos']['Title']}</span></div>
        <ul class=\"info\">
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Name']} </span>".(SERVER_NAME)."</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Version']} </span>".(SERVER_VERSION)."</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Experience']} </span>".(SERVER_EXPERIENCE)."</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Drop']} </span>".(SERVER_DROP)."</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['BugBless']} </span>{$this->vars['sidebar']['infos']['bug_bless']}</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['ResetType']} </span>{$this->vars['sidebar']['infos']['reset_type']}</li>
            <li class=\"line\"><!-- Separator line --></li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['Accounts']} </span>{$this->vars['sidebar']['infos']['count']['totalAccounts']}</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['Characters']} </span>{$this->vars['sidebar']['infos']['count']['totalCharacters']}</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['Guilds']} </span>{$this->vars['sidebar']['infos']['count']['totalGuilds']}</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['AccountsVIP'][1]} </span>{$this->vars['sidebar']['infos']['count']['totalVIPAccounts'][1]}</li>
            ".(VIP_NUMBER >= 2 ? "<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['AccountsVIP'][2]} </span>{$this->vars['sidebar']['infos']['count']['totalVIPAccounts'][2]}</li>" : NULL)."
            ".(VIP_NUMBER >= 3 ? "<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['AccountsVIP'][3]} </span>{$this->vars['sidebar']['infos']['count']['totalVIPAccounts'][3]}</li>" : NULL)."
            ".(VIP_NUMBER >= 4 ? "<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['AccountsVIP'][4]} </span>{$this->vars['sidebar']['infos']['count']['totalVIPAccounts'][4]}</li>" : NULL)."
            ".(VIP_NUMBER == 5 ? "<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['AccountsVIP'][5]} </span>{$this->vars['sidebar']['infos']['count']['totalVIPAccounts'][5]}</li>" : NULL)."
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['Banned']['Accounts']} </span>{$this->vars['sidebar']['infos']['count']['totalBanned']['accounts']}</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['Count']['Banned']['Characters']} </span>{$this->vars['sidebar']['infos']['count']['totalBanned']['characters']}</li>
            <li><span>{$this->lang->words['Infos']['Count']['CharsPk']} </span>{$informations['count']['chars_pk']}</li>
            <li><span>{$this->lang->words['Infos']['Count']['CharsHero']} </span>{$informations['count']['chars_hero']}</li>
            <li class=\"line\"><!-- Separator line --></li>
            ".(SERVER_STATUS > 0 ? "<li><span>{$this->lang->words['Infos']['Status']} </span>{$informations['status']}</li>" : NULL)."
            <li><span>{$this->lang->words['Infos']['Count']['Onlines']} </span>{$global_serverlist['totalOnline']}</li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['RecordOnline']['Info']['General']} </span><strong>{$this->vars['sidebar']['infos']['recordOnline']['general']}</strong></li>
        	<li><span>{$this->lang->words['Sidebar']['Infos']['RecordOnline']['Info']['Today']} </span><strong>{$this->vars['sidebar']['infos']['recordOnline']['today']}</strong></li>
        </ul>
	</div>
    <div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Infos']['ResetTable']['Title']}</span></div>
        ".$this->include_resetTable()."
	</div>
    <div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Infos']['MResetTable']['Title']}</span></div>
        ".$this->include_masterResetTable()."
    </div>";
		return $CTM_HTML;
	}
	//============================================
	// End: serverInfos
	//============================================
	//============================================
	// Begin: serverTeam
	//============================================
	public function serverTeam() 
	{
		global $team_members;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "	<div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Team']['Title']}</span></div>
        <p>
        	{$this->lang->words['Team']['Text']}
        </p>
	</div>
    <div class=\"box-content\">
        ".(count($team_members) > 0 ? "<script type=\"text/javascript\">
		$(function()
		{
			".$this->loop__serverTeam__0x01()."
		});
		</script>
        ".$this->loop__serverTeam__0x02()."" : "<div class=\"info-box\">{$this->lang->words['Team']['Message']}</div>")."
    </div>";
		return $CTM_HTML;
	}
	//============================================
	// End: serverTeam
	//============================================
	//============================================
	// Begin: serverTerms
	//============================================
	public function serverTerms() 
	{
		global $load_terms;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "	<div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Terms']['Title']}</span></div>
        ".($load_terms ? "<div class=\"blockquote\">
            {$load_terms}
		</div>" : "<div class=\"error-box\">{$this->lang->words['Terms']['Message']}</div>")."
    </div>";
		return $CTM_HTML;
	}
	//============================================
	// End: serverTerms
	//============================================

	//============================================
	// Begin: Foreach functions
	//============================================
	/* include_resetTable : 0x00 */
	private function loop__include_resetTable__0x00()
	{
		global $informations; // PHP Globals
		$content = NULL;

		if(count($informations['resetTable']) > 0)
		{
			foreach($informations['resetTable'] as $key => $table)
			{
				$content .= "<h4>{$this->lang->words['Infos']['ResetTable']['Table']} {$key}</h4>
        <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"7\" class=\"tableBackColumn\" style=\"text-align:center;\">
        	<thead>
            	<tr width=\"100%\">
                	<th>#</th>
                    <th>{$this->lang->words['Words']['Free']}</th>
                    <th>".(VIP_NAME_1)."</th>
                    ".(VIP_NUMBER >= 2 ? "<th>".(VIP_NAME_2)."</th>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<th>".(VIP_NAME_3)."</th>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<th>".(VIP_NAME_4)."</th>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<th>".(VIP_NAME_5)."</th>" : NULL)."
				</tr>
			</thead>
            <tbody>
            	<tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['LevelReset']}</td>
                    <td>{$table['level_reset'][0]}</td>
                    <td>{$table['level_reset'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['level_reset'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['level_reset'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['level_reset'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['level_reset'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['MoneyReset']}</td>
                    <td>{$table['money_require'][0]}</td>
                    <td>{$table['money_require'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['money_require'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['money_require'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['money_require'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['money_require'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['LevelAfter']}</td>
                    <td>{$table['level_after'][0]}</td>
                    <td>{$table['level_after'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['level_after'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['level_after'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['level_after'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['level_after'][5]}</td>" : NULL)."
                </tr>
                ".($this->settings['USERPANEL']['CHARACTER']['RESET_SYSTEM'][0xFF]['MODE'] > 0 ? "<tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['SetPoints']}</td>
                    <td>{$table['set_points'][0]}</td>
                    <td>{$table['set_points'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['set_points'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['set_points'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['set_points'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['set_points'][5]}</td>" : NULL)."
                </tr>" : NULL)."
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['ClearInvent']}</td>
                    <td>{$table['clear_invent'][0]}</td>
                    <td>{$table['clear_invent'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['clear_invent'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['clear_invent'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['clear_invent'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['clear_invent'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['ClearSkill']}</td>
                    <td>{$table['clear_skill'][0]}</td>
                    <td>{$table['clear_skill'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['clear_skill'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['clear_skill'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['clear_skill'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['clear_skill'][5]}</td>" : NULL)."
                </tr>
                <tr>
                	<td>{$this->lang->words['Infos']['ResetTable']['ClearQuest']}</td>
                    <td>{$table['clear_quest'][0]}</td>
                    <td>{$table['clear_quest'][1]}</td>
                    ".(VIP_NUMBER >= 2 ? "<td>{$table['clear_quest'][2]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 3 ? "<td>{$table['clear_quest'][3]}</td>" : NULL)."
                    ".(VIP_NUMBER >= 4 ? "<td>{$table['clear_quest'][4]}</td>" : NULL)."
                    ".(VIP_NUMBER == 5 ? "<td>{$table['clear_quest'][5]}</td>" : NULL)."
                </tr>
			</tbody>
		</table>
        ";
			}
		}
		return rtrim($content);
	}
	/* serverTeam : 0x01 */
	private function loop__serverTeam__0x01()
	{
		global $team_members; // PHP Globals
		$content = NULL;

		if(count($team_members) > 0)
		{
			foreach($team_members as $key => $value)
			{
				$content .= "$(\"#showServer_{$key}\").tooltip(\"{$this->lang->words['Team']['Members']['Server']} <strong>{$value['server']}</strong>\", { hook: false, width: 200 });
			";
			}
		}
		return rtrim($content);
	}
	/* serverTeam : 0x02 */
	private function loop__serverTeam__0x02()
	{
		global $team_members; // PHP Globals
		$content = NULL;

		if(count($team_members) > 0)
		{
			foreach($team_members as $key => $value)
			{
				$content .= "<div class=\"setQuote\">
        	<table width=\"100%\" border=\"0\" cellpadding=\"7\" class=\"tableBackLine\">
            	<tr>
                	<td width=\"20%\" align=\"center\">
                    	<img src=\"{$value['image']}\" width=\"120\" height=\"120\" style=\"border: 1px solid #B3B3B3;\" class=\"image\" />
                        <br />{$value['format_prefix']}{$value['title']}{$value['format_suffix']}
					</td>
                    <td>
                    	<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"7\" style=\"text-align:center;\" class=\"tableBackColumn\">
                        	<tr>
                            	<td width=\"44%\">{$this->lang->words['Team']['Members']['Name']}</td>
                                <td width=\"56%\">{$value['format_prefix']}{$value['name']}{$value['format_suffix']}</td>
                            </tr>
                            <tr>
                            	<td>{$this->lang->words['Team']['Members']['Group']}</td>
                                <td>{$value['group']}</td>
                            </tr>
                            <tr>
                            	<td>{$this->lang->words['Team']['Members']['Contact']}</td>
                                <td>{$value['contact']}</td>
                            </tr>
                            <tr>
                            	<td>{$this->lang->words['Team']['Members']['Class']}</td>
                                <td>{$value['class']}</td>
                            </tr>
                            <tr>
                            	<td>{$this->lang->words['Team']['Members']['Status']}</td>
                                <td id=\"showServer_{$key}\">{$value['status']}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
    		</table>
    	</div>
        ";
			}
		}
		return rtrim($content);
	}
	//============================================
	// End: Foreach functions
	//============================================
}
$callSkinCache = new skin_informations();
$callSkinCache->registry();