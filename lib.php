  <?php
  function p_Hash($psw)
  {
    $salt = bin2hex(random_bytes(32));
    $h_psw = hash('sha256', $salt . $psw);
    return [$salt, $h_psw];
  }


  function alert($msg)
  {
    echo "<script>alert('$msg')</script>";
  }

  function  move()
  {
    echo "<script>location.href='/New2025'</script>";
  }

  function  selectMove($path)
  {
    echo "<script>location.href='$path'</script>";
  }
