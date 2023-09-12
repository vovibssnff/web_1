const yField = document.getElementById("y_field");

yField.addEventListener("input", (event) => {
    const yValue = parseInt(yField.value);
    console.log("Y is " + yValue);
    if (isNaN(yValue)||yValue.toString()==="") {
        yField.setCustomValidity("Y must be a valid number");
    } else {
        if (yValue<-3||yValue>5) {
            yField.setCustomValidity("Y value should be in range [-3, 5]")
        } else {
            yField.setCustomValidity("");
        }
    }
});

$(document).ready(function() {
    $('#form').submit(function(event) {
        const t0 = performance.now();
        event.preventDefault(); // Prevent the default form submission

        var x = $('.checkbox-group.x-checkbox:checked').val();
        var y = $('#y_field').val();
        var r = $('.checkbox-group.r-checkbox:checked').val();

        $.get('check.php', { val_x: x, val_y: y, val_r: r }, function (data)  {
            // Process the response data (e.g., new rows for the table)
            const t1 = performance.now();
            var now = new Date();
            var execution_time = t1-t0;
            var newData = { x: x, y: y, r: r, time: now, execution_time: execution_time, result: data };
            var newRow = '<tr>' +
                '<td>' + newData.x + '</td>' +
                '<td>' + newData.y + '</td>' +
                '<td>' + newData.r + '</td>' +
                '<td>' + newData.time + '</td>' +
                '<td>' + newData.execution_time + '</td>' +
                '<td>' + newData.result + '</td>' +
            '</tr>';
            $('#result-table tbody').append(newRow);
        });
    });
});
