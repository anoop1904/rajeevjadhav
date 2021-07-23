<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB; //for query builder


class RoleController extends Controller
{
    public function addrole()
    {
        return view('admin/role/addrole');
    }

    public function saverole(Request $req)
    {    
        $role = new Role();
        $role->name = $req->role;
        $role->status = 0;
        $role->save();
        return redirect()->back();
    }
    public function showrole()
    {
        $roledata =  Role::all();
        return view('admin/role/showrole', ['roledata' => $roledata]);
    }
    
    public function deleterole($id)
   {
      Role::where('id', $id)->delete();
      return redirect()->back();
   }
    //MOdule
    public function menu()
    {
        $mdata = Module::all();

        return view('admin/role/menus', $mdata);
    }

    public function addModule()
    {
        $mdata = Module::all();

        return view('admin/role/module', ['mdata' => $mdata]);
    }

    public function saveModule(Request $req)
    {
         $req->validate([
            'parent_id' => 'required',
            'mname' => 'required',
            'url' => 'required'          

        ]);
        $mdata = new Module;
        $mdata->parent_id = $req->parent_id;
        $mdata->name = $req->mname;
        $mdata->url = $req->url;
        $mdata->menuorder = 1;
        $mdata->icon = $req->icon;
        $mdata->save();
        return redirect('role/add-module');
    }

    public function shownavbar()
    {
        return view('admin/include/aside1');
    }
    public function permission()
    {
        $pdata = Permission::all();
        $rdata = Role::all();
        $data['roles'] = $rdata;
        $mdata = Module::all();

        $permissions_arr = DB::table('module')->get()->where('parent_id', '0');
        //print_r($permissions_arr);die;
        $menus = [];
        foreach ($permissions_arr as $key => $permissions_val) {

            $child_arr = DB::table('module')->get()->where('parent_id', $permissions_val->id);
            $menus[$key]['parent_menu'] = $permissions_val;
            $menus[$key]['child'] = $child_arr;
        }
        $data['menus_list'] = $menus;

        $result1 = DB::table('permission')->where('role_id', 1)->first();  //$this->db->get_where('role_has_permissions', ['role_id' =>  1])->row();
        // print_r($menus);die;

        $newdata = $result1->action;
        $permission_data = explode(",", $newdata);
        $data['permission_data'] = $permission_data;
        return view('admin/role/permission', $data);
    }
    public function editpermission($id)
    {
        $data['selectedid'] = $id;
        $pdata = Permission::all();
        $rdata = Role::all();
        $data['roles'] = DB::table('role')->get();
        $mdata = Module::all();

        $permissions_arr = DB::table('module')->get()->where('parent_id', '0');
        //print_r($permissions_arr);die;
        $menus = [];
        foreach ($permissions_arr as $key => $permissions_val) {

            $child_arr = DB::table('module')->get()->where('parent_id', $permissions_val->id);
            $menus[$key]['parent'] = $permissions_val;
            $menus[$key]['child'] = $child_arr;
        }
        $data['menus_list'] = $menus;
      

        // $role_list = [];
        // foreach ($data['roles'] as $key => $role_val) {
        //     $role_list[$key]['role_name'] = $role_val->name;
        //     $role_list[$key]['role_id'] = $role_val->id;
        //     // select('permissions.*,role_has_permissions.permission_action,role_has_permissions.permission_id,')
        //     // ->from('role_has_permissions')
        //     // ->where('permissions.parent_id', 0)
        //     // ->where('role_has_pe$this->db->rmissions.role_id', $role_val->id)
        //     // ->join('permissions', 'role_has_permissions.permission_id =permissions.id')
        //     // ->order_by("role_has_permissions.permission_id", "asc");
        //     // $user_assign_parent = $this->db->get()->result_array();
        //     $role_list[$key]['parent'] =  DB::table('permission')->select('module.*', 'permission.action', 'permission.permission_id')
        //         ->where('module.parent_id', 0)
        //         ->where('permission.role_id', $role_val->id)
        //         ->join('module', 'permission.permission_id', '=', 'module.id')
        //         ->orderBy('permission.permission_id', 'asc')->get()->toArray();

        //     //$role_list[$key]['parent'] =$user_assign_parent;
        //     //             DB::enableQueryLog();

        //     // // and then you can get query log

        //     // dd(DB::getQueryLog());die;


        // }
        // $data['role_list'] = $role_list;
        //print_r($role_list);die;
        //$where = ['id'=>$id];
        //$select_role = $this->model->getAry('roles',$order,$start, $limit,$where);
        $select_role = DB::table('role')->get()->where('id', $id)->first();

        // $where = ['role_id'=>$id];
        // $select_module = $this->model->getAry('role_has_permissions',$order,$start, $limit,$where);
        $select_module = DB::table('permission')->get()->where('role_id', $id);

           
      
        $selected_module_id = [];
        foreach ($select_module as $key => $module_val) {
            $selected_module_id[] = $module_val->permission_id;
        }
        //print_r( $select_role  ); die;
        $old_data['selected_id'] = $selected_module_id;
        $old_data['selected_role'] = $select_role->name;
        $old_data['selected_role_id'] = $select_role->id;
       
        

        $data['old_data'] = $old_data;
        $data['permissions'] = $rdata;
       

        $data['title'] = 'Role Management';
        $data['page'] = 'roles/edit';
        $data['menu'] = 'Role';
        $result1 = DB::table('permission')->where('role_id', $id)->first();

        $newdata = $result1->action;
        $permission_data = explode(",", $newdata);
        $data['permission_data'] = $permission_data;
    
        return view('admin/role/editpermission', $data);
    }
    public function checkSubMenu($parent_id, $currentmenu)
    {
        $flag = 0;
        $start = 0;
        $limit = 100;
        $order = ['col' => 'id', 'order' => 'DESC'];
        $where = ['parent_id' => $parent_id];
        $result = $this->getAry('permissions', $order, $start, $limit, $where);

        foreach ($result as $menu) {
            //print_r($currentmenu ); print_r($menu->url );die;
            if ($menu->url == $currentmenu) {

                $flag = 1;
                break;
            }
        }

        return $flag;
    }
    public function savepermission(Request $req)
    {

        // $req->validate([
        //     'role_id' => 'required',
        //     'permissions' => 'required',

        // ]);
        $role_id1 = $req->role_id;
        $permissions = $req->permissions;        
        $operation = $req->operation;
        foreach ($permissions as $per_id) {
            $data = array(
                'role_id' => $role_id1,
                'permission_id' => $per_id,
                'action' => implode(',', $operation)
            );
            permission::insert($data);
        }
    }
}
