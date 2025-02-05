<?php
namespace Jiny\Seller\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;


use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminSellerProductsCategory extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ## 테이블 정보
        $this->actions['table']['name'] = "seller_product_category";

        $this->actions['view']['list'] = "jiny-seller::admin.seller_product_category.list";
        $this->actions['view']['form'] = "jiny-seller::admin.seller_product_category.form";

        $this->actions['title'] = "판매자 상품 카테고리";
        $this->actions['subtitle'] = "판매자 상품을 관리합니다.";

    }





}
