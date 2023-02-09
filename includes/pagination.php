<?php include('includes/connection.php'); ?>
<?php
$limit_per_page = 10;
$page = "";
if(isset($_POST['page_no'])){ $page = $_POST['page_no']; }
else{ $page = 1; }
$offset = ($page - 1) * $limit_per_page;
$query = "SELECT * FROM post WHERE `status` != '0' LIMIT {$offset}, {$limit_per_page}";
$result = mysqli_query($conn, $query) or die("Query unsuccessful");
$output = "";
if(mysqli_num_rows($result)>0){
    $x = 0;
    $output .= '<ul class="cards">';

    while($row = mysqli_fetch_array($result)){
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

        $output .= '
        <li>
            <a href="'.$uni_link.'" class="card">
                <img src="https://images.squarespace-cdn.com/content/v1/586d70dab3db2bba4122cdd5/1548015570912-QYPAHRBLWWQ59MD91WWL/scholarship3.png?format=1000w" class="card__image" alt="post image" />
                <div class="card__overlay">
                <div class="card__header">
                    <img class="card__thumb" src="'.$post_img.'" alt="icon" />
                    <div class="card__header-text">
                    <h3 class="card__title">'.$c_type.'</h3>            
                    <span class="card__status"><b>Deadline: </b><span class="text-danger">'.$deadline.'</span></span>
                    </div>
                </div>
                <p class="card__description">'.$university.'</p>
                </div>
            </a>      
        </li>';
     $x++;
    }
    $output .= '</ul>';

    // PAGE NAVIGATION
    $sql_total = "SELECT * FROM post WHERE `status` != '0'";
    $records = mysqli_query($conn, $sql_total) or die("Query2 Unsuccessful");
    $total_records = mysqli_num_rows($records);
    $total_pages = ceil($total_records/$limit_per_page);
    $output .= '<div id="pagination-id" class="mt-2 mb-2 pagination_sec pt-3 pr-3 pb-1">
                <ul id="pagination" class="pagination d-flex justify-content-center">';
    // CURRENT PAGE 
    for($i = 1; $i<=$total_pages; $i++){
        if ($i == $page) {$active = 'active btn btn-primary';}else{$active = 'btn btn-light';}
        $output .= "<li class='page-item'><a class='{$active}' id='{$i}' href=''> {$i} </a></li>";
    }
    $output .= '</ul></div>';
}
else{$output = '<h2>No record Found!</h2>';}
echo $output;
?>