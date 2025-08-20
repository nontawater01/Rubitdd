<?php
include("condb.php");
if (isset($_GET['shikigamiid'])) {
  $id = $_GET['shikigamiid'];

  $sql = "SELECT * FROM shikigami WHERE shiki_id = '$id'";
  $query = mysqli_query($condb, $sql);
  $fetch = mysqli_fetch_array($query);

  $sql2 = "SELECT * FROM skill WHERE shiki_id = '$id'";
  $query2 = mysqli_query($condb, $sql2);
  $fetch2 = mysqli_fetch_array($query2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>




  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">


</head>

<body>


  <div class="topnav fixed-top" style="font-family: 'Itim', cursive;">
    <a class="active" href="index.php">หน้าหลัก</a>


    <!--  <a  style=" cursor: pointer;" onclick="perM()"><i class="fas fa-user-alt"></i> </a> -->
    <a style=" cursor: pointer; color: white;" onclick="contactUs()"><i class="fas fa-address-card"></i> สนับสนุนช่อง</a>
    <a style=" cursor: pointer; color: white;" onclick="info()"><i class="fas fa-info"></i> เกี่ยวกับ</a>
    <!-- <a  style=" cursor: pointer; color: white;  float: right; " href="addsk.php" ></i>เพิ่ม</a> -->

    <a style=" cursor: pointer; color: white;  float: right; " href="login.php">Addmin</a>
    <a style=" cursor: pointer; color: white;  float: right; " href="">ข่าวลับ</a>





  </div>

  <script src="js/js.js"></script>


  <!---->














  <div id="contactModal" class="contactModal">
    <div class="contactmodal-content">
      <span class="contactClose">&times;</span>
      <h3 align="center"><i class="fa fa-comment"></i> สนับสนุนช่อง</h3>
      <div class="contactForm ">

        <h4>นนทวัฒน์ จังพินิจกุล</h4>
        <h4 class="text-success">ธนาคารกสิกรไทย &nbsp;&nbsp;&nbsp;&nbsp;</h4>
        <h4>2842792196 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
        <h4 class="text-danger">True wallet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
        <h4>0966940900 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
        <h4>ขอบคุณครับ 🙏 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4>
      </div>
    </div>
  </div>





  <div id="infoModal" class="infoModal">
    <div class="infomodal-content">
      <span class="infoClose">&times;</span>
      <h3 align="center"><i class="fa fa-comment"></i> เกี่ยวกับ</h3>
      <div class="infoForm">
        <div style="text-align: center;   font-size: 20px;
             line-height: 45px;">YouTube <a href="https://www.youtube.com/@Rubitdd">Rubitdd</a></div>
      </div>
    </div>
  </div>




  <br>
  <br>

  <!--ตัวละคร -->


  <?php if (isset($_GET['shikigamiid'])) { ?>
    <br>
    <div class="text-center  " style="font-family: 'Itim', cursive;">
      <div class="text-center  ">
        <img width="600px" height="300px" src="img/siki/<?php echo $fetch['shiki_img1']; ?>" class="rounded">
      </div>
      <h3 style="text-align: center; margin: 20px 0; "><?php echo $fetch['shiki_name']; ?></h3>
      <!-- <div  class="container"> -->



      <!-- สกิล -->
      <div class="container border border-1 position-static">
        <div class="row  ">
          <div class="col ">
            <div class="container">
              <p></p>
              <img src="img/siki/<?php echo $fetch2['skill_img1']; ?>">
            </div>
            <p>สกิล1</p>
            <div style="width:100%; ;" class="border-top ">
              <p></p>
              <p> <?php echo $fetch2['skill_dt1']; ?> </p>
              <div style="width:100%; text-align:left;" class="border-top ">
                <p></p>
                <p> <?php echo $fetch2['skill_dt12']; ?> </p>
              </div>
              <div style="width:100%; text-align:left;" class="border-top ">
                <p></p>
                <p> <?php echo $fetch2['skill_dt13']; ?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container border border-1 position-static">
        <div class="row  ">
          <div class="col ">
            <div class="container">
              <p></p>
              <img src="img/siki/<?php echo $fetch2['skill_img2']; ?>">
            </div>
            <p>สกิล2</p>
            <div style="width:100%; ;" class="border-top ">
              <p></p>
              <p> <?php echo $fetch2['skill_dt2']; ?> </p>
              <div style="width:100%; text-align:left;" class="border-top ">
                <p></p>
                <p> <?php echo $fetch2['skill_dt22']; ?> </p>
              </div>
              <div style="width:100%; text-align:left;" class="border-top ">
                <p></p>
                <p> <?php echo $fetch2['skill_dt23']; ?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container border border-1 position-static">
        <div class="row  ">
          <div class="col ">
            <div class="container">
              <p></p>
              <img src="img/siki/<?php echo $fetch2['skill_img3']; ?>">
            </div>
            <p>สกิล3</p>
            <div style="width:100%; ;" class="border-top ">
              <p></p>
              <p> <?php echo $fetch2['skill_dt3']; ?> </p>
              <div style="width:100%; text-align:left;" class="border-top ">
                <p></p>
                <p> <?php echo $fetch2['skill_dt32']; ?> </p>
              </div>
              <div style="width:100%; text-align:left;" class="border-top ">
                <p></p>
                <p> <?php echo $fetch2['skill_dt33']; ?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ปิดสกิล -->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    <?php } else { ?>

      <br><br>

      <!--ตาราง -->

      <div class="container" style="font-family: 'Itim', cursive;">

        <table class="table table-bordered">


          <tr class="table-primary">
            <!-- <th class="col-1">
      ตัวละคร
    </th> -->
            <!--
    <th class="col-1" style="  text-align: center;"  >
     <a href="" >ข่าวอัพเดท</a>
    </th>
  </tr>
</table>
</div>
 -->




            <div class="container" style="font-family: 'Itim', cursive;">
              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th style="text-align: center;" class="col-1 ">ตัวละคร</th>
                    <th style="text-align: center;">ชื่อ</th>
                    <th style="text-align: center;" data-sort-type="text" class="col-1">ระดับ</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $sql3 = "SELECT * FROM shikigami";
                  $query3 = mysqli_query($condb, $sql3);
                  while ($fetch3 = mysqli_fetch_array($query3)) {
                  ?>
                    <tr>
                      <td align="center" style="vertical-align: middle;"> <img src="img/siki/<?php echo $fetch3['shiki_img2']; ?>" class="rounded"></td>
                      <td align="center" style="vertical-align: middle;"><a href="?shikigamiid=<?php echo $fetch3['shiki_id']; ?>"><?php echo $fetch3['shiki_name']; ?></a> </td>
                      <td align="center" style="vertical-align: middle;"> <img src="img/siki/<?php echo $fetch3['shiki_img3']; ?>"></td>
                    </tr>


                  <?php } ?>
                  <tr>
                </tbody>

              </table>
            </div>
            <br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br>
            <script src="js/js.js"></script>
            <!--<footer class="footer" > <marquee direction="left">&copy; Rubitdd</marquee></footer> -->
          <?php } ?>
</body>

</html>
