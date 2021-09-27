jQuery(document).ready(function($) {
    let printTable = dataTable => {
        if(dataTable.length > 0) {
            let row = '';
            dataTable.forEach( (item, index) => {
                row += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.fullname}</td>
                        <td>${item.age}</td>
                        <td>${item.email}</td>
                        <td>${item.password}</td>
                    </tr>
                `;
            });
            $("#data").html(row);
        }
    }

    $.ajax({
        url:'./server/select.php',
        method:'get',
        dataType:'json',
        success:function (data_response) {
            // console.log(JSON.parse(data_response));
            console.log(data_response);
            printTable(data_response);
        }
    });
})