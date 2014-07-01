<?php
/**
 * meSQLDB Open Source Project - http://www.edersonmelo.com/ 
 *
 * @filesource  SettersGetters.php
 * @package     meSQLDB
 * @copyright   2014, meSQLDB 
 * @link        http://www.edersonmelo.com
 *
 * @internal revisions
 * @since 1.0.0
 * 
 */
class SettersGetters {
        
        
        public function generate($var) {
                foreach($var as $x) {
                        echo "public function set".ucfirst($x)."(\$x) {<br>";
                        echo " \$this->".$x."= \$x;<br>";
                        echo "}<br />";
                        
                        echo "public function get".ucfirst($x)."(\$x) {<br>";
                        echo "return \$this->".$x.";<br>";
                        echo "}<br /><br />";
                        
                }
                
        }
}


?>

<?php
include "util\\class.settersgetters.inc.php";
$sg = new SettersGetters();

$a = array("a", "b");

$sg->generate($a);

?>