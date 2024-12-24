<!DOCTYPE html>
<html lang="en">
<head><!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

<style>
        body {
        font-family: "Itim", serif;
        font-weight: 400;
        font-style: normal;
        margin-top: 250;
        margin-left: 250;
        margin-right: 250;
        margin=bottom: 250;

    }

    </style>        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม Bootstrap เเละ เขียนโปรเเกรมกับเงื่อนไข</title>

    
        
</head>

<body>
    <h1>โปรเเกรมคำนวณเเละเงื่อนไข<h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">คะเเนนกลางภาค</label>
    <div class="col-sm-10">
      <input type="text" class="form-contro2" id="inputEmail3"
      name=score1>
      <label for="inputPassword3" class="col-sm-2 col-form-label">คะเเนน</label>
      <div class="col-sm-10">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">คะเเนนปลายภาค</label>
    <div class="col-sm-10">
      <input type="text" class="form-contro2" id="inputPassword3"
      name=score2>
      <label for="inputPassword3" class="col-sm-2 col-form-label">คะเเนน</label>
      <div class="col-sm-10">
    </div>
  </div>
  
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">คะเเนนรวม</button>
  <button type="submit" class="btn btn-primary">ยกเลิก</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1=$_POST['score1'];
    $s2=$_POST['score2'];
    $sum=$s1+$s2;
    echo "<br><br> <h3>คุณได้คะเเนนรวมเท่ากับ ".$sum."</h3> <br><br>";
    if ($sum>= "50") {
        echo "<h1>ยินดีด้วยคุณสอบผ่าน</h1><br>";
      } else {
        echo "<h1>เสียใจด้วยคุณสอบตก</h1><br>";
      }
    echo "<div class='alert alert-success'>
            <strong>คำนวณเสร็จเเล้ว!</strong> ผลคะเเนนที่ได้ดังนี้</div>";
}
?>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>