<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href="/vendor/bigbro/remote_menu/styles/styles.css" type="text/css" rel="stylesheet"/>
<div class="custom-bar">
  <div class="links">
    <?php
      if (count($data) > 0) {
        foreach ($data as $key => $value) {
          ?>
          <div class="links-item">
            <a href="<?php echo $value->link; ?>" target="_blank" ><?php echo $value->title; ?></a>
          </div>
          <?php

        }
      }
    ?>
  </div>
</div>