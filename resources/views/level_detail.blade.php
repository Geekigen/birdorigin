@extends('Layout.usergame2')
@section('content')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

    html,
    body {
        margin: 0;
        height: 100%;
        background: #e7dfdc;
        font-family: 'Times New Roman', Times, serif;
        font-size: 15px;
        font-weight: 400;
        color: #333;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    :root {
        --serif-fonts: 'Roboto', sans-serif;
    }

    .container {
        width: 100%;
        max-width: 1100px;
        padding: 35px 17px 75px;
    }

    .invitation-block {
        width: 100%;
        height: fit-content;
        background: #423b24;
        box-shadow: 0 0.4rem 1.6rem -0.4rem rgba(0, 0, 0, .2);
        border-radius: 15px;
        padding: 25px 17px 17px;
        margin-bottom: 15px;
    }

    .invitation-block .title {
        font-size: 22px;
        font-weight: 500;
        color: #ffd631;
        text-align: center;
        margin-bottom: 12px;
    }

    .invitation-block .code-lg {
        width: 100%;
        height: 55px;
        background: #292416;
        border-radius: 5px;
        margin-bottom: 10px;
        line-height: 55px;
        text-align: center;
    }

    .invitation-block .code-lg p {
        font-size: 20px;
        font-weight: 400;
        color: #ffd631;
    }

    .invitation-block .code-lg p span {
        font-size: 24px;
        font-weight: 600;
        color: #fff;
    }

    .invitation-block .copy-block {
        width: 100%;
        height: 60px;
        background: #292416;
        border-radius: 5px;
        padding: 2px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        flex-wrap: wrap;
    }

    .invitation-block .copy-block .code-sm {
        width: calc(100% - 72px);
        padding: 10px;
        font-size: 13.5px;
        line-height: 16px;
        font-weight: 400;
        color: #d7d7d7;
    }

    .invitation-block .copy-block .copy-btn {
        width: 72px;
        height: 56px;
        background: #ffc108;
        font-size: 20px;
        font-weight: 400;
        line-height: 56px;
        text-align: center;
        color: #333841;
        border-radius: 4px;
    }

    .white-block {
        width: 100%;
        background-color: #fff;
        margin: 0;
        padding: 15px 5px;
        border-radius: 10px;
    }

    .reward-block {
        width: 100%;
        background: linear-gradient(40deg, #ffa100, #f83f36);
        border-radius: 9px;
        padding: 10px 20px;
        margin: 17px 0;
    }

    .reward-block .text {
        width: 85%;
        font-size: 19px;
        line-height: 23px;
        font-weight: 400;
        color: #fff;
        text-align: center;
        margin: 0 auto;
    }

    .reward-block hr {
        width: 100%;
        height: 1px;
        background-color: #f9f5f5;
        border: 0;
        margin: 10px 0;
    }

    .reward-block .flex-area {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        flex-wrap: wrap;
    }

    .reward-block .flex-area img {
        width: 32px;
        margin-right: 6px;
    }

    .reward-block .flex-area .colm-text {
        font-size: 19px;
        font-weight: 400;
        color: #fff;
    }

    .reward-block .flex-area .link {
        font-size: 19px;
        font-weight: 400;
        color: #fff;
        padding-right: 23px;
        text-decoration: underline;
        position: relative;
        margin-left: auto;
    }

    .reward-block .flex-area .link img {
        width: 17px;
        position: absolute;
        right: -7px;
        top: 6px;
    }

    .team-title {
        font-weight: 400;
        color: #333c40;
        font-size: 19px;
        text-align: center;
        margin-bottom: 22px;
    }

    .team-block {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .team-block .column {
        width: fit-content;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        text-align: center;
    }

    .team-block .column h6 {
        font-size: 13.5px;
        color: #333;
        margin-bottom: 6px;
    }

    .team-block .column h5 {
        font-size: 19px;
        font-weight: 400;
        color: red;
        margin-bottom: 0;
    }

    .team-block .column i {
        font-size: 22px;
        color: #333;
        margin-left: 10px;
    }

    .level-block {
        width: 100%;
        height: fit-content;
        background: transparent url({{ url('')}}/assets/images/level1-bg.png) no-repeat;
    background-size: 100% 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    padding: 10px 5px;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 12px;
    }

    .level-block.level1 {
        background-image: url({{ url('')}}/assets/images/level1-bg.png);
    }

    .level-block.level2 {
        background-image: url({{ url('')}}/assets/images/level2-bg.png);
    }

    .level-block.level3 {
        background-image: url({{ url('')}}/assets/images/level3-bg.png);
    }

    .level-block .medal {
        width: 45px;
        height: 45px;
        margin-right: 10px;
    }

    .level-block .medal img {
        width: 100%;
        height: 100%;
    }

    .level-block .column1 {
        width: 65px;
        margin-right: 15px;
    }

    .level-block .col-group {
        width: calc(100% - 135px);
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: start;
        gap: 16px;
    }

    .level-block .col-group .column {
        width: calc(50% - 8px);
        word-break: break-all;
    }

    .level-block h3 {
        font-size: 21px;
        font-weight: 400;
        color: #fff;
        margin-bottom: 4px;
    }

    .level-block h4 {
        display: block;
        width: 50px;
        height: 22px;
        line-height: 22px;
        text-align: center;
        background: #fff;
        border-radius: 14px;
        font-size: 13.5px;
        font-weight: 400;
        color: red;
        padding: 0 5px;
    }

    .level-block h5 {
        font-family: var(--serif-fonts);
        font-size: 17px;
        color: #fff;
        font-weight: 700;
        margin-bottom: 0;
    }

    .level-block h6 {
        font-size: 16px;
        color: #fff;
        margin-bottom: 6px;
    }

    .why-block {
        background: #333c40;
        height: fit-content;
        border-radius: 15px;
        padding: 11px;
    }

    .why-block .title {
        font-size: 18px;
        font-weight: 400;
        color: #ffd631;
        text-align: center;
        margin-bottom: 6px;
    }

    .why-block p {
        font-size: 15px;
        font-weight: 400;
        line-height: 18px;
        color: #fff;
        text-align: left;
        margin-bottom: 0;
    }
</style>

<br />
<br />
<br />
<div class="container">
    <div class="invitation-block">
        <div class="title">Level Managements</div>
        <div class="code-lg">
            <p>Toatal Player: <span>

                @if(Request::get('type') == 1)
                {{ $users0 }}
                @elseif(Request::get('type') == 2)
                {{ $users2 }}
                @elseif(Request::get('type') == 3)
                {{ $users3 }}
                @else

                @endif



                </span></p>
        </div>
    </div>
    <div class="white-block">


        @if(Request::get('type') == 1)

        @if (count($level1) > 0)
        @foreach ($level1 as $item)
        <div class="level-block level1">
            <div class="medal"><img src="{{ url('') }}/assets/images/medal-level1.png"></div>
            <div class="column1">
                <h3>Level 1</h3>
                <h4>35%</h4>
            </div>
            <div class="col-group">
                <div class="column">
                    <h6>User Id</h6>
                    <h5>{{ $item->id ?? '' }}</h5>
                </div>
                <div class="column">
                    <h6>Name</h6>
                    <h5>{{ $item->name ?? '' }}</h5>
                </div>
            </div>
        </div>
        @endforeach
        @else

        @endif
                @elseif(Request::get('type') == 2)
                @if (count($level2) > 0)


                @foreach ($level2 as $subitem)
                @foreach ($subitem as $item)
                <div class="level-block level2">
                    <div class="medal"><img src="{{ url('') }}/assets/images/medal-level2.png"></div>
                    <div class="column1">
                        <h3>Level 2</h3>
                        <h4>15%</h4>
                    </div>
                    <div class="col-group">
                        <div class="column">
                            <h6>User Id</h6>
                            <h5>{{ $item->id ?? '' }}</h5>
                        </div>
                        <div class="column">
                            <h6>Name</h6>
                            <h5>{{ $item->name ?? '' }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach


                @else

                @endif
                @elseif(Request::get('type') == 3)

        @if (count($level3) > 0)

        @foreach ($level3 as $subitem)
        @foreach ($subitem as $item)
        <div class="level-block level3">
            <div class="medal"><img src="{{ url('') }}/assets/images/medal-level3.png"></div>
            <div class="column1">
                <h3>Level 3</h3>
                <h4>10%</h4>
            </div>
            <div class="col-group">
                <div class="column">
                    <h6>User Id</h6>
                    <h5>{{ $item->id }}</h5>
                </div>
                <div class="column">
                    <h6>Name</h6>
                    <h5>{{ $item->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
        @else

        @endif
                @else

                @endif









        <div class="why-block">
            <div class="title">Why create a team</div>
            <p>If you want to make more money, you can invite your friends to register and join us, and you can get 35%
                15% 10% investment rebates from your team, unlimited times.</p>
        </div>
    </div>
</div>

@endsection
