<?php 
namespace AgiraForum\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\View\Helper\HtmlHelper;

class ForumHelper extends Helper
{
	  public $helpers = array('Time');

    public function date($date)
    {
        // set meta description
    		return $this->Time->format(
                $date,
                "MMMM dd, yyyy H:mm a"
        );
    }
}
?>