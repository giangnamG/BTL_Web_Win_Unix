{% extends 'admin/layout.twig.php' %}

{% block title %}all products{% endblock %}

{% block content %}

<div class="container" style="margin-top: 30px;">
<form class="row g-3" action="/admin/products/store" method="POST" enctype="multipart/form-data">
  <div class="col-md-8">
    <label for="inputEmail4" class="form-label">Tiêu đề</label>
    <input type="text" name="title" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-2" style="padding-top: 31px;">
    <select id="inputState" name="category" class="form-select">
        <option selected>Category</option>
        <option>women</option>
        <option>men</option>
        <option>accessories</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nhà cung cấp</label>
    <input type="text" name="provider" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Đơn giá nhập</label>
    <input type="number" name="buy" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Đơn giá bán</label>
    <input type="number" name="sell" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Số lượng nhập</label>
    <input type="number" name="quantity" class="form-control" id="inputZip">
  </div>
  <div class="col-md-8">
  <label for="formFile" class="form-label">Tải ảnh</label>
  <input class="form-control" name="image" type="file" id="formFile">
</div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
  </div>
</form>
</div>

{% endblock %}