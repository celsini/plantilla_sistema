<?php
/*
echo $controller;
echo $action;
echo $label;
echo $param;
*/
?>
    <?php if($param == 'no'): ?>
            <input type='button' value='<?php echo $label ?>' onclick="location.href='<?php echo $this->Html->url(array('controller' => $controller,'action' => $action));?>'" />
    <?php else: ?>
            <input type='button' value='<?php echo $label ?>' onclick="location.href='<?php echo $this->Html->url(array('controller' => $controller,'action' => $action,$param));?>'" />
    <?php endif; ?>
    
