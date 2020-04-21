var jsonData = [{
        log_time: "2015-12-27 09:42:21",
        user_name: "Me",
        class_name: "login",
        class_function: "authentication",
        action_title: "User login",
        action_description: "I am logged in"
    },
    {
        log_time: "2015-12-27 09:42:21",
        user_name: "me",
        class_name: "dashboard",
        class_function: "index",
        action_title: "Admin dashboard",
        action_description: "I am logged in"
    }
];

var myTable = $("#logs").DataTable({

    paging: true,
    lengthChange: true,
    searching: false,
    ordering: true,
    info: true,
    autoWidth: true,
    data: [],
    columns: [{
            title: "Ticket #",
            data: "id"
        },
        {
            title: "Issue Title",
            data: "title"
        },
        {
            title: "Asset",
            data: "asset.name"
        },
        {
            title: "Reported By",
            data: "reportedBy.name"
        },
        {
            title: "Assigned To",
            data: "assignedTo.name"
        },
        {
            title: "Actions",
            data: "action_description"
        }
    ]
});

$(document).ready(function() {
    $("#getResults").click(function() {
        $.ajax({
            url: "/data/asset-view.json",
            data: {
                json: JSON.stringify(jsonData)
            },
            type: "GET",
            timeout: 30000,
            dataType: "json", // "xml", "json"
            success: function(object) {
                myTable.clear();
                $.each(object.issues.open, function(index, value) {
                    myTable.row.add(value);
                });
                myTable.draw();
            },
            error: function(jqXHR, textStatus, ex) {
                alert(textStatus + "," + ex + "," + jqXHR.responseText);
            }
        });
    });
});