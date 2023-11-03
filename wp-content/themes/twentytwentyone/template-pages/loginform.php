<?php /* Template Name:Login*/?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .body-content{
     margin: auto 0;
      }
    </style>
  </head>
  <body>
<div class="body-content">
    <div id="form-outer">
        <div id="frm-contact">
          <form action="">
            <div>
                <input type="text" name="userName" id="userName"
                    class="demoInputBox" PlaceHolder="Name">
            </div>
            <div>
                <input type="text" name="userEmail" id="userEmail"
                    class="demoInputBox" PlaceHolder="Email">
            </div>
            <div>
                <input type="text" name="subject" id="subject"
                    class="demoInputBox" PlaceHolder="Subject">
            </div>
            <div>
                <textarea name="content" id="content"
                    class="demoInputBox" rows="3" PlaceHolder="Content"></textarea>
            </div>
            <div id="mail-status">
                <button name="submit" class="btnAction">Send</button>
            </div>
            </form>
        </div>
        <div id="btn-contact"> Contact Me</div>
    </div>

    <div class="txt-content">
        <p>Mauris blandit orci id risus tristique, non mattis ante
            finibus. Duis volutpat tempor magna non posuere. Mauris a
            vestibulum ligula, id commodo metus. Proin hendrerit, enim
            at ullamcorper mattis, libero nisi blandit nulla, eu porta
            tortor orci vel ipsum. Curabitur ullamcorper imperdiet lorem
            nec pretium. Morbi finibus, mauris vitae feugiat euismod,
            purus magna blandit nunc, ac tincidunt mi lacus eget leo.</p>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$("#btn-contact").on("click", function() {

			if ($("#frm-contact").is(":hidden")) {
				$("#frm-contact").slideDown("slow");
			} else {
				$("#frm-contact").slideUp("slow");
			}
		});

	});

	function validateContact() {
		var valid = true;
		$(".demoInputBox").css('background-color', '');

		if (!$("#userName").val()) {
			$("#userName").css('background-color', '#f7dddd');
			valid = false;
		}
		if (!$("#userEmail").val()) {
			$("#userEmail").css('background-color', '#f7dddd');
			valid = false;
		}
		if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
			$("#userEmail").css('background-color', '#f7dddd');
			valid = false;
		}
		if (!$("#subject").val()) {
			$("#subject").css('background-color', '#f7dddd');
			valid = false;
		}
		if (!$("#content").val()) {
			$("#content").css('background-color', '#f7dddd');
			valid = false;
		}

		return valid;
	}
</script>
</body>
</html>