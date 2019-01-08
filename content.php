<link rel="stylesheet" type="text/css" href="style.css">
<section id="projects" class="bg-abu" style="height: 100vh;">
  <div class="container">
    <!-- Featured Project Row -->
    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
      <div class="col-xl-12 margin-content" style="background-color: #fff; text-align: center;">
      	<i class="fas fa-3x fa-calculator crc-logo i-set" aria-hidden="true"></i>
        <?php include "user.php"?>
      </div>
    </div>
  </div>
</section>

<section id="grap" class="bg-abu" style="height: 100vh;">
  <div class="container">
    <!-- Featured Project Row -->
    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
      <div class="col-xl-12 margin-content" style="background-color: #fff; text-align: center;">
      	<iframe src="graph.php"></iframe>
      </div>
    </div>
  </div>
</section>

<div class="bgpopup" id="loading">
  <div class="loader">
    <div class="loader2"></div>
  </div>
</div>

<script type="text/javascript">
  var lod = document.getElementById('loading');
  function load() {
    lod.style.display = "block";
  }
  
</script>
