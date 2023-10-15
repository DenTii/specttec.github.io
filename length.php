<?php
include "config.php";

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    if (isset($_POST['start'])) {
        $wtotal = $_POST['wtotal'];
        $wreal = $_POST['wreal'];
        $result = (($wtotal - $wreal) - 150);
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php include "head.php"; ?>

    <body style="background-image: url('../dimension_sokkong/back.jpg');" class="mb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                </div>
            </div>
            <div class="row">
                <div class="col"><a class="btn btn-success mt-4 mb-3" href="adduser_sok.php"><i class="bi bi-person-fill-add"></i> Manage User</a></div>
                <div class="col">
                    <div class="h1 mt-3 mb-3 text-center fontkh"><b><u>ព័ត៌មានបច្ចេកទេសទូទៅ</u></b></div>
                </div>
                <div class="col d-grid gap-2 d-md-flex justify-content-md-end mt-4 mb-3 mx-5">
                    <h3 class="border border-5 bg-light p-2" style="border-radius: 10px;">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>CREATE BY: </b> &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-person-fill-add"></i>
                                <b class="text-success" style="font-size: 20px;">DENNEW PROM </b>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="log.php" onclick="return confirm('Are you sure to leave?')">Log Out</a></li>
                            </ul>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="row bg-secondary fontkh mb-4 text-white text-center border rounded p-1">
                <div class="col">
                    <h4><a href="../dimension_sokkong/dimendexadmin_sok.php" class="text-white">Dimension</a></h4>
                </div>
                <div class="col">
                    <h4><a href="../dimension_sokkong/dimendexadmin_sok_kilo.php" class="text-white">គណនាទម្ងន់យាន</a></h4>
                </div>
                <div class="col">
                    <h4><a href="../dimension_sokkong/dimendexadmin_sok_m.php" class="text-white">គណនាខ្នាត</a></h4>
                </div>
            </div>
            <form action="" method="post">

                <div class="container-fluid">
                    <div class="row fontkh bt-3">
                        <div class="col-2"></div>
                        <div class="col-8 border border-3 shadow bg-light border rounded-3 p-4">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="row bg-secondary border rounded-3 text-center p-1">
                                        <div class="col">
                                            <h5><a href="../dimension_sokkong/dimendexadmin_sok_m.php" class="text-white">គណនាខ្នាត (KW-HP)</a></h5>
                                        </div>
                                        <div class="col">
                                            <h5><a href="../dimension_sokkong/length.php" class="text-white">គណនាប្រវែង</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>

                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="row mt-5 text-center">
                                        <div class="col mt-5 mb-5">
                                            <h2 class="text-secondary">Comming Soon...!</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </form>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
} else {
    header("location:log.php");
    exit();
}
?>