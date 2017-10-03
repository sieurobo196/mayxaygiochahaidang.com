<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Auth\DefaultPasswordHasher;
use Cake\I18n\Time;
class ProductsController extends AppController {

    public function index() {

        $menus = TableRegistry::get('menu');
        $listMenus = $menus->find();
        $products = TableRegistry::get('products');
        $listProducts = $products->find();
        $this->set('menus', $listMenus);
        $this->set('products', $listProducts);
        $this->set("type", "1");
        $this->set("description", "máy xay giò chả Hải Đăng chuyên cung cấp các loại máy xay giò chả giá rẻ ");
        $this->set("keys", "máy xay giò chả, may xay gio cha, máy xay giò chả giá rẻ , may xay gio cha gia re, máy xay thit ");

        $access_table = TableRegistry::get('access');
        $access = $access_table->get(1);
        $index = $access->access_index;
        $index ++;
        $access->access_index = $index;
        $newDate =  date("Y-m-d H:i:s");
        $access->updatedDate=$newDate;
        if (!$access_table->save($access)) {
            echo "update index fail";
        }
    }

    public function view($id) {
        $menus = TableRegistry::get('menu');
        $listMenus = $menus->find();
        $products = TableRegistry::get('products');
        $listProducts = $products->find()->select(['id', 'name', 'images', 'type'])->where(['menu_id =' . $id]);
        $this->set('menus', $listMenus);
        $this->set('products', $listProducts);
        $this->set("type", "0");

        $this->set("description", "máy xay giò chả Hải Đăng chuyên cung cấp các loại máy xay giò chả giá rẻ ");
        $this->set("keys", "máy xay giò chả, may xay gio cha, máy xay giò chả giá rẻ , may xay gio cha gia re, máy xay thit ");
        $access_table = TableRegistry::get('access');
        $access = $access_table->get(2);
        $index = $access->access_index;
        $index ++;
        $access->access_index = $index;
        $newDate =  date("Y-m-d H:i:s");
        $access->updatedDate=$newDate;
        if (!$access_table->save($access)) {
            echo "update index fail";
        }
    }

    public function detail($type, $id) {
        $menus = TableRegistry::get('menu');
        $listMenus = $menus->find();
        $products = TableRegistry::get('products');
        $listProducts = $products->find()->where(['id !=' . $id . ' and type =' . $type]);
        $productDetail = $products->find()->where(['id =' . $id])->first();
        $this->set('menus', $listMenus);
        $this->set('products', $listProducts);
        $this->set("type", "0");
        $this->set("description", $productDetail->description);
        $this->set("keys", $productDetail->keywords);
        $this->set("name", $productDetail->name);
        $this->set("pathImg", $productDetail->images);
        $this->set("content", $productDetail->content);
        $access_table = TableRegistry::get('access');
        $access = $access_table->get(3);
        $index = $access->access_index;
        $index ++;
        $access->access_index = $index;
        $newDate =  date("Y-m-d H:i:s");
        $access->updatedDate=$newDate;
        if (!$access_table->save($access)) {
            echo "update index fail";
        }
    }

}

?>