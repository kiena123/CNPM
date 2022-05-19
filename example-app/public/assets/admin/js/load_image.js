$(document).ready(function(){
    // $("#fileToAvatar").attr("files",'http://localhost/Danhba/images/default.png').fadeIn();
    // console.log($('#ThongTin').serializeArray());
    // valueForm = $('#ThongTin').serializeArray();
    // console.log(valueForm["txtuserid"])
    $("#ImageProduct").change(function(e){
        $("#avatar").attr("src","../images/" + e.target.files[0].name).fadeIn();
    });

    $("#submit").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "./process/process.php",
            type: "POST",
            // data: new FormData(this),
            // beforeSend: function(e){
               
            // },
            success: function(dt){
                if(dt == "ThanhCong"){
                    $("#ThongBao").html("File đã tải về").fadeIn();
                }else if (dt == "FileFalse"){
                    // $("#ThongBao").html("Ảnh không hợp lệ. Vui lòng chọn file khác").fadeIn();
                    alert("Ảnh không hợp lệ. Vui lòng chọn file khác");
                }else if(dt == "ThatBai"){
                    $("#ThongBao").html("File không thể tải file hoặc file đã tồn tại").fadeIn();
                }
            },
            // error:function(e){
            //     if(e == "FileFalse"){
                    
            //     }
            // }
        })
    })
    */
});