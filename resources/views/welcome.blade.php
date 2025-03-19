@extends('Layout.usergame')
@section('content')
<div class="main-container" style=" background-color: rgb(0, 35, 71);">
    <div class="collection-page d-none">
        <!--====== Slider Start ======-->
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="images/011.gif" class="w-100" /></div>
            <div class="item"><img src="images/02.jpg" class="w-100" /></div>
            <div class="item"><img src="images/03.jpg" class="w-100" /></div>
        </div>
        <!--====== Slider End ======-->
        <!--====== Game List Start ======-->
        <div class="container">
            <div class="title-bg1">
                <h2 class="fw-bold">
                    <!-- <span class="material-symbols-outlined me-2">
                        grid_view
                    </span> -->
                    Our Games
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 mb-4">
                    <div class="game-list-boxs">
                        <div class="position-relative">
                            <img src="{{ url('') }}/assets/images/play.png" class="w-100" />
                        </div>
                        <div class="px-3 mt-4 pb-2 text-center">
                            <h4 class=" mb-2">
                                @if (session()->has('userlogin'))
                                <a href="/crash" class="btn demo-btns">
                                    PLAY NOW
                                </a>
                                @else
                                <a href="#" class="btn demo-btns" data-bs-toggle="modal" data-bs-target="#login-modal"
                                    id="login">
                                    LOGIN
                                </a>
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Game List End ======-->
    </div>
</div>





@section('file')


<div class="modal fade"  id="loadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div onclick="setCookie('username', 'das', 30)" class="modal-content" style="

      width: calc(100% - 26px);
            height: 470px;
            margin: 0 13px;
            background: transparent url('{{ url('images/model.png') }}') no-repeat 0 0;
        background-size: 100% 100%;
        padding: 10px 10px 20px;
        position: relative;


      ">

        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>


@if (session()->has('userlogin'))


<script>


    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";




        $.ajax({
            url: "{{ route('joinuser') }}",
            data: {

                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            type: "post",
            success: function(response) {
                if (response.status) {

                    window.location.href='https://t.me/Flyings11'

                } else {

                    toastr.error(response.msg);

                }
            }
        });

    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $(document).ready(function() {

        let user = getCookie("username");
        if (user != "") {

        } else {

            $('#loadModal').modal('toggle');
        }


    });

</script>

@else

@endif



@endsection


@endsection
