<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gameresult;
use App\Models\Wallet;
use App\Models\Userbit;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Bank_detail;
use Carbon\Carbon;

use DB;

class Pages extends Controller
{
    public function aviator() {
        $allresults = Gameresult::where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id','desc')->get();
        $mybets = Userbit::where('userid',user('id'))->where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id','desc')->get();
        // return $allresults;
        return view('crash',compact("allresults","mybets"));
    }

    public function deposit() {
        $bank = Bank_detail::where('userid',user('id'))->first();
        if (!$bank) {
            $bank = array();
        }
        return view('deposite',compact('bank'));
    }

    public function amount_transfer()
    {
        $specificdata = null;
        $title = 'Amount Transfer';
        return view('amount_transfer', [
            'title' => $title,
        ]);
    }







    public function level_management() {
        $mypromocode = user('id');
        $level1users = User::select('users.*')->where('users.promocode',$mypromocode)->get();
        // dd($level1users);

        $users1 = count($level1users);
        $totalusers = count($level1users);

        $wallets1 = 0;
        $wallets2 = 0;
        $wallets3 = 0;
        $users2 = 0;
        $users3 = 0;
        $level1 = $level1users;
        $level2 = array();
        $level3 = array();

     $wallets1=   Transaction::where('userid',$mypromocode)->where('platform','Level1')->sum('amount');
     $wallets2=   Transaction::where('userid',$mypromocode)->where('platform','Level2')->sum('amount');
     $wallets3=   Transaction::where('userid',$mypromocode)->where('platform','Level3')->sum('amount');


        // foreach($level1users as $us){
        //     $wallets = Wallet::where('userid',$us->id)->first();

        //     $wallets1 += $wallets->amount ?? 0;
        //     // $wallets1 += $us->wallets ?? 0;
        // }

        foreach ($level1users as $key2) {
            $level2users = User::select('users.*')->where('users.promocode',$key2->id)->get();
            $users2 += count($level2users);


            // foreach($level2users as $us){

            //     $wallets = Wallet::where('userid',$us->id)->first();

            //     $wallets2 += $wallets->amount ?? 0;

            // }

            $totalusers += count($level2users);
            // $wallets2 += $key2->wallets;
            if (count($level2users) > 0) {
                array_push($level2,$level2users);
            }
            foreach ($level2users as $key3) {
                $level3users = User::select('users.*')->where('users.promocode',$key3->id)->get();
                $users3 += count($level3users);
                // foreach($level3users as $us){
                //     $wallets = Wallet::where('userid',$us->id)->first();

                //     $wallets3 += $wallets->amount ?? 0;

                // }
                // $wallets3 += $key3->wallets ?? 0;
                $totalusers += count($level3users);
                array_push($level3,$level3users);
            }
        }

        // dd($totalusers);
        return view('level_management',compact('wallets1','wallets2','wallets3','totalusers','users1','users2','users3','level1','level2','level3'));
    }

    public function level_detail(Request $request){
        $mypromocode = user('id');
        $level1users = User::where('promocode',$mypromocode)->get();
        $users = count($level1users);
        $users0 = count($level1users);
        $level1 = $level1users;
        $level2 = array();
        $level3 = array();
        $users1 = count($level1users);
        $users2 = 0;
        $users3 = 0;
        foreach ($level1users as $key2) {

            $level2users = User::where('promocode',$key2->id)->get();
            $users2 += count($level2users);
            $users += count($level2users);
            if (count($level2users) > 0) {
                array_push($level2,$level2users);
            }
            foreach ($level2users as $key3) {
                $level3users = User::where('promocode',$key3->id)->get();
                $users3 += count($level3users);
                $users += count($level3users);
                array_push($level3,$level3users);
            }
        }

        // dd($level2);
        return view('level_detail',compact('users','users0','users2','users3','level1','level2','level3'));
    }
}
