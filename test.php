<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>

</head>
<body>
    <form method="post">
        <input type="date" name="gdate" id="gdate" onchange="<?php echo $_SERVER['PHP_SELF'] ?>"/>
    </form>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        function makeAjaxRequest(dateval) {
            $.ajax({
                type: "GET",
                data: {dateva: dateval},
                url: "fetchbills.php",
                success: function (data) {
                    $('#showresult').html(data);
                    $('#det').on("click", function () {
                        var no = $(this).val();
                        makeAjaxRequest2(no);
                    });
                }
            });
        }
        
        $("#gdate").on("change", function () {
            var id = $(this).val();
            makeAjaxRequest(id);

        });
    </script>
    <div id="showresult">

    </div>
</body>
</html>