jQuery(document).ready(function($){

    let printTable = (dataTable) => {
        if(dataTable.length > 0) {
            let row = '';
            dataTable.forEach((item, index) => {
                row += `
                    <tr>
                        <td>${ index + 1 }</td>
                        <td class="book-name" contenteditable>${ item.name }</td>
                        <td class="book-author" contenteditable>${ item.author }</td>
                        <td>
                            <button data-id="${item.id}" class="btn edit-row btn-success">Edit</button>
                            <button data-id="${item.id}" class="btn delete-row btn-danger">Remove</button>
                        </td>
                    </tr>
                `;
            });
            $("#result").html(row);
        }

        $('.delete-row').on("click", function() {
            let row_id = $(this).attr("data-id");
            $.ajax({
                url:'./../server/app/routes/web.php',
                method:'get',
                data:{ row_id, action:'delete'},
                dataType:'json',
                success:function(data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        });

        $('.edit-row').on("click", function() {
            let row_id = $(this).attr("data-id");
            let name = $(this).parents("tr").find(".book-name").text();
            let author = $(this).parents("tr").find(".book-author").text();
            $.ajax({
                url:'./../server/app/routes/web.php',
                method:'get',
                data:{ row_id, name, author, action:'update'},
                dataType:'json',
                success:function(data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        })
    }

    $.ajax({
        url:'./../server/app/routes/web.php',
        method:'get',
        data:{ action:'all-books'},
        dataType:'json',
        success:function(data) {
            console.log(data)
            printTable(data.data)
        }
    });


    $("#search-input").on("input", function(){
        let search_value = $("#search-input").val();
        $.ajax({
            url:'./../server/app/routes/web.php',
            method:'get',
            data:{ search_value, action:'filter' },
            dataType:'json',
            success:function(data) {
                printTable(data.data)
            }
        });
    })



    $("#create-book").on("click", function() {
        let name = $("#name").val();
        let author = $("#author").val();
        $.ajax({
            url:'./../server/app/routes/web.php',
            method:'post',
            data:{ name, author, action:'create' },
            dataType:'json',
            success:function(data) {
                alert(data.msg);
                location.reload();
            }
        });
    })
})