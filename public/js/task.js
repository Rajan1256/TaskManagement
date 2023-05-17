$(document).ready(function () {
    $("#select_project").on("change", function () {
        var project_id = this.value;
        $("#task-data").html("");
        $.ajax({
            url: "get-tasks",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id: project_id,
            },
            dataType: "json",
            success: function (result) {
                $.each(result, function (key, value) {
                    $("#task-data").append(
                        '<li id="firstrow" class="list-group-item" item-id="' +
                            value.id +
                            '">' +
                            value.task_name +
                            "</li>"
                    );
                });
            },
        });
    });

    if (user == 0) {
        $("#task-data").sortable({
            items: "li",
            cursor: "move",
            opacity: 0.6,
            update: function () {
                sendOrderToServer();
            },
        });

        function sendOrderToServer() {
            var orderposition = [];
            $("li#firstrow").each(function (index, element) {
                orderposition.push({
                    id: $(this).attr("item-id"),
                    position: index + 1,
                });
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "sorttaskdata",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: {
                    order: orderposition,
                },
                success: function (response) {
                    if (response.status == "success") {
                        console.log(response);
                    } else {
                        console.log(response);
                    }
                },
            });
        }
    }
});
