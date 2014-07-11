<?php
/**
 * Description of Mapi_Ppp_Aaa
 *
 * @author      Priit Kukk
 * @copyright   Copyright (c) 2014, Priit Kukk
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Routing_Pim extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param){
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to display all ppp aaa
     * @return type array
     */
    public function add_pim_interface($param){
        $input = array(
            'command'       => '/routing/pim/interface/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }

    /**
     * This method is used to disable pim interface
     * @param type $id string
     * @return type array
     * 
     */
    public function disable_pim_interface($id){
        $input = array(
            'command'       => '/routing/pim/interface/disable',
            'id'            => $id
        );
        return $this->query($input);        
    }
    
    /**
     * This method is used to enable pim interface
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_pim_interface($id){
        $input = array(
            'command'       => '/routing/pim/interface/enable',
            'id'            => $id
        );
        return $this->query($input); 
    }  

    /**
     * This method is used to delete pim interface
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_pim_interface($id){
        $input = array(
            'command'       => '/routing/pim/interface/delete',
            'id'            => $id
        );
        return $this->query($input); 
    } 

    /**
     * This method is used to display all pim interfaces
     * @return type array
     * 
     */
    public function get_all_interfaces(){
         return $this->query('/routing/pim/interface/getall');
    }  

    /**
     * This method is used to display one pim interface 
     * in detail based on the id
     * @param type $id not array
     * @return type array
     * 
    */
    public function detail_pim_interface($id){
        $input = array(
                   'command'    => '/routing/pim/interface/print',
                   'id'         => $id
        );
        return $this->query($input);
    }     

}