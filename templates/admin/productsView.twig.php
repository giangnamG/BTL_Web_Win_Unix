{% extends 'admin/layout.twig.php' %}

{% block title %}all products{% endblock %}

{% block content %}


<link rel="stylesheet" href="/assets/css/admin/dataTables.css" type="text/css">
<style>
    .container-fluid{
        margin-top: 20px;
    }
</style>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tất cả mặt hàng trong kho</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length">
                    <form id="select-slot" action="" method="get" >
                        <label>Show <select name="dataTable_length" onchange="this.form.submit()" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                        <option name="slot" onchange="this.form.submit()" value="{{ total }}">{{ total }}</option>
                        <option name="slot" onchange="this.form.submit()"value="10">10</option>
                        <option name="slot" onchange="this.form.submit()"value="25">25</option>
                        <option name="slot" onchange="this.form.submit()" value="50">50</option>
                        <option name="slot" onchange="this.form.submit()" value="100">100</option></select> entries</label>
                    </form>
                    </div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 25%;">Tiêu đề</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 12.5%;">Category</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 12.5%;">Đơn giá nhập</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 12.5%;">Đơn giá Bán</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 12.5%;">Giảm giá(%)</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 12.5%;">Số lượng</th>
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 12.5%;">Nhà cung cấp</th></tr>
                    </thead>
                    <tbody>
                        {% for product in products %}
                            <tr class="odd">
                                <td class="sorting_1">{{ product.title }}</td>
                                <td><center>{{ product.category }}</center></td>
                                <td><center>{{ product.don_gia_nhap }} $</center></td>
                                <td><center>{{ product.don_gia_ban }} $</center></td>
                                <td><center>{{ 0 }}</center></td>
                                <td><center>{{ product.quantity }}</center></td>
                                <td><center>{{ product.nha_cung_cap }}</center></td>
                            </tr>
                        {% endfor %}

                    </tbody>
                </table></div></div><div class="row" style="margin-top: 10px;"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Hiển thị 1 đến {{ total }} của {{ total }} sản phẩm</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                    <ul class="pagination justify-center">
                    </ul>

                </div></div></div></div>
            </div>
        </div>
    </div>

</div>

{% endblock %}