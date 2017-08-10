  <?php
  // print '<pre>' . htmlentities(print_r($fields, 1)) . '</pre>';
  // If you don't have devel.module installed, comment the line below and uncomment the line above.
  dsm(array_keys($fields));
?> 
 <div class="display" style="background-color:red;"> 
<?php print $fields['display']->content; ?>

</div>