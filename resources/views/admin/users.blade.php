
<main class="d-flex flex-nowrap">
@extends('admin/master')
<style>
 .user{
    padding: 10px 114px 10px 114px;
 }
    </style>
<div class="sider-nav">
<form class="d-flex" role="search" style="padding-left: 100px;     padding-top: 10px;">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
          <button class="btn btn" type="submit" style="background-color: #fff;"><b>Search</b></button>
        </form>
<div class="user" style="padding-left: 130px;">


  
    <table class="table table-striped" >
        <h3>User login Infromation</h3>
            <tr class="tr">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>created_at</th>
                
                <!-- Add more columns as needed -->
            </tr>
     
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at}}</td>
                <!-- Add more columns as needed -->
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>
</main>