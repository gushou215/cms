<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\RoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller {
    protected $menus;

    public function __construct() {
        $this->menus = \HDModule::getMenus();
    }

    /**
    * Display a listing of the resource.
    * @return Response
    */

    public function index() {

        $roles = Role::where('name','<>',config('hd_module.webmaster'))->paginate( 2 );
        $menus = $this->menus;
        // dd( $roles );
        return view( 'admin::role.index', compact( 'menus', 'roles' ) );
    }

    /**
    * Store a newly created resource in storage.
    * @param  Request $request
    * @return Response
    */

    public function store( RoleRequest $request ) {
        // dd( $request->all() );
        Role::create( ['name'=>$request->name, 'title'=>$request->title] );
        session()->flash( 'success', '角色添加成功' );
        return back();
    }

    /**
    * Update the specified resource in storage.
    * @param  Request $request
    * @return Response
    */

    public function update( RoleRequest $request, Role $role ) {
        // dd( $request->all() );
        $role->update( ['name'=>$request->name, 'title'=>$request->title] );
        session()->flash( 'success', '角色编辑成功' );
        return back();

    }

    /**
    * Remove the specified resource from storage.
    * @return Response
    */

    public function destroy(Role $role) {
        $role->delete();
        return redirect('/admin/role')->with('success','删除成功');
    }

    public function permission( Role $role ) {
        // dd( $role->toArray() );
        // dd( \HDModule::getPermissionByGuard( 'admin' ) );
        $modules = \HDModule::getPermissionByGuard( 'admin' );
        
        $menus = $this->menus;
        return view( 'admin::role.permission', compact( 'menus', 'role', 'modules' ) );
    }

    public function permissionStore(Request $request ,Role $role ) {
        // dd($request->toArray());
        $role->syncPermissions($request->name);
        session()->flash('success','权限设置成功');
        return back();
    }
}
