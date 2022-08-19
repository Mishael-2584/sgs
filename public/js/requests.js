function search(ev)
{
    let base_url = $('meta[name="site_url"]').attr("content");
    let meterid = $('#meterid').val();
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: base_url + "/admin/meters/search",
        method: "POST",
        data: { meterid: meterid },
        beforeSend: function () {
           $('#meter_data').html('<p class="text-info">Searching ...</p>');
        },
        success: function (data, status, error) {
            if(data.status==false)
            {
                $('#meter_data').html('<strong class="text-danger">'+data.message+'</strong>');
            }
            else{
                $('#meter_data').html(data.message);
            }
        },
    });
    ev.preventDefault();
}

function withdraw_meter(ev)
{
    let base_url = $('meta[name="site_url"]').attr("content");
    let id = $(this).attr('value');
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: base_url + "/admin/users/meter/withdraw",
        method: "POST",
        data: { id: id },
        beforeSend: function () {
            if (confirm("Are you sure you want to withdraw the meter from the user?"))
                return true;
            else return false;
        },
        success: function (data, status, error) {
            if(data.status==false)
            {
                $('#meter_data').html('<strong class="text-danger">'+data.message+'</strong>');
            }
            else{
                $('#meter_data').html('<strong class="text-success">'+data.message+'</strong>');
            }
        },
    });
    ev.preventDefault();
}

/** Function to search Users without Meter Number */


function search_transfer(ev)
{
    let base_url = $('meta[name="site_url"]').attr("content");
    let meterid = $('#meter_id').val();
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: base_url + "/admin/meters/search/users",
        method: "POST",
        data: { meterid: meterid },
        beforeSend: function () {
           $('#meter_data_info').html('<p class="text-info">Searching User With Meter Id ...</p>');
        },
        success: function (data, status, error) {
            if(data.status==false)
            {
                $('#meter_data_info').html('<p class="text-danger">'+data.message+'</p>');
            }
            else{
                $('#meter_data_info').html(data.message);
            }
        },
    });
    ev.preventDefault();
}

function transfer(ev)
{
    let base_url = $('meta[name="site_url"]').attr("content");
    let token = $(this).attr('value');
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: base_url + "/admin/users/meter/transfer",
        method: "POST",
        data: { token: token },
        beforeSend: function () {
            if (confirm("Confirm Meter Transfer to user"))
                return true;
            else return false;
        },
        success: function (data, status, error) {
            if(data.status==false)
            {
                $('#warning-label').html('<strong>'+data.message+'</strong>');
            }
            else{
              window.location.reload();
            }
        },
    });
    ev.preventDefault();
}

$("body").on("click", "#search_meter", search);
$("body").on("click", "#withdraw_btn", withdraw_meter);
$("body").on("click","#search_meter_btn", search_transfer);
$("body").on("click","#transfer_btn", transfer);
