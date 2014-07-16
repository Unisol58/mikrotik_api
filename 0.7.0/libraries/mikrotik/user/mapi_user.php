<?php
/**
 * Description of Mapi_User
 *
 * @author      Priit Kukk
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_User extends Mapi_Query {
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
     * This method is used add pim interface
     * @param type array
     * @return type array
     */
    public function add($param){
        $input = array(
            'command'       => '/user/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used add pim interface
     * @param type array
     * @return type array
     */
    public function edit($param){
        $input = array(
            'command'       => '/user/edit'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }

}