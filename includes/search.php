<?php include('includes/connection.php'); ?>
<?php
if (isset($_POST['action'])) {
    $kw = $_POST['search'];
    $query = "SELECT * FROM post WHERE `id` != '0' AND keywords LIKE '%{$kw}%'";
    $x = 0;
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count) {
?>
<ul class="cards">
    <?php
        while ($row = mysqli_fetch_array($result)) {
            if ($x != 0 && $x % 4 == 0) {
                include('ad_div.php');
            }
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
    <?php $x++; } ?>
</ul>
<?php } else { echo " Sorry No Record Found";}} ?>