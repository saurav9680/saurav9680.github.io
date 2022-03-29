<?php
include('dbconnect.php');
include('./include/header.php');
?>
    <!--banner-->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./img/coursebanner.jpg" alt="courses"
            style="height:500px;width:100%;object-fit:cover;
            box-shadow:10px;"/>
            </div>
</div>
<!--banner end-->
<div class="container mt-5">
        <h1 class="text-center">Top Courses</h1>
        <!--1stcourse-->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left;
        padding:0px;">
                <div class="card">
                    <img src="img/php.png" class="card-img-top" alt="PHP" />
                    <div class="card-body">
                        <h5 class="card-title"> Learn PHP </h5>
                        <p class="card-text"> check out this course to
                            PHP and Improve your backend Knowledge and Make Project</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>
                                    &#8377 2500 </del></small>
                            <span class="font-weight-bolder">&#8377 500<span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetail.php">&nbsp;Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left;
        padding:0px;">
                <div class="card">
                    <img src="img/html.jpg" class="card-img-top" alt="HTML" />
                    <div class="card-body">
                        <h5 class="card-title"> Learn Frontend Web Development </h5>
                        <p class="card-text"> check out this course For Frontend web Development
                        </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>
                                    &#8377 3000 </del></small>
                            <span class="font-weight-bolder">&#8377 600<span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right"
                            href="#">&nbsp;Enroll</a>
                    </div>
                </div>
            </a><a href="#" class="btn" style="text-align:left;
        padding:0px;">
                <div class="card">
                    <img src="img/dsa.jpg" class="card-img-top" alt="DSA" />
                    <div class="card-body">
                        <h5 class="card-title"> Learn DSA </h5>
                        <p class="card-text"> check out this course to
                            Learn Data Structure and Algorithm Completely from Basic to Advance</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>
                                    &#8377 5000 </del></small>
                            <span class="font-weight-bolder">&#8377 1200<span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">&nbsp;Enroll</a>
                    </div>
                </div>
            </a>
        </div>
        <!--first courseend-->
        <!--Second course card-->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align:left;
        padding:0px;">
                <div class="card">
                    <img src="img/angular.png" class="card-img-top" alt="Angular" />
                    <div class="card-body">
                        <h5 class="card-title"> Learn Angular </h5>
                        <p class="card-text"> check out this Angular Course from basic Level to Advance Level</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>
                                    &#8377 3000 </del></small>
                            <span class="font-weight-bolder">&#8377 500<span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">&nbsp;Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align:left;
        padding:0px;">
                <div class="card">
                    <img src="img/python.png" class="card-img-top" alt="Python" />
                    <div class="card-body">
                        <h5 class="card-title"> Learn Python </h5>
                        <p class="card-text"> check out this course to for Complete Python Language</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>
                                    &#8377 3500 </del></small>
                            <span class="font-weight-bolder">&#8377 800<span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">&nbsp;Enroll</a>
                    </div>
                </div>
            </a><a href="#" class="btn" style="text-align:left;
        padding:0px;">
                <div class="card">
                    <img src="img/react.png" class="card-img-top" alt="React" />
                    <div class="card-body">
                        <h5 class="card-title"> Learn React JS </h5>
                        <p class="card-text"> check out this course to
                            Learn React whgich is a framework of Js </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>
                                    &#8377 2000 </del></small>
                            <span class="font-weight-bolder">&#8377 200<span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">&nbsp;Enroll</a>
                    </div>
                </div>
            </a>
        </div></div>
        <!--End of 2nd course-->
    <!--banner end-->
<!--Footer start-->
<?php
    include('./include/footer.php')
?>
<!--Footer End-->
