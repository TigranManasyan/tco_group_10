jQuery(document).ready(function($) {
    let page = 1;
    let printPagination = dataPages => {
        for(let i = 1; i <= dataPages; i++) {
            $('.pagination').append(`<a href="#">${i}</a>`);
        }
        $('.pagination>a').eq(0).addClass('active');

        $('.pagination>a').on("click", function(e) {
            e.preventDefault();
            page = $(this).text();
            $('.pagination>a').removeClass('active');
            $(this).addClass('active');
            $.ajax({
                url:'server.php',
                method:'get',
                dataType:'json',
                data:{page},
                success:function(data) {
                    printCategories(data)
                }
            });
        })
    }

    let printCategories = dataCategories => {
        if(dataCategories.length>0) {
            let row = '';
            dataCategories.forEach( (item, index) => {
                row += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.name}</td>
                    </tr>
                `;
            });

            $("#result").html(row);
        }
    }


    $.ajax({
        url:'pagination.php',
        method:'get',
        success:function(data) {
            printPagination(data)
        }
    });

    $.ajax({
        url:'server.php',
        method:'get',
        dataType:'json',
        data:{page},
        success:function(data) {
            printCategories(data)
        }
    });

    $(".page_lenght").on("click", function(){
        $.ajax({
            url:'server.php',
            type: 'POST',
            data:  { "count_of_pages" : $('#pages').val()}

        })
    })


});
