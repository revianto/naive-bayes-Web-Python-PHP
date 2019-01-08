<style type="text/css">
  .act-dash{
    color: #fff;
  }
</style>
<!-- Icon Cards-->
  <?php
    include 'conn.php';

    $count_mulmed = sql("multimedia");
    $count_hs = sql("hs");
    $count_ai = sql("ai");
    $count_network = sql("network");
    $count_tfidf = sql("tfidf");

    function sql($t)
    {
      include 'conn.php';
      $q = mysqli_query($conn,'SELECT id_'.$t.' FROM '.$t.';');
      $sql = mysqli_num_rows($q);
      return $sql;
    }
  ?>

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-video"></i>
          </div>
          <div class="mr-5"><?php echo $count_mulmed;?> Multimedia</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?page=abstract">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-desktop"></i>
          </div>
          <div class="mr-5"><?php echo $count_hs; ?> Hardware & Software</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?page=abstract">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fal fa-dna"></i>
          </div>
          <div class="mr-5"><?php echo $count_ai; ?> Artificial Intelligence</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?page=abstract">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-code-branch"></i>
          </div>
          <div class="mr-5"><?php echo $count_network; ?> Network</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?page=abstract">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>

     <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-superscript"></i>
          </div>
          <div class="mr-5"><?php echo $count_tfidf; ?> TF-IDF</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="?page=tfidf">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
