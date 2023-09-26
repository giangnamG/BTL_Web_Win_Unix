{% extends 'admin/layout.twig.php' %}

{% block title %}Users List{% endblock %}

{% block content %}
<style>
    .users{
        margin-left: 82px;
    }
</style>
<link href="/templates/assets/css/admin/user.css" rel="stylesheet"/>
<hr>
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Manager Users</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                    <thead>
                        <tr>
                        <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">Phone</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">CreatedAt</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">UpdateAt</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">Role</th>
                        <th scope="col" class="border-0 text-uppercase font-medium">Manager</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% set stt = 1 %}
                    {% for user in users %}
                        <tr>
                            <form id="form-<?php echo($i);?>" action="/admin/user/changePermistion" method="POST">
                                <td class="pl-4" style="padding-top: 18px;">{{ stt }}</td>
                                <td style="padding-top: 20px;">
                                    <h6 class="font-medium mb-0"><a href="" style="text-decoration: none;" class="profile-link">{{ user.username }}</a></h6>
                                </td>
                                <td style="padding-top: 20px;">
                                    <span class="text-muted">{{ user.email }}</span><br>
                                </td>
                                <td style="padding-top: 20px;">
                                    <span class="text-muted">{{ user.phone }}</span><br>
                                </td>
                                <td style="padding-top: 20px;">
                                    <span class="text-muted">{{ user.Created }}</span>
                                </td>
                                <td style="padding-top: 20px;">
                                    <span class="text-muted">{{ user.Updated }}</span><br>
                                </td>
                                <td style="padding-top: 12px;">
                                    <select 
                                        {% if user.username == current_user or permision == 'staff' %} 
                                            disabled
                                        {% endif %}
                                    class="form-control category-select" style="width: 75px;" name="change_role" id="role" onchange="this.form.submit()">
                                        <option value="{{ user.role }}">{{ user.role }}</option>
                                        {% for role in roles %}
                                            {% if role != user.role %}
                                                <option value= {{role}}> {{ role }}</option>
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </td>
                                <input type="hidden" value="{{ user.id }}" name="user_id">
                            </form>
                            <form action="/admin/user/edit" method="POST">
                                <td>
                                    <input type="hidden" value="{{ user.id }}" name="user_id">
                                    <button type="submit" name="delete_user" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><a href=""><i class="fa fa-trash"></i></a></button>
                                    <button type="submit" name="edit_user" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><a href="/admin?page=edit_user"><i class="fa fa-edit"></i> </a></button>
                                </td>
                            </form>
                        </tr>
                        {% set stt = stt + 1 %}                        
                    {% endfor %}
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
