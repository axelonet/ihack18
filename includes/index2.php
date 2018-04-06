<?php
require 'protected/config.php';
$result = mysql_query("SELECT COUNT(name) FROM users");
$que = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 1");
$top = mysql_fetch_array($que);
$users = mysql_fetch_array($result);
 ?>
  <!--Begin Content-->
  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="pvr-wrapper">
          <div class="pvr-box">
            <h5 class="pvr-header">
                        ihack 2018
                    </h5>
            <div class="row">
              <div class="col-12 col-sm-6 col-md-8">
                <div class="box p-3">
                  <p>ihack is a online cryptic hunt conducted for 24 hours by UPES-CSI. Participation will be done individually. Participants would have to search for clues spread over the webpages to pass through the various levels and score points accordingly.</p>
                  The clues maybe hidden in the HTML source code or encrypted into a song or a picture. The person who clears most levels by the end of the 24-hour mark would be declared as a winner.<br>

                  <p>Bonus points would be awarded to participants if they can come up with an idea for a level. This bonus is only available after clearing the first stage.</p>

                  <p>As the event is online, participants will be provided with their unique id and passwords through email and their scores will be regularly updated with their id. Participants need to provide their valid email address so that the id and
                    passwords can be easily availed to them.</p>
                </div>
              </div>
              <div class="col-6 col-md-4"><br><br><br>
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <i class="icon-people text-primary f-s-40"></i>
                      </div>
                      <div class="col-9">
                        <h6 class="m-0">Users</h6>
                        <p class="mb-0">
                          <?php echo $users[0]; ?> New Users</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-4">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-3">
                        <i class="icon-trophy text-success f-s-40"></i>
                      </div>
                      <div class="col-9">
                        <h6 class="m-0">Top Scorer</h6>
                        <p class="mb-0">
                          <?php echo $top['name']; ?>
                          <span class="float-right text-success"> </span>
                        </p>
                        <p class="mb-0">Level
                          <?php echo $top['level']; ?>
                          <span class="float-right text-success"> </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" id="redirect_signup" class="btn btn-outline-primary">Sign-up</button>
            <button type="button" id="redirect_signin" class="btn btn-outline-success">Sign-in</button>
            <button type="button" id="redirect_leaderboard" class="btn btn-outline-warning">Leaderboard</button>

          </div>
        </div>
        <div class="pvr-box">
          <h5 class="pvr-header">Rules and stuff  (to be filled by editorial)             </h5>
          <div class="content">
            <div class="row">
              <div class="col-lg-6">
                <div class="pvr-wrapper">
                  <div class="pvr-box">
                    <h5 class="pvr-header">
                                Important Rules
                            </h5>

                    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
                      <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                          <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                               aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseThree" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingfour">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapsefour" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                Collapsible Group Item #4
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingfive">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapsefive" aria-expanded="false"
                                               aria-controls="collapsefive">
                                                Collapsible Group Item #5
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingsix">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapsesix" aria-expanded="false"
                                               aria-controls="collapsesix">
                                                Collapsible Group Item #6
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                            beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="pvr-wrapper">
                  <div class="pvr-box">
                    <h5 class="pvr-header">
                                Guidelines
                            </h5>
                    <div class="bd-example bd-example-tabs" role="tabpanel">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">first things first</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="false">Hints</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div role="tabpanel" class="tab-pane fade active show" id="home" aria-labelledby="home-tab" aria-expanded="true">
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente
                            labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus
                            tattooed echo park.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
                          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore
                            carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog.
                            Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
                          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high
                            life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf
                            salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!--End Content-->
