

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project AEDES</title>
    <link rel="stylesheet" href="bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/05a7e6096a.js" crossorigin="anonymous"></script>
    <script src='maps/mapbox-gl.js'></script>
    <link href='maps/mapbox-gl.css' rel='stylesheet' />
    <style>
      .sticky	{
        position: sticky;
          top: 3.25rem;
      }
    </style>
  </head>
    <header class="">
      <div class="">
        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a href="" class="navbar-item is--brand">
            <img class="navbar-brand-logo" src="https://via.placeholder.com/250x50?text=AEDES" title="" style="">
            </a>
            <a class="navbar-item is-tab is-hidden-mobile is-active"><span class="icon is-medium"><i class="fas fa-bullseye"></i></span>AEDES Project</a>
          </div>
          <div class="navbar-menu navbar-end" id="navMenu">
            <a class="navbar-item is-tab is-hidden-tablet is-active">Home</a> <a class="navbar-item is-tab is-hidden-tablet" href="https://github.com/mazipan/bulma-admin-dashboard-template">Github</a> <a class="navbar-item is-tab is-hidden-tablet" href="https://mazipan.github.io/bulma-resume-template/">Resume Template</a> <a class="navbar-item is-tab is-hidden-tablet" href="#about">About</a> <a class="navbar-item nav-tag"><span class="icon is-small"><i class="fa fa-envelope-o"></i> </span><span class="tag is-primary tag-notif">6</span></a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                <figure class="image is-32x32" style="margin-right:.5em"><img src="https://avatars1.githubusercontent.com/u/7221389?v=4&amp;s=32"></figure>
                mark
              </a>
              <div class="navbar-dropdown is-right">
                <a class="navbar-item"><span class="icon is-small"><i class="fa fa-user-o"></i> </span>&nbsp; Profile</a>
                <hr class="navbar-divider">
                <a class="navbar-item"><span class="icon is-small"><i class="fa fa-power-off"></i> </span>&nbsp; Logout</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <body class="has-navbar-fixed-top">
      <div class="wrapper">
        <div class="columns">
          <aside class="column is-2 aside ">
            <nav class="menu sticky">
              <p class="menu-label">Home</p>
              <ul class="menu-list">
                <li><a id="dashboard" class="is-active" href="#">
                  <span class="icon is-small"><i class="fas fa-info-circle"></i></span> What is Project AEDES?</a>
                  <ul class="menu-list">                    
                    <li><a>AEDES Project</a></li>
                    <li><a>Our Challenge</a></li>
                    <li><a>The Problem</a></li>
                    <li><a>Our Solution</a></li>
                    <li><a>Related Literature</a></li>
                    <li><a>Objectives and Principles</a></li>
                  </ul>
                </li>
              </ul>
              <p class="menu-label">Research</p>
                <ul class="menu-list">
                  <li><a id="search" class="" href="#"><span class="icon is-small"><i class="fas fa-search"></i></span> Search</a></li>
                  <li><a id="models" class="" href="#">
                    <span class="icon is-small"><i class="fas fa-cogs"></i></span> Models</a>
                  </li>
                  <li><a id="location" class="" href="#"><span class="icon is-small"><i class="fas fa-map-marker-alt"></i></span> Mapping</a></li>
                </ul>
              <p class="menu-label">Dashboard</p>
              <p class="menu-label">References</p>
              <p class="menu-label">About The Authors</p>

            </nav>
          </aside>
                 

          <!-- <aside class="column is-2 aside">
            <nav class="menu">
              <p class="menu-label">General</p>
              <ul class="menu-list">
                <li><a class="is-active" href="#"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
              </ul>
              <p class="menu-label">Administration</p>
              <ul class="menu-list">
                <li><a href="/bulma-admin-dashboard-template/forms.html"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Forms</a></li>
                <li><a href="/bulma-admin-dashboard-template/ui-elements.html"><span class="icon is-small"><i class="fa fa-desktop"></i></span> UI Elements</a></li>
                <li><a href="/bulma-admin-dashboard-template/tables.html"><span class="icon is-small"><i class="fa fa-table"></i></span> Tables</a></li>
                <li><a href="/bulma-admin-dashboard-template/presentations.html"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Presentations</a></li>
                <li>
                  <a><i class="fa fa-cog"></i> Settings</a>
                  <ul>
                    <li><a>Members</a></li>
                    <li><a>Plugins</a></li>
                    <li><a>Add a member</a></li>
                  </ul>
                </li>
              </ul>
              <p class="menu-label">Live On</p>
              <ul class="menu-list">
                <li><a><span class="icon is-small"><i class="fa fa-bug"></i></span> Additional Pages</a></li>
                <li><a><span class="icon is-small"><i class="fa fa-windows"></i></span> Extras</a></li>
                <li><a><span class="icon is-small"><i class="fa fa-laptop"></i></span> Landing Page</a></li>
              </ul>
            </nav>
          </aside> -->
          
          <main class="column main ">
            <!-- <section class="">
              <div class="level">
                <div class="level-left">
                  <div class="level-item">
                    <div class="title has-text-black container">
                      <i id="mainTitle" class="fa fa-tachometer"></i> AEDES Project
                    </div>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <button type="button" class="button is-small">March 8, 2017 - April 6, 2017</button>
                  </div>
                </div>
              </div> -->
              <div id="page_0" class="columns is-multiline">
                <div class="column is-full">
                  <section class="hero">
                    <div class="hero-body">
                      <div class="container">
                        <h1 class="title is-2">
                          <i class="fas fa-bullseye"></i> AEDES Project
                        </h1>
                        <!-- <h2 class="subtitle">
                        </h2> -->
                        <article class="message">
                          <div class="message-header">
                            <p>Advanced Early Dengue Prediction and Exploration Service (AEDES)</p>
                          </div>
                          <div class="message-body">
                            AEDES aims to improve public health response against dengue in the Philippines by predicting dengue cases from climate and digital data and pinpointing possible hotspots from satellite data.
                          </div>
                        </article>
                        <figure class="image">
                          <img src="slides/Slide1.PNG">
                        </figure>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Our Challenge
                          </h2>
                          <h2 class="block">
                            AEDES is tackling the SMASH YOUR SDGs challenge under the LIVING IN OUR WORLD category. Specifically we are tackling Goal 3: GOOD HEALTH AND WELL BEING under the UN Sustainable Development Goals. 
                          </h2>
                          <div class="block">
                            <div class="columns">
                              <div class="column is-one-third">
                                <figure class="image is-square">
                                  <img src="assets/living.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-square">
                                  <img src="assets/sdgs.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-square">
                                  <img src="assets/health.PNG">
                                </figure>
                              </div>
                            </div>
                          </div>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            The Problem
                          </h2>
                          <div class="block">
                            <div class="columns">
                              <div class="column is-one-third">
                                <figure class="image is-5by3">
                                  <img src="assets/problem1.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-5by3">
                                  <img src="assets/problem2.PNG">
                                </figure>
                              </div>
                              <div class="column is-one-third">
                                <figure class="image is-5by3">
                                  <img src="assets/problem3.PNG">
                                </figure>
                              </div>
                            </div>
                          </div>
                          <h2 class="block">
                            Dengue is now at epidemic levels in the Philippines with over 271,000 cases and more than 1,100 deaths as of August 2019. Data on dengue takes time to be manually gathered which hampers the health sector’s ability to deal with the threat. Dengue is spread between infected cases through the Aedes Aegypti mosquito and mosquitoes are known to breed in damp locations and stagnant water pools.
                          </h2>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Our Solution
                          </h2>
                          <h2 class="block">
                            We propose an automated information portal that correlates dengue cases and deaths with real-time data from climate, google searches, and satellite maps, giving an advance indicator of when dengue will emerge and potential dengue hotspot locations. This portal is accessible publicly but is targeted towards public health and local government agencies to give them advanced notice of dengue outbreaks and help prioritize resources. 

                            <br><br>

                            <div class="block">
                              <div class="columns">
                                <div class="column is-one-third">
                                  <figure class="image is-5by3">
                                    <img src="assets/solution1.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-5by3">
                                    <img src="assets/solution2.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-5by3">
                                    <img src="assets/solution3.PNG">
                                  </figure>
                                </div>
                              </div>
                            </div>

                            The service relies on 3 data sets:
                            <div class="content">
                              <ol type="i">
                                <li>Climate data from DOST-PAGASA</li>
                                <li>Google searches for 'dengue' and related terms</li>
                                <li>Satellite imaging data from NASA Landsat (Copernicus)</li>
                              </ol>
                            </div>

                            To populate the information portal, we propose 3 models: 
                            <div class="content">
                              <ol type="i">
                                <li>Predict dengue cases from climate and search data</li>
                                <li>Predict dengue deaths from dengue cases</li>
                                <li>Determine likely dengue hotspots by detecting stagnant water areas from satellite data</li>
                              </ol>
                            </div>

                            By doing this we are addressing 2 key challenges for public health and local government officials: 
                            <div class="content">
                              <ol type="1">
                                <li>Get ahead of the lagged delay of dengue reporting by using real-time information (e.g. climate, searches) to infer if dengue cases and deaths are about to spike. </li>
                                <li>Precisely anticipate areas that may be affected by dengue to prioritize health aid, supplies, and proactive fumigation to prevent the outbreaks. </li>
                              </ol>
                            </div>
                          </h2>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Related Literature
                          </h2>
                          <div class="block">
                              <div class="columns">
                                <div class="column is-one-third">
                                  <figure class="image is-square">
                                    <img src="assets/literature1.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-square">
                                    <img src="assets/literature2.PNG">
                                  </figure>
                                </div>
                                <div class="column is-one-third">
                                  <figure class="image is-square">
                                    <img src="assets/literature3.PNG">
                                  </figure>
                                </div>
                              </div>
                            </div>
                          <h2 class="block">
                            We have conducted research and cite the following prior work that provide the foundation for this solution: 
                            <div class="content">
                              <ol type="i">
                                <li>In Caro, et. al. (2016), "Forecasting and Data Visualization of Dengue spread in the Philippine Visayas Island group", researchers proposed a method to predict dengue cases in the Visayas regions through the use of an Artificial Neural Network (ANN) which predicted dengue cases (R 0.8) through the use of climate data (temperature and rainfall) and a lagged number of previous dengue cases. </li>
                                <li>In Yang, et. al. (2016), "Advances in using Internet searches to track dengue", researchers used Google searches for 'dengue' and related keywords to predict dengue cases in Mexico, Brazil, Thailand, Singapore and Taiwan. </li>
                                <li>In Chua, Tan, et. al. (2018), "Project Project Still Water", researchers proposed a methodology to detect dengue hotspots using FAPAR (Vegetation) and NDWI (Water) areas. </li>
                                <li>In Chan, Johnson (2012), "The Incubation Periods of Dengue Viruses", researchers establish the incubation periods for dengue. 95% of EIPs are between 5 and 33 days at 25C, and 2 and 15 days at30C, with means of 15 and 6.5 days, respectively which suggests that climate has an effect on the incubation of the disease. </li>
                              </ol>
                            </div>
                          </h2>
                        </section>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Objectives and Principles
                          </h2>
                          <h2 class="block">
                            Our proposed solution intends to builds on this work by the following principles: 

                            <div class="content">
                              <ol type="i">
                                <li>We test and propose independent and mixed models that combine Google searches and climate data to detect possible factors that affect dengue cases and deaths as well as provide an accurate forecast.</li>
                                <li>We provide the information on an easily navigable interactive web application accessible by the public to help disseminate crucial information and also assist in public health efforts to prevent and contain the disease.</li>
                              </ol>
                            </div>

                            Logically, the behavior captured by the datasets in our study is:
                            <div class="content">
                              <ol type="1">
                                <li>First, precipitation and temperature climate creates mosquito-breeding environments</li>
                                <li>Mosquitoes spread and get infected by existing dengue cases, thereby spreading the disease</li>
                                <li>New infections cause alarm which drives internet searches for dengue</li>
                                <li>Dengue cases result in deaths</li>
                                <li>Cases and deaths are reported to public health officials </li>
                              </ol>
                            </div>

                            <div class="block">
                              Therefore by detecting #1 and #3 we can address and hopefully disrupt the disease cycle before an epidemic spreads. 
                            </div>

                          </h2>
                        </section>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div id="page_1" class="columns is-hidden is-multiline">
                <div class="column">
                  <div class="box notification is-primary">
                    <div class="heading">Top Seller Total</div>
                    <div class="title">56,950</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Sales $</div>
                          <div class="title is-5">250K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Overall $</div>
                          <div class="title is-5">750K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Sales %</div>
                          <div class="title is-5">25%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="box notification is-warning">
                    <div class="heading">Revenue / Expenses</div>
                    <div class="title">55% / 45%</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Rev Prod $</div>
                          <div class="title is-5">30%</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Rev Serv $</div>
                          <div class="title is-5">25%</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Exp %</div>
                          <div class="title is-5">45%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="box notification is-info">
                    <div class="heading">Feedback Activity</div>
                    <div class="title">78% ↑</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Pos</div>
                          <div class="title is-5">1560</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Neg</div>
                          <div class="title is-5">368</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Pos/Neg %</div>
                          <div class="title is-5">77% / 23%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="box notification is-danger">
                    <div class="heading">Orders / Returns</div>
                    <div class="title">75% / 25%</div>
                    <div class="level">
                      <div class="level-item">
                        <div>
                          <div class="heading">Orders $</div>
                          <div class="title is-5">425K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Returns $</div>
                          <div class="title is-5">106K</div>
                        </div>
                      </div>
                      <div class="level-item">
                        <div>
                          <div class="heading">Success %</div>
                          <div class="title is-5">+ 28,5%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="page_2" class="columns is-hidden is-multiline">
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Chart</div>
                    <div class="message-body">Test</div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Chart</div>
                    <div class="message-body">Test</div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Chart</div>
                    <div class="message-body">Test</div>
                  </article>
                </div>
                <div class="column is-6">
                  <article class="message is-dark">
                    <div class="message-header">Chart</div>
                    <div class="message-body">Test</div>
                  </article>
                </div>
              </div>
              <div id="page_3" class="columns is-hidden is-multiline">
                <div class="field has-addons">
                  <div class="control">
                    <input class="input" type="text" placeholder="Find a repository">
                  </div>
                  <div class="control">
                    <a class="button is-info">
                      Search
                    </a>
                  </div>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th><abbr title="Position">Pos</abbr></th>
                      <th>Team</th>
                      <th><abbr title="Played">Pld</abbr></th>
                      <th><abbr title="Won">W</abbr></th>
                      <th><abbr title="Drawn">D</abbr></th>
                      <th><abbr title="Lost">L</abbr></th>
                      <th><abbr title="Goals for">GF</abbr></th>
                      <th><abbr title="Goals against">GA</abbr></th>
                      <th><abbr title="Goal difference">GD</abbr></th>
                      <th><abbr title="Points">Pts</abbr></th>
                      <th>Qualification or relegation</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><abbr title="Position">Pos</abbr></th>
                      <th>Team</th>
                      <th><abbr title="Played">Pld</abbr></th>
                      <th><abbr title="Won">W</abbr></th>
                      <th><abbr title="Drawn">D</abbr></th>
                      <th><abbr title="Lost">L</abbr></th>
                      <th><abbr title="Goals for">GF</abbr></th>
                      <th><abbr title="Goals against">GA</abbr></th>
                      <th><abbr title="Goal difference">GD</abbr></th>
                      <th><abbr title="Points">Pts</abbr></th>
                      <th>Qualification or relegation</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
                      </td>
                      <td>38</td>
                      <td>23</td>
                      <td>12</td>
                      <td>3</td>
                      <td>68</td>
                      <td>36</td>
                      <td>+32</td>
                      <td>81</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C." title="Arsenal F.C.">Arsenal</a></td>
                      <td>38</td>
                      <td>20</td>
                      <td>11</td>
                      <td>7</td>
                      <td>65</td>
                      <td>36</td>
                      <td>+29</td>
                      <td>71</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C." title="Tottenham Hotspur F.C.">Tottenham Hotspur</a></td>
                      <td>38</td>
                      <td>19</td>
                      <td>13</td>
                      <td>6</td>
                      <td>69</td>
                      <td>35</td>
                      <td>+34</td>
                      <td>70</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr class="is-selected">
                      <th>4</th>
                      <td><a href="https://en.wikipedia.org/wiki/Manchester_City_F.C." title="Manchester City F.C.">Manchester City</a></td>
                      <td>38</td>
                      <td>19</td>
                      <td>9</td>
                      <td>10</td>
                      <td>71</td>
                      <td>41</td>
                      <td>+30</td>
                      <td>66</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round" title="2016–17 UEFA Champions League">Champions League play-off round</a></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td><a href="https://en.wikipedia.org/wiki/Manchester_United_F.C." title="Manchester United F.C.">Manchester United</a></td>
                      <td>38</td>
                      <td>19</td>
                      <td>9</td>
                      <td>10</td>
                      <td>49</td>
                      <td>35</td>
                      <td>+14</td>
                      <td>66</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage" title="2016–17 UEFA Europa League">Europa League group stage</a></td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td><a href="https://en.wikipedia.org/wiki/Southampton_F.C." title="Southampton F.C.">Southampton</a></td>
                      <td>38</td>
                      <td>18</td>
                      <td>9</td>
                      <td>11</td>
                      <td>59</td>
                      <td>41</td>
                      <td>+18</td>
                      <td>63</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage" title="2016–17 UEFA Europa League">Europa League group stage</a></td>
                    </tr>
                    <tr>
                      <th>7</th>
                      <td><a href="https://en.wikipedia.org/wiki/West_Ham_United_F.C." title="West Ham United F.C.">West Ham United</a></td>
                      <td>38</td>
                      <td>16</td>
                      <td>14</td>
                      <td>8</td>
                      <td>65</td>
                      <td>51</td>
                      <td>+14</td>
                      <td>62</td>
                      <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Third_qualifying_round" title="2016–17 UEFA Europa League">Europa League third qualifying round</a></td>
                    </tr>
                    <tr>
                      <th>8</th>
                      <td><a href="https://en.wikipedia.org/wiki/Liverpool_F.C." title="Liverpool F.C.">Liverpool</a></td>
                      <td>38</td>
                      <td>16</td>
                      <td>12</td>
                      <td>10</td>
                      <td>63</td>
                      <td>50</td>
                      <td>+13</td>
                      <td>60</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>9</th>
                      <td><a href="https://en.wikipedia.org/wiki/Stoke_City_F.C." title="Stoke City F.C.">Stoke City</a></td>
                      <td>38</td>
                      <td>14</td>
                      <td>9</td>
                      <td>15</td>
                      <td>41</td>
                      <td>55</td>
                      <td>−14</td>
                      <td>51</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>10</th>
                      <td><a href="https://en.wikipedia.org/wiki/Chelsea_F.C." title="Chelsea F.C.">Chelsea</a></td>
                      <td>38</td>
                      <td>12</td>
                      <td>14</td>
                      <td>12</td>
                      <td>59</td>
                      <td>53</td>
                      <td>+6</td>
                      <td>50</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>11</th>
                      <td><a href="https://en.wikipedia.org/wiki/Everton_F.C." title="Everton F.C.">Everton</a></td>
                      <td>38</td>
                      <td>11</td>
                      <td>14</td>
                      <td>13</td>
                      <td>59</td>
                      <td>55</td>
                      <td>+4</td>
                      <td>47</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>12</th>
                      <td><a href="https://en.wikipedia.org/wiki/Swansea_City_A.F.C." title="Swansea City A.F.C.">Swansea City</a></td>
                      <td>38</td>
                      <td>12</td>
                      <td>11</td>
                      <td>15</td>
                      <td>42</td>
                      <td>52</td>
                      <td>−10</td>
                      <td>47</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>13</th>
                      <td><a href="https://en.wikipedia.org/wiki/Watford_F.C." title="Watford F.C.">Watford</a></td>
                      <td>38</td>
                      <td>12</td>
                      <td>9</td>
                      <td>17</td>
                      <td>40</td>
                      <td>50</td>
                      <td>−10</td>
                      <td>45</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>14</th>
                      <td><a href="https://en.wikipedia.org/wiki/West_Bromwich_Albion_F.C." title="West Bromwich Albion F.C.">West Bromwich Albion</a></td>
                      <td>38</td>
                      <td>10</td>
                      <td>13</td>
                      <td>15</td>
                      <td>34</td>
                      <td>48</td>
                      <td>−14</td>
                      <td>43</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>15</th>
                      <td><a href="https://en.wikipedia.org/wiki/Crystal_Palace_F.C." title="Crystal Palace F.C.">Crystal Palace</a></td>
                      <td>38</td>
                      <td>11</td>
                      <td>9</td>
                      <td>18</td>
                      <td>39</td>
                      <td>51</td>
                      <td>−12</td>
                      <td>42</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>16</th>
                      <td><a href="https://en.wikipedia.org/wiki/A.F.C._Bournemouth" title="A.F.C. Bournemouth">AFC Bournemouth</a></td>
                      <td>38</td>
                      <td>11</td>
                      <td>9</td>
                      <td>18</td>
                      <td>45</td>
                      <td>67</td>
                      <td>−22</td>
                      <td>42</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>17</th>
                      <td><a href="https://en.wikipedia.org/wiki/Sunderland_A.F.C." title="Sunderland A.F.C.">Sunderland</a></td>
                      <td>38</td>
                      <td>9</td>
                      <td>12</td>
                      <td>17</td>
                      <td>48</td>
                      <td>62</td>
                      <td>−14</td>
                      <td>39</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>18</th>
                      <td><a href="https://en.wikipedia.org/wiki/Newcastle_United_F.C." title="Newcastle United F.C.">Newcastle United</a> <strong>(R)</strong>
                      </td>
                      <td>38</td>
                      <td>9</td>
                      <td>10</td>
                      <td>19</td>
                      <td>44</td>
                      <td>65</td>
                      <td>−21</td>
                      <td>37</td>
                      <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>
                    </tr>
                    <tr>
                      <th>19</th>
                      <td><a href="https://en.wikipedia.org/wiki/Norwich_City_F.C." title="Norwich City F.C.">Norwich City</a> <strong>(R)</strong>
                      </td>
                      <td>38</td>
                      <td>9</td>
                      <td>7</td>
                      <td>22</td>
                      <td>39</td>
                      <td>67</td>
                      <td>−28</td>
                      <td>34</td>
                      <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>    </tr>
                    <tr>
                      <th>20</th>
                      <td><a href="https://en.wikipedia.org/wiki/Aston_Villa_F.C." title="Aston Villa F.C.">Aston Villa</a> <strong>(R)</strong>
                      </td>
                      <td>38</td>
                      <td>3</td>
                      <td>8</td>
                      <td>27</td>
                      <td>27</td>
                      <td>76</td>
                      <td>−49</td>
                      <td>17</td>
                      <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="page_4" class="columns is-hidden is-multiline">
                <div class="column is-quarter select">
                  <select onchange="goToPoint(this.value);">
                    <option value=''>Select Location:</option>
                    <option value=0>Edsa Shangri-la</option>
                    <option value=1>The Podium</option>
                    <option value=2>Buffalo Wild Wings</option>
                    <option value=3>Oriental Pearl</option>
                    <option value=4>ActivAsia Inc.</option>
                    <option value=5>Pioneer Center</option>
                    <option value=6>Greenfield</option>
                    <option value=7>Puregold</option>
                    <option value=8>Hideout</option>
                  </select>

                  <div id="renderWindow"></div>
                </div>
                <div class="column is-three-quarters">
                  <div id='map' style='height: 400px;'></div>
                  <div id='marker1'></div>
                </div>
              </div>
              <div id="page_5" class="columns is-hidden is-multiline">
                <div class="column is-full">
                  <section class="hero">
                    <div class="hero-body">
                      <div class="container">
                        <h1 class="title is-2">
                          Researchers
                        </h1>
                        <hr>
                        <section class="block">
                          <h2 class="title is-3">
                            Test
                          </h2>
                          <h2 class="block">
                            Test 
                          </h2>
                        </section>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </section>
            
          </main>
        </div>
      </div>
      <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG9jbGlnb3QiLCJhIjoiY2p3MHQ5MTViMGVvNzQzdGdicTlwM2o3NCJ9.j4qYChJYSxUy8hNnlXrD-g';

        var map = new mapboxgl.Map({
          container: 'map', // HTML container id
          style: 'mapbox://styles/mapbox/satellite-streets-v10', // style URL
          center: [121.065044, 14.575057], // starting position as [lng, lat]
          zoom: 14
        });

        map.addControl(new mapboxgl.NavigationControl());

        var popup = [];
        var marker = [];
        var messages = [];
        var locations = [];
        var colors = [];
        var descriptions = [];
        
        messages.push('<h3>Edsa Shangri-la</h3><p>St. Francis</p>');
        messages.push('<h3>The Podium</h3><p>Ortigas</p>');
        messages.push('<h3>Buffalo Wild Wings</h3><p>Estancia</p>');
        messages.push('<h3>Oriental Pearl</h3><p>Kapitolyo</p>');
        messages.push('<h3>ActivAsia Inc.</h3><p>Oranbo Drive</p>');
        messages.push('<h3>Pioneer Center</h3><p>Kapitolyo</p>');
        messages.push('<h3>Greenfield Park</h3><p>Greenfield</p>');
        messages.push('<h3>Puregold</h3><p>Shaw Blvd</p>');
        messages.push('<h3>Palawan Base</h3><p>Visayas</p>');
        descriptions.push('<p>A premier hotel under the Shangri-la group.</p>');
        descriptions.push('<p>An upscale mall managed by the SM group.</p>');
        descriptions.push('<p>Sports-bar specializing in various recipes of Buffalo Wings.</p>');
        descriptions.push('<p>Original cantonese cuisine.</p>');
        descriptions.push('<p>Spreading Happiness.</p>');
        descriptions.push('<p>A discount supermarket.</p>');
        descriptions.push('<p>Activity center with various restaurants.</p>');
        descriptions.push('<p>Mass supermarket chain.</p>');
        descriptions.push('<p>Somewhere near China.</p>');
        locations.push([121.057011, 14.581450]);
        locations.push([121.059642, 14.585015]);
        locations.push([121.062990, 14.575440]); 
        locations.push([121.055917, 14.568948]); 
        locations.push([121.065044, 14.575057]); 
        locations.push([121.057912, 14.573958]); 
        locations.push([121.054066, 14.579283]); 
        locations.push([121.042074, 14.588920]); 
        locations.push([118.785242, 9.967638]); 	
        colors.push({ "color": "#b40219" });
        colors.push({ "color": "#ff0219" });
        colors.push({ "color": "#ffff66" });
        colors.push({ "color": "#66ffff" });
        colors.push({ "color": "#ff66ff" });
        colors.push({ "color": "#ff6666" });
        colors.push({ "color": "#6666ff" });
        colors.push({ "color": "#ff66ff" });
        colors.push({ "color": "#ff66ff" });
        
        for (i = 0; i < locations.length; i++) {
          popup[i] = new mapboxgl.Popup()
          .setHTML(messages[i]);

          marker[i] = new mapboxgl.Marker(colors[i])
          .setLngLat(locations[i])
          .setPopup(popup[i])
          .addTo(map);
        }

        function goToPoint(locationValue) {
          if (locationValue) {
            map.flyTo({center: locations[locationValue]});
            renderInfo(locationValue);
          } else {
            map.flyTo({center: [121.065044, 14.575057]});
            document.getElementById('renderWindow').innerHTML = '';
          }
        }
        
        function renderInfo(locationValue) {
          document.getElementById('renderWindow').innerHTML = messages[locationValue] + descriptions[locationValue];
        }

        document.getElementById('dashboard').addEventListener('click', dashboardChange)
        document.getElementById('search').addEventListener('click', dashboardChange)
        document.getElementById('location').addEventListener('click', dashboardChange)


        function dashboardChange(){
          var id = this.id
          if(id == "dashboard"){
            document.getElementById('dashboard').classList.add("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('location').classList.remove("is-active")
            document.getElementById('page_1').classList.remove("is-hidden")
            document.getElementById('page_2').classList.remove("is-hidden")
            document.getElementById('page_3').classList.add("is-hidden")
            document.getElementById('page_4').classList.add("is-hidden")
          } else if (id == "search"){
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('search').classList.add("is-active")
            document.getElementById('location').classList.remove("is-active")
            document.getElementById('page_1').classList.add("is-hidden")
            document.getElementById('page_2').classList.add("is-hidden")
            document.getElementById('page_3').classList.remove("is-hidden")
            document.getElementById('page_4').classList.add("is-hidden")
          } else if (id == "location"){
            document.getElementById('dashboard').classList.remove("is-active")
            document.getElementById('search').classList.remove("is-active")
            document.getElementById('location').classList.add("is-active")
            document.getElementById('page_1').classList.add("is-hidden")
            document.getElementById('page_2').classList.add("is-hidden")
            document.getElementById('page_3').classList.add("is-hidden")
            document.getElementById('page_4').classList.remove("is-hidden")
          } 
        }

      </script>
  </body>
</html>

