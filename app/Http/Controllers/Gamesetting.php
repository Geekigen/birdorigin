<?php



namespace App\Http\Controllers;

use App\Models\Gameresult;
use App\Models\Setting;
use App\Models\Userbit;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;

class Gamesetting extends Controller
{

    public function crash_plane()
    {
        return 1;
    }
    public function game_existence(Request $r)
    {
        $event = $r->event;
        if ($event == "check") {
            $new = Setting::where('category', 'game_status')->where('value', '0')->first();

            if ($new || (session()->has('gamegenerate') && session()->get('gamegenerate') == 1)) {
                return array('data' => true);
            } else {
                return array('data' => false);
            }
            return array('data' => false);
        }
    }
    public function new_game_generated(Request $r)
    {
        $new = Setting::where('category', 'game_status')->update(['value' => '0']);
        $r->session()->put('gamegenerate', '1');
        return response()->json(array("id" => currentid()));
    }

    public function increamentor(Request $r)
    {



        $gamestatusdata = Setting::where('category', 'game_status')->first();
        $res = 0;
        if ($gamestatusdata) {

            $totalbet = Userbit::where('gameid', currentid())->count();

            // dd($finalamount);
            // dd($totaluser1);

            $totalamount = Userbit::where('gameid', currentid())->sum('amount');
            if ($totalbet == 0) {
                $res =   rand(1, 18);
            } else {

                $totaluser = Userbit::selectRaw('SUM(amount * cashout_multiplier) AS Total_Value')->where('userid', user('id'))->where('status', 1)->first();
                $totaluser1 = Userbit::where('userid', user('id'))->where('status', 0)->sum('amount');
                // $totaering = $totaluser * $;

                $finalamount = $totaluser->Total_Value - $totaluser1;

                // dd($totalbet);
                //   $randomresult = array(1.1,1.1,1.2,1.3,1.4,1.5,1.6,1.7,1.8,1.9);

                $emailvalue = Setting::where('id', '14')->sum('value');
                $admin_amount = floatval(Setting::where('id', '15')->sum('value'));
                $admin_profit = floatval(Setting::where('id', '19')->sum('value'));

                if ($finalamount > 5000 && $finalamount < 8000) {

                    // dd('1');
                    $randomresult = array(1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($finalamount > 8000) {

                    // dd('1');
                    $randomresult = array(0.1, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($admin_amount < $admin_profit && $admin_amount > 0) {


                    // dd('1');
                    $randomresult = array(1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($admin_amount <= 0) {

                    // dd('1');
                    $randomresult = array(0.1, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($emailvalue == 10) {

                    // dd('1');
                    $randomresult = array(1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($emailvalue == 20) {

                    // dd('1');
                    $randomresult = array(2.1, 2.1, 2.2, 2.3, 2.4, 2.5, 2.6, 2.7, 2.8, 2.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($emailvalue == 30) {

                    // dd('1');
                    $randomresult = array(3.1, 3.1, 3.2, 3.3, 3.4, 3.5, 3.6, 3.7, 3.8, 3.9);
                    $res = $randomresult[rand(0, 8)];
                } else if ($emailvalue == 40) {

                    $randomresult = array(4.1, 4.1, 4.2, 4.3, 4.4, 4.5, 4.6, 4.7, 4.8, 4.9);
                    $res = $randomresult[rand(0, 8)];
                }
                //$aa = $emailvalue;

                // if($emailvalue==$aa)
                // {
                //  $randomresult = array(1.1,1.1,1.2,1.3,1.4,1.5,1.6,1.7,1.8,1.9);
                //           // $res = $randomresult[rand(0,8)];
                //             // if (session()->has('result')) {
                //             //     return session()->get('result');
                //             // }
                //             // $r->session()->put('result',$res);
                //           // return $res;
                //           $res = $emailvalue;

                // }

                else if ($emailvalue == 100) {


                    $randomresult = array(
                    0.1, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9,
                    1.1, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9,
                    2.1, 2.1, 2.2, 2.3, 2.4, 2.5, 2.6, 2.7, 2.8, 2.9,
                    3.1, 3.1, 3.2, 3.3, 3.4, 3.5, 3.6, 3.7, 3.8, 3.9,
                    4.1, 4.1, 4.2, 4.3, 4.4, 4.5, 4.6, 4.7, 4.8, 4.9,
                    5.1, 5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 5.9,
                    6.1, 6.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 5.9,
                    7.1, 7.1, 7.2, 7.3, 7.4, 7.5, 7.6, 7.7, 7.8, 7.9,
                    8.1, 8.1, 8.2, 8.3, 8.4, 8.5, 8.6, 8.7, 8.8, 8.9,
                    9.1, 9.1, 9.2, 9.3, 9.4, 9.5, 9.6, 9.7, 9.8, 9.9,
                    10.1, 10.1, 10.2, 10.3, 10.4, 10.5, 10.6, 10.7, 10.8, 10.9,
                    11.1, 11.1, 11.2, 11.3, 11.4, 11.5, 11.6, 11.7, 11.8, 11.9,
                    12.1, 12.1, 12.2, 12.3, 12.4, 12.5, 12.6, 12.7, 12.8, 12.9,
                    13.1, 13.1, 13.2, 13.3, 13.4, 13.5, 13.6, 13.7, 13.8, 13.9,
                    14.1, 14.1, 14.2, 14.3, 14.4, 14.5, 14.6, 14.7, 14.8, 14.9,
                    15.1, 15.1, 15.2, 15.3, 15.4, 15.5, 15.6, 15.7, 15.8, 15.9,
                    16.1, 16.1, 16.2, 16.3, 16.4, 16.5, 16.6, 16.7, 16.8, 16.9,
                    17.1, 17.1, 17.2, 17.3, 17.4, 17.5, 17.6, 17.7, 17.8, 17.9,
                    18.1, 18.1, 18.2, 18.3, 18.4, 18.5, 18.6, 18.7, 18.8, 18.9,

                );
                    $res = $randomresult[rand(0, 190)];
                    // $res =   rand(17, 18);
                    // if (session()->has('result')) {
                    //     return session()->get('result');
                    // }
                    // $r->session()->put('result',$res);
                    // return $res;
                    //  $res = $emailvalue;

                } else {



                    $res = $emailvalue;
                }
                // $res =$emailvalue;

                //           //  $gamestatusdataend = Setting::where('category', 'game_between_time_end')->first();
                //   $res =  $randomresult[rand(0,2)]; //$emailvalue;

            }

            $status = true;
            $result = $res;
            $response = array('status' => $status, 'result' => $result);
            return response()->json($response);
        }
    }
    // public function increamentor(Request $r)
    // {
    //     // return 1.7;
    //     $totalbet = Userbit::where('gameid',currentid())->count();
    //     $totalamount = Userbit::where('gameid',currentid())->sum('amount');
    //     if ($totalbet == 0) {
    //         return rand(8,11);
    //     }else{
    //         $randomresult = array(1.1,1.1,1.2,1.3,1.4,1.5,1.6,1.7,1.8,1.9);
    //         $res = $randomresult[rand(0,8)];
    //         if (session()->has('result')) {
    //             return session()->get('result');
    //         }
    //         $r->session()->put('result',$res);
    //         return $res;
    //     }
    //     return rand(setting('start_range_game_timer')*10, setting('end_range_game_timer')*10) / 10;
    // }

    public function game_over(Request $r)
    {

        $r->session()->forget('result');
        $result = Gameresult::where('id', currentid())->update([
            "result" => number_format($r->last_time, 2),
        ]);
        $alluserbit = Userbit::where('gameid', currentid())->where('status', 0)->get();
        $key_amount = 0;
        foreach ($alluserbit as $key) {
            if (floatval($r->last_time) <= 1.20) {
                $result = 0;

            } else {
                $result = $r->last_time;
            }
            $key_amount = $key_amount + $key->amount;
            $finalamount = floatval($key->amount) * floatval($result);
            Userbit::where('id', $key->id)->update(["status" => 1]);
            // addwallet($key->userid,$finalamount);
        }
        $new = Setting::where('category', 'game_status')->update(['value' => '0']);
        $r->session()->put('gamegenerate', '0');
        $result = new Gameresult;
        $result->result = "pending";
        $result->save();
        $admin_amount = floatval(Setting::where('id', '15')->sum('value'));
        $admin_amount = $admin_amount +  $key_amount;
        $setting = Setting::where('id', '15')->first();
        $setting->value = $admin_amount;
        $setting->save();
        return wallet(user('id'));
    }

    public function betNow(Request $r)
    {
        // dd('hi');
        $status = false;
        $message = "Something went wrong!";
        $returnbets = array();
        for ($i = 0; $i < count($r->all_bets); $i++) {
            $result = new Userbit;
            $result->userid = user('id');
            $result->amount = $r->all_bets[$i]['bet_amount'];
            $result->type = $r->all_bets[$i]['bet_type'];
            $result->gameid = currentid();
            $result->section_no = $r->all_bets[$i]['section_no'];
            if ($r->all_bets[$i]['bet_amount'] < wallet(user('id'), 'num')) {
                if ($result->save()) {
                    $status = true;
                    array_push($returnbets, [
                        "bet_id" => $result->id,
                    ]);
                    /*array_push($returnbets, [
                    "bet_id" => currentid(),
                ]);*/
                    $exact_wallet_balance = addwallet(user('id'), floatval($r->all_bets[$i]['bet_amount']), "-");
                    $data = array(
                        "wallet_balance" => wallet(user('id')),
                        "return_bets" => $returnbets
                    );
                    $message = "";

                    //lavel 1

                    $setting1 = Setting::where('id', '16')->first();
                    $setting2 = Setting::where('id', '17')->first();
                    $setting3 = Setting::where('id', '18')->first();

                    $level1 = $setting1->value;
                    $level2 = $setting2->value;
                    $level3 = $setting3->value;


                    $admin_comition = floatval($r->all_bets[$i]['bet_amount']) * .02;
                    $lavel1_comtion = $admin_comition * (floatval($level1) / 100);
                    $lavel2_comtion = $admin_comition * (floatval($level2) / 100);
                    $lavel3_comtion = $admin_comition * (floatval($level3) / 100);
                    $user_id = user('id');
                    $level1users = User::select('users.*')->where('users.id',$user_id)->first();
                    $level1users_user_id = User::select('users.*')->where('users.id',$level1users->promocode)->first();




                    /// lavel 2

                    if(!empty($level1users->promocode) && User::select('users.*')->where('users.id',$level1users->promocode)->exists()){
                        $wallets = Wallet::where('userid',$level1users_user_id->id)->first();
                        $wallets1 = $wallets->amount + $lavel1_comtion;
                        $wallets->amount = $wallets1;
                        $wallets->save();

                        addtransaction($level1users_user_id->id, 'Level1', date("ydmhsi"), 'credit', $lavel1_comtion, 'Level_bonus', 'Success', '1');
                        $level2users = User::select('users.*')->where('users.id',$level1users_user_id->id)->first();
                        $level2users_user_id = User::select('users.*')->where('users.id',$level2users->promocode)->first();
                    }





                    // level 3
                    if(!empty($level2users_user_id->id) && User::select('users.*')->where('users.id',$level2users_user_id->id)->exists()){
                        $wallets = Wallet::where('userid',$level2users_user_id->id)->first();
                        $wallets2 = $wallets->amount + $lavel2_comtion;
                        $wallets->amount = $wallets2;
                        $wallets->save();

                        addtransaction($level2users_user_id->id, 'Level2', date("ydmhsi"), 'credit', $lavel2_comtion, 'Level_bonus', 'Success', '1');

                        $level3users = User::select('users.*')->where('users.id',$level2users_user_id->id)->first();
                        $level3users_user_id = User::select('users.*')->where('users.id',$level3users->promocode)->first();

                    }

                    if(!empty($level3users->promocode) && User::select('users.*')->where('users.id',$level3users->promocode)->exists()){

                        $wallets = Wallet::where('userid',$level3users_user_id->id)->first();
                        $wallets3 = $wallets->amount + $lavel3_comtion;
                        $wallets->amount = $wallets3;
                        $wallets->save();


                        addtransaction($level3users_user_id->id, 'Level3', date("ydmhsi"), 'credit', $lavel3_comtion, 'Level_bonus', 'Success', '1');


                    }








                }
            } else {
                $status = false;
                $data = array();
                $message = "Insufficient fund!!";
            }
        }
        $response = array("isSuccess" => $status, "data" => $data, "message" => $message);
        return response()->json($response);
    }
    public function currentlybet()
    {
        $allbets = Userbit::where("gameid", currentid())->join('users', 'users.id', '=', 'userbits.userid')->get();
        $currentGameBet = $allbets;
        for ($i = 0; $i < rand(400, 900); $i++) {
            $currentGameBet[] = array(
                "userid" => rand(10000, 50000),
                "amount" => rand(999, 9999),
                "image"  => "/images/avtar/av-" . rand(1, 72) . ".png"
            );
        }
        $currentGame = array("id" => currentid());
        $currentGameBetCount = count($currentGameBet);
        $response = array("currentGame" => $currentGame, "currentGameBet" => $currentGameBet, "currentGameBetCount" => $currentGameBetCount);
        return response()->json($response);
    }
    public function my_bets_history()
    {
        $userid = user('id');
        $userbets = Userbit::where("userid", $userid)->where('status', 1)->where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id', 'desc')->get();
        return response()->json($userbets);
    }
    public function cashout(Request $r)
    {
        $admin_amount = floatval(Setting::where('id', '15')->sum('value'));
        $game_id = $r->game_id;
        $bet_id = $r->bet_id;
        $win_multiplier = $r->win_multiplier;
        $cash_out_amount = 0;
        $status = false;
        $message = "";
        $data = array();
        $result = resultbyid($game_id) == 0 ? $win_multiplier : resultbyid($game_id);
        if (floatval($result) <= 1.00) {
            $result = 0;
        }
        $cash_out_amount = floatval(userbetdetail($bet_id, 'amount')) * floatval($result);
        addwallet(user('id'), $cash_out_amount);
        $data = array(
            "wallet_balance" => wallet(user('id'), "num"),
            "cash_out_amount" => $cash_out_amount
        );
        Userbit::where('id', $bet_id)->update(["status" => 1, "cashout_multiplier" => $win_multiplier]);
        
        
        $admin_amount = $admin_amount -  $cash_out_amount;
        $setting = Setting::where('id', '15')->first();
        $setting->value = $admin_amount;
        $setting->save();
        
        
        $status = true;
        $response = array("isSuccess" => $status, "data" => $data, "message" => $message);
        return response()->json($response);
    }

    public function cronjob()
    {
        //0 = Game end & statrting soon
        //1 = Game start & and is in proccess
        $gamestatusdata = Setting::where('category', 'game_status')->first();
        $game_status = 0;
        if ($gamestatusdata) {
            $game_status = $gamestatusdata->value;
        }
        if ($game_status == 1) {
            $last_start_time = Setting::where('category', 'game_start_time')->first()->value;
            $last_till_time = Setting::where('category', 'game_between_time')->first()->value;
            $bothdifference = datealgebra($last_start_time, '+', ($last_till_time / 1000) . ' seconds', $format = "Y-m-d h:i:s");
            if (strtotime(date('Y-m-d h:i:s')) >= strtotime($bothdifference)) {
                $gamestatusdata = Setting::where('category', 'game_status')->update([
                    "value"  => 0
                ]);
            }
        } elseif ($game_status == 0) {
            $gamestatusdata = Setting::where('category', 'game_status')->update(["value"  => 1]);
            $gamestatusdata = Setting::where('category', 'game_start_time')->update(["value"  => date('Y-m-d h:i:s')]);
            $gamestatusdata = Setting::where('category', 'game_between_time')->update(["value"  => 5000]);
        } else {
        }
    }

    public function send_otp(Request $request)
    {

        $otp = rand ( 10000 , 99999 );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://kineticgrid.in/api/otp.php?numbers='.$request['mobile'].'&input1='.$otp.'',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        $request->session()->put('otp', $otp);
        $res = array("isSuccess" => true);
        return response()->json($res);
    }
}
