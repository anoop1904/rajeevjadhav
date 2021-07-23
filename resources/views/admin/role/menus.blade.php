<?php

use App\Http\Controllers\RoleController;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;//for query builder

// $limit = 1000;
// $start = 0;
// $order = ['col'=>'id','order'=>'DESC'];
// $where = ['role_id' => $this->session->userdata('role')];
//  = $this->model->getAry('role_has_permissions', $order, $start, $limit, $where);
$assig_menu = DB::table('permission')->where('role_id', '1')->orderBy('id','DESC')->get()->toArray();
//print_r($assig_menu);die;

$assig_menu_arr = [];
foreach ($assig_menu as $key => $asig_val) {
  $assig_menu_arr[] = $asig_val->permission_id;
}

?>
<div class="sidemenu-area sidemenu-toggle default">
    <nav class="sidemenu navbar navbar-expand navbar-light hide-nav-title">
        <div class="navbar-collapse collapse">
            <div class="navbar-nav">
        
              
                <?php
                //   $limit = 1000;
                //  $start = 0;
                //  $order = ['col'=>'id','order'=>'ASC'];
                //    $where = ['parent_id' => 0];
                //       $menus = $this->model->getAry('permissions', $order, $start, $limit, $where);
                //       //print_r($menus );die;
                $menus = DB::table('module')->where('parent_id', '0')->orderBy('id','ASC')->get()->toArray();
                 ?>

                
                  <?php
                        // $menu_open= (base_url(uri_string())== base_url().'users' ) ? "menu-open" : ""; 
                   // $menu_active= (base_url(uri_string())== base_url().'users' ) ? "active" : "";
                     $assig_submenu_arr =[];
                    // print_r( $menus);die;
                     foreach ($menus as $menu) {
                    //  $order = ['col'=>'id','order'=>'ASC'];
                    //  $where = ['parent_id' => $menu->id];
                    //  $sub_menus = $this->model->getAry('permissions', $order, $start, $limit, $where);
                    $sub_menus= DB::table('module')->where('parent_id', $menu->id)->orderBy('id','ASC')->get()->toArray();
                       //print_r( $sub_menus);die;
                     $assig_submenu_arr[] = $sub_menus;
                      //$rolec= new RoleController;
                    
                     //$currentmenu =   $rolec->checkSubMenu($menu->id, uri_string());
                     //print_r(uri_string());print_r($menu->url);die;
                  //$currentmenu = $this->model->checkSubMenu($menu->id, uri_string());
                      if (in_array($menu->id, $assig_menu_arr)) {
                       ?>
                    <?php if(empty($sub_menus)){

                  
                    ?>
                        <a class="nav-link <?php  echo 'active';?>" href=" <?php
                            if (empty($sub_menus)) {
                              echo url($menu->url);
                            } else {
                              echo '#';
                            }
                            ?>">
                         <span style="color: #2962ff !important;"><i class="" aria-hidden="true"></i></span>
                          <span class="title"><?php echo $menu->name; ?></span>
                        </a> 
                       
                           
                <?php      
                    }else{
                    ?>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-title">
                        <span style="color: #2962ff !important;"><i class="" aria-hidden="true"></i></span>
                            <span class="title">
                            <?php echo $menu->name; ?>
                            <i data-feather="chevron-right" class="icon fr"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                    <?php
                      foreach ($sub_menus as $key => $sub_menus_val) {
                        if (in_array($sub_menus_val->id, $assig_menu_arr)) {
                      ?>
                        <a class="dropdown-item "  href="<?php echo url($sub_menus_val->url); ?>">
                            <i data-feather="chevron-right" class="icon"></i>
                            <?= $sub_menus_val->name ?>
                        </a>
                        <?php 
                        
                      }
                      }?>
                    </div>
                </div>
                  <?php 
                        
                    }
                }
             } 
                    ?>
                   
                  
                

               

               

            </div>
        </div>
    </nav>
</div>
