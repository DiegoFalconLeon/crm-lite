<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$controller_path = 'App\Http\Controllers';



// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');

//datos agregados despues de la plantilla


Route::get('/', function () {
  return redirect('/login');
});
//login
Route::get('/login', $controller_path . '\login\LoginController@index')->name('login');
//auth validate
Route::post('/home', $controller_path . '\login\LoginController@authenticate')->name('login.authenticate');

Route::group(['middleware'=>'auth'],function(){

$controller_path = 'App\Http\Controllers';

Route::get('/home', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/logout', $controller_path . '\login\LoginController@logout')->name('logout');


//usuarios
Route::get('/users', $controller_path . '\users\UsersController@index')->name('users.list');
Route::get('/users/create', $controller_path . '\users\UsersController@create')->name('users.create');
Route::get('/users/show/{id}', $controller_path . '\users\UsersController@showUser')->name('users.show');
Route::get('/users/delete/{id}', $controller_path . '\users\UsersController@delete')->name('users.delete');
Route::post('/users/edit', $controller_path . '\users\UsersController@update')->name('users.edit');
Route::post('/users/new', $controller_path . '\users\UsersController@newUser')->name('users.new');
Route::get('users/export/pdf', $controller_path . '\users\UsersController@exportPDF')->name('users.pdf');
Route::get('users/export/excel', $controller_path . '\users\UsersController@exportExcel')->name('users.excel');


//clientes
Route::get('/customers', $controller_path . '\customers\CustomerController@index')->name('customers.list');
Route::get('/customers/create', $controller_path . '\customers\CustomerController@create')->name('customers.create');
Route::get('/customers/show/{id}', $controller_path . '\customers\CustomerController@showCustomer')->name('customers.show');
Route::get('/customers/delete/{id}', $controller_path . '\customers\CustomerController@delete')->name('customers.delete');
Route::post('/customers/edit', $controller_path . '\customers\CustomerController@update')->name('customers.edit');
Route::post('/customers/new', $controller_path . '\customers\CustomerController@newUser')->name('customers.new');
Route::get('customers/export/pdf', $controller_path . '\customers\CustomerController@exportPDF')->name('customers.pdf');
Route::get('customers/export/excel', $controller_path . '\customers\CustomerController@exportExcel')->name('customers.excel');

//assisgn-user
Route::get('/customers/assign-user', $controller_path . '\customers\assign_user\CustomersUsersController@index')->name('customers.assign-user.list');
Route::get('/customers/assign-user/create', $controller_path . '\customers\assign_user\CustomersUsersController@create')->name('customers.assign-user.create');
Route::get('/customers/assign-user/show/{id}', $controller_path . '\customers\assign_user\CustomersUsersController@show')->name('customers.assign-user.show');
Route::get('/customers/assign-user/delete/{id}', $controller_path . '\customers\assign_user\CustomersUsersController@delete')->name('customers.assign-user.delete');
Route::post('/customers/assign-user/edit', $controller_path . '\customers\assign_user\CustomersUsersController@update')->name('customers.assign-user.edit');
Route::post('/customers/assign-user/new', $controller_path . '\customers\assign_user\CustomersUsersController@newCustomerUser')->name('customers.assign-user.new');
Route::get('customers/assign-user/export/pdf', $controller_path . '\customers\assign_user\CustomersUsersController@exportPDF')->name('customers.assign-user.pdf');
Route::get('customers/assign-user/export/excel', $controller_path . '\customers\assign_user\CustomersUsersController@exportExcel')->name('customers.assign-user.excel');
Route::get('/customers/assign-user/getUsersByArea/{areaId}', $controller_path .'\customers\assign_user\CustomersUsersController@getUsersByArea')->name('customers.assign-user.get-by-area');
// Route::get('/customers/assign-user/getUsersByArea/{areaId}', $controller_path .'\customers\assign_user\CustomersUsersController@getUsersByArea')->name('get.users.by.area');



//areas
Route::get('/areas', $controller_path . '\areas\AreaController@index')->name('areas.list');
Route::get('/areas/create', $controller_path . '\areas\AreaController@create')->name('areas.create');
Route::get('/areas/show/{id}', $controller_path . '\areas\AreaController@showArea')->name('areas.show');
Route::get('/areas/delete/{id}', $controller_path . '\areas\AreaController@delete')->name('areas.delete');
Route::post('/areas/edit', $controller_path . '\areas\AreaController@update')->name('areas.edit');
Route::post('/areas/new', $controller_path . '\areas\AreaController@newArea')->name('areas.new');

//meansofcontact
Route::get('/meansofcontact', $controller_path . '\means_of_contact\MeansOfContactController@index')->name('meansofcontact.list');
Route::get('/meansofcontact/create', $controller_path . '\means_of_contact\MeansOfContactController@create')->name('meansofcontact.create');
Route::get('/meansofcontact/show/{id}', $controller_path . '\means_of_contact\MeansOfContactController@showArea')->name('meansofcontact.show');
Route::get('/meansofcontact/delete/{id}', $controller_path . '\means_of_contact\MeansOfContactController@delete')->name('meansofcontact.delete');
Route::post('/meansofcontact/edit', $controller_path . '\means_of_contact\MeansOfContactController@update')->name('meansofcontact.edit');
Route::post('/meansofcontact/new', $controller_path . '\means_of_contact\MeansOfContactController@newUser')->name('meansofcontact.new');

//company
Route::get('/company', $controller_path . '\company\CompanyController@index')->name('company.index');
Route::post('/company/edit', $controller_path . '\company\CompanyController@update')->name('company.update');

});
