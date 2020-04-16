<?php
include('includes/header.php');
include('includes/navbar.php');
?>

    
<style>
body {
      background: #F3F5F6;
      
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
.search {
    position: fixed;
  top: 0;
  left: 200px;
  z-index: 999;
  width: 100%;
  height: 23px;
}
.im {
    margin-top: 80px;
}
</style>
<div class=" search container">
    <form action="/NewYorkTimes/result.php" method="GET">
        <span class="fa fa-search abc"></span>
        <input type="text" name="term" class="xyz" placeholder="Search">
        <button class="btn btn-primary" id="search">Search</button>
    </form>
</div>
<div class="im container">
<img width="1000" height="800" src="includes/dashboard.png" alt="">
</div>

<?php
  include('includes/footer.php');
  include('includes/scripts.php');
 
?>
<script>
</script>
</body>
</html>