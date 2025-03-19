<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name = "introduction" content = "no-reference">
<title>Aviator</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    html, body { margin: 0; height: 100%; background: #fff; font-family: 'Times New Roman', Times, serif; font-size: 15px; font-weight: 400; color: #333; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; text-rendering: optimizeLegibility; text-shadow: rgba(0,0,0,.01) 0 0 1px; }
    :root { --serif-fonts: 'Roboto', sans-serif; }
    .container { width: 100%; max-width: 1100px; padding: 15px 17px 75px; }

    .header { width: 100%; height: 46px; font-size: 18px; font-weight: 600; color: #292416; text-align: center; line-height: 46px; position: relative; }
    .header .left-arrow { font-size: 20px; position: absolute; left: 15px; }

    .invitation-block { width: 100%; height: fit-content; background: #423b24; box-shadow: 0 0.4rem 1.6rem -0.4rem rgba(0,0,0,.2); border-radius: 10px; padding: 25px 17px 17px; margin-bottom: 15px; }
    .invitation-block .small-txt { font-family: 'Roboto', sans-serif;; font-size: 15px; font-weight: 400; color: rgba(255,255,255,0.5); text-align: center; margin-bottom: 3px; }
    .invitation-block .title { font-size: 20px; font-weight: 400; color: #ffd631; text-align: center; margin-bottom: 10px; }
    .invitation-block .code-lg { width: 100%; height: 55px; background: #292416; border-radius: 5px; margin-bottom: 10px; line-height: 55px; text-align: center; }
    .invitation-block .code-lg p { font-size: 20px; font-weight: 400; color: #ffd631; }
    .invitation-block .code-lg p span { font-size: 24px; font-weight: 600; color: #fff; }
    .invitation-block .copy-block { width: 100%; height: 60px; background: #292416; border-radius: 5px; padding: 2px; display: flex; flex-direction: row; align-items: center; justify-content: start; flex-wrap: wrap; margin-bottom: 15px; }
    .invitation-block .copy-block .code-sm { width: calc(100% - 80px); padding: 10px; font-size: 13.5px; line-height: 16px; font-weight: 400; color: #d7d7d7; padding-right: 10px; word-break: break-all; }
    .invitation-block .copy-block .copy-btn { width: 72px; height: 36px; background: #ffc108; font-size: 20px; font-weight: 400; line-height: 36px; text-align: center; color: #333841; border-radius: 4px; margin-right: 8px; }

    .cebter-ad { width: 100%; height: auto; border-radius: 10px; overflow: hidden; }
</style>

</head>

<body>
    <div class="header">
        <div class="left-arrow" onclick="history.back()"><i class="bi bi-chevron-left"></i></div>
        Refferal Link
    </div>
    <br/>
    <div style="padding: 5px;">
        <div class="invitation-block">
            <div class="small-txt">*The invitee will get ₹20 reward</div>
            <div class="title">My Refferal Link</div>
            <div class="copy-block">
                <div class="code-sm">{{ url('register') }}?refer={{ user('id') }}</div>
                <input id="link"  type="hidden" value="{{ url('register') }}?refer={{ user('id') }}">
                <div class="copy-btn button-addon2">Copy</div>
            </div>
            <div class="small-txt text-left">Aviator s rules and regulations prohibit multiple accounts. You may be blocked if you are used multiple accounts or conduct suspicious activities</div>
        </div>
        <div class="cebter-ad"><img src="{{ url('') }}/assets/images/refferal-ad.png" class="w-100"></div>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>


        $(".button-addon2").on('click', function() {

            var target = $("#link");

            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(target.val()).select();
            document.execCommand("copy");
            $temp.remove();

            alert('Copy')

        });
        $(".button-addon3").on('click', function() {
            var target = $("#link1");

            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(target.val()).select();
            document.execCommand("copy");
            $temp.remove();

            $(".button-addon3").text('Copied');
            window.setTimeout(function() {
                $(".button-addon3").text('Copy Link');
            }, 2000);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
