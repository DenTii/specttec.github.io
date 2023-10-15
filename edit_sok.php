<?php
include "config.php";

/*if (isset($_POST['save'])) {
    $mark = $_POST['mark'];
    $cc = $_POST['cc'];
    $ncy = $_POST['ncylin'];
    $hp = $_POST['hp'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $kerb = $_POST['kerb'];
    $load = $_POST['load'];
    $seat = $_POST['seat'];
    $ax = $_POST['ax'];
    $year = $_POST['year'];
    $fu = $_POST['fualt'];
    $sql = "INSERT INTO `dimen`(`mark`, `cc`, `nc`, `hp`, `length`, `width`, `height`, `kerb`, `load`, `seat`, `ax`, `year`, `fualt`) VALUES ('$mark','$cc','$ncy','$hp','$length','$width','$height','$kerb','$load','$seat','$ax','$year','$fu')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Add data success');</script>";
        header("location:dimendex.php");
    } else {
        echo "<script>alert('Add data Failed');</script>";
    }
}
*/

$mark = "";
$cc = "";
$ncy = "";
$hp = "";
$length = "";
$width = "";
$height = "";
$kerb = "";
$load = "";
$seat = "";
$ax = "";
$year = "";
$fu = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select1 = mysqli_query($conn, "SELECT `id`, `mark`, `cc`, `nc`, `hp`, `length`, `width` ,`height`,`kerb`,`load`,`seat`,`ax`,`year`,`fualt`FROM `dimen` WHERE id='$id'");
    $data = mysqli_fetch_assoc($select1);
    $mark = $data['mark'];
    $cc = $data['cc'];
    $ncy = $data['nc'];
    $hp = $data['hp'];
    $length = $data['length'];
    $width = $data['width'];
    $height = $data['height'];
    $kerb = $data['kerb'];
    $load = $data['load'];
    $seat = $data['seat'];
    $ax = $data['ax'];
    $year = $data['year'];
    $fu = $data['fualt'];
}

if (isset($_POST['sub1'])) {
    $mark = $_POST['mark'];
    $cc = $_POST['cc'];
    $ncy = $_POST['ncylin'];
    $hp = $_POST['hp'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $kerb = $_POST['kerb'];
    $load = $_POST['load'];
    $seat = $_POST['seat'];
    $ax = $_POST['ax'];
    $year = $_POST['year'];
    $fu = $_POST['fualt'];

    if(isset($_GET['id'])){
        $update=mysqli_query($conn,"UPDATE `dimen` SET `mark`='$mark',`cc`='$cc',`nc`='$ncy',`hp`='$hp',`length`='$length',`width`='$width',`height`='$height' ,`kerb`='$kerb',`load`='$load',`seat`='$seat',`ax`='$ax',`year`='$year',`fualt`='$fu' WHERE id='$id'");
        if($update){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong class='fontkh text-center'>បានកែសម្រួលជោគជ័យ <i class='bi bi-check2-all'></i></strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";;
        }else{
            if($mark=="" || $cc=="" || $ncy=="" || $hp=="" || $length=="" || $width=="" || $height=="" || $kerb=="" || $load=="" || $seat=="" || $ax=="" || $year=="" || $fu==""){
                echo"<script>alert('Data canot Empty. Please Insert...!')</script>";
            }else{
                $sql = "INSERT INTO `dimen`(`mark`, `cc`, `nc`, `hp`, `length`, `width`, `height`, `kerb`, `load`, `seat`, `ax`, `year`, `fualt`) VALUES ('$mark','$cc','$ncy','$hp','$length','$width','$height','$kerb','$load','$seat','$ax','$year','$fu')";
                $query = mysqli_query($conn,$sql);
                if($sql){
                    echo "<script>alert('Insert success')</script>";
                }else{
                    echo "<script>alert('Insert failed')</script>";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body style="background-color:darkgray;">
    <div class="container-fluid shadow p-3 mb-5 bg-body p-4 bg-light mt-5" style="width: 95%; border-radius:15px;">
        <div class="row">
            <div class="col">
                <div class="h1 mx-4 mt-3">
                    <a href="dimendexadmin_sok.php" class="btn btn-outline-danger p-2"><strong><i class="bi bi-arrow-left-circle fontkh">ត្រឡប់</i></strong></a>
                </div>
            </div>
            <div class="col">
                <div class="h1 text-center mt-3 fontkh">
                    <b><u>បញ្ចូលព័ត៌មានរថយន្ត</u></b>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <form action="" method="post">
            <div class="row mt-5 fontkh">
                <div class="col h6 text-center">ម៉ាករថយន្ត</div>
                <div class="col h6 text-center">ទំហំស៊ីឡាំង</div>
                <div class="col h6 text-center">ចំនួនស៊ីឡាំង</div>
                <div class="col h6 text-center">កម្លាំងសេះ</div>
                <div class="col h6 text-center">បណ្តោយ</div>
                <div class="col h6 text-center">ទទឹង</div>
                <div class="col h6 text-center">កម្ពស់</div>
                <div class="col h6 text-center">ទម្ងន់យាន្ត</div>
                <div class="col h6 text-center">ទម្ងន់ផ្ទុក</div>
                <div class="col h6 text-center">ចំនួនកៅអី</div>
                <div class="col h6 text-center">ចំនួនភ្លៅ</div>
                <div class="col h6 text-center"> ឆ្នាំផលិត</div>
                <div class="col h6 text-center">ឥន្ទនៈ</div>
            </div>

            <div class="row">
                <div class="col"><input value="<?php echo $mark; ?>" class="form-control" required name="mark" type="text"></div>
                <div class="col"><input value="<?php echo $cc; ?>" class="form-control" required name="cc" type="text"></div>
                <div class="col"><input value="<?php echo $ncy; ?>" class="form-control" required name="ncylin" type="text"></div>
                <div class="col"><input value="<?php echo $hp; ?>" class="form-control" required name="hp" type="text"></div>
                <div class="col"><input value="<?php echo $length; ?>" class="form-control" required name="length" type="text"></div>
                <div class="col"><input value="<?php echo $width; ?>" class="form-control" required name="width" type="text"></div>
                <div class="col"><input value="<?php echo $height; ?>" class="form-control" required name="height" type="text"></div>
                <div class="col"><input value="<?php echo $kerb; ?>" class="form-control" required name="kerb" type="text"></div>
                <div class="col"><input value="<?php echo $load; ?>" class="form-control" required name="load" type="text"></div>
                <div class="col"><input value="<?php echo $seat; ?>" class="form-control" required name="seat" type="text"></div>
                <div class="col"><input value="<?php echo $ax; ?>" class="form-control" required name="ax" type="text"></div>
                <div class="col"><input value="<?php echo $year; ?>" class="form-control" required name="year" type="text"></div>
                <div class="col">
                    <select class="form-select fontkh" name="fualt">
                        <option class="bg-secondary text-white" value="<?php echo $fu; ?>"><?php echo $fu; ?></option>
                        <option class="bg-primary"></option>
                        <option value="សាំង">សាំង</option>
                        <option value="សាំង-អាគុយ">សាំង-អាគុយ</option>
                        <option value="ម៉ាស៊ូត">ម៉ាស៊ូត</option>
                        <option value="អគ្គីសនី">អគ្គីសនី</option>
                        <option value="ហ្កាស់">ហ្កាស់</option>
                    </select>
                </div>
            </div>
            <div class="row fontkh">
                <div class="col mt-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger" type="reset"><i class="bi bi-x-circle"></i> បោះបង់</button>
                    <button class="btn btn-success" type="submit" name="sub1"><i class="bi bi-box-arrow-down"></i> កែសម្រួល</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>