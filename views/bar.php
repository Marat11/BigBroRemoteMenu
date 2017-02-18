<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href="/styles/screen.css" type="text/css" rel="stylesheet"/>
<script src="/js/vendors/sly/sly.min.js"></script>
<script src="/js/script.js"></script>
<div class="custom-bar">
  <div class="links" id="links">
    <ul>
      <li class="logo">
      </li>
      <?php
        if ( count( $data ) > 0 ) {
          foreach ( $data as $key => $value ) {
            ?>
            <li class="links-item" data-key="<?php echo $key; ?>">
              <a href="<?php echo $value->link; ?>" target="_blank"><?php echo $value->title; ?></a>
            </li>
            <?php
            
          }
        }
      ?>
    </ul>
  </div>
</div>
<div class="children-bar">
  <?php
    if ( count( $data ) > 0 ) {
      foreach ( $data as $key => $value ) {
        if ( count( $value->children ) > 0 ) {
          ?>
          <div class="children-menu" data-key="<?php echo $key; ?>">
            <ul>
              <?php
                foreach ( $value->children as $item ) {
                  ?>
                  <li>
                    <a href="<?php echo $item->link; ?>" target="_blank"><?php echo $item->title; ?></a>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <?php
        }
      }
    }
  ?>
</div>