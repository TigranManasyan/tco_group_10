$(document).ready(function () {
    $("welcome").append(function (){
        let name = '';
        $.ajax({
            url: './../controller/login.php',
            method: 'POST',
            data: {name: name},
            success:function (data){
                alert(data);
            }
        })
        }
    )
})