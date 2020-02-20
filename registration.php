<form method="post" id="register-form">
    <div class="row">
        <div class="col-md-3">Имя: </div>
        <div class="col-md-3"><input type="text" id="first_name" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-3">Фамилия: </div>
        <div class="col-md-3"><input type="text" id="surname" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-3">Телефон: </div>
        <div class="col-md-3"><input type="tel" id="login" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Пароль
            (не менее 6 символов; в пароле должна быть хотя бы одна заглавная и одна строчная буква и один спецсимвол):
        </div>
        <div class="col-md-3"><input type="password" id="pass" class="form-control"></div>
    </div>

    <button id="registration-go">Зарегистрироваться</button>
</form>

<script>
    $("#registration-go").click(function ()
    {
        $.ajax("http://urmxrpcd-m2.wsr.ru/posts_search", {
            type: "post",
            data: $("#register-form").serialize()
        }).done(function (json)
        {
            if (typeof json.id == "undefined")
            {
                for (let key in json)
                {
                    let el = $("#" + key);
                    el.addClass("warning");
                    el.keyup(function ()
                    {
                        el.removeClass("warning");
                    });
                }
            }
        });

        return false;
    });
</script>