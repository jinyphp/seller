<?php
namespace Jiny\Seller\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;


use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSellerEmoneyLog extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table']['name'] = "seller_emoney_log";

        $this->actions['view']['list'] = "jiny-seller::admin.seller_emoney_log.list";
        $this->actions['view']['form'] = "jiny-seller::admin.seller_emoney_log.form";

        $this->actions['title'] = "판매자 적립금";
        $this->actions['subtitle'] = "판매자 적립금 내역을 관리합니다.";


    }

    /**
     * Hook: 신규 데이터 DB 삽입전에 호출됩니다.
     */
    public function hookStoring($wire, $form)
    {
        //$_form = [];
        $user = DB::table('users')
            ->where('email', $form['email'])
            ->first();
        //$_form['email'] = $form['email'];
        $form['user_id'] = $user->id; // 이메일을 사용자 id로 전환

        $row = DB::table('seller_emoney_log')
            ->where('user_id', $user->id)
            ->first();
        if($row) {
            $form['balance'] = $row->balance;
        } else {
            // 초기화
            $form['balance'] = 0;
        }

        if(isset($form['withdraw'])) {
            //$_form['withdraw'] = $form['withdraw']; //출금
            $form['balance'] -= $form['withdraw'];
        }

        if(isset($form['deposit'])) {
            //$_form['deposit'] = $form['deposit']; //입금
            $form['balance'] += $form['deposit'];
        }

        //$_form['created_at'] = $form['created_at'];
        //$_form['updated_at'] = $form['updated_at'];

        return $form; // 변경된 데이터를 저장
    }





}
