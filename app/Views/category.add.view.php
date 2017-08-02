{% set name = 'Add Category' %}

{% include 'header.php' %}

<form name="newsForm" method="post" action="/categories/add">
    <div class="col-sm-6" style="display: flex; flex-direction: column">
        <label for="category">Category</label>
        <input id="category" name="category" required>
    </div>
    <div class="col-sm-6">
        <input type="submit" value="Submit">
    </div>
</form>

{% include 'footer.php' %}
