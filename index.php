<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fa/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top mb-5 ">
        <div class="container-fluid">
            <a onclick="jump('top')" href="" class="navbar-brand">ร้านอาหาร</a>
            <button class="navbar-toggler collapsed " data-bs-toggle="collapse" data-bs-target="#navbarToggle"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarToggle">
                <div class="container-fluid d-flex justify-content-end" >
                    <button class="btn btn-outline-success my-3" data-bs-target="#showForm" data-bs-toggle="modal">ดูรายการอาหาร</button>
                </div>
            </div>
        </div>
    </nav>
    <div class="modal fade bg-opacity-50 bg-secondary text-white" id="showForm">
        <div class="modal-dialog ">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มรายการอาหาร</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body container ">
                    <div  id="food_items_1 ">
                        <div class="mb-3">
                            <label for="job" class="form-label">หมวดหมู่อาหาร</label>
                            <select id="datafood" name="job" class="form-select">
                                <option disabled selected value="0">โปรเลือกหมวดหมู่</option>
                                <option  value="1">อาหารจารเดี่ยว</option>
                                <option value="2">น้ำดื่ม</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่ออาหาร</label>
                            <input id="input_1" type="text" placeholder="ชื่ออาหาร" class="form-control" value=" ">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">ราคา</label>
                            <input id="input_2" type="text" placeholder="ราคาอาหาร" class="form-control" value=" ">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">ลิงก์รูป</label>
                            <input id="input_3" type="text" placeholder="ใส่ที่อยู่รูปภาพ" class="form-control" value=" ">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div>
                        <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button id="btn_submit" type="submit" class="btn btn-success">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- อาหารจานเดียว -->
    <div class="container card border-2 border-primary bg-dark border-2 border-primary mt-4 p-4">
        <div class="card bg-dark text-white text-center">
            <h1 class="align-self-center card bg-dark text-white border-2 border-primary text-center col-md-5 col-lg-4"> อาหารจานเดียว </h1>
            <div id="div_single_dish" class=" m-4 d-flex flex-row-reverse flex-wrap-reverse justify-content-center">
                
            </div>
        </div>
    </div>
<!-- เครื่องดื่ม -->
    <div class="container card border-2 border-primary bg-dark border-2 border-primary mt-4 p-4">
        <div class="card bg-dark text-white text-center">
            <h1 class="align-self-center card bg-dark text-white border-2 border-primary text-center col-md-5 col-lg-4"> เครื่องดื่ม </h1>
            <div id="div_drins" class=" m-4 d-flex flex-row-reverse flex-wrap-reverse justify-content-center">
                    

            </div>
        </div>
    </div>
    <div class="container-fluid text-end opacity-75 fixed-bottom">
        <button style="width: 50px; height: 50px;" class="btn-dark" onclick="jump('top')">^</button>
    </div>
</body>
<script>
    function jump(h) {
        let url = location.href;
        location.href = "#" + h;
        history.replaceState(null, null, url);
    }

        
        

    $(() => {
            $("#btn_submit").click(() => {
                var dataD = $("#datafood").val();
                var dataF = $("#input_1").val();
                var dataP = $("#input_2").val();
                var dataL = $("#input_3").val();
                if (dataD == "0" || dataF == " " || dataP == " " || dataL == " " ) {
                    alert("โปรดกรอกข้อมูลให้ครบ");
                }
                else {
                    var op = $('#datafood').val();
                    if (op == "1") {
                        var obj_1 = $.parseJSON(`{ 
                        "single_dish": {
                            "food_name": "${$("#input_1").val()}", 
                            "price": "${$("#input_2").val()}", 
                            "link": "${$("#input_3").val()}"
                            }
                        }`)
                        let x = obj_1;
                        console.log(obj_1);
                        Posts_1(x)
                    }
                    else{
                        var obj_2 = $.parseJSON(`{ 
                        "drins": {
                            "drins_name": "${$("#input_1").val()}", 
                            "price": "${$("#input_2").val()}", 
                            "link": "${$("#input_3").val()}"
                            }
                        }`)
                        let y = obj_2;
                        console.log(obj_2);
                        Posts_2(y)
                        }
                    }
                })
            })
    let i = 1;
    function del_1_(i){
        $("#btndel_"+i).remove();
    }
    function Posts_1(x) {
        var datamenu = x
            var line = "<div id='btndel_"+i+"' class='card bg-dark text-white border-2 border-primary text-center p-4 m-2 col-md-5 col-lg-4'>"
                line += "<div class='w-100 h-100' >"
                line += "<img  src='"+ datamenu.single_dish.link +"' alt='' width='100%' height='100%'>"
                line += "</div>"
                line += "<div>"
                line += " <h5 class='mt-4'>"+ datamenu.single_dish.food_name +"</h5>"
                line += "<p> ราคา : "+ datamenu.single_dish.price +" บาท </p>"
                line += "<button class='btn btn-outline-danger my-3' onClick='del_1_("+ i +");''>ลบรายการอาหาร</button>"
                line += "</div>"
                line += "</div>"
                $("#div_single_dish").append(line);
                i++;
    }
    let j = 1;
    function del_2_(j){
        $("#btndel_"+j).remove();
    }
    function Posts_2(y) {
        var datamenu = y;
            var line = "<div id='btndel_"+j+"' class='card bg-dark text-white border-2 border-primary text-center p-4 m-2 col-md-5 col-lg-4'>"
                line += "<div class='w-100 h-100' >"
                line += "<img  src='"+ datamenu.drins.link +"' alt='' width='100%' height='100%'>"
                line += "</div>"
                line += "<div>"
                line += " <h5 class='mt-4'>"+ datamenu.drins.drins_name+"</h5>"
                line += "<p> ราคา : "+ datamenu.drins.price +" บาท </p>"
                line += "<button class='btn btn-outline-danger my-3' onClick='del_2_("+ j +");''>ลบรายการอาหาร</button>"
                line += "</div>"
                line += "</div>"
                $("#div_drins").append(line);
                j++;
    }
    
</script>
</html>
