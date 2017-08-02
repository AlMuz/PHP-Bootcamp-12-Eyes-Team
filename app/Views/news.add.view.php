{% set name = 'Add News' %}

{% include 'header.php' %}

<form name="newsForm" method="post" action="/news/add">
    <div class="col-sm-6" style="display: flex; flex-direction: column">
        <label for="author">Your Name</label>
        <input id="author" name="author">

        <label for="title">News Title</label>
        <input id="title" name="title">

        <select name="category">
            {% for category in categories %}
            <option value="{{ category.category_id }}">{{ category.title }}</option>
            {% endfor %}
        </select>
    </div>
    <div class="col-sm-6">
        <label for="body">News</label>
        <textarea name="body" id="body" cols="30" rows="7"></textarea>

        <input type="submit" value="Submit">
    </div>
</form>

{% include 'footer.php' %}
