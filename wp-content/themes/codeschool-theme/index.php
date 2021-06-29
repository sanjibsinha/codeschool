<p>

<?php bloginfo('name'); ?>

</p>

<p>

<?php bloginfo('description'); ?>

</p>
<h1>Names</h1>

<?php

$names = array('Mona', 'Babu', 'Pota', 'Gopal');
$a = 0;
while ($a < count($names)) {
    # code...
    echo "<li>$names[$a]</li>";
    $a++;
}