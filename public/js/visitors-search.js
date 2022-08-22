function search(ev)
{
    let base_url = $('meta[name="site_url"]').attr("content");
    let value=$("#keyword").val();
    
    $.get(base_url+"/staff/load-search", {keyword:value }, function (data,status,error) {
        if (data) {

            $(" #details").html(data);
            $('.user-table').DataTable();
        } else {
            $("#details").html(error);
        }
    });
   ev.preventDefault();
}

$("body").on("click", "#search-log", search);