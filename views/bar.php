<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href="/vendor/bigbro/remote_menu/styles/screen.css" type="text/css" rel="stylesheet"/>
<script src="/vendor/bigbro/remote_menu/js/jquery.nicescroll.min.js"></script>
<script src="/vendor/bigbro/remote_menu/js/script.js"></script>
<div class="custom-bar">
  <div class="links">
    <div class="logo"></div>
    <?php
      if (count($data) > 0) {
        foreach ($data as $key => $value) {
          ?>
          <div class="links-item">
            <a href="<?php echo $value->link; ?>" target="_blank" ><?php echo $value->title; ?></a>
            <?php
              if(count($value->children) > 0) {
                ?>
                <div class="children">
                  <ul>
                    <?php
                    foreach ($value->children as $item) {
                      ?>
                      <li>
                        <a href="<?php echo $item->link; ?>" target="_blank" ><?php echo $item->title; ?></a>
                      </li>
                      <?php
                    }
                    ?>
                  </ul>
                </div>
                <?php
              }
            ?>
          </div>
          <?php

        }
      }
    ?>
  </div>
</div>