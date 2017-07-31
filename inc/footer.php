<?
if (!isset($debug)) {$debug="";}
return "
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src='js/bootstrap.min.js'></script>

  <div class='responsive-indicator'>
    <div class='visible-xs'>xs</div>
    <div class='visible-sm'>sm</div>
    <div class='visible-md'>md</div>
    <div class='visible-lg'>lg</div>
  </div>
  <div class='debug'>
    $debug
  </div>

</body>
</html>
";