<?php include('includes/connection.php'); ?>
<?php
if (isset($_POST['action'])) {
    $query = "SELECT * FROM post WHERE `status` != '0'";

    if(isset($_POST["degree"]) && $_POST["degree"] !='')
	{
        $d = implode($_POST['degree']);
        $query .= " AND c_type = '$d'";
	}

    if(isset($_POST["field"]) && $_POST["field"]!='')
	{
        $f = implode($_POST['field']);
        $query .= " AND f_study = '$f'";
	}

    if(isset($_POST["language"]) && $_POST["language"]!='')
	{
        $l = implode($_POST['language']);
        $query .= " AND c_language = '$l'";
	}

    if(isset($_POST["langreq"]) && $_POST["langreq"]!='')
	{
        $lr = implode($_POST['langreq']);
        $query .= " AND lang_req = '$lr'";
	}

    if(isset($_POST["ielts"]) && $_POST["ielts"]!='')
	{
        $i = implode($_POST['ielts']);
        $query .= " AND ielts_band = '$i'";
	}

    if(isset($_POST["toefl"]) && $_POST["toefl"]!='')
	{
        $tfl = implode($_POST['toefl']);
        $query .= " AND tofel_band = '$tfl'";
	}

    if(isset($_POST["level"]) && $_POST["level"]!='')
	{
        $lvl = implode($_POST['level']);
        $query .= " AND min_lev = '$lvl'";
	}

    if(isset($_POST["method"]) && $_POST["method"]!='')
	{
        $m = implode($_POST['method']);
        $query .= " AND `application` = '$m'";
	}

    if(isset($_POST["city"]) && $_POST["city"]!='')
	{
        $c = implode($_POST['city']);
        $query .= " AND city = '$c'";
	}

    if(isset($_POST["university"]) && $_POST["university"]!='')
	{
        $u = implode($_POST['university']);
        $query .= " AND university = '$u'";
	}

    if(isset($_POST["fee"]) && $_POST["fee"]!='')
	{
        $fe = implode($_POST['fee']);
        $query .= " AND tu_fee = '$fe'";
	}

    if(isset($_POST["semester"]) && $_POST["semester"]!='')
	{
        $s = implode($_POST['semester']);
        $query .= " AND c_intake = '$s'";
	}
    $query .= "LIMIT 0,6";
    
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
<?php } else { echo " Sorry No Record Found"; }} ?>