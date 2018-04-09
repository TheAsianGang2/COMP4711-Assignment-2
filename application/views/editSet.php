<div class="container">
    <div class="row">
        <div>
            <h1>Edit a set</h1>
        </div>
    </div>
    <div>
        <form action="/Edit/OnSubmit" method="post">
            <input type="hidden" name="id" value="{setId}" />
                <label for="addName">Name</label>
                <input type="text" name="n" value="{setName}"><br>
                <label for="addHelm">Helm</label>
                <select name="h" id="addHelm" class="form-control">
                    <option selected></option>
                    {h}
                    {item}
                    {/h}
                </select>
                <label for="addChest">Chest</label>
                <select name="c" id="addChest" class="form-control">
                    <option selected></option>
                    {c}
                    {item}
                    {/c}
                </select>
                <label for="addPrimary">Primary</label>
                <select name="p" id="addPrimary" class="form-control">
                    <option selected></option>
                    {p}
                    {item}
                    {/p}
                </select>
                <label for="addSecondary">Secondary</label>
                <select name="s" id="addSecondary" class="form-control">
                    <option selected></option>
                    {s}
                    {item}
                    {/s}
                </select>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <button onclick="location.href = '/welcome/';" id="myButton" class="btn btn-danger" >Cancel</button>
    </div>
</div>
