<div class="container">
    <div class="row">
        <div>
            <h1>Edit an accessory</h1>
        </div>
    </div>
    <div>
        <form action="/EditAccessory/OnSubmit" method="post">
            <label for="id">Id</label>
            <input type="text" name="id" placeholder="Id of item you want to edit"><br>
            <label for="catId">Category</label>
            <input type="text" name="catId" placeholder="0 - 3"><br>
            <label for="imagepath">Image Path</label>
            <input type="text" name="imagepath" placeholder="/assets/img/xxx.png"><br>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="< 64"><br>
            <label for="damage">Damage</label>
            <input type="text" name="damage" placeholder="< 100"><br>
            <label for="protection">Protection</label>
            <input type="text" name="protection" placeholder="< 100"><br>
            <label for="weight">Weight</label>
            <input type="text" name="weight" placeholder="< 100"><br>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <button onclick="location.href = '/catalog/';" id="myButton" class="btn btn-danger" >Cancel</button>
    </div>
</div>
