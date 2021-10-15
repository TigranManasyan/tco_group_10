jQuery(document).ready(function($) {

    $('.delete').on("click", function() {
        $.ajax({
            url:'crud.php',
            method:'post',
            dataType:'json',
            success:function(data) {
                alert(data.msg);
                location.reload();
            }
        });
    });
})