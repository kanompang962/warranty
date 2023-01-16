<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
    <div class="container">
        <main>
            
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <!--  -->
                </div>
                <div class="col-md-7 col-lg-8">
                    <!-- from 1 -->
                    <br/>
                    <h4 class="mb-3">ส่วนที่ 1: ข้อมูลส่วนตัวของผู้ซื้อสินค้า</h4>
                    <form class="" id="insert-form" method="post" action="">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="name" class="form-label">ชื่อ และนามสกุลผู้ซื้อ</label>
                                <input type="name" class="form-control" id="name" name="name" value="" required="">

                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">

                            </div>

                            <div class="col-12">
                                <label for="age" class="form-label">อายุ</label>
                                <input type="number" class="form-control" id="age" required="" name="age">

                            </div>

                            <div class="col-12">
                                <label for="phone" class="form-label">หมายเลขโทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" required="" name="phone">

                            </div>

                            <div class="col-12">
                                <label for="line" class="form-label">Line ID</label>
                                <input type="text" class="form-control" id="line" name="line">

                            </div>
                            <!-- gender radio -->
                            <h4 class="mb-3">เพศ</h4>
                            <div class="my-3">
                                <div class="form-check">
                                    <input id="men" name="gender" type="radio" class="form-check-input" checked="" value="Male" required="">
                                    <label class="form-check-label" for="man">ผู้ชาย</label>
                                </div>
                                <div class="form-check">
                                    <input id="female" name="gender" type="radio" class="form-check-input" value="Female" required="">
                                    <label class="form-check-label" for="feman">ผู้หญิง</label>
                                </div>
                            </div>
                            <!-- job radio -->
                            <h4 class="mb-3">อาชีพ</h4>
                            <div class="my-3">
                                <div class="form-check">
                                    <input id="official" name="job" type="radio" class="form-check-input" checked="" value="official" required="">
                                    <label class="form-check-label" for="official">ข้าราชการ / ทหาร / ตำรวจ</label>
                                </div>
                                <div class="form-check">
                                    <input id="employee" name="job" type="radio" class="form-check-input" value="employee" required="">
                                    <label class="form-check-label" for="employee">พนักงานเอกชน</label>
                                </div>
                                <div class="form-check">
                                    <input id="student" name="job" type="radio" class="form-check-input" value="student" required="">
                                    <label class="form-check-label" for="student">นักเรียน / นักศึกษา</label>
                                </div>
                                <div class="form-check">
                                    <input id="contractor" name="job" type="radio" class="form-check-input" value="contractor" required="">
                                    <label class="form-check-label" for="contractor">ผู้รับเหมาก่อสร้าง</label>
                                </div>
                                <div class="form-check">
                                    <input id="business" name="job" type="radio" class="form-check-input" value="business" required="">
                                    <label class="form-check-label" for="business">เจ้าของธุรกิจ / เจ้าของโรงงาน / ธุรกิจส่วนตัว</label>
                                </div>
                                <div class="form-check">
                                    <input id="farmer" name="job" type="radio" class="form-check-input" value="farmer" required="">
                                    <label class="form-check-label" for="farmer">เกษตรกร / ฟาร์มเลี้ยงสัตว์</label>
                                </div>
                            </div>
                            <button class="w-100 btn btn-primary btn-lg" type="submit" id="next1" name="next1">next</button>
                            <!-- Pagination -->
                            <div id="paginations">
                                
                            </div>
                    </form>
                    <!-- end form 1 -->
                </div>
            </div>
        </main>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2022 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    </script>

</body>

</html>

<script>
    $(document).ready(function() {
            $('#insert-form').on('submit', function(e) {
                e.preventDefault();
                var formp1 = new FormData($('#insert-form')[0]);
                $.ajax({
                    url: "ajax/ajaxwrt.php?a=page1", //แก้ บรรทัดนี้ทุกครั้ง  URL ajax เอง
                    type: "POST",
                     data: formp1,
                     processData: false,
                     contentType: false,
                    // data:{
                    //     ukey: $('#age').val(),
                    // },
                    beforeSend: function(){
                        $('#next1').val('insert...');
                    },
                    success: function(data){
                        $('#insert-form')[0].reset();
                        if (data) {
                            window.location.href = 'page_2.php';
                        }
                    }
                })
            });
         }

    );
</script>