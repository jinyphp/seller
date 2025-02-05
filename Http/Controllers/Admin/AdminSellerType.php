<?php
namespace Jiny\Seller\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;


use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSellerType extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table']['name'] = "seller_type";

        $this->actions['view']['list'] = "jiny-seller::admin.seller_type.list";
        $this->actions['view']['form'] = "jiny-seller::admin.seller_type.form";

        $this->actions['title'] = "판매자 유형";
        $this->actions['subtitle'] = "판매자 유형을 관리합니다.";


    }


    


}
