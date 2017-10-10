<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

</head>
<body>
<div data-role="page" data-theme="a" id="demo-page" class="my-page" data-url="demo-page">
  <div data-role="header">
    <h1>Tawaiforhealth</h1>
      <a href="grid-listview.html" data-shadow="false" data-iconshadow="false" data-icon="arrow-l" data-iconpos="" data-rel="back" data-ajax="false">กลับ</a>
  </div><!-- /header --> 
  <center><h3>รายงานอาการไม่พึงประสงค์</h3></center>
       <hr>
     <h5>ร้ายแรง</h5>
  <div data-role="content">
    <div class="container">  
         <p>ชนิดของผลิตภัณฑ์:</p>
         <form>
          <div class="form-group">
             <label for="test"></label>
             <select class="form-controt" id="test">
                <option>ยา/วัตถุออกฤทธิ์เสพติด</option>
                <option>ยาสมุนไพร</option><option>อาหาร/ผลิตภัณฑ์เสริมอาหาร</option><option>เครื่องสำอาง</option>
                <option>เครื่องมือแพทย์</option><option>วัตถุอันตรายด้านสาธารณสุข</option>            
             </select>
          </div>
        </form>
    </div><br><hr><br> 
      <div class="container">  
         <p>ชื่อผลิตภัณฑ์:</p>
         <form>
          <div class="form-group">
             <label for="test"></label>
             <select class="form-controt" id="test">
                <option>เลือก</option>
                <option>ทราบชื่อ</option><option>ไม่ทราบชื่อ</option>            
             </select>
          </div>
        </form>
    </div><br><hr><br> 
    <div class="container">
        <label for="id">สถานที่ผลิตภัณฑ์:</label>
        <input type="text" class="container" id="id">
    </div><br><hr><br>
    <div class="container">
        <label for="id">วันที่เริ่มใช้ผลิตภัณฑ์:</label>
        <input type="text" class="container" id="id">
    </div><br><hr><br>
    <div class="container">
        <label for="id">วันที่หยุดใช้ผลิตภัณฑ์:</label>
        <input type="text" class="container" id="id">
    </div><br><hr><br>
    <button style="font-size:24px">ถัดไป<i class="fa fa-chevron-circle-right"></i></button>
  </div>
</div>
</body>
</html>