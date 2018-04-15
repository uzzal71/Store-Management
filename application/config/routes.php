<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';

//Admin routes
$route['admin'] = 'Admin';
$route['admin-login'] = 'Welcome/login';
$route['sign-out'] = 'Welcome/sign_out';

//Category
$route['Category-Add'] = 'Category';
$route['Category-Management'] = 'Category/category_management';
$route['Category-Create'] = 'Category/Create';
$route['unpublished-category/(.+)/(.+)'] = 'Category/Unpublished/$1/$2';
$route['published-category/(.+)/(.+)'] = 'Category/Published/$1/$2';
$route['delete-category/(.+)'] = 'Category/Destory/$1';
$route['edit-category/(.+)'] = 'Category/Edit/$1';
$route['Category-Update'] = 'Category/Update';

// Product
$route['Product-add'] = 'Product';
$route['Product-Management'] = 'Product/product_management';
$route['Product-Create'] = 'Product/Create';
$route['unpublished-product/(.+)/(.+)'] = 'Product/Unpublished/$1/$2';
$route['published-product/(.+)/(.+)'] = 'Product/Published/$1/$2';
$route['delete-product/(.+)'] = 'Product/Destory/$1';
$route['edit-product/(.+)'] = 'Product/Edit/$1';
$route['Product-Update'] = 'Product/Update';

// Store
$route['Store-add'] = 'Store';
$route['Store-Management'] = 'Store/Store_management';
$route['Store-Create'] = 'Store/Create';
$route['edit-store/(.+)'] = 'Store/Edit/$1';
$route['Store-Update'] = 'Store/Update';

// Reports
$route['Product-Report'] = 'Report';

//Customer
$route['Customer-add'] = 'Customer';
$route['Customer-Management'] = 'Customer/Customer_management';
$route['Customer-Create'] = 'Customer/Create';
$route['delete-customer/(.+)'] = 'Customer/Destory/$1';
$route['edit-customer/(.+)'] = 'Customer/Edit/$1';
$route['Customer-Update'] = 'Customer/Update';

//Employee
$route['Employee-add'] = 'Employee';
$route['Employee-Management'] = 'Employee/Employee_management';
$route['Employee-Create'] = 'Employee/Create';
$route['delete-employee/(.+)'] = 'Employee/Destory/$1';
$route['edit-employee/(.+)'] = 'Employee/Edit/$1';
$route['Employee-Update'] = 'Employee/Update';

//User
//Employee
$route['User-add'] = 'User';
$route['User-Management'] = 'User/User_management';
$route['User-Create'] = 'User/Create';
$route['delete-user/(.+)'] = 'User/Destory/$1';
$route['edit-user/(.+)'] = 'User/Edit/$1';
$route['User-Update'] = 'User/Update';

//default
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
