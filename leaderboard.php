<?php
require 'includes/protected/config.php';
$que = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 10");
require 'functions/function.php';
no_login("header");

?>
        <div class="col-12 col-sm-6 col-md-8">
            <div class="pvr-wrapper">
                <div class="pvr-box">
                    <h5 class="pvr-header">
                        Leaderboard - ihack 2018
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
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
                    </div>
                </div>
            </div>
        </div>

      <?php
        no_login("footer");?>
