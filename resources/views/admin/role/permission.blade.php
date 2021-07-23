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
                        <h3 class="card-title">Permission Management</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" novalidate="novalidate" action="{{''}}">
                        @csrf
                        <div class="card-body">
                            <!--begin: Code-->
                            <div class="example-code mb-10">
                                <ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#example_code_js">JS</a>
                                    </li>
                                </ul>
                                <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
                            </div>
                            <div class="form-group">
                               
                                <div class="btn-group" role="group">
                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Select Role
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    @if($roles)
                                    @foreach($roles as $row)
                                        <a class="dropdown-item" href='edit-permission/{{ $row->id }}'>{{$row->name}}</a>
                                        
                                    @endforeach
                                    @endif
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="Operation">Operation<span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="add">
                                        <label>Add</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="edit">
                                        <label>Edit</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="delete">
                                        <label>Delete</label>
                                    </div>

                                    <div class="col-sm-2">
                                        <input type="checkbox" name="operation[]" value="view">
                                        <label>View</label>
                                    </div>


                                </div>
                            </div>



                            <div class="form-group">
                                <label for="Operation">Menus<span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <?php foreach ($menus_list as $key1 => $menu_val) {  ?>

                                        <input class="checkbox" id="<?= $key1 ?>" name="permissions[]" type="checkbox" value=<?= $menu_val['parent_menu']->id ?>>
                                        <label for="Master" style="font-weight: 500;"><?= $menu_val['parent_menu']->name ?></label><br>

                                        <div style="padding-left: 15px;">
                                            <?php foreach ($menu_val['child'] as $key => $submenu_val) { ?>

                                                <input class="checkbox" id="<?= $key1 ?>" name="permissions[]" type="checkbox" value=<?= $submenu_val->id ?>>
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