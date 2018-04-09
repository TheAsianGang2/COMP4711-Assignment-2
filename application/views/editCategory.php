<div class="container">
    <div class="row">
        <div>
            <h1>Edit a category</h1>
        </div>
    </div>
    <div>
        <form action="/EditCategory/OnSubmit" method="post">
            <label for="id">Id</label>
            <input type="text" name="id" placeholder="Id of category you want to edit"><br>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="< 64"><br>
            <label for="name">Description</label>
            <input type="text" name="desc" placeholder="< 64"><br>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <button onclick="location.href = '/catalog/';" id="myButton" class="btn btn-danger" >Cancel</button>
    </div>
</div>
