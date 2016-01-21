class get_timeago{
  private $seconds = 1;
  private $_Minute = 60;
  private $_Hour = 3600;
  private $_Day = 86400;
  private $_Month = 2592000;
  private $_Year = 31104000;
  
  function __construct(){
    $this->ago = "";
  }
  
  function timeago($time){
    $strtotime = time() - strtotime($time);
    if($strtotime < 1)
      return 'less than 1 second ago';
    
    $artime = array($this->_Year  =>  'year',
                    $this->_Month =>  'month',
                    $this->_Day   =>  'day',
                    $this->_Hour  =>  'hour',
                    $this->_Minute=>  'minute',
                    $this->seconds=>  'second');
    
    foreach($artime as $s => $string){
      $day = $strtotime / $s;
      if($day >= 1){
        $r = round($day);
        return 'about '.$r.' '.$string.($r > 1 ? 's' : '').' ago';
      }
    }
  }
}
