<?php
/**
* Autocomplete Helper
*
* @author  Nik Chankov
* @website http://nik.chankov.net
* @version 1.0.0
*/
App::uses('AppHelper', 'View/Helper');

class DatePickerHelper extends AppHelper {
    var $helpers = array('Ajax', 'Html','Form');
    var $format = '%d-%m-%Y';
   
    /**
     *Setup the format if exist in Configure class
     */
    function _setup(){
        $format = Configure::read('DatePicker.format');
        if($format != null){
            $this->format = $format;
        }
    }
   
    /**
    * The Main Function - picker
    *
    * @param string $field Name of the database field. Possible usage with Model.
    * @param array $options Optional Array. Options are the same as in the usual text input field.
    */   
    function picker($fieldName, $options = array()) {
        $this->_setup();
        //$this->setFormTag($fieldName);
        $htmlAttributes = $this->domId($options);       
        $divOptions['class'] = 'date';
        $options['type'] = 'text';
        $options['onmouseover'] = "this.T_FONTCOLOR='#003399'; this.T_TITLE='RRTIC';this.T_TITLECOLOR='#000066'; this.T_WIDTH=220; this.T_DELAY=0; this.T_TITLECOLOR='#ffffff'; return escape('Utilice el calendario para ingresar la fecha')";
        $options['readonly'] = true;
        $options['div']['class'] = 'date';
        if($options['conImagen'] == true)
        	{
        		unset($options['conImagen']);
        		//$options['after'] = $this->Html->link($this->Html->image('datepicker/img.gif',array("border"=>0)), '#', array("onmouseover"=>"this.T_FONTCOLOR='#003399'; this.T_TITLE='RRTIC';this.T_TITLECOLOR='#000066'; this.T_WIDTH=100; this.T_DELAY=0; this.T_TITLECOLOR='#ffffff'; return escape('Mostrar Calendario')",'onclick'=>"return showCalendar('".$htmlAttributes['id']."', '".$this->format."'); return false;"), null, false,array('escape' => false)).'&nbsp;'.$this->Html->link($this->Html->image('datepicker/delete.png',array("border"=>0)), '#', array("onmouseover"=>"this.T_FONTCOLOR='#003399'; this.T_TITLE='RRTIC';this.T_TITLECOLOR='#000066'; this.T_WIDTH=100; this.T_DELAY=0; this.T_TITLECOLOR='#ffffff'; return escape('&nbsp;&nbsp;&nbsp;Limpiar Fecha')",'onclick'=>"document.getElementById('".$htmlAttributes['id']."').value=''; return false;"), null, false);
                        $options['after'] = $this->Html->link(
                            $this->Html->image("datepicker/img.gif", array("alt" => "Brownies")),
                            "#",
                            array('escape' => false,'onclick'=>"return showCalendar('".$htmlAttributes['id']."', '".$this->format."'); return false;")
                        );


                }
        
        unset($options['conImagen']);
        $output = $this->Form->input($fieldName, $options);
       
        return $output;
    }
    
    function flat($fieldName, $options = array()){
        $this->_setup();
       // $this->setFormTag($fieldName);
        $htmlAttributes = $this->domId($options);       
        $divOptions['class'] = 'date';
        $options['type'] = 'hidden';
        $options['div']['class'] = 'date';        
        $hoder = '<div id="'.$htmlAttributes['id'].'_cal'.'"></div>' .
        			'<script type="text/javascript">' .
        				'showFlatCalendar("'.$htmlAttributes['id'].'", ' .
        								 '"'.$htmlAttributes['id'].'_cal'.'", ' .
        								 '"'.$this->params['pass']['0'].'", ' .
        								 '"'.$this->format.'", ' .
        								 'function(cal, date){
        								 	document.getElementById(\''.$htmlAttributes['id'].''.'\').value = date' .        								 
										  '},' .
										  'null' .
										  ');' .
					'</script>';
        $output = $this->Form->input($fieldName, $options).$hoder;
      
        return $output;
    }      
        
}
?>