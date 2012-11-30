<div class='pagination'>
<?php
	echo $this->Paginator->prev(' « ', null, null, array());
	echo $this->Paginator->numbers();
	echo $this->Paginator->next(' » ', null, null, array());
?>
</div>