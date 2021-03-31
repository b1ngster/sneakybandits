
<div class="container-fluid p-0">
    
    <div class="site-header sticky-top">
      
    <header>
<nav class="navbar navbar-expand-lg bg-transparent mb-3">
  <div class="container">
      <a class="navbar-brand" href="<?php echo URL_ROOT; ?>"><?php echo SITENAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL_ROOT; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL_ROOT; ?>/pages/about">About</a>
          </li>
        </ul>
        <div class="row" >
        <ul class="navbar-nav ml-auto justify-content-end">



       <? /** Sign up / Register */ ?>
          <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
              <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_name']; ?></a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="/users/logout">Logout</a>
            </li>


          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="/users/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/users/login">Login</a>
            </li>
          <?php endif; ?>
        </ul>
        </div>
      </div>
    </div>
  </nav>