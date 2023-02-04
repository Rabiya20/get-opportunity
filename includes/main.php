<ul class="cards">
    <?php 
    $posts = "SELECT * FROM post WHERE `status` != '0'";
    $records = mysqli_query($conn, $posts);
    if(mysqli_num_rows($records)>0){
     $x = 0;
     while($row = mysqli_fetch_array($records)){
        $id = $row['id'];
        $c_type = $row['c_type']; 
        $c_language = $row['c_language'];
        $f_study = $row['f_study'];
        $city = $row['city'];
        $university = $row['university'];
        $uni_link = $row['uni_link'];
        $duration = $row['duration'];
        $tu_fee = $row['tu_fee'];
        $c_intake = $row['c_intake'];
        $application = $row['application'];
        $lang_req = $row['lang_req'];
        $ielts_band = $row['ielts_band'];
        $tofel_band = $row['tofel_band'];
        $min_lev = $row['min_lev'];
        $funding = $row['funding'];
        $app_fees = $row['app_fees'];
        $deadline = $row['deadline'];
        $beginning = $row['beginning'];
        $post_img = $row['post_img'];

        if ($x != 0 && $x % 4 == 0) {
            include('ad_div.php');
        }
        $x++;
    ?>
  <li>
    <a href="<?php echo $uni_link; ?>" class="card">
      <img src="https://images.squarespace-cdn.com/content/v1/586d70dab3db2bba4122cdd5/1548015570912-QYPAHRBLWWQ59MD91WWL/scholarship3.png?format=1000w" class="card__image" alt="post image" />
      <div class="card__overlay">
        <div class="card__header">
          <!-- <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                      -->
          <img class="card__thumb" src="<?php echo $post_img; ?>" alt="icon" />
          <div class="card__header-text">
            <h3 class="card__title"><?php echo $c_type;?></h3>            
            <span class="card__status"><b>Deadline: </b><span class="text-danger"><?php echo $deadline?></span></span>
          </div>
        </div>
        <p class="card__description"><?php echo $university; ?></p>
      </div>
    </a>      
  </li>
  <?php }}  ?>
</ul>