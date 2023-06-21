// A Test to test the performance of empty vs count()===0

<?php

#$INTERVAL = 1_000_000_000;
$INTERVAL = 100_000_000;
#$INTERVAL = 1_000_000;
#$INTERVAL = 100_000;


$array = array( 'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_plugins',  'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_core', 'update_plugins', 'update_themes', 'update_core', 'update_core', 'update_plugins', 'update_themes', 'update_core' );
#$array = array();

echo "empty ";
$stop = $INTERVAL;
$start = microtime(true);

while(--$stop)
{
  if ( !empty ( $array ) ){
    /*
    */
  }
}

echo number_format(microtime(true) - $start, 5)." secs\n\n";

echo "count ";
$stop = $INTERVAL;
$start = microtime(true);

while(--$stop)
{
  if ( count ( $array ) === 0 ) {
    /*
    */
  }
}

echo number_format(microtime(true) - $start, 5)." secs\n\n";

//OUTPUT:
//in_array 2.16405

//if && 2.79029

//if else 1.16683
