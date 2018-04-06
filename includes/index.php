<?php
require 'protected/config.php';
if(isset($_SESSION['email']))
{
  header('location:./dashboard.php');
}
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
                                                Rule #1
                                            </a>
                                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-block">
                            The game play involves getting to the next level by using any of the means of encryption and decryption. So keep yourself focussed and try to solve more and more questions in order to reach at the top
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Rule #2
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="card-block">
There are mainly 3 ways by which you can get across levels
<ul>
  <li> Entering the answer in the text box</li>
  <li> Changing the URL in the address bar</li>
  <li> Clicking on various objects on the page</li>
</ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseThree" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                Rule #3
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-block">
Answers are not case sensitive. In case the answer contains more than one word, do not forget to include spaces. We try to cover most possible answers to a level, but do try out different combinations of answers if we might have missed some out (we're human after all). Answers with multiple words will contain a space between them, so do take care of the same.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingfour">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapsefour" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                Rule #4
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
                          <div class="card-block">
                            Correct answers will directly take you to next level and if the same page comes back, then you need to replan your strategy for the level.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="headingfive">
                          <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapsefive" aria-expanded="false"
                                               aria-controls="collapsefive">
                                                Rule #5
                                            </a>
                                        </h5>
                        </div>
                        <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-block">
This rule could be a happy news for all, because we have not made any restriction on the number of trials or answers to be given for any particular questions.
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
<p>If you find that our replies to your queries are arriving with a bit delay then it's not because we don't like your screen name or might have met you in real-life and disliked your personality. It is simply because the sheer number of comments that need to be moderated makes it impossible to give an immediate response</p>
<p>Please do not share the answers on personal blogs/websites or other forums. It is quite possible that the other person may finish before you</p>
<p>You may contact us at ihack18@icloud.com when you get desperate (only towards the fag end of the game)</p>
<p>Do try your best, and be a little patient as far as hints are concerned</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
<p> All levels will require some amount of lateral thinking combined with some help from google.
<p>Images can also be reverse-searched using Google/Tineye
<p>Usually, the clues for each level can be found in:
  <ul>
    <li>Page Title</li>
    <li>URL</li>
    <li>Pictures on the level (and their names!)</li>
    <li>Page source. (Right click and use View Page Source)</li>
  </ul>
<p>Some amount of binary (.doc, .jpg etc.) download/manipulation may be required to get the hint to next level</p>
<p>Most probable answer could also be a most probable mistake.</p>
<p>As there are no restriction on the number of attempts on any question, so keep trying all the answers you get in your mind.</p>


</p>
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
