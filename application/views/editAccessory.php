<div class="container">
    <div class="row">
        <div>
            <h1>Edit an accessory</h1>
        </div>
    </div>
    <div>
        <form action="/EditAccessory/OnSubmit" method="post">
            <label for="id">Id</label>
            <input type="text" name="id"><br>
            <label for="catId">Category</label>
            <input type="text" name="catId"><br>
            <label for="imagepath">Image Path</label>
            <input type="text" name="imagepath"><br>
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="damage">Damage</label>
            <input type="text" name="damage"><br>
            <label for="protection">Protection</label>
            <input type="text" name="protection"><br>
            <label for="weight">Weight</label>
            <input type="text" name="weight"><br>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <button onclick="location.href = '/catalog/';" id="myButton" class="btn btn-danger" >Cancel</button>
    </div>
</div>
