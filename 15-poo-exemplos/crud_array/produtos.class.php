<?php
/**
 * Produtos
 *
 * @package   Gestão de produtos por carregamento de dados a partir de um array
 * @author    Adelino Amaral
 * @license   Distributed under GNU/GPL
 * @version   0.1
 * @access    public
 * 
 * modified: 16-09-2019
 */

class Produtos{
	var $f = false;
	var $delim;
	


	function __construct($filename,$delim='|'){
		
	}
	


    /**
     * csvCRUD::arrayKeys2str()
     * @desc Converts the keys of an assoc array to a comma delimited string for display purposes. This func is called when assembling the column names for an insert action
     * @param array $arr
     * @return string
     */
    function arrayKeys2str($arr){
        $str = '';
        $cnt = 0;
        foreach($arr as $key => $val){
            $str .= ($cnt < sizeof($arr)-1) ? $key .', ' : $key;
            $cnt++;
        }
        return $str;
    }

   
   

}
?>
