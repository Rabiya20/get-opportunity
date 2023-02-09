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
            <div class="collapse d-lg-block" id="filterSelects">
                <div class="form-group__elemen dropdowns">
                    <label for="" class="text-dark"><b>University:</b></label>
                    <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterUni">
                        <option selected>- Please select -</option>
                        <?php
                        $institution = 'SELECT * FROM `institution`';
                        $institution_query = mysqli_query($conn, $institution);
                        while ($rows = mysqli_fetch_array($institution_query)) { ?>
                            <option class="option-university" value="<?php echo $rows['university']; ?>">
                                <?php echo $rows['university']; ?></option>
                        <?php } ?>
                    </select> 
                    <hr>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Course Type:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterDegree">
                            <option selected>- Please select -</option>
                                <?php
                                $course_type = 'SELECT * FROM `course_type`';
                                $course_type_query = mysqli_query($conn, $course_type);
                                while ($rows = mysqli_fetch_array($course_type_query)) { ?>
                                    <option class="option-degree" value="<?php echo $rows['c_type']; ?>">
                                        <?php echo $rows['c_type']; ?></option>
                                <?php } ?>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Field of Study:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterFields">
                            <option selected>- Please select -</option>
                                <?php
                                $all_fields = 'SELECT * FROM `all_fields`';
                                $all_fields_query = mysqli_query($conn, $all_fields);
                                while ($rows = mysqli_fetch_array($all_fields_query)) { ?>
                                    <option class="option-field" value="<?php echo $rows['f_study']; ?>">
                                        <?php echo $rows['f_study']; ?></option>
                                <?php } ?>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Semester:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterBeginning">
                                <option selected>- Please select -</option>
                                <option class="option-semester" value="Summer semester">Summer semester</option>
                                <option class="option-semester" value="Winter semester">Winter semester</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Course Language:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterLanguage">
                            <option selected>- Please select -</option>
                                <?php
                                $course_language = 'SELECT * FROM `course_language`';
                                $course_language_query = mysqli_query($conn, $course_language);
                                while ($rows = mysqli_fetch_array($course_language_query)) { ?>
                                    <option class="option-field" value="<?php echo $rows['c_language']; ?>">
                                        <?php echo $rows['c_language']; ?></option>
                                <?php } ?>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>English Language Requirments:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterIelts">
                                <option selected>- Please select -</option>
                                <option class="option-lang-req" value="IELTS/TOEFL">IELTS/TOEFL</option>
                                <option class="option-lang-req" value="Without IELTS/TOEFL">Without IELTS/TOEFL</option>
                                <option class="option-lang-req" value="English Proficiency Letter">English Proficiency Letter</option>
                                <option class="option-lang-req" value="German Language">German Language</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>IELTS Score:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterIIELTS">
                                <option selected>- Please select -</option>
                                <option class="option-ielts" value="5">5</option>
                                <option class="option-ielts" value="5.5">5.5</option>
                                <option class="option-ielts" value="6">6</option>
                                <option class="option-ielts" value="6.5">6.5</option>
                                <option class="option-ielts" value="7">7</option>
                                <option class="option-ielts" value="7.5">7.5</option>
                                <option class="option-ielts" value="8">8</option>
                                <option class="option-ielts" value="8+">8+</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>


                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>TOEFL Score:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterTOEFL">
                                <option selected>- Please select -</option>
                                <option class="option-toefl" value="35-45">35-45</option>
                                <option class="option-toefl" value="46-59">46-59</option>
                                <option class="option-toefl" value="60-78">60-78</option>
                                <option class="option-toefl" value="79-93">79-93</option>
                                <option class="option-toefl" value="94-101">94-101</option>
                                <option class="option-toefl" value="102-109">102-109</option>
                                <option class="option-toefl" value="110-114">110-114</option>
                                <option class="option-toefl" value="115-117">115-117</option>
                                <option class="option-toefl" value="118-120">118-120</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>
                    
                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>German Language Level:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterGerman">
                                <option selected>- Please select -</option>
                                <option class="option-level" value="A1">A1</option>
                                <option class="option-level" value="A2">A2</option>
                                <option class="option-level" value="B1">B1</option>
                                <option class="option-level" value="B2">B2</option>
                                <option class="option-level" value="C1">C1</option>
                                <option class="option-level" value="C2">C2</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Application Method/Source:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterApplication">
                                <option selected>- Please select -</option>
                                <option class="option-method" value="University Portal">University Portal</option>
                                <option class="option-method" value="Uni-Assist">Uni-Assist</option>
                                <option class="option-method" value="Both">Both</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>
            
                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Location:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterCity">
                            <option selected>- Please select -</option>
                                <?php
                                $all_city = 'SELECT * FROM `all_city`';
                                $all_city_query = mysqli_query($conn, $all_city);
                                while ($rows = mysqli_fetch_array($all_city_query)) { ?>
                                    <option class="option-field" value="<?php echo $rows['city']; ?>">
                                        <?php echo $rows['city']; ?></option>
                                <?php } ?>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="form-group text-left dropdowns">
                    <label for="" class="text-dark"><b>Tuition Fee:</b></label>
                    <div class="form-group__element">
                        <div id="filter">
                            <select class="custom-select form-control-lg w-100 u-fs-default c-search__multiselect js-search-multiselect js-filterDegree js-filter-element" id="filterFees">
                                <option selected>- Please select -</option>
                                <option class="option-fee" value="No Tuition Fees">No Tuition Fee</option>
                                <option class="option-fee" value="Upto 500 EUR">Upto 500 EUR</option>
                                <option class="option-fee" value="Upto 5000 EUR">Upto 5000 EUR</option>
                                <option class="option-fee" value="Upto 10000 EUR">Upto 10000 EUR</option>
                            </select>
                            <hr>
                        </div>
                    </div>
                </div>
            <a class="js-filter-toggle-button w-100 border-0 d-lg-none" data-toggle="collapse" data-target="#filterSelects" data-text-open="Show more filters" data-text-closed="Hide filters" aria-expanded="false" aria-controls="filterSelects" href="#">Show more filters </a>
        </ul>
        <div class="mb-5">
            <h5>Tag Cloud</h5>
            <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Internship</a>
                <a href="#" class="tag-cloud-link">Scholarship</a>
                <a href="#" class="tag-cloud-link">Under Graduate</a>
                <a href="#" class="tag-cloud-link">Post Graduate</a>
                <a href="#" class="tag-cloud-link">Master</a>
                <a href="#" class="tag-cloud-link">PHD</a>
            </div>
        </div>
    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ip.daad.de/app/ip/build/app.2128e422b2f3c570819f.js" type="text/javascript"></script>