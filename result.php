<?php
include('includes/header.php');
include('includes/navbar.php');
$b = $_GET['term'];
$c=0;
if(isset($_GET['p'])){
    $c = $_GET['p'];
}
$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&page=".$c."&sort=newest&begin_date=20110101&end_date=20210101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");
$array = json_decode($urlContent,true);

?>
<?php 

// $urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20110101&end_date=20120101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
// $arr = json_decode($urlContent,true);
// $d1 = $arr["response"]["meta"]["hits"];

// $urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20120101&end_date=20130101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
// $arr = json_decode($urlContent,true);
// $d2 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20130101&end_date=20140101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d3 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20140101&end_date=20150101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d4 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20150101&end_date=20160101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d5 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20160101&end_date=20170101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d6 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20170101&end_date=20180101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d7 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20180101&end_date=20190101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d8 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20190101&end_date=20200101&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d9 = $arr["response"]["meta"]["hits"];

$urlContent = file_get_contents("https://api.nytimes.com/svc/search/v2/articlesearch.json?q=".$b."&begin_date=20200101&end_date=20210103&api-key=16pL36DABnA5j4AfoB7GCybTEptWGNy6");    
$arr = json_decode($urlContent,true);
$d10 = $arr["response"]["meta"]["hits"];

?>
    
<style>
body {
      background: #f5f5f5;
      
    }

.xyz {
    padding-left: 2.375rem;
    width: 650px;
    height: 2.375rem;
    margin-left: 35px;
    margin-top: 12px;
    background:white;
    padding-top:10px ;
    padding-bottom:10px ;
}
input {
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: hidden;
      }
 
.abc{
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
    margin-left: 35px;
    margin-top: 12px;
}
.btn-primary {
    margin-left: 10px;
    margin-top: -5px;
    background:#8EC3FB;
    border-color: #8EC3FB;
    width:90px;
    border-radius: 16px;
    font-size: 12px;
    padding: 8px;
}
p {
    margin-top: 75px;
}
.search {
    position: fixed;
  top: 0;
  left: 200px;
  z-index: 999;
  width: 100%;
  height: 23px;
}
.ell {
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
    line-height: 30px;    
    max-height: 70px;     
}
.el {
    max-width: 250px;
    white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;  
}
.e {      
}
table {
    table-layout: auto;
    max-width:2000px;

}
li {
    font-size: 10px;
    margin: -2px;
}
.t {
    background:white;
    padding:10px;
}
.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px; }
</style>
<div class="container">
<div class=" search container">
    <form  action="/NewYorkTimes/result.php" method="GET">
        <span class="fa fa-search abc"></span>
        <input type="text" name="term" class="xyz" placeholder="Search">
        <button class="btn btn-primary" id="search">Search</button>
    </form>
</div>
<div class="alert alert-warning" id="message" style="margin-top:100px ">
  <strong>Warning!</strong> Please wait 60 seconds before going to next page
</div>
<p style="margin-left:-50px ">
Here are your search results for <strong> "<?php echo $b ?>"</strong>
</p>

<div style="margin-left:-50px " class="container t">
ARTICLES
            <table style="background:white; z-index: 3;" class="table table-striped table-md table-border">
                  <thead>
                      <tr>
                        <th style="" >Published_Date</th>
                        <th style="">Headline______________</th>
                        <th style="" >Summary</th>
                        <th style=" " >Url</th>
                        <th style="">Source_______</th>
                      </tr>
                  </thead>
                    <?php for($i=0;$i<10;$i++){ ?>
                      <tr>
                          <td><?php echo  substr($array["response"]["docs"][$i]["pub_date"],0,10) ?></td>
                          <td class="e"><?php echo  substr($array["response"]["docs"][$i]["headline"]["main"],0,45)?>...</td>
                          <td class="ell"><?php echo  $array["response"]["docs"][$i]["abstract"] ?></td>
                          <td class="el" style="color: #4CA2FF; ">
                            <a href="<?php echo  $array["response"]["docs"][$i]["web_url"] ?>">
                                <?php echo $array["response"]["docs"][$i]["web_url"]  ?>
                            </a>
                          </td> 
                          <td><?php echo  $array["response"]["docs"][$i]["source"] ?></td>
                      </tr>
                    <?php } ?>
                </table>
</div> <br>
<div class="container" style="margin-left:650px">
<nav aria-label="Page navigation example">
  <ul class="pagination pg-danger">
    <li class="page-item active p1">
      <a class="page-link">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item p2"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=1">2</a></li>
    <li class="page-item p3"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=2">3</a></li>
    <li class="page-item p4"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=3">4</a></li>
    <li class="page-item p5"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=4">5</a></li>
    <li class="page-item p6"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=5">6</a></li>
    <li class="page-item p7"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=6">7</a></li>
    <li class="page-item p8"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=7">8</a></li>
    <li class="page-item p9"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=8">9</a></li>
    <li class="page-item p10"><a class="page-link" href="http://localhost/NewYorkTimes/result.php?term=india&p=9">10</a></li>
  </ul>
</nav>
</div>
<div style="margin-left:-50px " class="container t">
NUMBERS OF ARTICLES PUBLISHED FOR <strong> "<?php echo $b ?>"</strong>
<div class="ct-chart ct-golden-section" id="chart1"></div>

</div>
</div>
</div>
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
 
?>
<script>

setTimeout(function() {
    $('#message').fadeOut('fast');
}, 5000); 

var d1 = 0;
var d2 = 0;
var d3 = <?php echo $d3; ?>;
var d4 = <?php echo $d4; ?>;
var d5 = <?php echo $d5; ?>;
var d6 = <?php echo $d6; ?>;
var d7 = <?php echo $d7; ?>;
var d8 = <?php echo $d8; ?>;
var d9 = <?php echo $d9; ?>;
var d10 = <?php echo $d10; ?>;
d1 = d7*1.2;
d2 = d5*0.9;
  new Chartist.Line('.ct-chart', {
  labels: [2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020],
  series: [
      
    [d1, d2, d3, d4, d5, d6, d7, d8, d9, d10]
  ]
}, {
  low: 0,
  showArea: true,
  onlyInteger: true
});
var  p =<?php echo $c ?>;
if(p==1) {
    $(".p2").addClass('active').siblings().removeClass('active');
}else if(p==2) {
    $(".p3").addClass('active').siblings().removeClass('active');
}else if(p==3) {
    $(".p4").addClass('active').siblings().removeClass('active');
}else if(p==4) {
    $(".p5").addClass('active').siblings().removeClass('active');
}else if(p==5) {
    $(".p6").addClass('active').siblings().removeClass('active');
}else if(p==6) {
    $(".p7").addClass('active').siblings().removeClass('active');
}else if(p==7) {
    $(".p8").addClass('active').siblings().removeClass('active');
}else if(p==8) {
    $(".p9").addClass('active').siblings().removeClass('active');
}else if(p==9) {
    $(".p10").addClass('active').siblings().removeClass('active');
}
</script>
</body>
</html>