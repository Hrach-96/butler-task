<?php
// use App\Models\UserRole;
	function isMobile() {
	    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
	function getLanguage(){
		$localLang = App::getLocale();
		if($localLang){
			return $localLang;
		}
		return 'en';
	}
	function getLanguageMain($segments){
        $transFile = Lang::get('msg',[],$segments[1]);
        foreach($transFile as $key=>$value){
            if(urlencode($value) == $segments[2] && strpos($key, '-route') !== false){
            	return $key;
            }
        }
	}
	function otherLanguagesNames(){
		$getLanguage = getLanguage();
		$res = '';
		if($getLanguage == 'it'){
			$res.= __('msg.english') . "/" . __('msg.french');
		}
		else if($getLanguage == 'fr'){
			$res.= __('msg.english') . "/" . __('msg.italian');
		}
		else if($getLanguage == 'en'){
			$res.= __('msg.french') . "/" . __('msg.italian');
		}
		return $res;
	}
?>