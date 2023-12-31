<?php
require_once 'utils.php';
echo head('Home', 'index');
//by github.com/AmiraliShadi
?>

<h1>
    Home
</h1>
<p>
    Welcome to this sample.
</p>

<pre id="javascript"></pre>

<style>
    h1 {
        color: #4a4f56;
    }
</style>

<script>
    document.getElementById('javascript').innerHTML = 'Text Using JS // by a.shdi';
</script>

<?php
echo footer();
