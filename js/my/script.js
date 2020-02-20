let user;

$(document).ready(function ()
{
    let page_sw = $(".page-sw");
    let base_content = $("#content").html();

    page_sw.each(function (index, el)
    {
        el = $(el);
        el.prop("href", el.prop("href").replace("http://urmxrpcd-m3.wsr.ru", "http://urmxrpcd-m2.wsr.ru"));
    });

    $("#posts").click(function ()
    {
        $.ajax({
            url: $(this).prop("href"),
            type: "get"
        }).done(function (json)
        {
            $("#content").html(json.toString());
        }).error(function (json)
        {
            $("#content").html(json.toString());
        });

        return false;
    });

    $("#main").click(function ()
    {
        $("#content").html(base_content);

        return false;
    });

    $("#reg").click(function ()
    {
        $.ajax("registration.php")
            .done(function (html)
            {
                $("#content").html(html);
            });

        return false;
    });

    $("#login").click(function ()
    {
        $.ajax("login.php")
            .done(function (html)
            {
                $("#content").html(html);
            });

        return false;
    });
});