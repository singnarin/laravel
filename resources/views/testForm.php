<form action="testPost" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
  <input type="submit" value="Go !" />
</form>
