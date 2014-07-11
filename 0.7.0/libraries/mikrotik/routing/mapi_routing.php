<?php

/**
 * Description of Mapi_Routing
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Routing {
    private $param;
    function __construct($param = array()) {
        $this->param = $param;
    }
        
    /**
     * This method for call class Mapi_Ppp_Profile
     * @return Object of Mapi_Ppp_Profile class
     */
    public function routing_pim(){
        return new Mapi_Routing_Pim($this->param);
    }
    
}