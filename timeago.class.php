<?php
class get_timeago{
  private static $seconds = 1;
  private static $_Minute = 60;
  private static $_Hour = 3600;
  private static $_Day = 86400;
  private static $_Month = 2592000;
  private static $_Year = 31104000;
  
  function __construct(){
    $this->ago = "";
  }

  function get_lang($lang){
    $array = array(
      //Español
      "es" => array("less"=>"Hace menos de 1 segundo",
                   "year"=>"a&ntilde;o",
                   "month"=>"mes",
                   "day"=>"d&iacute;a",
                   "hour"=>"hora",
                   "minute"=>"minuto",
                   "second"=>"segundo",
                   "ago"=>"",
                   "about"=>"Hace"),
      //English
      "en" => array("less"=>"less than 1 second ago",
                   "year"=>"year",
                   "month"=>"month",
                   "day"=>"day",
                   "hour"=>"hour",
                   "minute"=>"minute",
                   "second"=>"second",
                   "ago"=>"ago",
                   "about"=>"about")
      );

    return $array[$lang];
  }
  
  function timeago($time, $lang = "en"){
    $strtotime = time() - strtotime($time);
    $lan = self::get_lang($lang);

    if($strtotime < 1)
      return $lan['less'];
    
    
    $artime = array(self::$_Year  =>  $lan['year'],
                    self::$_Month =>  $lan['month'],
                    self::$_Day   =>  $lan['day'],
                    self::$_Hour  =>  $lan['hour'],
                    self::$_Minute=>  $lan['minute'],
                    self::$seconds=>  $lan['second']);
    
    foreach($artime as $s => $string){
      $day = $strtotime / $s;
      if($day >= 1){
        $r = round($day);
        $msj = "";
        if($lang == "es" && $string == "mes")
          $msj = ($r > 1) ? "es" : '';
        else
          $msj = ($r > 1) ? "s" : '';
        if($lang == "en")
          $msj = ($r > 1) ? 's' : '';
        return $lan['about'].' '.$r.' '.$string.$msj.' '.$lan['ago'];
      }
    }
  }
}
?>
