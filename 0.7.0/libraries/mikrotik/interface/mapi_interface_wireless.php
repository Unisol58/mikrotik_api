<?php
/**
 * Description of Mapi_Interface_Wireless
 *
 * @author      Priit Kukk
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Wireless extends Mapi_Query
{
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param )
    {
        $this->param = $param;
        parent::__construct($param);
    }


    /**
     * This method is used to set wlan
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    
    public function set_wlan($param)
    {
        $input = array(
            'command'       => '/interface/wireless/set',              
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }   

    public function enable_wlan($param)
    {
        $input = array(
            'command'       => '/interface/wireless/enable',
        );
        $out = array_merge($input, $param);
        return $this->query($out);        
    } 

    /**
     * This method is used to set security profiles 
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    
    public function set_security_profile($param)
    {
        $input = array(
            'command'       => '/interface/wireless/security-profiles/set',              
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }   

 
}