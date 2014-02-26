<?php
require_once('frog.php');
require_once('pond.php');

// Init
$pond = new Pond();
// Initial Test Case Code
$pond->add(array('{"name":"Frank","gender":"m"}','{"name":"Georgia","gender":"f"}'));
// Start test case

// End test case
?>
<html>

<style>
    html, body { font-size: 16px; }
    .frogPond { background-color: #0071b9; margin: 1em; padding: 1em; border: 0.125em solid aqua; border-radius: 0.5em; }
    .frogPond h1 { text-align: center; }
    .frogPond .actions { margin: 1em 0 0 0; padding: 0; }
    .frogPond .actions button { display: inline-block; margin: 0 0.75em 0 0; background-color: aqua; border: 0.125em solid darkblue; padding: 0.25em; border-radius: 0.25em; font-size: 0.75em; cursor: pointer; }
    .frogPond .frogs { border: 0.25em solid aqua; border-radius: 0.5em; margin: 0; padding: 0; }
    .frogPond .frogs li { margin: 1em; padding: 0.25em; list-style: none; font-weight: bold; font-size: 1em; border-radius: 0.25em; }
    .frogPond .m { color: darkblue; background-color: #1182ca; }
    .frogPond .f { color: hotpink; background-color: #ffcccc; }
</style>

<body class="frogPond">
<?php $pond->display(); ?>
</body>

</html>
