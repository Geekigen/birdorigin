function gameover(lastint) {
    $.ajax({
        url: '/game/game_over',
        type: "POST",
        data: {
            _token: hash_id,
            "last_time": lastint
        },
        dataType: "text",
        success: function (result) {
            $("#wallet_balance").text(currency_symbol + result);
            $("#header_wallet_balance").text(currency_symbol + result); // Show Header Wallet Balance
            for(let i=0;i < bet_array.length; i++){
                console.log("i : "+i);

                if(bet_array[i] && bet_array[i].is_bet){
                    bet_array.splice(i, 1);
                }
            }
            // bet_array = [];
        }
    });
}
function currentid() {
    $.ajax({
        url: '/game/currentid',
        type: "post",
        data: {
            _token: hash_id
        },
        dataType: "json",
        success: function (result) {
        }
    });
}

function gamegenerate() {
    setTimeout(() => {
        $("#auto_increment_number_div").hide();
        $('.loading-game').addClass('show');
        setTimeout(() => {
            // $("#auto_increment_number_div").show();
            hide_loading_game();
            // $(".bottom-left-plane").show();

            $.ajax({
                url: '/game/new_game_generated',
                type: "POST",
                data: {
                    _token: hash_id
                },
                beforeSend: function () {
                },
                dataType: "json",
                success: function (result) {
                        stage_time_out = 1;


                        console.log("bet_array = " + JSON.stringify(bet_array, null, 2));

                        // if (bet_array.length > 0 && bet_array[0].bet_type !== undefined) {
                        //     if (parseInt(bet_array[0].bet_type) === 0) {
                        //         place_bet_now();
                        //     }
                        // }


                        if (bet_array.some(bet => parseInt(bet.bet_type) === 0)) {
                            place_bet_now();
                        }

                        else {
                            if (bet_array.length > 0) {
                                bet_array = [];
                                let main_auto_bet = document.getElementById("main_auto_bet").checked;
                                let extra_auto_bet = document.getElementById("extra_auto_bet").checked;
                                let main_bet_amount = document.querySelector(".main_bet_amount").value;
                                let extra_bet_amount = document.querySelector(".extra_bet_amount").value;
                                current_game_data = result;
                                if(main_auto_bet == true && extra_auto_bet == true){
                                    bet_array.push({ bet_type: 1, bet_amount: main_bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                    bet_array.push({ bet_type: 1, bet_amount: extra_bet_amount, section_no: 1,game_id : current_game_data.id,is_bet:1 });
                                }else{
                                    if(main_auto_bet == true){
                                        bet_array.push({ bet_type: 1, bet_amount: main_bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                    }else if(extra_auto_bet == true){
                                        bet_array.push({ bet_type: 1, bet_amount: extra_bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                    }
                                }
                                place_bet_now();
                            }else{
                                // "game_id": 1198,"is_bet": 1
                                let main_auto_bet = document.getElementById("main_auto_bet").checked;
                                let extra_auto_bet = document.getElementById("extra_auto_bet").checked;
                                let main_bet_amount = document.querySelector(".main_bet_amount").value;
                                let extra_bet_amount = document.querySelector(".extra_bet_amount").value;
                                current_game_data = result;

                                if(main_auto_bet == true && extra_auto_bet == true){
                                    bet_array.push({ bet_type: 1, bet_amount: main_bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                    bet_array.push({ bet_type: 1, bet_amount: extra_bet_amount, section_no: 1,game_id : current_game_data.id,is_bet:1 });
                                }else{
                                    if(main_auto_bet == true){
                                        bet_array.push({ bet_type: 1, bet_amount: main_bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                    }else if(extra_auto_bet == true){
                                        bet_array.push({ bet_type: 1, bet_amount: extra_bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                    }
                                }



                                // console.log("bet_amount = " + JSON.stringify(bet_amount, null, 2));
                                //bet_array.push({ bet_type: 1, bet_amount: bet_amount, section_no: 0,game_id : current_game_data.id,is_bet:1 });
                                // console.log("result = " + JSON.stringify(result, null, 2));
                                // console.log("bet_array = " + JSON.stringify(bet_array, null, 2));
                                place_bet_now();


                            }
                        }





                    $.ajax({
                        url: '/game/currentlybet',
                        type: "POST",
                        data: {
                            _token: hash_id
                        },
                        dataType: "json",
                        success: function (intialData) {
                            info_data(intialData);
                        }
                    });
                    current_game_data = result;
                    hide_loading_game();
                    new_game_generated();
                    lets_fly_one();
                    lets_fly();
                    let currentbet = 0;
                    let a =1.0;
                        $.ajax({
                            url: '/game/increamentor',
                            type: "POST",
                            data: {
                                _token: hash_id
                            },
                            dataType: "json",
                            success: function (data) {
                                currentbet = data.result;

                        $.ajax({
                        url: '/game/currentlybet',
                        type: "POST",
                        data: {
                            _token: hash_id
                        },
                        dataType: "json",
                        success: function (intialData) {
                            info_data(intialData);
                        }
                        });
                    let increamtsappgame = setInterval(() => {
                        if ( a >= currentbet ) {
                            let res = parseFloat(a).toFixed(2);
                            let result = res;
                            crash_plane(result);
                            incrementor(res);
                            gameover(result);
                            $("#all_bets .mCSB_container").empty();
                            $.ajax({
                                url: '/game/my_bets_history',
                                type: "POST",
                                data: {
                                    _token: hash_id
                                },
                                dataType: "json",
                                success: function (data) {
                                    $("#my_bet_list").empty();
                                    for (let $i = 0; $i < data.length; $i++) {
                                        let date = new Date(data[$i].created_at);
                                        $("#my_bet_list").append(`
                                    <div class="list-items">
                                    <div class="column-1 users fw-normal">
                                        `+date.getHours()+`:`+date.getMinutes()+`
                                    </div>
                                    <div class="column-2">
                                        <button
                                            class="btn btn-transparent previous-history d-flex align-items-center mx-auto fw-normal">
                                            `+data[$i].amount+`₹
                                        </button>
                                    </div>
                                    <div class="column-3">

                                        <div class="bg3 custom-badge mx-auto">
                                            `+data[$i].cashout_multiplier+`x</div>
                                    </div>
                                    <div class="column-4 fw-normal">
                                        `+Math.round(data[$i].cashout_multiplier*data[$i].amount)+`₹
                                    </div>
                                </div>
                                `);
                                    }
                                }
                            });
                            clearInterval(increamtsappgame);
                            gamegenerate();
                        } else {
                            a = parseFloat(a) + 0.01;
                            incrementor(parseFloat(a).toFixed(2));
                        }
                    }, 100);
                            }
                        });
                }
            });
        }, 5000);
    }, 1500);
}

function check_game_running(event) {

}

$(document).ready(function () {
    check_game_running("check");
    // gamegenerate();
});
