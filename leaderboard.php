<?php
require 'includes/protected/config.php';
$que = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 10");
require 'functions/function.php';
no_login("header");

?>

<section class="fw-section next-to-footer padding-top-3x padding-bottom-3x" style="background-image: url(img/home/app-bg01.jpg);">
      <div class="container">
        <h1 class="block-title text-center">UPES-CSI<small>we create, share and innovate.</small></h1>
        <h3 class="text-center">Leaderboard</h3>
        <div class="table-responsive space-bottom-2x">
          <table class="table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Score</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($row = mysql_fetch_array($que)) {
                    ?>
                  <tr>
                    <td>&nbsp;<?php echo $row['name']; ?></td>
                    <td>&nbsp;<?php echo $row['level']; ?></td>
                    <td>&nbsp;<?php echo ($row['score'] + $row['bonus']); ?></td>
                  </tr>
                <?php
                } ?>
            </tbody>
          </table>
        </div><!-- .table-responsive.space-bottom-2x -->


          </div><!-- .container -->
        </section><!-- .fw-section.next-to-footer -->

      <?php
        no_login("footer");?>
