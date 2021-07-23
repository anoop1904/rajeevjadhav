@extends('admin.masterpage')
@section('title', 'Homepage')
@section('content')


<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title"> @if($roles)
                                    @foreach($roles as $row)
                                    @if($selectedid==$row->id)
                                        {{$row->name}} Permission Management
                                    @endif    
                                    @endforeach
                                    @endif</h3>
                                    <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a  class="btn btn-outline-info" href="{{url('/role/permission')}}" >Back</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap fv-plugins-framework"  action="{{url('/role/save-permission')}}" method="POST">
                       @csrf
                        <div class="card-body">
                            <!--begin: Code-->
                            <!-- <div class="example-code mb-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
                            </div> -->
                            <div class="form-group">
                           
                              <input class="form-control" placeholder="Name" required="required" name="role_id" type="hidden" id="role_id" value={{$selectedid}}>
                               
                                <!-- <div class="btn-group" role="group">
                                <h3>Admin</h3>
                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    @if($roles)
                                    @foreach($roles as $row)
                                    @if($selectedid==$row->id)
                                        <a class="dropdown-item" href='edit-permission/{{ $row->id }}' >{{$row->name}}</a>
                                    @endif    
                                    @endforeach
                                    @endif
                                    </div>
                                </div> -->
                            </div>
                           

                            <div class="form-group">
                                <label for="Operation">Operation<span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="add" <?= (in_array("add", $permission_data))  == "add" ? "checked" : '' ?>>
                                        <label>Add</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="edit" <?= (in_array("edit", $permission_data))  == "edit" ? "checked" : '' ?>>
                                        <label>Edit</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="delete" <?= (in_array("delete", $permission_data))  == "delete" ? "checked" : '' ?>>
                                        <label>Delete</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="view" <?= (in_array("view", $permission_data))  == "view" ? "checked" : '' ?>>
                                        <label>View</label>
                                    </div>


                                </div>
                            </div>



                            <div class="form-group">
                                <label for="Operation">Menus<span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <?php foreach ($menus_list as $key1 => $menu_val) {   ?>

                                        <?php if (in_array($menu_val['parent']->id, $old_data['selected_id'])) { ?>
                                            <input class="checkox" id="<?= $key1 ?>" name="permissions[]" type="checkbox" value=<?= $menu_val['parent']->id ?> checked>
                                        <?php } else { ?>
                                            <input class="checkox" id="<?= $key1 ?>" name="permissions[]" type="checkbox" value=<?= $menu_val['parent']->id ?>>
                                        <?php } ?>

                                        <label for="Master" style="font-weight: 500;"><?= $menu_val['parent']->name ?></label><br>

                                        <div class="form-group" style="padding-left: 15px;">

                                            <?php foreach ($menu_val['child'] as $key => $submenu_val) { ?>

                                                <?php if (in_array($submenu_val->id, $old_data['selected_id'])) { ?>
                                                    <input class="checkox" id="<?= $key1 ?>" name="permissions[]" type="checkbox" value=<?= $submenu_val->id ?> checked>
                                                <?php } else { ?>
                                                    <input class="checkox" id="<?= $key1 ?>" name="permissions[]" type="checkbox" value=<?= $submenu_val->id ?>>
                                                <?php } ?>


                                                <label for=<?= $submenu_val->name ?> style="font-weight: 500;"><?= $submenu_val->name ?></label>&nbsp;


                                            <?php  }  ?>

                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                                    <a href="http://localhost/amigos/admin/roles" class="btn btn-secondary waves-effect m-l-5"> Cancel </a>
                                </div>
                            </div>

                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
</div>



@endsection