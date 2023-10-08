{% extends 'admin/layout.twig.php' %}

{% block title %}edit user{% endblock %}

{% block content %}

<div class="container" action="/admin/partials/add_product.php" style="margin-top: 50px;">
    <form action="/admin/user/update" class="row g-3" method="POST">
    <div class="input-group">
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@Username</span>
                <input disabled type="text" placeholder="{{ user.username }}" name="title" class="form-control" id="inputEmail4">
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@Role</span>
                <input disabled type="text" placeholder="{{ user.role }}" name="title" class="form-control" id="inputEmail4">
            </div>
        </div>
    </div>
    <div class="input-group">
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="phone" value="{{ user.phone }}" placeholder="{{ user.phone }}" name="phone" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="email" value="{{ user.email }}" name="email" placeholder="{{ user.email }}" class="form-control" id="inputZip">
                <span class="input-group-text" id="basic-addon1">@gmail.com</span>
        
            </div>
        </div>
    </div>
    <div class="input-group">
        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@Created</span>
                <input disabled type="text" placeholder="{{ user.Created }}" name="title" class="form-control" id="inputEmail4">
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@Updated</span>
                <input disabled type="text" placeholder="{{ user.Updated }}" name="title" class="form-control" id="inputEmail4">
            </div>
        </div>
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
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>

{% endblock %}