$(document).ready(function () {
    $("welcome").append(function (){
        let name = $("#name").val();
        $.ajax({
            url: './../../controller/login.php',
            method: 'POST',
            data: {name: name},
            success:function (data){
                alert(data);
            }
        })
        }
    )
})