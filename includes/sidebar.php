<?php include('includes/connection.php'); ?>
<nav id="sidebar">
    <div class="p-4 pt-5">
        <div class="mb-2">
            <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="I am looking for...">
                </div>
            </form>
        </div>
        <ul class="list-unstyled components mb-5">
            <select name="university" id="mydropdown" class="dropdowns" onmouseout="JSDropDownOff()" onmouseover="JSDropDown()" onmouseout="this.size=1;">
                <option onclick="JSDropDownOff()" value="" disabled selected>UNIVERSITY</option>
                <?php
                $institution = 'SELECT * FROM `institution`';
                $institution_query = mysqli_query($conn, $institution);

                while ($rows = mysqli_fetch_array($institution_query)) { ?>
                    <option value="<?php echo $rows['university']; ?>"><?php echo $rows['university']; ?></option>
                <?php } ?>
            </select>


            <li>
                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mens Shoes</a>
                <ul class="collapse list-unstyled" id="pageSubmenu2">
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Casual</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Football</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jordan</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lifestyle</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Running</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Accessories</a>
                <ul class="collapse list-unstyled" id="pageSubmenu3">
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Nicklace</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Ring</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Bag</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sacks</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lipstick</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
                <ul class="collapse list-unstyled" id="pageSubmenu4">
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
                </ul>
            </li>
        </ul>
        <div class="mb-5">
            <h5>Tag Cloud</h5>
            <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
            </div>
        </div>

    </div>
</nav>