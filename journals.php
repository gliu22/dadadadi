<?php
require_once 'include.php';
//checkLogined();
$link_address = "index.html";
$sql="select Name from Journal";
$rows=fetchAll($sql);
if(!$rows){
	echo "sorry,no books";
	exit;
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
        <title>natscipub.org</title>
        <!-- Bootstrap -->
        <link href="assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="header">
            <div class="logobar">
                <div class="logo">
                    <a href="index.html"><img class="logo-img" src="img/logo.png" alt="natscipub.org"></a>
                </div>
                <div class="open-access">
                    <a href="#"><img class="oa-logo" src="img/oa_logo_small.png" alt="open access"></a>
                </div>
                <div class="login-signup">
                    <a class="login" href="login.php">Log in</a>
                    <a class="signup" href="signup.html">Sign up</a>
                </div>
            </div>
            <div class="menubar">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="index.html">HOME
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Journals</a>
                                </li>
                                <li>
                                    <a href="#">Books</a>
                                </li>
                                <li>
                                    <a href="#">Conferences</a>
                                </li>
                                <li>
                                    <a href="#">Guidelines</a>
                                </li>
                                <li>
                                    <a href="#">Submission</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                            </ul>
                            <a class="search-trigger" id="search-trigger">
                                <i class="glyphicon glyphicon-search"></i>
                                <span>Search</span>
                            </a>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class="bigsearch-area" style="display:none" id="bigsearch-area">
            <div class="bigsearch-wrap">
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="radios">
                                <div class="radio-wrap">
                                    <input id="All" type="radio" name="searchScope" value="All" checked>
                                    <label for="All">All</label>
                                </div>
                                <div class="radio-wrap">
                                    <input id="Webpages" type="radio" name="searchScope" value="Webpages">
                                    <label for="Webpages">Webpages</label>
                                </div>
                                <div class="radio-wrap">
                                    <input id="Books" type="radio" name="searchScope" value="Books">
                                    <label for="Books">Books</label>
                                </div>
                                <div class="radio-wrap">
                                    <input id="Journals" type="radio" name="searchScope" value="Journals">
                                    <label for="Journals">Journals</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="bigsearch">
                                <input class="search-box" type="search" placeholder="Search for books, journals or webpages...">
                                <button class="search-btn">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="wrap">
            <div class="journals-head">
                <h1>Journals</h1>
            </div>
            <div class="filter-wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <select>
                                <option value="" selected="selected">All journals</option>
                                <option value="">Journals starting with A</option>
                                <option value="">Journals starting with B</option>
                                <option value="">Journals starting with C</option>
                                <option value="">Journals starting with D</option>
                                <option value="">Journals starting with E</option>
                                <option value="">Journals starting with F</option>
                                <option value="">Journals starting with G</option>
                                <option value="">Journals starting with H</option>
                                <option value="">Journals starting with I</option>
                                <option value="">Journals starting with J</option>
                                <option value="">Journals starting with K</option>
                                <option value="">Journals starting with L</option>
                                <option value="">Journals starting with M</option>
                                <option value="">Journals starting with N</option>
                                <option value="">Journals starting with O</option>
                                <option value="">Journals starting with P</option>
                                <option value="">Journals starting with Q</option>
                                <option value="">Journals starting with R</option>
                                <option value="">Journals starting with S</option>
                                <option value="">Journals starting with T</option>
                                <option value="">Journals starting with U</option>
                                <option value="">Journals starting with V</option>
                                <option value="">Journals starting with W</option>
                                <option value="">Journals starting with X</option>
                                <option value="">Journals starting with Y</option>
                                <option value="">Journals starting with Z</option>
                                <option value="">Journals starting with Other</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select>
                                <option value="" selected="selected">All Subject Area</option>
                                <option value="">agricultural and biological sciences</option>
                                <option value="">business management and accounting</option>
                                <option value="">chemical-engineering</option>
                                <option value="">Chemistry</option>
                                <option value="">Dentistry</option>
                                <option value="">economics-and-finance</option>
                                <option value="">Energy and power</option>
                                <option value="">engineering and technology</option>
                                <option value="">environmental-sciences</option>
                                <option value="">health-professions</option>
                                <option value="">immunology</option>
                                <option value="">Life Sciences</option>
                                <option value="">materials-science</option>
                                <option value="">Mathematics</option>
                                <option value="">Medicine</option>
                                <option value="">microbiology-and-virology</option>
                                <option value="">neuroscience</option>
                                <option value="">Nursing</option>
                                <option value="">pharmaceutical-sciences</option>
                                <option value="">pharmacology</option>
                                <option value="">Physics</option>
                                <option value="">psychology</option>
                                <option value="">Social Science</option>
                            </select>

                        </div>
                        <div class="col-md-3"></div>
                    </div>

                  </div>
                  <!--表格-->
                  <table class="table" cellspacing="0" cellpadding="0">
                      <thead>
                          <tr>
                              <th>Name</th>

                          </tr>
                      </thead>
                      <tbody>
                      <?php  foreach($rows as $row):?>
                          <tr>
                              <!--这里的id和for里面的c1 需要循环出来-->
                              <td><?php echo "<a href='".$link_address."'>".$row['Name']."</a>";?></td>
                          </tr>
                          <?php endforeach;?>
                      </tbody>
                  </table>
              </div>

                </div>
            </div>

        </div>



        <div class="footer">
            <div class="footer-wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="footer-table">
                                <tr>
                                    <td><img class="footer-logo" src="img/footer/crossref2.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/portico_logo3.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/google-scholar.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/oalib_logo.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/pubmedcentral.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/ebsco.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/cab2.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/tr2.jpg" alt=""/></td>
                                    <td><img class="footer-logo" src="img/footer/ProQuest-CSA.jpg" alt=""/></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p><a href="">Home</a> - <a href="">About natscipub</a> - <a href="">Sitemap</a> - <a href="">News</a> - <a href="">Jobs</a></p>
                                <p>Copyright &copy; 2006-2016 Scientific Research Publishing Inc. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/jquery/jquery-2.2.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/jquery/jquery-2.2.3.min.js"></script>
        <script src="assets/scrollbox/jquery.scrollbox.js"></script>
        <script>
            $(function() {
                $("#search-trigger").on('click', function() {
                    $("#bigsearch-area").slideToggle(200);
                });
                $("#scroll-items").scrollbox({
                    linear: true,
                    step: 1,
                    delay: 0,
                    speed: 20,
                    direction: 'h'
                });
                $("#prev").on("click", function() {
                    $("#scroll-items").trigger("forward");
                });
                $("#next").on("click", function() {
                    $("#scroll-items").trigger("backward");
                });
            })

        </script>
    </body>

</html>
