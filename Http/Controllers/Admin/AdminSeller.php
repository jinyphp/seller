<?php
namespace Jiny\Seller\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;


use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSeller extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table']['name'] = "seller";

        $this->actions['view']['list'] = "jiny-seller::admin.seller.list";
        $this->actions['view']['form'] = "jiny-seller::admin.seller.form";

        $this->actions['title'] = "판매자 목록";
        $this->actions['subtitle'] = "판매자를 관리합니다.";

    }


    /**
     * Hook: 신규 데이터 DB 삽입전에 호출됩니다.
     */
    public function hookStoring($wire, $form)
    {
        if(isset($form['type'])) {
            $type_id = explode(':', $form['type'])[0];
            $type = DB::table('seller_type')->find($type_id);
            $form['discount'] = $type->discount;
            $form['margin'] = $type->margin;
        }

        return $form; // 사전 처리한 데이터를 반환합니다.
    }

    /**
     * Hook: 갱신 동작 전에 실행됩니다.
     */
    public function hookUpdating($wire, $form, $old)
    {
        if(isset($form['type'])) {
            $type_id = explode(':', $form['type'])[0];
            $type = DB::table('seller_type')->find($type_id);
            $form['discount'] = $type->discount;
            $form['margin'] = $type->margin;
        }

        return $form;
        return true; // 정상
    }




}
